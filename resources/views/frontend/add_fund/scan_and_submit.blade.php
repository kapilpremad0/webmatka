@extends('frontend.layouts.app')

<style>
    .btn-payment-upi-id{
        color: #fff;
        background-color: #589385;
        margin-top: 2px;
        /* border-color: var(--primary-light); */
    }
</style>

@section('content')
    <div class="container">
        <div class="card tb-10">

            @if ($data['qr_code_status'] == 1)
                <div style="text-align: center">
                    <img src="{{ url('public/upload/'.$data['qr_code']) }}" alt="" width="200px" height="200px">
                </div>
                
                <div class="tb-10">
                    <hr class="devider">
                </div>
                
            @endif

            @if ($data['phone_pay_upi_status'] == 1)
                <a href="phonepe://pay?pa={{ $data['phone_pay_upi_id'] }}&pn={{ urlencode('YOUR_NAME') }}&am={{ request()->input('amount') }}&cu=INR" target="_blank" class="btn btn-payment-upi-id">
                    Pay via PhonePe
                </a>
            @endif

            @if ($data['paytm_upi_status'] == 1)
                <a href="paytmmp://pay?pa={{ $data['paytm_upi_id'] }}&pn={{ urlencode('YOUR_NAME') }}&am={{ request()->input('amount') }}&cu=INR" target="_blank" class="btn btn-payment-upi-id">
                    Pay via Paytm
                </a>
            @endif

            @if ($data['google_pay_upi_status'] == 1)
                <a href="upi://pay?pa={{ $data['google_pay_upi_id'] }}&pn={{ urlencode('YOUR_NAME') }}&am={{ request()->input('amount') }}&cu=INR" target="_blank" class="btn btn-payment-upi-id">
                    Pay via Google Pay
                </a>
            @endif

            <div class="tb-10">
                <hr class="devider">
            </div>


            <div class="text-center tb-10">
                <h2 style="    font-weight: 900;    font-size: 13px;">For Add Funds Related Query br Call Or Whatsapp</h2>
                <span>{{ $data['whatsapp_no'] ?? '' }}</span>
            </div>

            <div class="tbmar-20 text-center">
                <p>{{ $data['text']  ?? ''}}</p>

            </div>

            <div class="tb-10">
                <hr class="devider">
            </div>

            <h3 class="subheading">Upload Screenshot</h3>
            <form action="{{ route('submit_payment_screenshot') }}" method="post" autocomplete="off" id="submitFrom">
                @csrf
                <div class="form-group">
                    <input type="hidden" name="amount" value="{{ request()->input('amount') }}">
                    <input type="file" class="form-control" name="file" accept="image/*">
                    <span class="text-danger validation-class" id="file-submit_errors"></span>
                </div>

                <button type="submit" class="btn btn-theme btn-login">Submit</button>

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
                        // location.reload();
                        window.location.href = res;
                    },
                    error: function(res) {
                        if (res.status == 400 || res.status == 422) {
                            if (res.responseJSON && res.responseJSON.errors) {
                                var error = res.responseJSON.errors
                                $.each(error, function(key, value) {
                                    $("#" + key + "-submit_errors").text(value[0]);
                                });
                            }
                        }
                    }
                });
            });
        });
    </script>
@endpush