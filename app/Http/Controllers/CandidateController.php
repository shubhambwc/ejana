<?php

namespace App\Http\Controllers;

use App\Exports\CandidatesExport;
use App\Http\Requests\CreateCandidateRequest;
use App\Http\Requests\UpdateCandidateRequest;
use App\Models\Candidate;
use App\Models\User;
use App\Models\Company;
use App\Models\SalaryCurrency;
use App\Models\Skill;
use App\Models\Reminder;
use App\Models\Transaction;
use App\Queries\ReportedCandidateDataTable;
use App\Queries\ResumesDataTable;
use App\Queries\ReminderDataTable;
use App\ReportedToCandidate;
use App\Repositories\Candidates\CandidateRepository;
use Carbon\Carbon;
use Exception;
use Flash;
use Mail;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Yajra\DataTables\DataTables;
use App\Models\PostMeta;
use App\Models\JobCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class CandidateController extends AppBaseController
{
    /** @var  CandidateRepository */
    private $candidateRepository;

    public static function isDocImageType($url=null,$previewId=null) {
    if(@fopen($url, 'r')){
    $urlToOpen= $url;
    $ext = strtolower(pathinfo($url, PATHINFO_EXTENSION));
    if($ext == "gif" || $ext == "png" || $ext == "jpeg" || $ext == "jpg"){
    $imgurl = $url;
    $urlType = 'image';
    }elseif($ext == "pdf"){
    $imgurl = '/assets/img/pdf_file_icon.png';
    $urlType = 'pdf';
    }else{
    $imgurl = '/assets/img/doc_file_icon.png';
    $urlType = 'doc';
    }
    return '<img class="OpenFileInModal" data-type="'.$urlType.'" data-url-to-open="'.$urlToOpen.'" id="'.$previewId.'" src="'.$imgurl.'" />';

    }else{
    $imgurl =  '/assets/img/no-preview.jpg';
    return '<img  id="'.$previewId.'" src="'.$imgurl.'" />';
    }

    }

    public function __construct(CandidateRepository $candidateRepo)
    {
        $this->candidateRepository = $candidateRepo;
    }

    /**
     * Display a listing of the Candidate.
     *
     * @param  Request  $request
     *
     * @throws Exception
     *
     * @return Application|Factory|View
     */
    public function index(Request $request)
    {
        $statusArr = Candidate::STATUS;
        $immediateAvailable = Candidate::IMMEDIATE_AVAILABLE;
        $jobsSkills = Skill::toBase()->pluck('name', 'id')->toArray();

        $candidates = DB::table('candidates')
         -> orderBy('created_at', 'DESC')
         -> get();


        return view('candidates.index', compact('statusArr', 'immediateAvailable', 'jobsSkills', 'candidates'));
    }

    /**
     * Show the form for creating a new Candidate.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $data = $this->candidateRepository->prepareData();

        return view('candidates.create', compact('data'));
    }

    /**
     * Store a newly created Candidate in storage.
     *
     * @param  CreateCandidateRequest  $request
     *
     * @return Application|RedirectResponse|Redirector
     */
    public function store(CreateCandidateRequest $request)
    {
        $input = $request->all();
        $candidate = $this->candidateRepository->store($input);

        Flash::success('Candidate saved successfully.');

        return redirect(route('candidates.index'));
    }

    /**
     * Display the specified Candidate.
     *
     * @param  Candidate  $candidate
     *
     * @return Application|Factory|View
     */
    public function show(Candidate $candidate)
    {
        $currency = SalaryCurrency::pluck('currency_name', 'id');

        return view('candidates.show', compact('currency'))->with('candidate', $candidate);
    }

    /**
     * Show the form for editing the specified Candidate.
     *
     * @param  Candidate  $candidate
     *
     * @return Application|RedirectResponse|Redirector
     */
    public function edit(Candidate $candidate)
    {
        $user = $candidate->user;
        $user->phone = preparePhoneNumber($user->phone, $user->region_code);
        $data = $this->candidateRepository->prepareData();
        $data['candidateSkills'] = $user->candidateSkill()->pluck('skill_id')->toArray();
        $data['candidateLanguage'] = $user->candidateLanguage()->pluck('language_id')->toArray();

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

        $profile_pictures = $candidate->getMedia('profile_pictures')->first();
         if (!empty($profile_pictures)) {
            $postMetaArray['profile_pictures_url']= $profile_pictures->getFullUrl();
         }
         $passport_front = $candidate->getMedia('passport_front')->first();
         if (!empty($passport_front)) {
            $postMetaArray['passport_front_url']= $passport_front->getFullUrl();
         }

          $passport_back = $candidate->getMedia('passport_back')->first();
         if (!empty($passport_back)) {
            $postMetaArray['passport_back_url']= $passport_back->getFullUrl();
         }

         $liability_copy = $candidate->getMedia('liability_copy')->first();
         if (!empty($liability_copy)) {
            $postMetaArray['liability_copy_url']= $liability_copy->getFullUrl();
         }
         $first_aid_certificate = $candidate->getMedia('first_aid_certificate')->first();
         if (!empty($first_aid_certificate)) {
            $postMetaArray['first_aid_certificate_url']= $first_aid_certificate->getFullUrl();
         }

         $vog_certificate_file = $candidate->getMedia('vog_certificate_file')->first();
         if (!empty($vog_certificate_file)) {
            $postMetaArray['vog_certificate_file_url']= $vog_certificate_file->getFullUrl();
         }


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
        $JobCategoryDetail = $jobCategory = JobCategory::find($_REQUEST['service_id']);
        $pageTitle = "Edit ".$jobCategory->name."'s Service Details";
        $serviceId = $_REQUEST['service_id'];
        }else{
         $serviceId = '';
         $pageTitle = "Edit ".$user->first_name."'s Profile Information";
        }
        //if ($candidate->ajax()) {
            //return Datatables::of((new ReminderDataTable())->get())->make(true);
       // }
        $reminders = Reminder::where('userid', $user->id)->get();
        $transactions = Transaction::where('user_id', $user->id)->get();
        /*echo $candidate->id;
        echo '<br>'; 
        print_r($reminders);
        die();*/
        //echo "<pre>";
        //print_r($postMetaArray);

        return view('candidates.edit', compact('serviceId','pageTitle','postMetaArray','JobCategoryDetail','jobCategories','candidate', 'user', 'data','care_type','preferredTime','pets','reminders','transactions'));
    }

    /**
     * Update the specified Candidate in storage.
     *
     * @param  Candidate  $candidate
     * @param  UpdateCandidateRequest  $request
     *
     * @return Application|RedirectResponse|Redirector
     */
    public function candidatesupdate(Request $request){

      $input = $request->all();
     /* echo "<pre>";
      print_r($input);
      die;
      */
      $candidateId = $input['candidate_id'];
      $candidate = Candidate::findOrFail($candidateId);
      $user = $candidate->user;
      $userId = $user->id;
      $serviceId =  isset($input['service_id']) ? $input['service_id'] : '';
      if($serviceId !=''){
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

                $candidate->clearMediaCollection('profile_pictures');
                $candidate->addMedia($input['profile_pictures'])->toMediaCollection('profile_pictures');
         }

         if ((isset($input['passport_front']))) {
                $candidate->clearMediaCollection('passport_front');
                $candidate->addMedia($input['passport_front'])->toMediaCollection('passport_front');
         }

         if ((isset($input['passport_back']))) {
                $candidate->clearMediaCollection('passport_back');
                $candidate->addMedia($input['passport_back'])->toMediaCollection('passport_back');
         }

          if ((isset($input['liability_copy']))) {
                $candidate->clearMediaCollection('liability_copy');
                $candidate->addMedia($input['liability_copy'])->toMediaCollection('liability_copy');
         }

          if ((isset($input['first_aid_certificate']))) {
                $candidate->clearMediaCollection('first_aid_certificate');
                $candidate->addMedia($input['first_aid_certificate'])->toMediaCollection('first_aid_certificate');
          }

          if ((isset($input['vog_certificate_file']))) {
                $candidate->clearMediaCollection('vog_certificate_file');
                $candidate->addMedia($input['vog_certificate_file'])->toMediaCollection('vog_certificate_file');
          }

         Flash::success('Candidate Services Details Updated successfully.');
        }else{

        DB::table('users')
                ->where('id', $user->id)
                ->update(['first_name'=>$input['first_name'],'last_name'=>$input['last_name'],'email'=>$input['email']]);
        Flash::success('Candidate updated successfully.');
        }
        return redirect(route('candidates.index'));
    }

    /**
     * Remove the specified Candidate from storage.
     *
     * @param  Candidate  $candidate
     *
     * @throws Exception
     *
     * @return JsonResponse
     */
    public function destroy(Candidate $candidate)
    {
        $candidate->user->delete();
        $candidate->delete();

        return $this->sendSuccess('Candidate deleted successfully.');
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function changeStatus($id)
    {
        $candidate = Candidate::findOrFail($id);
        $status = ! $candidate->user->is_active;
        $candidate->user->update(['is_active' => $status]);

        return $this->sendSuccess('Status updated successfully.');
    }

    public function enableDisableService($serviceId,$userId){

      $userDetail = User::find($userId);
      $newServiceIds =array();
      $serviceidArray = explode(',', $userDetail->service_id);
      if (in_array($serviceId, $serviceidArray)){

      foreach($serviceidArray as $serId){
        if($serId != $serviceId){
        array_push($newServiceIds,$serId);
        }
      }
       DB::table('users')
            ->where('id',$userId)
            ->update(['service_id' => implode(',', $newServiceIds)]);
      return $this->sendSuccess('Service successfully removed from helper...');
      }else{
      array_push($serviceidArray,$serviceId);
      DB::table('users')
            ->where('id',$userId)
            ->update(['service_id' => implode(',', $serviceidArray)]);
      return $this->sendSuccess('Service successfully added to helper...');
      }


    }


    public function changeServiceStatus(Request $request,$serviceId,$userId,$serviceStatus){
    $input = $request->all();

    $serviceRemarks = $input['service_remarks'];

   DB::table('post_meta')
    ->updateOrInsert(
        ['post_id' => trim($userId), 'service_id' => trim($serviceId),'meta_key' =>'service_remarks'],
        ['meta_value' => $serviceRemarks]
    );


    DB::table('post_meta')
    ->updateOrInsert(
        ['post_id' => trim($userId), 'service_id' => trim($serviceId),'meta_key' =>'service_status'],
        ['meta_value' => $serviceStatus]
    );




    return $this->sendSuccess('Service status updated successfully...');
    }

    public static function getUsersServiceStatus($serviceId=null,$userId=null,$meta_key) {

     $postMeta = PostMeta::where('post_id', $userId)
    ->where('service_id', $serviceId)
    ->where('meta_key', $meta_key)
    ->first();

    if($postMeta){
    return $postMeta->meta_value;
    }else{
    return '';
    }



   }



    /**
     * @param  Request  $request
     *
     * @return JsonResource
     */
    public function reportCandidate(Request $request)
    {
        $input = $request->all();
        $this->candidateRepository->storeReportCandidate($input);

        return $this->sendSuccess('candidate Reported successfully.');
    }

    /**
     * @param  Request  $request
     *
     * @throws Exception
     *
     * @return Application|Factory|View
     */
    public function showReportedCandidates(Request $request)
    {
        $reportedCandidate = ReportedToCandidate::all();

        return view('candidate.reported_candidate.reported_candidates', compact('reportedCandidate'));
    }

    /**
     * @param  ReportedToCompany  $reportedToCompany
     *
     * @throws Exception
     *
     * @return mixed
     */
    public function showReportedCandiateNote(Request $request)
    {
        $data = $this->candidateRepository->getReportedToCandidate($request->reportedToCandidate);
        $data['date'] = \Carbon\Carbon::parse($data->created_at)->formatLocalized('%d %b, %Y');

        return $this->sendResponse($data, 'Retrieved successfully.');
    }

    /**
     * @param  ReportedToCompany  $reportedToCompany
     *
     * @throws Exception
     *
     * @return mixed
     */
    public function deleteReportedCandidate(ReportedToCandidate $reportedToCandidate)
    {
        $reportedToCandidate->delete();

        return $this->sendSuccess('Reported Candidate deleted successfully.');
    }

    /**
     * @param  Candidate  $candidate
     *
     * @return mixed
     */
    public function changeIsEmailVerified(Candidate $candidate)
    {
        $candidate->user->update(['email_verified_at' => Carbon::now()]);

        return $this->sendSuccess('Email verified successfully.');
    }

    /**
     * @param  Candidate  $candidate
     *
     * @return mixed
     */
    public function resendEmailVerification(Candidate $candidate)
    {

        $status = $candidate->user->sendEmailVerificationNotification();
        print_r( $status);
        return $this->sendSuccess('Verification mail resent successfully.');
    }

    /**
     * @return BinaryFileResponse
     */
    public function candidateExportExcel()
    {
        return Excel::download(new CandidatesExport(), 'candidates-'.time().'.xlsx');
    }

    public function resumes(Request $request)
    {
        return view('resumes.index');
    }


    public function downloadResume($media)
    {
        /** @var Media $mediaItem */
        $mediaItem = Media::findOrFail($media);

        return $mediaItem;
    }

    public function deleteResume(Media $media)
    {
        $media->delete();

        return $this->sendSuccess('Resume deleted successfully.');
    }
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

        return $this->sendSuccess('Status changed successfully.');
    }

     public function updateServices(Request $request){


         $input = $request->all();
         $ownerId= session('signupUserID');
         $serviceId= $input['service_id'];
         $MultipleServices= $input['multiple_services'];

        $JobCategoryDetail = JobCategory::find($serviceId);
        $data = $this->candidateRepository->prepareData();
        if($serviceId!=''){
         $user_type = session('user_type');
         if($user_type =='helper'){
         $candidate = Candidate::findOrFail($ownerId);
         }else{
         $candidate = Company::findOrFail($ownerId);
         }
         $profile_pictures = $candidate->getMedia('profile_pictures')->first();
         if (!empty($profile_pictures)) {
            $postMetaArray['profile_pictures_url']= $profile_pictures->getFullUrl();
         }
         $passport_front = $candidate->getMedia('passport_front')->first();
         if (!empty($passport_front)) {
            $postMetaArray['passport_front_url']= $passport_front->getFullUrl();
         }

         $passport_back = $candidate->getMedia('passport_back')->first();
         if (!empty($passport_back)) {
            $postMetaArray['passport_back_url']= $passport_back->getFullUrl();
         }

         $liability_copy = $candidate->getMedia('liability_copy')->first();
         if (!empty($liability_copy)) {
            $postMetaArray['liability_copy_url']= $liability_copy->getFullUrl();
         }
         $first_aid_certificate = $candidate->getMedia('first_aid_certificate')->first();
         if (!empty($first_aid_certificate)) {
            $postMetaArray['first_aid_certificate_url']= $first_aid_certificate->getFullUrl();
         }



         $user = $candidate->user;
         $postMeta = PostMeta::where('post_id', $user->id)->where('service_id',$serviceId)->get();

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
        }
       // echo "<pre>";
       // print_r($postMetaArray);
       // die;
        if($user_type =='helper'){
        return view('web.services_forms.index',compact('data','JobCategoryDetail','postMetaArray','ownerId','serviceId','MultipleServices'));
        }else{
         return view('web.services_request_forms.index',compact('data','JobCategoryDetail','postMetaArray','ownerId','serviceId','MultipleServices'));
        }
    }


    public function frontStore(Request $request){

     $input = $request->all();
     $ownerId= session('signupUserID');
     $MultipleServices = $input['MultipleServices'];
   // die;
    $user_type = session('user_type');
         if($user_type =='helper'){
         $candidate = Candidate::findOrFail($ownerId);
         }else{
         $candidate = Company::findOrFail($ownerId);
         }



    $user = $candidate->user;
    $userId = $user->id;
    $serviceId = trim($input['service_id']);

    $isUPdated = DB::table('post_meta')->where('post_id', $userId)->where('service_id', $serviceId )->first();


    DB::table('post_meta')->where('post_id', $userId)->where('service_id', $serviceId )->delete();
    DB::table('post_meta')
               ->insert([
                'post_id'=> $userId,
                'service_id'=>$serviceId,
                'meta_key' => 'user_signature_date',
                'meta_value' =>date('d-m-Y')
              ]);

   foreach($input  as $key => $value){

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


        if ((isset($input['profile_pictures']))) {

                $candidate->clearMediaCollection('profile_pictures');
                $candidate->addMedia($input['profile_pictures'])->toMediaCollection('profile_pictures');
         }

         if ((isset($input['passport_front']))) {
                $candidate->clearMediaCollection('passport_front');
                $candidate->addMedia($input['passport_front'])->toMediaCollection('passport_front');
         }

         if ((isset($input['passport_back']))) {
                $candidate->clearMediaCollection('passport_back');
                $candidate->addMedia($input['passport_back'])->toMediaCollection('passport_back');
         }

          if ((isset($input['liability_copy']))) {
                $candidate->clearMediaCollection('liability_copy');
                $candidate->addMedia($input['liability_copy'])->toMediaCollection('liability_copy');
         }

          if ((isset($input['first_aid_certificate']))) {
                $candidate->clearMediaCollection('first_aid_certificate');
                $candidate->addMedia($input['first_aid_certificate'])->toMediaCollection('first_aid_certificate');
          }

          if ((isset($input['vog_certificate_file']))) {
                $candidate->clearMediaCollection('vog_certificate_file');
                $candidate->addMedia($input['vog_certificate_file'])->toMediaCollection('vog_certificate_file');
          }


      $newServiceIds =array();
      $serviceidArray = explode(',', $user->service_id);
      if (in_array($serviceId, $serviceidArray)){
      }else{
      array_push($serviceidArray,$serviceId);
      DB::table('users')
            ->where('id',$userId)
            ->update(['service_id' => implode(',', $serviceidArray)]);
      }

    if($serviceId==2){
    session(['showSignUPConfirmation' => true]);
    return redirect(route('front.candidate.login'));
    }else{

    if($MultipleServices ==1){
    Flash::success('Registration process completed, Select Another Service...');
    return redirect()->route('choose-another-service');
    }else{
    Flash::success('Registration process completed, Please select your membership plan.');
    if($user_type =='helper'){
    return redirect()->route('pricing-candidate');
    }else{
    return redirect()->route('pricing-employer');
    }

    }

    }

   }

   // reminder add 

    
    public function addreminder(Request $request)
    {
            $input = $request->all();
            $helper = request('helper_id');
            $company = request('company_data');
            $userid = request('userid');

            
              //print_r($email_reminders);
           // die();
           $file = $request->file('upload_file');
            // Generate a file name with extension
            if(!empty($file)){
            $fileName = 'moment-'.time().'.'.$file->getClientOriginalExtension();
             $path = $request->file('upload_file')->storeAs('reminder', $fileName);
             $request->file('upload_file')->move(public_path('reminder'), $fileName); 
            }else{
                $fileName = NULL; 
            }

             $reminderadd = Reminder::create([
            'helper_id' => request('helper_id'),
            'userid' => request('userid'),
            'reminder' => request('reminder'),
            'date' =>request('date'),
            'type' => request('type'),
            'time' => request('time'),
            'file' => $fileName
            ]);
              

               $email_reminders = User::where('id', $userid)->pluck('email');
               $user_email = $email_reminders[0];
              
   
                 
                  $to = $user_email;
                    $subject = "Ejana : New Contract Moment";
                    $txt = "Reminder:". request('reminder') . "\r\n";
                    $txt .= "Date:". request('date') . "\r\n";
                    $txt .= "Time:". request('time');
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    $headers .= "From: info.ejana@gmail.com" . "\r\n" ;

                    mail($to,$subject,$txt,$headers);
             
             // echo $email_reminders['email'];
             // die();
            //Flash::success('Reminder saved successfully.');
             if(!empty($company)){
               return redirect()->route('company.edit',['company' => $helper])->with('success', 'Contact Moment saved successfully.'); 
           } else {

            return redirect()->route('candidates.edit',['candidate' => $helper])->with('success', 'Contact Moment saved successfully.');
           }
            // return redirect()->back()->with('success', 'Contact Moment saved successfully.');   

            //return redirect(route('candidates.index'));
    }

    // Delete
    public function destroy_reminder(Reminder $reminder)

    {

       // echo $reminder;
       // die();
       //print_r($reminder);
       $id =  $reminder->id;
      
        DB::table('reminders')->where('id', $id)->delete();
        /*prin_r($reminder);
        die(); candidate*/
       // Reminder::find($reminder)->delete();
       //DB::table('reminders')->delete($reminder);
       // return back();
       // DB::table('reminders')->delete($reminder);

       // $reminder->delete();
       // return $this->sendSuccess('Candidate deleted successfully.');
       //return $this->sendSuccess('Contact Moment deleted successfully.');
       return  response()->json(['success' => 'success'], 200);


    }


 public function editreminder(Request $request)
    {
        $id = request('id');
        $helper = request('helper_id');
        $company = request('company_data');
             //Reminder::find($id)->update($request->all());
             $file = $request->file('upload_file');
            // Generate a file name with extension
            if(!empty($file)){
            $fileName = 'moment-'.time().'.'.$file->getClientOriginalExtension();
             $path = $request->file('upload_file')->storeAs('reminder', $fileName);
             $request->file('upload_file')->move(public_path('reminder'), $fileName); 
              $reminderadd = Reminder::find($id)->update([
                'file' => $fileName
            ]);
            }



             $reminderadd = Reminder::find($id)->update([
            
            'reminder' => request('reminder'),
            'date' =>request('date'),
            'type' => request('type'),
            'time' => request('time')
            ]);
            if(!empty($helper) &  empty($company)){
              return redirect()->route('candidates.edit',['candidate' => $helper])->with('success', 'Contact Moment updated successfully.');
            
                
            }
            else if(!empty($company)){
                return redirect()->route('company.edit',['company' => $helper])->with('success', 'Contact Moment updated successfully.');

            }

            else{
                 return redirect()->route('moments.index')->with('success', 'Contact Moment updated successfully.');   
            }
 
           

           // Flash::success('Reminder saved successfully.');
            // return redirect()->back()->with('success', 'Contact Moment updated successfully.');   

            //return redirect(route('candidates.index'));
    }

     public function editmoment(Request $request)
    {
         $id = request('id');
        $reminders = Reminder::where('id', $id)->get();
        //$data = $this->companyRepository->prepareData();

        return view('candidates.reminder.editmoment')->with('reminders', $reminders);
    }

}
