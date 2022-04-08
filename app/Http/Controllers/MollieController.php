<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;
class MollieController extends Controller
{
    
    public function  __construct() {
        Mollie::api()->setApiKey('test_CvxtdNpaRMrCNvC9nzSEm4zGb4qBeN'); // your mollie test api key
    }


    public function preparePayment()
    {   
       $payment = Mollie::api()->payments()->create([
                'amount' => [
                            'currency' => 'EUR', // Type of currency you want to send
                            'value' => '10.00', // You must send the correct number of decimals, thus  we enforce the use of strings
                            ],
                'description' => 'Payment By Developer', 
                'redirectUrl' => route('payment.success', //after payment completion where you redirect
             ]);
    
      $payment = Mollie::api()->payments()->get($payment->id);
             // redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
    }
    /**
     * Page redirection after the successfull payment
     *
     * @return Response
     */
    public function paymentSuccess()${
         echo 'payment has been received';
    }

}
