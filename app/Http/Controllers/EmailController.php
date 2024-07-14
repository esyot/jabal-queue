<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class EmailController extends Controller
{
    public function sendEmail(){

    //Auth::User()->email;
    
    Mail::to('rei.nhard3367@gmail.com')->send(new SendMailable());

    dd('Email has been delivered');

    }
}
