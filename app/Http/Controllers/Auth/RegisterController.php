<?php

namespace App\Http\Controllers\Auth;


use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
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


        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'refcode' => $refcode,
            'coins' => $bonus,
        ]);


    }
}
