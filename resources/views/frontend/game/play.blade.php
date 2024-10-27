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
                <a href="single.php?gid=95&pgid=55&dgame=open" class="bidtypebox">
                    <img src="{{ url('public/frontend/assets/img/single.png')}}">
                    <p>Single Ank</p>
                </a>
            </div>

            <div class="col-4">
                <a href="jodi.php?gid=95&pgid=55&dgame=open" class="bidtypebox">
                    <img src="{{ url('public/frontend/assets/img/jodi.png')}}">
                    <p>Jodi</p>
                </a>
            </div>

            <div class="col-4">
                <a href="single-patti.php?gid=95&pgid=55&dgame=open" class="bidtypebox">
                    <img src="{{ url('public/frontend/assets/img/single_patti.png')}}">
                    <p>Single Patti</p>
                </a>
            </div>


        </div>

        <div class="row bidoptions-list tb-10">
            <div class="col-4">
                <a href="double-patti.php?gid=95&pgid=55&dgame=open" class="bidtypebox">
                    <img src="{{ url('public/frontend/assets/img/double_patti.png')}}">
                    <p>Double Patti</p>
                </a>
            </div>

            <div class="col-4">
                <a href="triple-patti.php?gid=95&pgid=55&dgame=open" class="bidtypebox">
                    <img src="{{ url('public/frontend/assets/img/triple_patti.png')}}">
                    <p>Triple Patti</p>
                </a>
            </div>

            <div class="col-4">
                <a href="half-sangam.php?gid=95&pgid=55&dgame=open" class="bidtypebox">
                    <img src="{{ url('public/frontend/assets/img/half_sangam.png')}}">
                    <p>Half Sangam</p>
                </a>
            </div>


        </div>

        <div class="row bidoptions-list tb-10">
            <div class="col-4">

            </div>

            <div class="col-4">
                <a href="full-sangam.php?gid=95&pgid=55&dgame=open" class="bidtypebox">
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