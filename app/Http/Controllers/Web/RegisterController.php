<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\WebRegisterRequest;
use App\Repositories\WebRegisterRepository;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\JobCategory;
use App\Models\Candidate;
use App\Models\Company;
use App\Repositories\Candidates\CandidateRepository;
use Carbon\Carbon;

use Mollie\Laravel\Facades\Mollie;
use App\Models\User;
use App\Models\Subscription;
use App\Models\Plan as SubscriptionPlan;
use Illuminate\Http\Request;

class RegisterController extends AppBaseController
{
    /** @var  WebRegisterRepository */
    private $webRegisterRepository;

    public function __construct(WebRegisterRepository $webRegisterRepository)
    {
        $this->webRegisterRepository = $webRegisterRepository;
        Mollie::api()->setApiKey('test_uQdGMCqD8PJgHjmqgVrFs3CsTzwpBD'); // your mollie test api key

    }

    /**
     * @return Factory|View
     */


    public function signuponfirmation(){
    $token = $_GET['token'];

    }



    public function signUpEmail($userId){

    $user = User::findOrFail($userId);
    $user->sendEmailVerificationNotification();

    }

    public function candidateRegister($userType,$planId)
    {
        $isGoogleReCaptchaEnabled = $this->webRegisterRepository->getSettingForReCaptcha();
       return view('web.auth.candidate_register', compact('isGoogleReCaptchaEnabled'));
     }

     public function selectService(Request $request)
    {
        //$data['type']= $input['user_type'] == 'requestor' ? 2:1;
        $data['jobCategories'] = JobCategory::with('jobs','media')->get();
        return view('web.auth.select_services')->with($data);
     }


    /**
     * @return Factory|View
     */
    public function employerRegister()
    {

        $isGoogleReCaptchaEnabled = $this->webRegisterRepository->getSettingForReCaptcha();
        return view('web.auth.employer_register', compact('isGoogleReCaptchaEnabled'));
    }

    /**
     * @param  WebRegisterRequest  $request
     *
     * @throws \Throwable
     *
     * @return JsonResource
     */

    public function SubscriptionStatus(){

      $userId = session('userId');
      $user = User::findOrFail($userId);


     $subscription = $user->subscriptions()->active()->first();
     $paymentId = $subscription->paypal_payment_id;
     $payment = Mollie::api()->payments->get($paymentId);
     $paymentStatus='';
     if ($payment->isPaid() && ! $payment->hasRefunds() && ! $payment->hasChargebacks()) {
        $paymentStatus='active';
    } elseif ($payment->isOpen()) {
        $paymentStatus='Open';
    } elseif ($payment->isPending()) {
       $paymentStatus='Pending';
    } elseif ($payment->isFailed()) {
        $paymentStatus='Failed';
    } elseif ($payment->isExpired()) {
        $paymentStatus='Expired';
    } elseif ($payment->isCanceled()) {
        $paymentStatus='Canceled';
    } elseif ($payment->hasRefunds()) {
        $paymentStatus='Refunds';
    } elseif ($payment->hasChargebacks()) {
        $paymentStatus='Chargebacks';
    }

     DB::table('subscriptions')
            ->where('user_id',$user->id)
            ->update(['stripe_status' => $paymentStatus]);

     if($paymentStatus == 'active'){
     $plan = SubscriptionPlan::findOrFail($subscription->plan_id);
      $transaction = (new \App\Models\Transaction())->fill([
                'user_id'    => $user->id,
                'owner_id'   => $user->owner_id,
                'amount'     => $plan->amount,
                'owner_type' => Subscription::class,
            ]);

     $transaction->save();
     $this->signUpEmail($user->id);
     Flash::success('Please verify your signup using verification link sent to your email...');
     return redirect(route('front.candidate.login'));
     }else{
      Flash::success('Payment for subscription failed. Please try again...');
     $user_type = session('user_type');
     if($user_type =='helper'){
    	return redirect()->route('pricing-candidate');
     }else{
    	return redirect()->route('pricing-employer');
     }
     }


    }

    public function paySubscription(Request $request){

          $input = $request->all();
           $userType= $input['user_type'];
           $planId= $input['plan_id'];
           $signupUserID = session('signupUserID');

          if($userType == 'helper'){
          $candidate = Candidate::findOrFail($signupUserID);
          }else{
          $candidate = Company::findOrFail($signupUserID);
          }

		  $user = $candidate->user;

		  session(['userId' => $user->id]);
		  $plan = SubscriptionPlan::findOrFail($planId);


        $MollieCustomer = Mollie::api()->customers()->create([
    		'name'  => $user->first_name.' '.$user->last_name,
    		'email' => $user->email,
		]);
		if($MollieCustomer){
		$data['MollieCustomerID'] =$MollieCustomer->id;
		  DB::table('users')
            ->where('id',$user->id)
            ->update(['mollie_customer_id' => $MollieCustomer->id]);





        if($plan->amount > 0){
        $payment = Mollie::api()->payments()->create([
        'amount' => [
        'currency' => 'USD',
        'value'    => ''.$plan->amount, // You must send the correct number of decimals, thus we enforce the use of strings
        ],
    	'customerId'   => $MollieCustomer->id,
    	'sequenceType' => 'first',
    	'description'  => 'Payment for Subscription: '.$plan->name,
    	'redirectUrl'   => route('front.subscription.status'),
    	]);

    	$tsSubscription = Subscription::create([
                'name'                 => $plan->name,
                'stripe_status'        => 'trialing',
                'user_id'              => $user->id,
                'plan_id'              => $planId,
                'paypal_payment_id' => $payment->id,
                'current_period_start' => Carbon::now(),
                'current_period_end'   => Carbon::now()->addMonth(),
        ]);
        session(['showSignUPConfirmation' => true]);
		return redirect($payment->getCheckoutUrl(), 303);
		}else{


		$tsSubscription = Subscription::create([
                'name'                 => $plan->name,
                'stripe_status'        => 'trialing',
                'user_id'              => $user->id,
                'plan_id'              => $planId,
                'trial_ends_at' =>Carbon::now()->addDays(14),
                'current_period_start' => Carbon::now(),
                'current_period_end'   => Carbon::now()->addMonth(),
        ]);


		session(['showSignUPConfirmation' => true]);
		$this->signUpEmail($user->id);
        return redirect(route('front.candidate.login'));
		}

      }

    }






    public function register(WebRegisterRequest $request)
    {
        $input = $request->all();
        $signupUserID= $this->webRegisterRepository->store($input);
        $data['ownerId'] = $signupUserID;
        session(['signupUserID' => $signupUserID]);
        $data['service_id'] = $planId = $input['service_id'];
        $data['ownerType'] = $input['type'];
        return $this->sendSuccess($data);
    }

    public function selectServices(Candidate $candidate){
        $user = $candidate->user;
        $jobCategories = JobCategory::with('jobs','media')->get();
        return view('web.auth.select_services' , compact('jobCategories','candidate'));

    }
     public function selectedServices(Candidate $candidate){
        $user  = $candidate->user;
        $user->phone = preparePhoneNumber($user->phone, $user->region_code);
        $data = $this->candidateRepository->prepareData();
        $data['candidateSkills'] = $user->candidateSkill()->pluck('skill_id')->toArray();
        $data['candidateLanguage'] = $user->candidateLanguage()->pluck('language_id')->toArray();
      // $service_id = $_REQUEST['service_id'];

        return view('web.services_forms.index',compact('data','user'));

    }
}
