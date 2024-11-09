<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Mail\OtpMail;
use Mail;

class Otp_controller extends Controller
{
// ----------------------------------------------------OTP SEND------------------------------------------------------

    public function otp(Request $request){
        $loginid=$request->loginid;
        $otp=rand(100000,999999);
        $datas=[
            'subject'=>'Scope OTP for New User',
            'otp'=>$otp
        ];
        Mail::to($loginid)->send(new OtpMail($datas));


        $check=Registration::where('email','=',$loginid)->get();
        $id=$check[0]->id;
        $obj=Registration::find($id);
        $obj->otp=$otp;
        $obj->save();
        return redirect('/login/otppage');
        // echo $id;
    }

// ----------------------------------------------------OTP PASSWORD GENERATION CHECKING------------------------------------------------------

    public function password(Request $request){
        $request->validate([
            'loginid'=>'required',
            'otp'=>'required'
        ]);
        $email=$request->loginid;
        $otp=$request->otp;
        $check=Registration::where('email','=',$email)->get()->toarray();
        if(count($check)>0){
            if($check[0]['otp']==$otp){
                return redirect('/login/passwordpage');
            }
            else{
                return back()->with('error','Incorrect Password');
            }
        }else{
            return back()->with('error','Incorrect User');
        }
    }

// ----------------------------------------------------CREATING NEW PASSWORD------------------------------------------------------

    public function newpassword(Request $request){
        $loginid=$request->loginid;
        $check=Registration::where('email','=',$loginid)->get();
        $id=$check[0]->id;
        $obj=Registration::find($id);
        $obj->password=$request->newpassword;
        $obj->save();
        return redirect('/login');
    }
}
