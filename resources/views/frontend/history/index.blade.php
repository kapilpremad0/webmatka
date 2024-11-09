@extends('frontend.layouts.app')

@section('content')
    <div class="container">
        <div class="tb-10">

            <div class="row game-list-inner">
                <div class="col-12">
                    <a href="{{ route('fund_history') }}" class="mplist"><i class="fa fa-money"></i> Fund History</a>
                </div>
            </div>


            <div class="row game-list-inner">
                <div class="col-12">
                    <a href="{{ route('bid_history') }}" class="mplist"><i class="fa fa-list-alt"></i> Main Bidding History</a>
                </div>
            </div>

            <div class="row game-list-inner">
                <div class="col-12">
                    <a href="#" class="mplist"><i class="fa fa-list"></i>Starline Bidding
                        History</a>
                </div>
            </div>

            <div class="row game-list-inner">
                <div class="col-12">
                    <a href="{{ route('transaction_history') }}" class="mplist"><i class="fa fa-list-alt"></i>Transaction History</a>
                </div>
            </div>

            <div class="row game-list-inner">
                <div class="col-12">
                    <a href="{{ route('winning_history') }}" class="mplist"><i class="fa fa-list-alt"></i>Winning History</a>
                </div>
            </div>


        </div>
    </div>
@endsection
