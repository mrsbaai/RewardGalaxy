<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use app\mail\contactReceived;

use Mail;
class contactController extends Controller
{
    public function send()
    {


        $name = Input::get('name');
        $email =  Input::get('email');


        $subject =  Input::get('subject');
        $content =  Input::get('message');





        $subject = "RewardGalaxy :: " . $subject;
        $to = 'replaygate@gmail.com';
        Mail::send('emails.contact', ['content' => $content], function ($message) use($subject,$email,$name, $to){
        $message->from($email, $name);
        $message->subject($subject);
        $message->to($to);
        });

        Mail::to($email)->send(new contactReceived());


        return view('contact')->with('result', '- Sent!');


    }
}
