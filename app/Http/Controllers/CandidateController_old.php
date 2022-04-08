<?php

namespace App\Http\Controllers;

use App\Exports\CandidatesExport;
use App\Http\Requests\CreateCandidateRequest;
use App\Http\Requests\UpdateCandidateRequest;
use App\Models\Candidate;
use App\Models\SalaryCurrency;
use App\Models\Skill;
use App\Queries\ReportedCandidateDataTable;
use App\Queries\ResumesDataTable;
use App\ReportedToCandidate;
use App\Repositories\Candidates\CandidateRepository;
use Carbon\Carbon;
use Exception;
use Flash;
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

class CandidateController extends AppBaseController
{
    /** @var  CandidateRepository */
    private $candidateRepository;

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
        $candidates = Candidate::all();

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
        $jobCategories = JobCategory::all();
        
        if(isset($_REQUEST['service_id']) && $_REQUEST['service_id']!=''){
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
        $pageTitle = "Edit ".$jobCategory->name."'s Service Details";
        }else{
         $pageTitle = "Edit ".$user->first_name."'s Profile Information";
        }
        
        /*echo "<pre>";
        print_r($user);
        die;*/
        return view('candidates.edit', compact('pageTitle','postMetaArray','jobCategories','candidate', 'user', 'data','care_type','preferredTime','pets'));
    }

    /**
     * Update the specified Candidate in storage.
     *
     * @param  Candidate  $candidate
     * @param  UpdateCandidateRequest  $request
     *
     * @return Application|RedirectResponse|Redirector
     */
    public function update(Candidate $candidate, UpdateCandidateRequest $request)
    {
        $input = $request->all();
        if (empty($candidate)) {
            Flash::error('Candidate not found');

            return redirect(route('candidates.index'));
        }
        
        $userId =  $input['user_id'];
        $serviceId =  $input['service_id'];
        if($serviceId!=''){  
         DB::table('post_meta')->where('post_id', $userId)->where('service_id', $serviceId )->delete();  
         /*PostMeta::where('post_id', '=', $userId)
       ->where('service_id', '=', $serviceId)
       ->delete();  
       */
         $userInput = array('first_name','last_name','email', 'phone','region_code','details', 'password','image','service_id');
                
                   
        foreach($input  as $key => $value){
        if($key != '_method' && $key !='_token' && $key !='user_id'){
        
        if (!in_array($key, $userInput)){
        if(is_array($value)){
         
         DB::table('post_meta')
               ->insert([
                'post_id'=> $userId,
                'service_id'=>$serviceId,
                'meta_key' => $key,
                'meta_value' => serialize($value)
              ]);
       
        }else{
            
        DB::table('post_meta')
               ->insert([
                'post_id' => $userId,
                'service_id'=>$serviceId,
                'meta_key' => $key,
                'meta_value' => $value
              ]);    
       


        }
        
        }
        
        
        }
        }
        }else{
        $candidate = $this->candidateRepository->updateCandidate($candidate, $input);
        }
        Flash::success('Candidate updated successfully.');

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
        $candidate->user->sendEmailVerificationNotification();

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
}
