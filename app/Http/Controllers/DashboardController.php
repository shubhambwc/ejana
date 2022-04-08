<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Repositories\DashboardRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends AppBaseController
{
    /** @var  DashboardRepository */
    private $dashboardRepository;

    public function __construct(DashboardRepository $dashboardRepository)
    {
        $this->dashboardRepository = $dashboardRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $data['dashboardData'] = $this->dashboardRepository->getDashboardAssociatedData();
        $data['registerCandidatesData'] = $this->dashboardRepository->getRegisteredCandidatesData();
        $data['registerEmployersData'] = $this->dashboardRepository->getRegisteredEmployersData();
        $data['recentJobsData'] = $this->dashboardRepository->getRecentJobsData();
        $data['totalRegistration'] = count($data['registerCandidatesData'])+count($data['registerEmployersData']);
        $approvedRegCount =0;
        $rejectedRegCount =0;
        foreach($data['registerCandidatesData'] as $cand){
        if($cand->user->is_active ==1){
        $approvedRegCount++;
        }else{
        $rejectedRegCount++;
        }
        }
        
        foreach($data['registerEmployersData'] as $epm){
        if($epm->user->is_active ==1){
        $approvedRegCount++;
        }else{
        $rejectedRegCount++;
        }
        }
        
        
        $data['approvedRegCount'] = $approvedRegCount;
        $data['inTreatment'] = 0;
        $data['rejectedRegCount'] = $rejectedRegCount;
        $data['finMemOpen'] = 0;
        $data['finMemRunning'] = 0;
        
        $data['finBookOpen'] = 0;
        $data['finBookRunning'] = 0;
        $data['activeMemberShipHelpers'] = 0;
        $data['activeMemberShipHelpRequestor'] = 0;
        
        $data['nonactiveMemberShipHelpers'] = 0;
        $data['nonactiveMemberShipHelpRequestor'] = 0;
        
        $data['adsHelpers'] = 0;
        $data['adsHelpRequestor'] = 0;
        
        $data['agreeHelpers'] = 0;
        $data['agreeHelpRequestor'] = 0;
        
        $data['chatHelpers'] = 0;
        $data['chatHelpRequestor'] = 0;
        
        return view('dashboard.index', compact('data'));
    }

    /**
     * @param  Request  $request
     * @return JsonResponse
     */
    public function dashboardChartData(Request $request): JsonResponse
    {
        $input = $request->all();
        $data['weeklyChartData'] = $this->dashboardRepository->getWeeklyChartData($input);
        $data['postStatisticsChartData'] = $this->dashboardRepository->getPostStatisticsChartData($input);

        return $this->sendResponse($data, 'Dashboard Chart data retrieved successfully.');
    }

    /**
     * @return Factory|View
     */
    public function employerDashboard()
    {
        $data = $this->dashboardRepository->getEmployerDashboardData();
        $data['recentJobs'] = $this->dashboardRepository->getEmployerRecentJobsData();
        $data['recentFollowers'] = $this->dashboardRepository->getEmployerRecentFollowerData();
        $data['jobStatus'] = Job::whereCompanyId(getLoggedInUser()->owner_id)->pluck('job_title', 'id');
        $data['gender'] = Job::GENDER;

        return view('employer.dashboard.index')->with($data);
    }

    /**
     * @param  Request  $request
     *
     * @return JsonResponse
     */
    public function employerDashboardChart(Request $request)
    {
        $input = $request->all();
        $data = $this->dashboardRepository->getEmployerDashboardChartData($input);
        $data['dates'] = $this->dashboardRepository->getDate($input['start_date'], $input['end_date']);

        return $this->sendResponse($data, 'employer bar chart retrieved successfully.');
    }
}
