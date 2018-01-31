<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reward;
use Illuminate\Support\Facades\Auth;

class pagesController extends Controller
{


    public function test(){




        $string = str_shuffle(mt_rand(10000, 99999) . mt_rand(10000, 99999));
        echo $string;
    }
    public function home(){

        if (Auth::check()){
            return view("coins");
        }

        $rewards = reward::all();
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

        return view("coins");
    }

    public function rewards(){
        if (!Auth::check()){
            return view("auth.login");
        }

        $rewards = reward::all();
        return view("rewards")->with('rewards', $rewards);

    }


    public function admin(){
        if (!Auth::check()){
            return view("auth.login");
        }


        return view("admin");
    }

    public function account(){
        if (!Auth::check()){
            return view("auth.login");
        }


        return view("account");
    }



}
