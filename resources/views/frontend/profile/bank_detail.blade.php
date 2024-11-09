@extends('frontend.layouts.app')

@section('content')

    <div class="container">
        <div class="card tb-10">
            <div class="text-center tb-10">
                <h3>Bank Details</h3>
                <span>Provide Valid Bank Details</span>
            </div>
            <form action="{{ route('submit_bank_account') }}" method="POST" autocomplete="off" id="submitFrom">
                @csrf
                <div class="form-group">
                    <label for="name">A/c Holder Name:</label>
                    <input type="text" class="form-control" name="account_holder_name"  maxlength="50"
                        minlength="4" placeholder="Beneficiary name" id="account_holder_name" autocomplete="off" value="{{ auth()->user()->account_holder_name }}" >
                    <span class="text-danger validation-class" id="account_holder_name-submit_errors"></span>
                </div>

                <div class="form-group">
                    <label for="username">Bank Account Number:</label>
                    <input type="text" class="form-control" name="account_number" value="{{ auth()->user()->account_number }}" maxlength="25"
                        minlength="4" placeholder="950000124587" id="account_number" autocomplete="off">
                    <span class="text-danger validation-class" id="account_number-submit_errors"></span>
                </div>

                <div class="form-group">
                    <label for="mobile">IFSC Code:</label>
                    <input type="text" class="form-control" name="ifsc" value="{{ auth()->user()->ifsc }}" maxlength="11" minlength="11"
                        placeholder="HDFC0000139" id="ifsc" autocomplete="off">
                        <span class="text-danger validation-class" id="ifsc-submit_errors"></span>
                </div>

                <div class="form-group">
                    <label for="mobile">Bank Name:</label>
                    <input type="text" class="form-control" name="bank_name" value="{{ auth()->user()->bank_name }}" maxlength="25" minlength="3"
                        placeholder="HDFC/SBI/Bank of india" id="bank_name" autocomplete="off">
                    <span class="text-danger validation-class" id="bank_name-submit_errors"></span>
                </div>

                <button type="submit" name="update_bank_details" class="btn btn-theme btn-login">Submit</button>
            </form>

            <div class="text-center tbmar-20">
                {{-- <p>Unable to update?</p> --}}
                {{-- <a href="https://wa.me/918917299872" class="btn btn-outline btn-login">Contact Admin</a> --}}
            </div>

            <br><br>

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
