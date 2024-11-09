@extends('frontend.layouts.app')

@section('content')

<div class="container">
    <div class="card-full-page tb-10">

        <div class="text-center tb-10">
            <h3 class="gdash3">Milan night Dashboard</h3>
            <span>Select Bidding Option</span>
        </div>

        <div class="tb-10">&nbsp;</div>


        <div class="row bidoptions-list tb-10">
            <div class="col-4">
                <a href="{{ route('play.single_ank',['game_id' => request()->input('game_id')]) }}" class="bidtypebox">
                    <img src="{{ url('public/frontend/assets/img/single.png')}}">
                    <p>Single Ank</p>
                </a>
            </div>

            <div class="col-4">
                <a href="{{ route('play.jodi',['game_id' => request()->input('game_id')]) }}" class="bidtypebox">
                    <img src="{{ url('public/frontend/assets/img/jodi.png')}}">
                    <p>Jodi</p>
                </a>
            </div>

            <div class="col-4">
                <a href="{{ route('play.single_patti',['game_id' => request()->input('game_id')]) }}" class="bidtypebox">
                    <img src="{{ url('public/frontend/assets/img/single_patti.png')}}">
                    <p>Single Patti</p>
                </a>
            </div>


        </div>

        <div class="row bidoptions-list tb-10">
            <div class="col-4">
                <a href="{{ route('play.double_patti',['game_id' => request()->input('game_id')]) }}" class="bidtypebox">
                    <img src="{{ url('public/frontend/assets/img/double_patti.png')}}">
                    <p>Double Patti</p>
                </a>
            </div>

            <div class="col-4">
                <a href="{{ route('play.triple_patti',['game_id' => request()->input('game_id')]) }}" class="bidtypebox">
                    <img src="{{ url('public/frontend/assets/img/triple_patti.png')}}">
                    <p>Triple Patti</p>
                </a>
            </div>

            <div class="col-4">
                <a href="{{ route('play.half_sangam',['game_id' => request()->input('game_id')]) }}" class="bidtypebox">
                    <img src="{{ url('public/frontend/assets/img/half_sangam.png')}}">
                    <p>Half Sangam</p>
                </a>
            </div>


        </div>

        <div class="row bidoptions-list tb-10">
            <div class="col-4">

            </div>

            <div class="col-4">
                <a href="{{ route('play.full_sangam',['game_id' => request()->input('game_id')]) }}" class="bidtypebox">
                    <img src="{{ url('public/frontend/assets/img/full_sangam.png')}}">
                    <p>Full Sangam</p>
                </a>
            </div>

            <div class="col-4">

            </div>


        </div>

        <div class="tbmar-40 text-center">
            <span>Note: Betting is Running Now </span>

        </div>


    </div>
</div>



@endsection