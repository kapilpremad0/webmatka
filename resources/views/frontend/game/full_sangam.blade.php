@extends('frontend.layouts.app')

@section('content')
    <div class="container">
        <div class="card-full-page tb-10">

            <form action="{{ route('store_full_sangam_bid') }}" method="POST" class="myform" id="submitFrom">
                @csrf

                <div class="row bidoptions-list tb-10">
                    <div class="col-6">
                        <a class="dateGameIDbox">
                            <p>{{ date('d-m-y') }}</p>
                        </a>
                    </div>

                    <div class="col-6">
                        <select class="dateGameIDbox" name="game_id">
                            <option value="95"> {{ $game->name ?? '' }}</option>
                        </select>
                    </div>

                </div>



                <div class="tb-10">
                    <hr class="devider">
                </div>

                <h3 class="subheading">Play Full Sangam</h3>

                <div class="row bidoptions-list tb-10">

                    <div class="col-4" style="padding-right: 5px;padding-left: 5px;">
                        <div class="bidinputdiv">
                            <lable>Open Patti</lable>
                            <input type="number" min="000" max="999" placeholder="000-9999" name="open_patti"
                                style="padding: 10px 5px;cursor: text;" >
                                <span class="text-danger validation-class" id="open_patti-submit_errors"></span>
                        </div>
                    </div>
                    <div class="col-4" style="padding-right: 5px;padding-left: 5px;">
                        <div class="bidinputdiv">
                            <lable>Close Patti</lable>
                            <input type="number" min="000" max="999" placeholder="000-999" name="close_patti"
                                style="padding: 10px 5px;cursor: text;" >
                            <span class="text-danger validation-class" id="close_patti-submit_errors"></span>
                        </div>
                    </div>

                    <div class="col-4" style="padding-right: 5px;padding-left: 5px;">
                        <div class="bidinputdiv">
                            <lable>Amount</lable>
                            <input type="number" min="5" name="amount" style="padding: 10px 5px;cursor: text;"
                             >
                             <span class="text-danger validation-class" id="amount-submit_errors"></span>
                        </div>
                    </div>

                </div>



                <input type="hidden" name="game_id" value="{{ request()->input('game_id') }}">



                <br><br><br>

                <div class="row bidoptions-list tb-10">
                    <div class="col-6">
                        <button class="btn btn-light btn-streched" onclick = "resetjsvar();" type="reset">Reset</button>
                    </div>

                    <div class="col-6">
                        <button class="btn btn-theme btn-streched" type="submit" name="single_submit">Submit</button>
                    </div>

                </div>


            </form>


        </div>
    </div>
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
