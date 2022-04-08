<?php

namespace App\Repositories;

use App;
use App\Models\Candidate;
use App\Models\Company;
use App\Models\Setting;
use App\Models\Notification;
use App\Models\NotificationSetting;
use App\Models\User;
use App\Repositories\Candidates\CandidateRepository;
use Exception;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;
use Throwable;

/**
 * Class WebRegisterRepository
 * @package App\Repositories
 * @version July 7, 2020, 5:07 am UTC
 */
class WebRegisterRepository
{
    /**
     * @return mixed
     */
    public function getSettingForReCaptcha()
    {
        return Setting::where('key', 'enable_google_recaptcha')->first()->value;
    }

    /**
     * @param  array  $input
     *
     * @throws Throwable
     *
     * @return bool
     */
    public function store($input)
    {
        try {
            DB::beginTransaction();
            $userInput = Arr::except($input, ['type']);
            $userInput['password'] = Hash::make($input['password']);
            /** @var User $user */
            $user = User::create($userInput);
            $userRole = Role::where('name', ($input['type'] == 1) ? 'Candidate' : 'Employer')->first();
            $user->assignRole($userRole);
            $adminId = User::role('Admin')->first()->id;
            if ($input['type'] == 1) {
                /** @var CandidateRepository $candidateRepo */
                $candidateRepo = App::make(CandidateRepository::class);
                $signupUser = Candidate::create([
                    'user_id'   => $user->id,
                    'unique_id' => $candidateRepo->getUniqueCandidateId(),
                ]);

                $user->update(['owner_id' => $signupUser->id, 'owner_type' => Candidate::class]);
            } else {
                $signupUser = Company::create([
                    'user_id'   => $user->id,
                    'unique_id' => getUniqueCompanyId(),
                ]);
                $user->update(['owner_id' => $signupUser->id, 'owner_type' => Company::class]);
                /** @var SubscriptionRepository $subscriptionRepo */
                $subscriptionRepo = app(SubscriptionRepository::class);
                $subscriptionRepo->createStripeCustomer($user);

            }
            DB::commit();

            return $signupUser->id;
        } catch (Exception $e) {
            DB::rollBack();
            throw new UnprocessableEntityHttpException($e->getMessage());
        }
    }
}
