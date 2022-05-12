<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtpController extends Controller
{
    public function otp(){
        $phone = "8801713702979";
        $url = "https://portal.metrotel.com.bd/smsapi";
        $data = [
            "api_key" => "C2000120621743647cdeb8.61438463",
            "type" => "text",
            "contacts" => $phone,
            "senderid" => "8809612451779",
            "msg" => "Your OTP 1234.",
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        curl_close($ch);

    }
}
