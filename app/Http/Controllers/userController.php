<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Hash;

use App\Mail\accountCreated;
use Mail;
class userController extends Controller
{

    public function refer($code){
        session_start();
        if(!isset($_SESSION['referrer'])){
            $_SESSION['referrer'] = $code;
        }
        return redirect("/");
    }

    public function referRegister($code){
        session_start();
        if(!isset($_SESSION['referrer'])){
            $_SESSION['referrer'] = $code;
        }
        return redirect("/register");
    }

    public function adworkmedia(){
        if (Input::get('status') == 1){
            $user = User::where("last_ip", Input::get('ip'))->first();
            if ($user){
                $coins = $user['coins'] + Input::get('vc_value');
                $user->update(['coins' =>$coins]);
            }
        }
        return "ok";
    }

    public function test(){
        $data['password'] = "GsXXD668";
        $data['email'] = "abdelilah.sbaai@gmail.com";
        Mail::to($data['email'])->send(new accountCreated($data));
    }
    public function create(){
        if (Input::get('email')){
            $email = Input::get('email');

            $refcode = str_shuffle(mt_rand(10000, 99999) . mt_rand(10000, 99999));

            session_start();
            if(isset($_SESSION['referrer'])){
                $bonus = config('app.referedsignupbonus');
                $referrer = $_SESSION['referrer'];
                $user = User::where("refcode",$referrer)->first();
                $coins = $user['coins'] + config('app.refercoins');
                $user->update(['coins' =>$coins]);
            }else{
                $bonus = config('app.signupbonus');
            }

            $password = substr(str_shuffle(str_repeat($x='0123456789zABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(7/strlen($x)) )),1,7);

            $data['email'] = $email;
            $data['password'] = $password;


            User::create([
                'name' => "User",
                'email' => $email,
                'password' => bcrypt($password),
                'refcode' => $refcode,
                'coins' => $bonus,
            ]);



            Mail::to($email)->send(new accountCreated($data));
            Auth::attempt($data);



        }
        return redirect("/");
    }


    public function updateInfo(){

        if (null !== Input::get('repeat_password')){


            if (!(Hash::check(Input::get('current_password'), Auth::user()->password))) {
                return view('account')->with('password_form_result', '- Wrong Password!')->with('password_form_color', 'text-danger');
            }else{
                try {
                    User::where('email', '=', Auth::user()->email)->update(['password' => bcrypt(Input::get('new_password'))]);
                } catch(\Illuminate\Database\QueryException $ex){
                    return view('account')->with('password_form_result', '- Error!')->with('password_form_color', 'text-danger');
                }

                return view('account')->with('password_form_result', '- Changed!')->with('password_form_color', 'text-success');

            }

        }else{

            try {
                User::where('email', '=', Auth::user()->email)->update(['name' => Input::get('name')]);
                User::where('email', '=', Auth::user()->email)->update(['email' => Input::get('email')]);


                User::where('email', '=', Auth::user()->email)->update(['first_name' => Input::get('first_name')]);
                User::where('email', '=', Auth::user()->email)->update(['last_name' => Input::get('last_name')]);
                User::where('email', '=', Auth::user()->email)->update(['address1' => Input::get('address1')]);
                User::where('email', '=', Auth::user()->email)->update(['address2' => Input::get('address2')]);
                User::where('email', '=', Auth::user()->email)->update(['zip' => Input::get('zip')]);
                User::where('email', '=', Auth::user()->email)->update(['city' => Input::get('city')]);
                User::where('email', '=', Auth::user()->email)->update(['country' => Input::get('country')]);
                User::where('email', '=', Auth::user()->email)->update(['phone' => Input::get('phone')]);

            } catch(\Illuminate\Database\QueryException $ex){
                return view('account')->with('account_form_result', '- Error!')->with('account_form_color', 'text-danger');
            }

            $user = User::find(Auth::user()->id);
            Auth::setUser($user);

            return view('account')->with('account_form_result', '- Updated!')->with('account_form_color', 'text-success');
        }

    }
}
