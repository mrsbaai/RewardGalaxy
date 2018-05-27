

@extends('layouts.app')

@include('reward_list')


<head>
    <title>Win Rewards Online</title>
</head>
<div class="container width-fix col-sm-12">
        <div class=" welcome-texture text-center">
        <h1>Win Awesome Rewards Shipped To Your Home!</h1>
		It's simple at RewardGalaxy, all products cost <u>Coins</u> instead of <strike>Money</strike></b></p>


                <form role="form" method="POST" action="{{ url('/') }}" id="register-form">
                    <div class="container-fluid">
                        <div class="col-lg-2 col-md-1"> </div>
                        <div class="col-lg-8 col-md-10">
                            <div class="input-group text-center">
                                <input
                                        type="email"
                                        class="form-control input-lg"
                                        data-toggle="tooltip"
                                        name="email"
                                        placeholder="E-MAIL Here"
                                        title="Enter your email address here to get started"
                                        onfocus="this.select();"
                                        onmouseup="return false;"
                                        required

                                >

                                <span class="input-group-btn">
                                     <a href="javascript:{}" onclick="document.getElementById('register-form').submit();" class="btn btn-primary btn-lg">
                                         <span class="blink">Get Bonus Coins</span></a>
                        </span>

                            </div>
                        </div>
                    </div>

                </form>



        </div>
    </div>
@section('content')

    <div class="container col-sm-12">
        @yield('rewards')
    </div>

	    <div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
        <h2 style="color:white;">
            Register Now And Get <b><u>Instant Free Coins!</u></b>
        </h2>
        <br/>
            <a href="/register" type="button" class="btn btn-lg btn-primary"><span class="blink lead"><b>Get Bonus Coins Now!</b></span></a>
        <br/> <br/> <br/>
    </div>
	
	<div class="container width-fix col-sm-12">
        <div class="jumbotron welcome-texture">
            <h2><u>How To Earn More Coins</u>?</h2>
			<p>To win rewards you need Coins. We offer two ways to earn Coins:</p>
            <ul>
                <li>
                    <p>Method 1 <u><b>(Share)</b></u>:
                    Share your unique referral link with your friends. You will get {{config('app.refercoins')}} Coins for each new user.<p>
                </li>
                <li>
                    <p>Method 2 <u><b>(Surveys)</b></u>:
                    Complete surveys from our sponsors. You will earn Coins depending on the difficulty of the survey.</p>
                </li>
            </ul>
            <p>You might be asked for personal information (Name, E-mail, Shipping info...), BUT YOU WONT HAVE TO PAY ANYTHING AT ANYTIME.</p>



        </div>
    </div>




@endsection
