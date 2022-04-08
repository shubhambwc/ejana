<?php

namespace App\Http\Controllers;

use App\Queries\TransactionDataTable;
use Exception;
use DB;
use App\Models\Reminder;
use App\Models\Candidate;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Stripe\StripeClient;
use Yajra\DataTables\DataTables;

/**
 * Class TransactionController
 */
class MomentsController extends AppBaseController
{
    /**
     * @param  Request  $request
     *
     * @throws Exception
     *
     * @return Factory|View
     */
    public function index(Request $request)
    {
       /* $reminders1 = Reminder::all();
        print_r($reminders1);*/

         $reminders = DB::table('candidates')
            ->join('reminders', 'reminders.helper_id', '=', 'candidates.id')
            ->join('users', 'users.id', '=', 'candidates.user_id')
            ->select('reminders.*', 'users.first_name', 'users.last_name')
            ->get();
      /*print_r($reminders);
        die();*/


        return view('moments.index', compact('reminders'));
    }

    public function editcontactmoment(Request $request)
    {
         $id = request('id');
        $reminders = Reminder::where('id', $id)->get();
        //$data = $this->companyRepository->prepareData();

        return view('moments.editmoment')->with('reminders', $reminders);
    }

    public function addtmoment(Request $request)
    {
        /*$user = $candidate->user;
        print_r( $user);
        die();*/
         $id = request('id');
         $userid = request('userid');
       // $reminders = Reminder::where('id', $id)->get();
        //$data = $this->companyRepository->prepareData();

        return view('candidates.reminder.addmoment')->with('id', $id)->with('userid', $userid);
    }

}
