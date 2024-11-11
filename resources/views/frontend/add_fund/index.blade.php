@extends('frontend.layouts.app')

@section('content')
    <div class="container">
        <div class="card tb-10">
            <div class="text-center tb-10">
                <h2 style="    font-weight: 900;    font-size: 13px;">For Add Funds Related Query br Call Or Whatsapp</h2>
                <span>{{ $data['whatsapp_no'] ?? '' }}</span>
            </div>

            <div class="tb-10">
                <hr class="devider">
            </div>

            <div class="tbmar-20 text-center">
                <p>
                    {{ $data['text'] ?? '' }}
                </p>

            </div>

            <div class="tb-10">
                <hr class="devider">
            </div>

            <h3 class="subheading">Enter Amount</h3>
            <form action="{{ route('add_fund_scan_and_submit') }}" method="GET" autocomplete="off">
                <div class="form-group">
                    <input type="number" id="add_fund_amount" class="form-control" name="amount" value=""
                        min="500" max="50000" placeholder="Enter Amount" autocomplete="off" required>
                        <div>
                            <span>Enter minimum amount ₹500</span>
                        </div>
                </div>
                <div class="row bidoptions-list tb-10">
                    <div class="col-3">
                        <a class="addFundamtbox" id="amount_500" data="500">
                            <p><i class="fa fa-inr" aria-hidden="true"></i> 500</p>
                        </a>
                    </div>

                    <div class="col-3">
                        <a class="addFundamtbox" id="amount_1000" data="1000">
                            <p><i class="fa fa-inr" aria-hidden="true"></i> 1000</p>
                        </a>
                    </div>

                    <div class="col-3">
                        <a class="addFundamtbox" id="amount_2000" data="2000">
                            <p><i class="fa fa-inr" aria-hidden="true"></i> 2000</p>
                        </a>
                    </div>

                    <div class="col-3">
                        <a class="addFundamtbox" id="amount_5000" data="5000">
                            <p><i class="fa fa-inr" aria-hidden="true"></i> 5000</p>
                        </a>
                    </div>

                    <div class="col-4">
                        <a class="addFundamtbox" id="amount_10000" data="10000">
                            <p><i class="fa fa-inr" aria-hidden="true"></i> 10000</p>
                        </a>
                    </div>

                    <div class="col-4">
                        <a class="addFundamtbox" id="amount_50000" data="50000">
                            <p><i class="fa fa-inr" aria-hidden="true"></i> 50000</p>
                        </a>
                    </div>

                    <div class="col-4">
                        <a class="addFundamtbox" id="amount_50000" data="50000">
                            <p><i class="fa fa-inr" aria-hidden="true"></i> 100000</p>
                        </a>
                    </div>

                </div>

                {{-- <div class="form-group">
            <select class="form-control" name="payment_method" autocomplete="off" required>
                <option value="paymor_upi_qr">Direct UPI</option>
                
                
            </select>
          </div> --}}

                <button type="submit" class="btn btn-theme btn-login">Add Points</button>

            </form>

            {{-- <div class="text-center tbmar-20">
            <p>Unable to Add Fund?</p>
            <a href="https://wa.me/917710862311" class="btn btn-outline btn-login">Contact Admin for help</a>
        </div> --}}

        </div>
    </div>


    </div>
    </div>

    
@endsection
