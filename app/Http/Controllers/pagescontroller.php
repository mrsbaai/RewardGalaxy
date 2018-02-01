<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reward;
use App\User;
use Illuminate\Support\Facades\Auth;

class pagesController extends Controller
{


    public function admin(){

        if (Auth::check()){
            if(Auth::user()->is_admin == true){
                return view("admin");
            }
        }

        return redirect('/');

    }


    public function test(){

        session_start();
        return $_SESSION['referrer'];
    }
    public function home(){

        if (Auth::check()){
            $this->updateIP();
            return view("coins");
        }

        $rewards = reward::orderBy('coins')->get();
        return view("home")->with('rewards', $rewards);
    }

    public function win($tag){

        $reward =  reward::where('tag',$tag)->first();
        return view("win")->with('reward', $reward);

    }


    public function tos(){
        return view("tos");
    }


    public function contact(){
        return view("contact");
    }

    public function coins(){
        if (!Auth::check()){
            return view("auth.login");
        }

        $this->updateIP();
        return view("coins");
    }

    private function updateIP(){
        $ip = $_SERVER['REMOTE_ADDR'];
        User::where('email', '=', Auth::user()->email)->update(['last_ip' => $ip]);
    }

    public function rewards(){
        if (!Auth::check()){
            return view("auth.login");
        }

        $rewards = reward::orderBy('coins')->get();
        return view("rewards")->with('rewards', $rewards);

    }



    public function account(){
        if (!Auth::check()){
            return view("auth.login");
        }


        return view("account");
    }



}
