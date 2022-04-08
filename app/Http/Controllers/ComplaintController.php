<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Queries\ComplaintDataTable;
use DataTables;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ComplaintController extends AppBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     *
     * @return Factory|View
     */
    
    
     public function index(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of((new ComplaintDataTable())->get())->make(true);
        }

        return view('complaints.index');
    }

    /**
     * @param  Inquiry  $inquiry
     *
     * @return Factory|View
     */
    public function show(Complaint $complaint)
    {
        return view('complaints.show', compact('complaint'));
    }

    /**
     * Remove the specified Inquiry from storage.
     *
     * @param  Inquiry  $inquiry
     *
     * @throws Exception
     * @return JsonResponse
     */
    public function destroy(Complaint $complaint)
    {
        $complaint->delete();

        return $this->sendSuccess('Complaint deleted successfully.');
    }
}
