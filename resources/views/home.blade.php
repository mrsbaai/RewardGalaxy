

@extends('layouts.app')

@include('reward_list')


<head>
    <title>Win Rewards Online</title>
</head>
@section('content')
    <div class="container width-fix col-sm-12">
        <div class="jumbotron welcome-texture">
            <h2>It's Simple on Reward Galaxy:</h2>
            <p><b>The products here cost <u>Coins</u> insted of <strike>Money</strike></b></p>
            <h2>How to earn Coins?</h2>
            <ul>
                <li>
                    <p>Method 1 (Share):
                    Share your unique referral link with your friends. You will get {{config('app.refercoins')}} Coins for each new user.<p>
                </li>
                <li>
                    <p>Method 2 (Surveys):
                    Complete surveys from our sponsors. You will earn Coins depending on the difficulty of the survey.</p>
                </li>
            </ul>
            <p>You wont be asked to pay for anything at any point. If you choose to complete surveys from our sponsors, you might be asked for personal information (Like Name, Email...).</p>



        </div>
    </div>
    <div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
        <br/> <br/> <br/>
        <a href="/register" type="button" class="btn btn-lg btn-warning">Get Instant Free Coins</a>
        <br/> <br/> <br/>
    </div>

    <div class="container col-sm-12">
        @yield('rewards')
    </div>


    <div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
        <h2 style="color:white;">
            Register Now And Get Instant Free Coins!
        </h2>
        <br/>
        <a href="/register" type="button" class="btn btn-lg btn-primary">Register Now</a>
        <br/> <br/> <br/>
    </div>


@endsection
