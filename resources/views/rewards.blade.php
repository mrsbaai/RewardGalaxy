@extends('layouts.app')
@include('reward_list')
@section('content')
    <div class="container col-sm-12">
        @yield('rewards')s
    </div>
@endsection
