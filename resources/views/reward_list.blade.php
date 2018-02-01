<heah><link href="{{ asset('css/rewards.css') }}" rel="stylesheet"></heah>

@section('rewards')
    @foreach ($rewards as $reward)

        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="thumbContainer">
                <div class="thumbnail thumb-texture" >
                    <a href="../win/{{ $reward->tag }}" class="thumb img-responsive" title="Win {{ $reward->title }}" >

                        <img src="../img/rewards/{{ $reward->thumbnail }}" class="img-responsive img-thumb">
                        @if(Auth::check())
                            @if(auth::user()->coins < $reward->coins)
                                <span class="locked"></span>
                            @else
                                <span class="unlocked"></span>
                            @endif

                        @else
                            <span class="locked"></span>
                        @endif


                    </a>

                    <div class="caption">
                        <div class="spacer"></div>
                        <div>
                            <p>
                                <h4>{{ $reward->title }}</h4>
                            </p>

                        </div>
                        <div>
                            <p>Cost: <i class="fa fa-star currency">{{ $reward->coins }} Coins</i></p>
                        </div>

                        <div class="short-description">
                            <a href="../win/{{ $reward->tag }}" title="Click for more info about this item...">
                                <p>{{ $reward->short_description }}</p>
                            </a>
                        </div>
                        <div class="text-center">
                            <a href="../win/{{ $reward->tag }}" type="button" class="btn btn-xs btn-danger no-margin">View</a>
                        </div>

                    </div>
                </div>
            </div>

        </div>


    @endforeach
@stop
