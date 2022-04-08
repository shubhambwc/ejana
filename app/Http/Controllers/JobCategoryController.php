<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJobCategoryRequest;
use App\Http\Requests\UpdateJobCategoryRequest;
use App\Models\Job;
use App\Models\JobCategory;
use App\Queries\JobCategoryDataTable;
use App\Repositories\JobCategoryRepository;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;





class JobCategoryController extends AppBaseController
{
    /** @var  JobCategoryRepository $jobCategoryRepository */
    private $jobCategoryRepository;

    public function __construct(JobCategoryRepository $jobCategoryRepo)
    {
        $this->jobCategoryRepository = $jobCategoryRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     *
     * @throws Exception
     *
     * @return Factory|View
     */
    public function index(Request $request)
    {
        $featured = JobCategory::FEATURED;
        $jobCategories = JobCategory::with('media')->get(); 

        return view('job_categories.index', compact('featured', 'jobCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateJobCategoryRequest  $request
     *
     * @return JsonResponse
     */
    public function store(CreateJobCategoryRequest $request)
    {
        $input = $request->all();
        $input['is_featured'] = (isset($input['is_featured'])) ? 1 : 0;
        
        $jobCategory = $this->jobCategoryRepository->create($input);


        if ((isset($input['image']))) {
           $jobCategory->addMedia($input['image'])->toMediaCollection('service-thumbnail', config('app.media_disc'));
         }
         
         if ((isset($input['banner']))) {
           $jobCategory->addMedia($input['banner'])->toMediaCollection('service-banner', config('app.media_disc'));
         }
         
         return $this->sendSuccess('Job Category Saved Successfully.');
         
         
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  JobCategory  $jobCategory
     *
     * @return JsonResponse
     */
    public function edit(JobCategory $jobCategory)
    {
        return $this->sendResponse($jobCategory, 'Job Category Retrieved Successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  JobCategory  $jobCategory
     *
     * @return JsonResponse
     */
    public function show(JobCategory $jobCategory)
    {
        return $this->sendResponse($jobCategory, 'Job Category Retrieved Successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateJobCategoryRequest  $request
     * @param  JobCategory  $jobCategory
     *
     * @return JsonResponse
     */
    public function update(UpdateJobCategoryRequest $request, JobCategory $jobCategory)
    {
        $input = $request->all();
        
        
        $input['is_featured'] = (isset($input['is_featured'])) ? 1 : 0;

        $this->jobCategoryRepository->update($input, $jobCategory->id);
         if ((isset($input['image']))) {
                $jobCategory->clearMediaCollection('service-thumbnail');
                $jobCategory->addMedia($input['image'])->toMediaCollection('service-thumbnail');
         }
         
          if ((isset($input['banner']))) {
           $jobCategory->clearMediaCollection('service-banner');
           $jobCategory->addMedia($input['banner'])->toMediaCollection('service-banner');
         }
         
         return $this->sendSuccess('Job Category Updated Successfully.');
            

        
    }
    
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  JobCategory  $jobCategory
     *
     * @throws Exception
     *
     * @return JsonResponse
     */
    public function destroy(JobCategory $jobCategory)
    {
        $jobModels = [
            Job::class,
        ];
        $result = canDelete($jobModels, 'job_category_id', $jobCategory->id);
        if ($result) {
            return $this->sendError('Job Category can\'t be deleted.');
        }
        $jobCategory->delete();

        return $this->sendSuccess('Job Category Deleted Successfully.');
    }

    /**
     * @param  JobCategory  $jobCategory
     *
     * @return mixed
     */
    public function changeStatus(JobCategory $jobCategory)
    {
        $isFeatured = $jobCategory->is_featured;
        $jobCategory->update(['is_featured' => ! $isFeatured]);

        return $this->sendSuccess('Status changed successfully.');
    }
}
