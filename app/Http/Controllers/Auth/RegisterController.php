<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Jrean\UserVerification\Traits\VerifiesUsers;
use Jrean\UserVerification\Facades\UserVerification;
use App\Http\Requests\Front\UserFrontRegisterFormRequest;
use Illuminate\Auth\Events\Registered;
use App\Events\UserRegistered;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['getVerification', 'getVerificationError']]);
    }

    public function register(UserFrontRegisterFormRequest $request)
    {
        $user = new User();
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->is_active = 0;
        $user->verified = 0;
        $phone = $request->input('phone');
        $otp = rand(1000,9999);
        $user->otp = $otp;
        $append = '88';
        $append .= $phone;
        if($user->save()){
            $url = "https://portal.metrotel.com.bd/smsapi";
            $data = [
              "api_key" => env('API_KEY'),
              "type" => "text",
              "contacts" => $append,
              "senderid" => env('SENDER_ID'),
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
               /*         * *********************** */
                $user->name = $user->getName();
                $user->update();
                /*         * *********************** */
        return view('otp', compact('phone'));
    }else{
        return 'wrong';
    }
        event(new Registered($user));
        event(new UserRegistered($user));
        $this->guard()->login($user);
        UserVerification::generate($user);
        UserVerification::send($user, 'User Verification', config('mail.recieve_to.address'), config('mail.recieve_to.name'));
        return $this->registered($request, $user) ?: redirect($this->redirectPath());
    }
    public function otpMatch(Request $req){
        $sent_otp  = User::where('phone', $req->phone)->select('otp')->get();
         
        $entered_otp = $req->otp;
        if($sent_otp[0]->otp == $entered_otp){
            User::where('phone', $req->phone)->update(['otp_verified'=>1]);
            return redirect()->route('login');
        }else{
            return redirect()->back()->with('warning', 'Wrong OTP Given. Please Try Again');
        }
    }
    public function resend($phone){
        $otp = rand(1000,9999);
        User::where('phone', $phone)->update(['otp'=>$otp]);
        $append = '88';
        $append .= $phone;
        $url = "https://portal.metrotel.com.bd/smsapi";
        $data = [
          "api_key" => env('API_KEY'),
          "type" => "text",
          "contacts" => $append,
          "senderid" => env('SENDER_ID'),
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
        return view('otp', compact('phone'));
    }


}
