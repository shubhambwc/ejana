<?php

namespace App\Http\Controllers\Auth\Front;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Company;
use App\Models\Users;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Flash;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::ADMIN_HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * @return Factory|View
     */
    protected function showAdminLoginForm()
    {
        return view('auth.login');
    }

    /**
     * @return Factory|View
     */
    protected function showLoginForm()
    {
        return view('web.auth.login');
    }

    /**
     * @return Factory|View
     */
    protected function employeeLogin()
    {
        return view('web.auth.employer_login');
    }

    /**
     * @return Factory|View
     */
    protected function candidateLogin()
    {
        $showSignUPConfirmation= session('showSignUPConfirmation');
        session(['showSignUPConfirmation' => false]);
        return view('web.auth.candidate_login',compact('showSignUPConfirmation'));
    }

    protected function forgotPassword()
    {
        return view('web.auth.forgot_password');
    }

    public function forgotPasswordStep1(Request $request){

    $input = $request->all();
    $to = trim($input['email']);

    $userExist = DB::table('users')->where('email', $to)->first();
    if($userExist){


     $otp = random_int(100000, 999999);
     DB::table('users')
            ->where('id',$userExist->id)
            ->update(['otp' => $otp]);

    $confirmationLink= "https://www.ejana.nl/forgot-password-step2?token=".$otp;

    $candidate = Candidate::findOrFail($userExist->owner_id);
    $candidate->user->sendPasswordResetNotification($otp);
    return redirect()->route('front.forgotPasswordStep2');
    /*
    return redirect()->route('front.forgotPasswordStep2');

    $username =ucfirst($userExist->first_name).' '.ucfirst($userExist->last_name);
    $subject = "Forgot Password OTP";
    $message = "<p><b>Dear ".$username."</b></p>";
    $message .= "<p>Please find bellow link to updated your passowrd. </p>";
    $message .= "<p>Please open this <a href='".$confirmationLink."'>LINK</a> ".$confirmationLink." in browser to update password.</p>";
    $message .= "<p>Verification Code: ".$otp."</p>";

    $message .= "<p style='margin-top:20px;'>Regards</p>";
    $message .= "<p>E.Jana Team</p>";

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: <info@ejana.net>' . "\r\n";

	if(mail($to,$subject,$message,$headers)){
	Flash::success('Verification code sent to your email address:-'.$to);

    return redirect()->route('front.forgotPasswordStep2');
	}else{
	 Flash::success('Opps! server issue to send email, please try again..');
     return redirect()->route('front.forgot.password');
	}

	*/
      // print_r($input);

    }else{
     Flash::success('Email address is not registered.');
     return redirect()->route('front.forgot.password');
    }

    }

    public function forgotPasswordStep2(Request $request){
      return view('web.auth.forgot_password_step2');
    }


    public function forgotPasswordStep3(Request $request){
       $input = $request->all();
       $otp = $input['otp'];
       $userExist = DB::table('users')->where('otp', $otp)->first();


    if($userExist){





       $password = $input['password'];
       $cpassword = $input['cpassword'];


       if($password !=$cpassword){
         Flash::success('Password and confirm password not matching.');
         return redirect()->route('front.forgotPasswordStep2');
       }else{

     DB::table('users')
            ->where('id',$userExist->id)
            ->update(['otp' => '']);
     DB::table('users')
            ->where('id',$userExist->id)
            ->update(['password' => Hash::make($password) ]);


    $username =ucfirst($userExist->first_name).' '.ucfirst($userExist->last_name);
    $subject = "Password Updated";
    $message = "<p><b>Dear ".$username."</b></p>";
    $message .= "<p>Your password is updated... </p>";
    $message .= "<p></p>";
    $message .= "<p>If its not you, then please contact our support team</p>";

    $message .= "<p style='margin-top:20px;'>Regards</p>";
    $message .= "<p>E.Jana Team</p>";

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: <info@ejana.net>' . "\r\n";

	  mail($userExist->email,$subject,$message,$headers);

        Flash::success('Password updated...');
         return redirect()->route('front.candidate.login');
       }
       }else{
         Flash::success('Invalid Verification code, please try again.');
         return redirect()->route('front.forgotPasswordStep2');
       }
    }


    /**
     * @param  Request  $request
     *
     * @return RedirectResponse
     */
    protected function sendLoginResponse(Request $request)
    {
        //$type = $request->get('type');
        $req_email = $request->get('email');

        $request->session()->regenerate();


        $this->clearLoginAttempts($request);
        if (Auth::user()->hasRole('Admin')) {

            $this->redirectTo = RouteServiceProvider::ADMIN_HOME;
        }elseif (Auth::user()->hasRole('Employer')) {
            // echo "Employer"; die();
            $this->redirectTo = RouteServiceProvider::CANDIDATE_HOME;
        }elseif (Auth::user()->hasRole('Candidate')) {
            $this->redirectTo = RouteServiceProvider::CANDIDATE_HOME;
            //$this->redirectTo = RouteServiceProvider::SELECT_HELPER_SERVICES;
        } else {
               Auth::logout();
               return Redirect::to('/users/login')
                ->withInput()
                ->withErrors([
                    'error' => 'These credentials do not match our records.',
                ]);
        }



        if (isset($request->remember)) {
            return $this->authenticated($request, $this->guard()->user())
                ?: redirect()->intended($this->redirectPath())
                    ->withCookie(\Cookie::make('email', $request->email, 3600))
                    ->withCookie(\Cookie::make('password', $request->password, 3600))
                    ->withCookie(\Cookie::make('remember', 1, 3600));
        }

        return $this->authenticated($request, $this->guard()->user())
            ?: redirect()->intended($this->redirectPath())
                ->withCookie(\Cookie::forget('email'))
                ->withCookie(\Cookie::forget('password'))
                ->withCookie(\Cookie::forget('remember'));
    }
}
