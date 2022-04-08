<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\ContactFormRequest;
use DB;
use App\Http\Requests\WebRegisterRequest;
use App\Repositories\WebRegisterRepository;
use App\Models\Company;
use App\Models\Job;
use App\Models\Skill;
use Carbon\Carbon;
use App\Models\User;

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

    public function __construct(WebHomeRepository $homeRepository,WebRegisterRepository $webRegisterRepository)
    {
              Mollie::api()->setApiKey('test_uQdGMCqD8PJgHjmqgVrFs3CsTzwpBD'); // your mollie test api key
              $this->homeRepository = $homeRepository;
              $this->webRegisterRepository = $webRegisterRepository;
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

         $data['detail'] = JobCategory::with('jobs','media')->find($serviceId);
         $data['title'] =$data['detail']['name'].' Service';
         return view('web.home.service-details')->with($data);

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
         return view('web.home.job-list')->with($data);
    }
    public function jobdetails($jobId){
         $data['title'] ='Job Detail';
         return view('web.home.job-details')->with($data);
    }


    public function applytojob($jobId){
         $data['title'] ='Job Application';
         return view('web.home.job-application')->with($data);
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
