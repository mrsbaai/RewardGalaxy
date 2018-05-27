@extends('layouts.app')

@section('content')

    <div class="container width-fix  col-sm-12 ">
        <div class="jumbotron welcome-texture  col-sm-12">

            <div class="container">

                <div class="row">



                    <section  class="col-lg-9 col-md-8 col-sm-7">
                        <h2>{{$reward->title}}</h2>
                        <p><b>Cost:</b> <i class="currency">{{$reward->coins}} Coins</i> </p>
                        @if(!Auth::check())
                            <p><a href="/register" type="button" class="btn btn-xs btn-primary no-margin">Get Free Coins</a></p>
                        @endif

                        <p><b>Description:</b>
                            <br/><br/>
                            {{$reward->long_description}}</p>


                        @if(Auth::check())
                            @if(auth::user()->coins < $reward->coins)
                                <button class="btn btn-md btn-danger" onclick="alert('You don\'t have enough Coins to redeem this reward!')">Redeem [Locked]</button>
                            @else
                                <button class="btn btn-md btn-success"  onclick="alert('You are not eligible to redeem tis reward yet.')">Redeem [Locked]</button>

                            @endif
                        @endif
                        <br/> <br/>
                    </section>



                    <section class="col-lg-3 col-md-4 col-sm-5">
                        <section class="col-sm-12 thumbnail">
                                <span class="locked"></span>
                            <img src="{{ URL::asset('img/rewards') . "/" . $reward->thumbnail }}"/>
                        </section>

                    </section>


                </div>

            </div>
        </div>

    </div>


    @if(!Auth::check())
        <div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <h2 style="color:white;">
                Register Now And Get <b><u>Instant Free Coins</u></b>!
            </h2>
            <br/>
            <a href="/register" type="button" class="btn btn-lg btn-primary">Get Started</a>
            <br/> <br/> <br/>
        </div>
		
		
	<div class="container width-fix col-sm-12">
        <div class="jumbotron welcome-texture">
            <h2>What is this?</h2>
            <p><b>At RewardGalaxy all products cost <u>Coins</u> instead of <strike>Money</strike></b></p>
            <h2>Can I get some <u>free Coins</u>?</h2>
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
            <p>You wont be asked to pay for anything at any point. If you choose to complete surveys from our sponsors, you might be asked for personal information (Like Name, Email...).</p>



        </div>
    </div>
    @endif

	


@stop