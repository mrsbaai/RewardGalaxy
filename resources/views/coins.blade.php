@extends('layouts.app')

@section('content')

    <div class="container width-fix col-sm-12">
        <div class="jumbotron welcome-texture">
            <div class="text-center">
                <p><h5 class="panel-title very-large-text">You currently have: <span class="currency">{{Auth::user()->coins}} Coins</span></h5></p>

            </div>
        </div>
    </div>



    <div class="container width-fix col-sm-12">
        <div class="jumbotron welcome-texture">
            <h2>Earn Coins: Methode 1 (Share)</h2>
            <p>Refer People to your link, and earn {{config('app.refercoins')}} <i class="fa fa-star currency smaller"></i> for new user.</p>
            <p>Your referrals will get {{config('app.referedsignupbonus')}} for signing up from your link.</p>

            <div>

                <input

                        type="text"
                        class="input-lg referinput"
                        data-toggle="tooltip"
                        readonly="readonly"
                        title="Copy & Paste"
                        value="https://rewardgalaxy.com/hop/{{auth::user()->refcode}}"
                        onfocus="this.select();"
                >


                <div class="text-center"><p><h2 class="text-center">OR</h2></p></div>


                <input

                        type="text"
                        class="input-lg referinput"
                        data-toggle="tooltip"
                        readonly="readonly"
                        title="Copy & Paste"
                        value="https://rewardgalaxy.com/register/{{auth::user()->refcode}}"
                        onfocus="this.select();"
                >
                <div class="spacer"></div>

            </div>

        </div>
    </div>

    <div class="container width-fix col-sm-12">
        <div class="jumbotron welcome-texture">
            <h2>Earn Coins: Methode 2 (Surveys)</h2>
            <div class="spacer"></div>
                <iframe
                        class="adworkmedia"
                        src="https://lockwall.xyz/wall/3RS"
                />
                <a href="http://lockwall.xyz/wall/3RS" target="_blank">iFrames are required to see this page. Please click here!</a></iframe>

            <div class="spacer"></div>
        </div>
    </div>
@endsection
