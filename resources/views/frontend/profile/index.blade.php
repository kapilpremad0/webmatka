@extends('frontend.layouts.app')

@section('content')

    <div class="container">
        <div class="tb-10">

            <div class="row game-list-inner">
                <div class="col-12">
                    <a href="{{ route('bank_detail') }}" class="mplist"><i class="fa fa-university"></i> Bank Details</a>
                </div>
            </div>

            <div class="row game-list-inner">
                <div class="col-12">
                    <a href="{{ route('change_password',auth()->user()->id) }}" target="_blank" class="mplist"><i class="fa fa-key"></i> Change Password</a>
                </div>
            </div>

        </div>
    </div>

@endsection
