<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\myMail;

class mailController extends Controller
{
    
    // public function mail() {
    //     Mail::to('bunichler@gmail.com')->send(new myMail(null, 1));
    //     return Redirect::to('/');
    //     // return view('mail.confirm_register');
    // }

    // // public function sendmail(Request $request) {
    // //     $order['mail'] = $request->email;
    // //     Mail::to($order['mail'])->send(new myMail($order));
    // // }
}
