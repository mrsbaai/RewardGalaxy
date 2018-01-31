@extends('layouts.app')

@section('content')

    <div class="container width-fix  col-sm-12 ">
        <div class="jumbotron welcome-texture  col-sm-12">

            <div class="container">

                <div class="row">



                    <section  class="col-lg-9 col-md-8 col-sm-7">
                        <h2>{{$reward->title}}</h2>
                        <p>Cost: <i class="currency">{{$reward->coins}} Coins</i> </p>
                        @if(!Auth::check())
                            <p><a href="/register" type="button" class="btn btn-xs btn-danger no-margin">Get Free Coins</a></p>
                        @endif

                        <p>Description: {{$reward->long_desctiption}}</p>


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
                Register Now And Get 15 Free Coins!
            </h2>
            <br/>
            <a href="/register" type="button" class="btn btn-lg btn-primary">Register A Free Account</a>
            <br/> <br/> <br/>
        </div>
    @endif



@stop