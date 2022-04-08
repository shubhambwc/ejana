<?php

namespace App\Http\Controllers;

use App\Queries\TransactionDataTable;
use Exception;
use DB;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Stripe\StripeClient;
use Yajra\DataTables\DataTables;
use App\Models\Transaction;

/**
 * Class TransactionController
 */
class TransactionController extends AppBaseController
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
       /* $transactions = DB::table('candidates')
            ->join('transactions', 'transactions.owner_id', '=', 'candidates.id')
            ->join('users', 'users.id', '=', 'candidates.user_id')
            ->select('transactions.*', 'users.first_name', 'users.last_name','users.email', 'users.owner_id', 'users.owner_type as user_type')
            ->get();*/
            
            /* $transactions = DB::table('subscriptions')
            ->join('transactions', 'transactions.owner_id', '=', 'subscriptions.id')
            ->join('users', 'users.id', '=', 'subscriptions.user_id')
            ->select('transactions.*', 'users.first_name', 'users.last_name','users.email', 'users.owner_id', 'users.owner_type as user_type', 'subscriptions.paypal_payment_id')
            ->get();
*/
            $transactions = DB::table('transactions')
            ->join('subscriptions', 'subscriptions.user_id', '=', 'transactions.user_id')
            ->join('users', 'users.id', '=', 'transactions.user_id')
            ->select('transactions.*', 'users.first_name', 'users.last_name','users.email', 'users.owner_id', 'users.owner_type as user_type', 'subscriptions.paypal_payment_id')
            ->get();
        //$transactions = Transaction::all();

        if ($request->ajax()) {
            return DataTables::of((new TransactionDataTable())->get())->make(true);
        }

        if (Auth::user()->hasRole('Employer')) {
            return view('employer.transactions.index');
        }
        /*print_r($transactions);
        die();*/

        return view('transactions.index', compact('transactions'));
    }

    /**
     * @param  string  $invoiceId
     *
     * @throws Exception
     *
     * @return mixed
     */
    public function getTransactionInvoice($invoiceId)
    {
        try {
            setStripeApiKey();
            $stripe = new StripeClient(
                config('services.stripe.secret_key')
            );

            $invoice = $stripe->invoices->retrieve(
                $invoiceId,
                []
            );

            $charge = $stripe->charges->retrieve($invoice->charge);
            $receiptUrl = $charge->receipt_url;

            return $this->sendResponse($receiptUrl, 'Invoice Retrieved Successfully.');
        } catch (Exception $e) {
            return $this->sendError($e->getMessage());
        }
    }
}
