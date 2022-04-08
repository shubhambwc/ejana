<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\ContactFormRequest;
use DB;
use App\Http\Requests\WebRegisterRequest;
use App\Repositories\WebRegisterRepository;
use App\Repositories\CompanyRepository;
use App\Repositories\Candidates\CandidateRepository;
use App\Models\Country;
use App\Models\City;
use App\Models\State;
use App\Models\Company;
use App\Models\Job;
use App\Models\Skill;
use Carbon\Carbon;
use App\Models\User;
use App\Models\PostMeta;
use App\Models\JobApplication;

use Illuminate\Support\Facades\Auth;
use App\Repositories\WebHomeRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Laracasts\Flash\Flash;
use App\Models\JobCategory;
use Mollie\Laravel\Facades\Mollie;
use App\Models\Subscription;
use App\Models\Plan as SubscriptionPlan;

class HomeController extends AppBaseController
{
    /** @var  WebHomeRepository */
    private $homeRepository;
    private $webRegisterRepository;
    private $CandidateRepository;
    private $CompanyRepository;
    

    public function __construct(WebHomeRepository $homeRepository,WebRegisterRepository $webRegisterRepository,CandidateRepository $candidateRepo, CompanyRepository $companyRepo )
    {
              Mollie::api()->setApiKey('test_uQdGMCqD8PJgHjmqgVrFs3CsTzwpBD'); // your mollie test api key
              $this->homeRepository = $homeRepository;
              $this->webRegisterRepository = $webRegisterRepository;
               $this->CandidateRepository = $candidateRepo;
                $this->CompanyRepository = $companyRepo;
               
    }

    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function ourservice(){
        $data['title'] ='All Services';
        $data['jobCategories'] = JobCategory::with('jobs','media')->get();
         return view('web.home.ourservice')->with($data);

    }

    public function servicedetails($serviceId){

         /*$data['detail'] = JobCategory::with('jobs','media')->find($serviceId);
         $data['title'] =$data['detail']['name'].' Service';
         //$data['requestorall'] = $this->CandidateRepository->get();
         $data['requestorall'] = $this->CompanyRepository->get();
          $newdata = $data['requestorall'];
          $datalatest = array_filter($newdata, function ($item) use ($serviceId) {
                return $item['user']['service_id'] == $serviceId;
            });
           $data['requestor'] = $datalatest;
         return view('web.home.service-details')->with($data);*/
         $data['detail'] = JobCategory::with('jobs','media')->find($serviceId);

         $data['title'] =$data['detail']['name'].' Service';
         $data['jobCategories'] = $this->CompanyRepository->get();
          $newdata = $data['jobCategories'];
         $datalatest = array_filter($newdata, function ($item) use ($serviceId) {
                return $item['user']['service_id'] == $serviceId;
            });
         $data['requestor'] = $datalatest;
          $alljobdata =array(); 
          foreach($data['requestor'] as $jobdata){
                    $uniqueId = $jobdata['id'];
                   $user_id =  $jobdata['user']['user_id'];
                   $getservice_id = User::where([
                                    ['owner_id','=',$uniqueId],
                                    ['id','=',$user_id], 
                                    ])->get();
                   
                   $service_id =  $getservice_id[0]->service_id;
                $jobCategory = JobCategory::find($service_id);
                if(Auth::check()){
                    $getjob_status = JobApplication::where([
            ['candidate_id','=',Auth::id()],
            ['job_id','=',$uniqueId], ])->get();
                    /*print_r( $getjob_status);
                    die();*/
                    if(sizeof($getjob_status)){
                      $data['job_status'] =  $getjob_status[0]->status;
                    }else{
                            $data['job_status'] =  "0";
                    }

                 }else{
                      $data['job_status'] =  "0";
                 }
                 $job_status = array(
                    
                    "job_status"=>$data['job_status'],
                    "ownerId" => $uniqueId,
                    "service_id"=> $serviceId

                );
                //$JobCategoryDetail = $jobCategory = JobCategory::find($_REQUEST['service_id']);
               
              /* if(!empty( $jobCategory->name)){
                 $pageTitle = $jobCategory->name;
               }else{
                $pageTitle = "";
               }
             // die();

                $jobTitle = array(
                    
                    "pageTitle"=>$pageTitle,

                );*/
             
                    $postMetaArray =array(); 
                $postMeta = PostMeta::where([
            ['post_id','=',$user_id],
            ['service_id','=',$service_id], ])->get();
                
                
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
                $alljobdata[] = array_merge($postMetaArray, $job_status);
                
          }

        $data['joblistingdetail'] = array_reverse($alljobdata, true);
        
         $jobCategory = JobCategory::find($service_id);
         if(!empty( $jobCategory->name)){
         $pageTitle = $jobCategory->name;
       }else{
        $pageTitle = "";
       }
     // die();

       /* $jobTitle = array(
            
            "pageTitle"=>$pageTitle,

        );*/
        $data['jobTitle'] = $pageTitle;
        /*print_r($data['joblistingdetail']);
        die();*/

                 return view('web.home.job-list')->with($data);

    }

     public function howitworks(){
         $data['title'] ='How it works';
         return view('web.home.howitworks')->with($data);
     }

    public function aboutus(){

          $data['title'] ='About Us';
         return view('web.home.aboutus')->with($data);
    }

    public function contactus(){
         $data['title'] ='Contact US';
         return view('web.home.contactus')->with($data);
    }

     public function pricing(){
         $data['title'] ='Our Pricing';
         return view('web.home.pricing')->with($data);
    }

    public function selectService(Request $request){
         $data['title'] ='Our Services';
         $input = $request->all();
         session(['user_type' => $input['user_type']]);

         if($input['user_type'] =='helper'){
         $data['heading'] = 'What do you offer?';
         $data['subheading'] = 'Do you want to offer several services?';
         }else{
         $data['heading'] = 'What are you looking for?';
         $data['subheading'] = 'Do you want to request several services?';
         }

         $data['jobCategories'] = JobCategory::with('jobs','media')->get();
         return view('web.home.select_services')->with($data);
    }

    public function selectAnotherService(){
         $data['title'] ='Our Services';
         $data['jobCategories'] = JobCategory::with('jobs','media')->get();
         $user_type = session('user_type');
         if($user_type =='helper'){
         $data['heading'] = 'What do you offer?';
         $data['subheading'] = 'Do you want to offer several services?';
         }else{
         $data['heading'] = 'What are you looking for?';
         $data['subheading'] = 'Do you want to request several services?';
         }
         return view('web.home.select_another_services')->with($data);
    }


    public function pricingemployer(){
         $data['title'] ='Our Pricing for employer';
         $showSignUPConfirmation2= session('showSignUPConfirmation2');
         session(['showSignUPConfirmation2' => false]);

         return view('web.home.pricing-employer',compact('showSignUPConfirmation2','data'));
    }
    public function pricingcandidate(){

           $data['title'] ='Our Pricing for candidate';
           $showSignUPConfirmation2= session('showSignUPConfirmation2');
           session(['showSignUPConfirmation2' => false]);
          return view('web.home.pricing-candidate',compact('showSignUPConfirmation2','data'));
    }



    public function createAccount(Request $request){
         $input = $request->all();
         $data['multiple_services']= $input['is_multiple_services'];
         $data['service_id']= $input['service_id'];
         $user_type = session('user_type');
         $data['type']= $user_type == 'requestor' ? 2:1;
         $data['isGoogleReCaptchaEnabled'] = $this->webRegisterRepository->getSettingForReCaptcha();
         return view('web.home.create-account')->with($data);
    }

    public function subscribeWebhook(){
     $user = Auth::user();
     $subscription = $user->subscriptions()->active()->first();
     $paymentId = $subscription->paypal_payment_id;
     $payment = Mollie::api()->payments->get($paymentId);
     $paymentStatus='';
     if ($payment->isPaid() && ! $payment->hasRefunds() && ! $payment->hasChargebacks()) {
        $paymentStatus='Paid';
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

    }

     public function legislation(){
         $data['title'] ='Legislation';
         return view('web.home.legislation')->with($data);
    }
     public function findjob(){
         $data['title'] ='Search Job';
         $data['jobCategories'] = JobCategory::with('jobs','media')->get();
         return view('web.home.findjob')->with($data);
    }

     public function coronapolicy(){
         $data['title'] ='Corona Policy';
         return view('web.home.coronapolicy')->with($data);
    }
    public function joblisting(){
         $data['title'] ='Jobs';
          $data['jobCategories'] = $this->CompanyRepository->get();
          $alljobdata =array(); 
          foreach($data['jobCategories'] as $jobdata){
            $uniqueId = $jobdata['id'];
           $user_id =  $jobdata['user']['user_id'];
           $getservice_id = User::where('owner_id',$uniqueId)->where('id',$user_id)->get();
           $service_id =  $getservice_id[0]->service_id;
        $jobCategory = JobCategory::find($service_id);
        //$JobCategoryDetail = $jobCategory = JobCategory::find($_REQUEST['service_id']);
       
       if(!empty( $jobCategory->name)){
         $pageTitle = $jobCategory->name;
       }else{
        $pageTitle = "";
       }
     // die();

        $jobTitle = array(
            
            "pageTitle"=>$pageTitle,

        );
     
            $postMetaArray =array(); 
        $postMeta = PostMeta::where('post_id', $user_id)->where('service_id', $service_id)->get();
        
        
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
        
        $alljobdata[] = array_merge($postMetaArray, $jobTitle);
          }
        $data['joblistingdetail'] = array_reverse($alljobdata, true);
        print_r($data['joblistingdetail']);
        die();

                 return view('web.home.job-list')->with($data);
    }
    public function jobdetails($jobId){
         
          $company = Company::whereUniqueId($jobId)->first();

       // $data = $this->companyRepository->getCompanyDetail($company->id);
        $data = $this->CompanyRepository->getCompanyDetail($jobId);
        $getservice_id = User::where('owner_id',$jobId)->where('owner_type','App\Models\Company')->get();
                               // ->value('service_id');
       $service_id =  $getservice_id[0]->service_id;
       $user_id =  $getservice_id[0]->id;

        $jobCategory = JobCategory::find($service_id);
        //$JobCategoryDetail = $jobCategory = JobCategory::find($_REQUEST['service_id']);
        $pageTitle = $jobCategory->name;
        $data['title'] =$pageTitle;
         if(Auth::check()){
            $getjob_status = JobApplication::where('candidate_id',Auth::id())->where('job_id',$jobId)->get();
            /*print_r( $getjob_status);
            die();*/
            if(sizeof($getjob_status)){
             $data['job_status'] =  $getjob_status[0]->status;
            }else{
                 $data['job_status'] =  "0";
            }

         }else{
            $data['job_status'] =  "0";
         }
         $data['ownerId'] =  $jobId;
         $data['service_id'] =  $service_id;
      
         $postMetaArray =array();                      
        $postMeta = PostMeta::where('post_id', $user_id)->where('service_id', $service_id)->get();
        
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


       //  print_r($postMetaArray);
                //                die();
       // print_r($data);
      //  die();

       // return view('web.company.company_details')->with($data)->with('postMetaArray', $postMetaArray);
         return view('web.home.job-details')->with($data)->with('postMetaArray', $postMetaArray);
    }

    
    public function applytojob(Request $request){
        
         
        //die();
         if(Auth::check()){
             $jobId = $request->jobId;
           //die();
               //  $data['title'] ='Job Application';
               // $JobApplication = new JobApplication($request->all());
                /*$reminderadd = JobApplication::create([
                        'status ' => "1",
                        'job_id ' => $jobId
                        
                        ]);*/

                          $reminderadd = JobApplication::create([
                        'status' => "1",
                        'job_id' => $jobId,
                        'candidate_id'  => Auth::id(),
                        'service_id' => $request->service_id
                        
                        ]);

                  
                 //$data = $this->CompanyRepository->getCompanyDetail($jobId);
                  $getservice_id = User::where('owner_id',$jobId)->where('owner_type','App\Models\Company')->get();
                               // ->value('service_id');
                  $service_id =  $getservice_id[0]->service_id;
                  // $user_id =  $getservice_id[0]->id;
                  // $postMetaArray =array();                      
                   // $postMeta = PostMeta::where('post_id', $user_id)->where('service_id', $service_id)->get();
                     $jobCategory = JobCategory::find($service_id);
                    //$JobCategoryDetail = $jobCategory = JobCategory::find($_REQUEST['service_id']);
                    $pageTitle = $jobCategory->name;
                    $data['title'] =$pageTitle;
                     $data['jobId'] =$jobId;
                    
                // print_r($postMetaArray);

                 //return view('web.home.job-application')->with($data);
                // return redirect(route('after_applytojob')->with('jobId', $jobId));
                  return redirect()->route('after_applytojob',['jobId' => $jobId]); 
            }else{
                 $showSignUPConfirmation= session('showSignUPConfirmation');
        session(['showSignUPConfirmation' => false]);
        return view('web.auth.candidate_login',compact('showSignUPConfirmation'));
    }

           
    }

    public function after_applytojob($jobId){
       // print_r($data);
      //  die();
         if(Auth::check()){
               //  $data['title'] ='Job Application';
               // $JobApplication = new JobApplication($request->all());
              /*  $reminderadd = JobApplication::create([
                        'status ' => "1",
                        'job_id ' => $jobId
                        
                        ]);*/

                  
                 $data = $this->CompanyRepository->getCompanyDetail($jobId);
                  $getservice_id = User::where('owner_id',$jobId)->where('owner_type','App\Models\Company')->get();
                               // ->value('service_id');
                   $service_id =  $getservice_id[0]->service_id;
                   $user_id =  $getservice_id[0]->id;
                     $jobCategory = JobCategory::find($service_id);
                    //$JobCategoryDetail = $jobCategory = JobCategory::find($_REQUEST['service_id']);
                    $pageTitle = $jobCategory->name;
                    $data['title'] =$pageTitle;
                     $data['jobId'] =$jobId;
                    
                // print_r($postMetaArray);

                 return view('web.home.job-application')->with($data);
            }else{
                 $showSignUPConfirmation= session('showSignUPConfirmation');
        session(['showSignUPConfirmation' => false]);
        return view('web.auth.candidate_login',compact('showSignUPConfirmation'));
    }

           
    }

     public function qualitysafety(){
         $data['title'] ='Quality and Safety';
         return view('web.home.qualitysafety')->with($data);
    }

     public function blog(){
         $data['title'] ='Blog';
         return view('web.home.blog')->with($data);
    }



    public function index()
    {
        $data['testimonials'] = $this->homeRepository->getTestimonials();
        $data['dataCounts'] = $this->homeRepository->getDataCounts();
        $data['latestJobs'] = $this->homeRepository->getLatestJobs();
        $data['categories'] = $this->homeRepository->getCategories();
        $data['jobCategories'] = JobCategory::with('jobs','media')->get();
        //$data['jobCategories'] = JobCategory::all();//$this->homeRepository->getAllJobCategories();
        $data['featuredCompanies'] = $this->homeRepository->getFeaturedCompanies();
        $data['featuredJobs'] = $this->homeRepository->getFeaturedJobs();
        $data['notices'] = $this->homeRepository->getNotices();
        list($data['imageSliders'], $data['settings'], $data['slider'], $data['imageSliderActive'], $data['headerSliders']) = $this->homeRepository->getImageSlider();
        $data['latestJobsEnable'] = $this->homeRepository->getLatestJobsEnable();
        $data['plans'] = $this->homeRepository->getPlans();
        $data['branding'] = $this->homeRepository->getBranding();
        $data['recentBlog'] = $this->homeRepository->getRecentBlog();
         /*$data['count'] = $this->hasManyThrough('App\Models\JobCategory', 'App\Models\User');
         print_r($data['count']);
         die();*/
        /* $data['count'] = DB::table('job_categories')
            ->join('users', 'job_categories.id', '=', 'users.service_id')
            ->select('job_categories.*', DB::raw("count(users.service_id) as count"))
            ->groupBy('job_categories.id')
            ->get();
            print_r($data['count']);
             die();*/
             USer::where('id', 1)->count();



        return view('web.home.home')->with($data);
    }

    /**
     * @param  ContactFormRequest  $request
     *
     * @return Application|RedirectResponse|Redirector
     */
    public function sendContactus(Request $request)
    {

      //$inquiry = $this->homeRepository->storeInquires($request->all());
      Flash::success('Thank you for contacting us, We will get back to you soon... Email are temp deisabled');
      return redirect(route('contact-us'));
    }

    public function sendComplaintus(Request $request)
    {

      //$inquiry = $this->homeRepository->storeComplaintus($request->all());
      Flash::success('Thank you for contacting us, We will get back to you soon...Email are temp deisabled');
      return redirect(route('contact-us'));
    }



    /**
     * @param  Request  $request
     *
     * @return RedirectResponse
     */
    public function changeLanguage(Request $request)
    {
        Session::put('languageName', $request->input('languageName'));

        return $this->sendSuccess('Language changed successfully');
    }

    /**
     * @param  Request  $request
     *
     * @throws Throwable
     *
     * @return array|string
     */
    public function getJobsSearch(Request $request)
    {
        $searchTerm = strtolower($request->get('searchTerm'));
        if ($searchTerm) {
            $jobSearchResult = Job::where('job_title', 'LIKE', '%'.$searchTerm.'%')->get();
            $skills = Skill::where('name', 'LIKE', '%'.$searchTerm.'%')->get();
            $companies = Company::whereHas('user', function (Builder $query) use ($searchTerm) {
                $query->where('first_name', 'LIKE', '%'.$searchTerm.'%')->orWhere('last_name', 'LIKE',
                    '%'.$searchTerm.'%');
            })->get();

            return view('web.home.job_search_results', compact('jobSearchResult', 'skills', 'companies'))->render();
        }
    }
}
