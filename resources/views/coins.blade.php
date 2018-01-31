@extends('layouts.app')

@section('content')

    <div class="container width-fix col-sm-12">
        <div class=" text-center">
            <p><h5 class="panel-title">You currently have: <span class="currency ">{{Auth::user()->coins}} Coins</span></h5></p>

        </div>
    </div>



    <div class="container width-fix col-sm-12">
        <div class="jumbotron welcome-texture">
            <h2>Earn Coins: Methode 1 (Share)</h2>
            <p>Refer your friends to this link and earn 1 <i class="fa fa-star currency smaller"></i> for each visitor.</p>
            <div class="">

                <input

                        type="text"
                        class="input-lg referinput"
                        data-toggle="tooltip"
                        readonly="readonly"
                        title="Copy & Paste"
                        value="http://{{substr (Request::root(), 7)}}/hop/{{auth::user()->refcode}}"
                        onfocus="this.select();"
                >


            </div>
        </div>
    </div>

    <div class="container width-fix col-sm-12">
        <div class="jumbotron welcome-texture">
            <h2>Earn Coins: Methode 2 (Surveys)</h2>
            <iframe src="http://lockwall.xyz/wall/3RS"
                    width="100%"
                    height="1000px"
                    style="border:0; padding:0; scrolling=auto; margin:0;" frameborder="0" />
            <a href="http://lockwall.xyz/wall/3RS" target="_blank">iFrames are required to see this page. Please click here!</a></iframe>
        </div>
    </div>
@endsection
