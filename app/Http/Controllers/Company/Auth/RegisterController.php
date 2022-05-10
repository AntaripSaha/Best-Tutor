<?php

namespace App\Http\Controllers\Company\Auth;

use Auth;
use App\Company;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Jrean\UserVerification\Traits\VerifiesUsers;
use Jrean\UserVerification\Facades\UserVerification;
use App\Http\Requests\Front\CompanyFrontRegisterFormRequest;
use Illuminate\Auth\Events\Registered;
use App\Events\CompanyRegistered;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /*
      |--------------------------------------------------------------------------
      | Register Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users as well as their
      | validation and creation. By default this controller uses a trait to
      | provide this functionality without requiring any additional code.
      |
     */

use RegistersUsers;
    use VerifiesUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/company-home';
    protected $userTable = 'companies';
    protected $redirectIfVerified = '/company-home';
    protected $redirectAfterVerification = '/company-home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('company.guest', ['except' => ['getVerification', 'getVerificationError']]);
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('company');
    }

    public function register(CompanyFrontRegisterFormRequest $request)
    {
        $company = new Company();
        $company->name = $request->input('name');
        $company->email = $request->input('email');
        $company->phone = $request->input('phone');
        $company->password = bcrypt($request->input('password'));
        $company->is_active = 0;
        $company->verified = 0;
        $phone = $request->input('phone');
        $otp = rand(0000,9999);
        $company->otp = $otp;
        $append = '88';
        $append .= $phone;
       
        if($company->save()){
              $url = "https://portal.metrotel.com.bd/smsapi";
              $data = [
                "api_key" => "C2000120621743647cdeb8.61438463",
                "type" => "text",
                "contacts" => $append,
                "senderid" => "8809612451779",
                "msg" => "Your OTP is $otp . Never Share Your OTP With Others.",
              ];
              $ch = curl_init();
              curl_setopt($ch, CURLOPT_URL, $url);
              curl_setopt($ch, CURLOPT_POST, 1);
              curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
              $response = curl_exec($ch);
              curl_close($ch);
             
  
            // $url = "https://portal.metrotel.com.bd/smsapi";
            // $data = [
            //     "api_key" => "C2000120621743647cdeb8.61438463",
            //     "type" => "text",
            //     "contacts" =>"88"+$phone,
            //     "senderid" => "8809612451779",
            //     "msg" => "Your OTP is $otp . Never Share Your OTP With Others.",
            // ];
            // $ch = curl_init();
            // curl_setopt($ch, CURLOPT_URL, $url);
            // curl_setopt($ch, CURLOPT_POST, 1);
            // curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            // $response = curl_exec($ch);
            // curl_close($ch);
            
            $company->slug = Str::slug($company->name, '-') . '-' . $company->id;
            $company->update();
            /*         * ******************** */
    
            return view('company.otp', compact('phone','company', 'request'));

        }else{
            return 'wrong';
        }

    }
    public function viewotp(){

        $phone = "01713702979";
        $company = "name3";
        return view('company.otp', compact('phone','company'));    
    }

    public function otpMatch(Request $req){
        $company = $req->company;   
        $company = $req->company;   
        $sent_otp  = Company::where('phone', $req->phone)->select('otp')->get();
         
        $entered_otp = $req->otp;
        if($sent_otp[0]->otp == $entered_otp){
            return redirect()->route('login');
        }else{
            return redirect()->back()->with('warning', 'Wrong OTP Given. Please Try Again');
        }
    }





    public function otp($phone, $otp){
        $url = "https://portal.metrotel.com.bd/smsapi";
        $data = [
            "api_key" => "C2000120621743647cdeb8.61438463",
            "type" => "text",
            "contacts" => $phone,
            "senderid" => "8809612451779",
            "msg" => "Your OTP is $otp . Never Share Your OTP With Others.",
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        curl_close($ch);

        return redirect()->route('otp');
    }


}
