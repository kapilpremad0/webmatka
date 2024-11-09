@extends('frontend.layouts.app')

@section('content')

    <div class="container">
        <div class="card-full-page tb-10">

            <form action="{{ route('store_single_ank_bid') }}" method="POST" class="myform" id="submitFrom">
                @csrf

                <div class="row bidoptions-list tb-10">
                    <div class="col-6">
                        <a class="dateGameIDbox">
                            <p>{{ date('d-M-y') }}</p>
                        </a>
                    </div>

                    <div class="col-6">
                        <select class="dateGameIDbox" name="session">
                            <option value="open"> MILAN DAY OPEN </option>
                            <option value="close"> MILAN DAY CLOSE</option>
                        </select>
                    </div>

                </div>



                <div class="tb-10">
                    <hr class="devider">
                </div>

                <h3 class="subheading">Select Amount</h3>
                <div class="row bidoptions-list tb-10">
                    <div class="col-3">
                        <a class="bidamtbox" id="amount_5" data="5">
                            <p><i class="fa fa-inr" aria-hidden="true"></i> 5</p>
                        </a>
                    </div>

                    <div class="col-3">
                        <a class="bidamtbox" id="amount_10" data="10">
                            <p><i class="fa fa-inr" aria-hidden="true"></i> 10</p>
                        </a>
                    </div>

                    <div class="col-3">
                        <a class="bidamtbox" id="amount_50" data="50">
                            <p><i class="fa fa-inr" aria-hidden="true"></i> 50</p>
                        </a>
                    </div>
                    <div class="col-3">
                        <a class="bidamtbox" id="amount_100" data="100">
                            <p><i class="fa fa-inr" aria-hidden="true"></i> 100</p>
                        </a>
                    </div>
                </div>




                <div class="row bidoptions-list tb-10">
                    <div class="col-3">
                        <a class="bidamtbox" id="amount_200" data="200">
                            <p><i class="fa fa-inr" aria-hidden="true"></i> 200</p>
                        </a>
                    </div>

                    <div class="col-3">
                        <a class="bidamtbox" id="amount_500" data="500">
                            <p><i class="fa fa-inr" aria-hidden="true"></i> 500</p>
                        </a>
                    </div>

                    <div class="col-3">
                        <a class="bidamtbox" id="amount_1000" data="1000">
                            <p><i class="fa fa-inr" aria-hidden="true"></i> 1000</p>
                        </a>
                    </div>
                    <div class="col-3">
                        <a class="bidamtbox" id="amount_5000" data="5000">
                            <p><i class="fa fa-inr" aria-hidden="true"></i> 5000</p>
                        </a>
                    </div>
                </div>

                <div class="tb-10">
                    <hr class="devider">
                </div>
                <h3 class="subheading">Select Digits</h3>

                <div class="row bidoptions-list tb-10">


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>0</lable>
                            <input type="text" value="" class="pointinputbox" id="single0" name="single0"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>1</lable>
                            <input type="text" value="" class="pointinputbox" id="single1" name="single1"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>2</lable>
                            <input type="text" value="" class="pointinputbox" id="single2" name="single2"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>3</lable>
                            <input type="text" value="" class="pointinputbox" id="single3" name="single3"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>4</lable>
                            <input type="text" value="" class="pointinputbox" id="single4" name="single4"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>5</lable>
                            <input type="text" value="" class="pointinputbox" id="single5" name="single5"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>6</lable>
                            <input type="text" value="" class="pointinputbox" id="single6" name="single6"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>7</lable>
                            <input type="text" value="" class="pointinputbox" id="single7" name="single7"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>8</lable>
                            <input type="text" value="" class="pointinputbox" id="single8" name="single8"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>9</lable>
                            <input type="text" value="" class="pointinputbox" id="single9" name="single9"
                                readonly>
                        </div>
                    </div>





                </div>
                <input type="hidden" id="total_point" name="total_point" value="">
                <input type="hidden" id="selected_amount" value="">

                <input type="hidden" name="game_id" value="{{ request()->input('game_id') }}">
                




                <div class="tbmar-20 text-center">
                    <p>Total Points : <a id="total_point2">0</a></p>
                </div>

                <div class="row bidoptions-list tb-10">
                    <div class="col-6">
                        <button class="btn btn-light btn-streched" onclick = "resetjsvar();"
                            type="reset">Reset</button>
                    </div>

                    <div class="col-6">
                        <button class="btn btn-theme btn-streched" type="submit" name="single_submit">Submit</button>
                    </div>

                </div>


            </form>


        </div>
    </div>

    <br><br><br>
    
@endsection


@push('script')
    
    <script>
        
        $(document).ready(function() {
            $('#submitFrom').on('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission
                var $form = $('#submitFrom');
                var url = $form.attr('action');
                var formData = new FormData($form[0]);
                $('.validation-class').html('');
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        $('.spinner-loader').css('display', 'block');
                    },
                    success: function(res) {
                        location.reload();
                        // window.location.href = res;
                    },
                    error: function(res) {
                        if (res.status == 422) {
                            if (res.responseJSON && res.responseJSON.errors) {
                                var error = res.responseJSON.errors
                                $.each(error, function(key, value) {
                                    $("#" + key + "-submit_errors").text(value[0]);
                                });
                            }
                        }else if(res.status == 400){
                            if (res.responseJSON && res.responseJSON.error) {
                                var error = res.responseJSON.error
                                $.each(error, function(key, value) {
                                    Toastify({
                                        text: value,
                                        className: "error",
                                        style: {
                                            background: "linear-gradient(to right, #b73b3c, #b73b3c)",
                                        }
                                    }).showToast();
                                });
                            }
                        }
                    }
                });
            });
        });
    </script>
@endpush