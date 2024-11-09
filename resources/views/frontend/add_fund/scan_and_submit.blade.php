@extends('frontend.layouts.app')

@section('content')
    <div class="container">
        <div class="card tb-10">
            <div class="text-center tb-10">
                <h3>Scan and Submit Payment Screenshot</h3>
                {{-- <span>Please scan the QR code to make the payment. Once the payment is successful, take a screenshot of the payment confirmation and upload it here for verification.</span> --}}
            </div>

            <div class="tbmar-20 text-center">
                <p>Please scan the QR code to make the payment. Once the payment is successful, take a screenshot of the <br> payment confirmation and upload it here for verification.

                <br>Your money is always safe with OM Games </p>

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