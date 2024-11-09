<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SentMail;
use Mail;


class Mail_controller extends Controller
{

// ----------------------------------------------------CONTACT FORM MAIL SENDING------------------------------------------------------

    public function sent(Request $request){
        $mname=$request->mname;
        $memail=$request->memail;
        $msubject=$request->msubject;
        $mmessage=$request->mmessage;
        $data=[
            'subject'=>'Scope Contact',
            'mname'=>$mname,
            'memail'=>$memail,
            'msubject'=>$msubject,
            'mmessage'=>$mmessage
        ];
        Mail::to('sajusv2002@gmail.com')->send(new SentMail($data));
        return back()->with('mailsend','Email sent successfully');
    }
}

