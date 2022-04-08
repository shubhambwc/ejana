<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Company;
use App\Models\Country;
use App\Models\City;
use App\Models\State;
use App\Models\PostMeta;
use App\Models\FeaturedRecord;
use App\Models\FrontSetting;
use App\Models\Notification;
use App\Models\NotificationSetting;
use App\Models\ReportedToCompany;
use App\Models\Transaction;
use App\Models\JobCategory;
use App\Models\User;
use App\Models\Reminder;
use App\Queries\ReportedCompanyDataTable;
use App\Repositories\CompanyRepository;
use Exception;
use Flash;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Throwable;
use Illuminate\Support\Facades\DB;

class CompanyController extends AppBaseController
{
    /** @var  CompanyRepository */
    private $companyRepository;

    public function __construct(CompanyRepository $companyRepo)
    {
        $this->companyRepository = $companyRepo;
    }

    /**
     * Display a listing of the Company.
     *
     * @param  Request  $request
     *
     * @throws Exception
     *
     * @return Factory|View
     */
    public function index(Request $request)
    {
        $data = $this->companyRepository->get();
        $featured = Company::IS_FEATURED;
        $statusArr = Company::STATUS;
        /*$userinfo = array();
        foreach($data as $userdetail){
            //echo $userdetail['id'];
            //die();
          $userinfo[] = User::where('owner_id', $userdetail['id'])->get();

        }
        /* print_r($userinfo);
         die();*/
        return view('companies.index', compact('data', 'featured', 'statusArr'));
    }

    /**
     * Show the form for creating a new Company.
     *
     * @return Factory|View
     */
    public function create()
    {
        $data = $this->companyRepository->prepareData();

        return view('companies.create')->with('data', $data);
    }

    /**
     * Store a newly created Company in storage.
     *
     * @param  CreateCompanyRequest  $request
     *
     * @throws \Throwable
     * @return RedirectResponse|Redirector
     */
    public function store(CreateCompanyRequest $request)
    {
        $input = $request->all();
        $input['is_active'] = (isset($input['is_active'])) ? 1 : 0;

        $company = $this->companyRepository->store($input);
      

        Flash::success('Help Requester saved successfully.');

        return redirect(route('company.index'));
    }

    /**
     * Display the specified Company.
     *
     * @param  Company  $company
     *
     * @return Factory|View
     */
    public function show(Company $company)
    {
        return view('companies.show')->with('company', $company);
    }

    /**
     * Show the form for editing the specified Company.
     *
     * @param  Company  $company
     *
     * @return Factory|View
     */
    public function edit(Company $company)
    {
       
        
       
        $user = $company->user;
        $data = $this->companyRepository->prepareData();
        $states = $cities = null;
        if (isset($user->country_id)) {
            $states = getStates($user->country_id);
        }
        if (isset($user->state_id)) {
            $cities = getCities($user->state_id);
        }
        
        
         //pass static options 
        $care_type = [
                          'reg' => 'Regular babysitter',
                          'Flexible' => 'Flexible babysitter',
                          'Occassinally' => 'Occassinally (or Once)',
                          'Spoedoppas' => 'Spoedoppas',
                          ];                                                            
       
         $preferredTime = [ 
                           'day'  => 'Daytime Care',
                           'school'  => 'After School Care',
                           'evening'  => 'Evening Care',
                           'weekend'  => 'Weekend Care',
                           'night'  => 'Night Care',
                           'feestdag'  => 'Feestdag Care',
                         ];                                                                                         


                $pets =  [ 
                           'dog'  => 'Dog',
                           'cat'  => 'Cat',
                           'other'  => 'Other Animal',
                           'namely'  => 'Namely',
                           'no'  => 'No',                          
                         ];
                         
        $postMetaArray =array();
        
        
        $jobCategories = JobCategory::with('jobs','media')->get();
        if(isset($_REQUEST['service_id']) && $_REQUEST['service_id']!=''){

            //Profile image

            $profile_pictures = $company->getMedia('profile_pictures')->first();
         if (!empty($profile_pictures)) {
            $postMetaArray['profile_pictures_url']= $profile_pictures->getFullUrl();
         }
         $passport_front = $company->getMedia('passport_front')->first();
         if (!empty($passport_front)) {
            $postMetaArray['passport_front_url']= $passport_front->getFullUrl();
         }

          $passport_back = $company->getMedia('passport_back')->first();
         if (!empty($passport_back)) {
            $postMetaArray['passport_back_url']= $passport_back->getFullUrl();
         }

         $liability_copy = $company->getMedia('liability_copy')->first();
         if (!empty($liability_copy)) {
            $postMetaArray['liability_copy_url']= $liability_copy->getFullUrl();
         }
         $first_aid_certificate = $company->getMedia('first_aid_certificate')->first();
         if (!empty($first_aid_certificate)) {
            $postMetaArray['first_aid_certificate_url']= $first_aid_certificate->getFullUrl();
         }

         $vog_certificate_file = $company->getMedia('vog_certificate_file')->first();
         if (!empty($vog_certificate_file)) {
            $postMetaArray['vog_certificate_file_url']= $vog_certificate_file->getFullUrl();
         }
            //
         $postMeta = PostMeta::where('post_id', $user->id)->where('service_id', $_REQUEST['service_id'])->get();
        
        if($postMeta){
        $postMeta = $postMeta->toArray();
        foreach($postMeta as $x => $val){
        
        if (@unserialize($val['meta_value'])) {
        $postMetaArray[$val['meta_key']] = unserialize($val['meta_value']);
    	}else{
    	$postMetaArray[$val['meta_key']] = $val['meta_value'];
    	}
        } 
        } 
        
        $jobCategories = JobCategory::where('id', $_REQUEST['service_id'])->get();
        $jobCategory = JobCategory::find($_REQUEST['service_id']);
        $JobCategoryDetail = $jobCategory = JobCategory::find($_REQUEST['service_id']);
        $pageTitle = "Edit ".$jobCategory->name."'s Service Details";
        }else{
         $pageTitle = "Edit ".$user->first_name."'s Profile Information";
        }
         $reminders = Reminder::where('userid', $user->id)->get();
         $transactions = Transaction::where('user_id', $user->id)->get();
         $job_applications = DB::table('users')
            ->join('job_applications', 'job_applications.candidate_id', '=', 'users.id')
            ->join('job_categories', 'job_categories.id', '=', 'job_applications.service_id')
            ->select('job_applications.*', 'users.*', 'job_categories.name')
            ->where('job_id',  $company->id)
            ->get();
           /* echo $_REQUEST['service_id'];
            print_r( $job_applications);
            die();*/
             /* print_r(
        
       /* echo "<pre>";
        print_r($user);
        die;
    */
//echo "<pre>";
//$x = $postMetaArray['date_time_available'];
   ///     $array = json_decode( json_encode($x), true);
   //     print_r($array[0]['time_slot']);

//die();
        return view('companies.edit', compact('pageTitle','data', 'company','JobCategoryDetail', 'cities', 'states', 'user','postMetaArray','jobCategories','care_type','preferredTime','pets','reminders','transactions','job_applications'));


        //return view('companies.edit')->with('pageTitle' => $pageTitle, 'data' => $data, 'company' => $company, 'JobCategoryDetail' => $JobCategoryDetail, 'cities' => $cities, 'states' => $states, 'user' => $user, 'postMetaArray' => $postMetaArray, 'jobCategories' => $jobCategories, 'care_type' => $care_type, 'preferredTime' => $preferredTime, 'pets' => $pets, 'reminders' => $reminders, 'transactions' => $transactions);
    }

    /**
     * @param  Company  $company
     * @param  UpdateCompanyRequest  $request
     *
     * @throws Throwable
     *
     * @return RedirectResponse|Redirector
     */
    public function updaterequester(Request $request)
    {
    
      $input = $request->all();
      $companyId = $input['company_id'];
      $company = Company::findOrFail($companyId);
      $user = $company->user;
      $userId = $user->id;
      $serviceId =  isset($input['service_id']) ? $input['service_id'] : '';
      
        
        
        
        if($serviceId!=''){
         //DB::table('post_meta')->where('post_id', $userId)->where('service_id', $serviceId )->delete();

         $userInput = array('first_name','last_name','email','service_id');


        foreach($input  as $key => $value){
        if($key != '_method' && $key !='_token' && $key !='user_id'){

        if (!in_array($key, $userInput)){

            if($key =='date_time_available'){
                $metaValue = serialize(json_decode($value));
            }else{
                if(is_array($value)){

                    $metaValue = serialize($value);
                }else{
                    $metaValue = $value;

                }
             }

             DB::table('post_meta')
             ->updateOrInsert(
                ['post_id' => trim($userId), 'service_id' => trim($serviceId),'meta_key' =>trim($key)],
                ['meta_value' => $metaValue]
            );
         }


        }
        }

         if ((isset($input['profile_pictures']))) {

                $company->clearMediaCollection('profile_pictures');
                $company->addMedia($input['profile_pictures'])->toMediaCollection('profile_pictures');
         }
         
        }else{
        
        DB::table('users')
                ->where('id', $user->id)
                ->update(['first_name'=>$input['first_name'],'last_name'=>$input['last_name'],'email'=>$input['email']]);
        
        }
        Flash::success('Help Requester updated successfully.');

        return redirect(route('company.index'));
        
    }
    /**
     * Update the specified Company in storage.
     *
     * @param  Company  $company
     * @param  UpdateCompanyRequest  $request
     *
     * @return RedirectResponse|Redirector
     */
    public function addRemoveService($userId, $serviceId)
    {
        Flash::success('Service Requeste updated successfully.');

        return redirect(route('company.index'));
    }
    
    /**
     * Remove the specified Company from storage.
     *
     * @param  Company  $company
     *
     * @throws Exception
     *
     * @return RedirectResponse|Redirector
     */
    public function destroy(Company $company)
    {
        $this->companyRepository->delete($company->id);
        $company->user->media()->delete();
        $company->user->delete();

        return $this->sendSuccess('Help Requester deleted successfully.');
    }


     /**
     * @param  Company  $company
     *
     * @return mixed
     */
    public function serviceIsActive($jobCategoryId,$userId)
    {
       // $isActive = $company->user->is_active;
       // $company->user->update(['is_active' => ! $isActive]);
      $userDetail = User::find($userId);
      $newServiceIds =array();
      $serviceidArray = explode(',', $userDetail->service_id);
      if (in_array($jobCategoryId, $serviceidArray)){
      
      foreach($serviceidArray as $serId){
      	if($serId != $jobCategoryId){
      	array_push($newServiceIds,$serId);
      	}
      }
       DB::table('users')
            ->where('id',$userId)
            ->update(['service_id' => implode(',', $newServiceIds)]);
      return $this->sendSuccess('Service successfully removed...'); 
      }else{
      array_push($serviceidArray,$jobCategoryId);
      
      DB::table('users')
            ->where('id',$userId)
            ->update(['service_id' => implode(',', $serviceidArray)]);
      return $this->sendSuccess('Service successfully added...');      
      }
      
      
      
     //print_r($userDetail);
    /* DB::table('users')
            ->where('id',$userId)
            ->update(['title_name' => strtolower(str_replace('.', '' , $titlename[$i]))]);
*/

        return $this->sendSuccess('Status changed successfully.');
    }
    
    
    /**
     * @param  Company  $company
     *
     * @return mixed
     */
    public function changeIsActive(Company $company)
    {
        $isActive = $company->user->is_active;
        $company->user->update(['is_active' => ! $isActive]);

        return $this->sendSuccess('Status changed successfully.');
    }

    /**
     * @param  Request  $request
     *
     * @return mixed
     */
    public function getStates(Request $request)
    {
        $postal = $request->get('postal');

        $states = getStates($postal);

        return $this->sendResponse($states, 'Retrieved successfully');
    }

    /**
     * @param  Request  $request
     *
     * @return mixed
     */
    public function getCities(Request $request)
    {
        $state = $request->get('state');
        $cities = getCities($state);

        return $this->sendResponse($cities, 'Retrieved successfully');
    }

    /**
     * Show the form for editing the specified Company.
     *
     * @param  Company  $company
     *
     * @return Factory|View
     */
    public function editCompany(Company $company)
    {
        $user = $company->user;
        $user->phone = preparePhoneNumber($user->phone, $user->region_code);
        if ($user->id != getLoggedInUserId()) {
            throw new ModelNotFoundException;
        }
        $data = $this->companyRepository->prepareData();
        $states = $cities = null;
        if (isset($user->country_id)) {
            $states = getStates($user->country_id);
        }
        if (isset($user->state_id)) {
            $cities = getCities($user->state_id);
        }
        $isFeaturedEnable = FrontSetting::where('key', 'featured_companies_enable')->first()->value;
        $maxFeaturedJob = FrontSetting::where('key', 'featured_companies_quota')->first()->value;
        $totalFeaturedJob = Company::Has('activeFeatured')->count();
        $isFeaturedAvilabal = ($totalFeaturedJob >= $maxFeaturedJob) ? false : true;

        return view('employer.companies.edit',
            compact('data', 'company', 'cities', 'states', 'user', 'isFeaturedEnable', 'isFeaturedAvilabal'));
    }

    /**
     * Update the specified Company in storage.
     *
     * @param  Company  $company
     * @param  UpdateCompanyRequest  $request
     *
     * @return RedirectResponse|Redirector
     */
    public function updateCompany(Company $company, UpdateCompanyRequest $request)
    {
        $input = $request->all();

        $company = $this->companyRepository->update($input, $company);

        Flash::success('Help Requester updated successfully.');

        return redirect(route('company.edit.form', Auth::user()->owner_id));
    }

    /**
     * @param  Request  $request
     *
     * @throws Exception
     *
     * @return Application|Factory|View
     */
    public function showReportedCompanies(Request $request)
    {
        $reportedEmployee = ReportedToCompany::with(['user', 'company.user'])->get();
        
        return view('employer.companies.reported_companies', compact('reportedEmployee'));
    }

    /**
     * @param  ReportedToCompany  $reportedToCompany
     *
     * @throws Exception
     *
     * @return mixed
     */
    public function deleteReportedCompany(ReportedToCompany $reportedToCompany)
    {
        $reportedToCompany->delete();

        return $this->sendSuccess('Reported Jobs deleted successfully.');
    }

    /**
     * Display a listing of the Job.
     *
     * @param  Request  $request
     *
     * @throws Exception
     *
     * @return Factory|View
     */
    public function getFollowers(Request $request)
    {
        return view('employer.followers.index');
    }

    /**
     * @param  ReportedToCompany  $reportedToCompany
     *
     * @return mixed
     */
    public function showReportedCompanyNote(Request $request)
    {
        $data = $this->companyRepository->getReportedToCompany($request->reportedToCompany);
        $data['date'] = \Carbon\Carbon::parse($data->created_at)->formatLocalized('%d %b, %Y');

        return $this->sendResponse($data, 'Retrieved successfully.');
    }

    /**
     * @param  $companyId
     *
     * @return mixed
     **/
    public function markAsFeatured($companyId)
    {
        $user = getLoggedInUser();
        $addDays = FrontSetting::where('key', 'featured_companies_days')->first()->value;
        $price = FrontSetting::where('key', 'featured_companies_price')->first()->value;
        $maxFeaturedJob = FrontSetting::where('key', 'featured_companies_quota')->first()->value;
        $totalFeaturedJob = Company::Has('activeFeatured')->count();
        $isFeaturedAvailable = ($totalFeaturedJob >= $maxFeaturedJob) ? false : true;
        $company = Company::with('user')->findOrFail($companyId);

        if ($isFeaturedAvailable) {
            $featuredRecord = [
                'owner_id'   => $companyId,
                'owner_type' => Company::class,
                'user_id'    => $user->id,
                'start_time' => Carbon::now(),
                'end_time'   => Carbon::now()->addDays($addDays),
            ];
            FeaturedRecord::create($featuredRecord);
            NotificationSetting::whereKey(Notification::MARK_COMPANY_FEATURED_ADMIN)->where('type',
                'admin')->first()->value == 1 ?
                addNotification([
                    Notification::MARK_COMPANY_FEATURED_ADMIN,
                    $company->user->id,
                    Notification::EMPLOYER,
                    $user->first_name.' '.$user->last_name.' mark Company as Featured.',
                ]) : false;
            $transaction = [
                'owner_id'   => $companyId,
                'owner_type' => Company::class,
                'user_id'    => $user->id,
                'amount'     => $price,
            ];
            Transaction::create($transaction);

            return $this->sendSuccess('Company mark as featured successfully.');
        }

        return $this->sendError('Featured Quota is Not available');

    }

    /**
     * @param  $companyId
     *
     * @return mixed
     **/
    public function markAsUnFeatured($companyId)
    {
        /** @var FeaturedRecord $unFeatured */
        $unFeatured = FeaturedRecord::where('owner_id', $companyId)->where('owner_type', Company::class)->first();
        $unFeatured->delete();

        return $this->sendSuccess('Company mark as Unfeatured successfully.');
    }

    /**
     * @param  Company  $company
     *
     * @return mixed
     */
    public function changeIsEmailVerified(Company $company)
    {
        $company->user->update(['email_verified_at' => Carbon::now()]);

        return $this->sendSuccess('Email verified successfully.');
    }

    /**
     * @param  Company  $company
     *
     * @return mixed
     */
    public function resendEmailVerification(Company $company)
    {
        $company->user->sendEmailVerificationNotification();

        return $this->sendSuccess('Verification mail resent successfully.');
    }
     public function editmoment(Request $request)
    {
         $id = request('id');
        $reminders = Reminder::where('id', $id)->get();
        //$data = $this->companyRepository->prepareData();

        return view('companies.reminder.editmoment')->with('reminders', $reminders);
    }

    public function addtmoment(Request $request)
    {
         $id = request('id');
          $userid = request('userid');
       // $reminders = Reminder::where('id', $id)->get();
        //$data = $this->companyRepository->prepareData();

        return view('companies.reminder.addmoment')->with('id', $id)->with('userid', $userid);
    }
}
