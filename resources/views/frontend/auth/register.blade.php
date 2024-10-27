
@extends('frontend.layouts.app')

@section('content')

<div class="container">
    <div class="card tb-10">

        {{-- <center><img src="{{ url('public/frontend/assets/img/logo-fill.png')}}"
                style="min-height: 100px;height: 100px;margin: auto;margin-bottom: auto;border-radius: 10px;margin-bottom: 10px;">
        </center> --}}

        <div class="text-center tb-10">
            <h3>Sign Up</h3>
            <span>Create Your Account</span>
        </div>
        <form action="{{ route('signup') }}" method="POST" id="submitFrom">

            @csrf

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Name"
                    id="name" autocomplete="off" >
                    <span class="text-danger validation-class" id="name-submit_errors"></span>

            </div>

            <div class="form-group">
                <label for="mobile">Mobile Number:</label>
                <input type="text" class="form-control" name="mobile" maxlength="10" minlength="10"
                    placeholder="Enter 10 Digit Phone Number" id="mobile" autocomplete="off" >
                    <span class="text-danger validation-class" id="mobile-submit_errors"></span>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" placeholder="Enter Email"
                    id="email" autocomplete="off" >
                    <span class="text-danger validation-class" id="email-submit_errors"></span>
            </div>

            <div class="form-group">
                <label for="state">State:</label>
                <input type="text" class="form-control" name="state" placeholder="Enter State"
                    id="state" autocomplete="off" >
                <span class="text-danger validation-class" id="state-submit_errors"></span>
            </div>

            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" name="password" placeholder="Enter password"
                    id="pwd" autocomplete="off" >
                <span class="text-danger validation-class" id="password-submit_errors"></span>
            </div>

            <button type="submit" class="btn btn-theme btn-login" name="login">Submit</button>
            
        </form>

        <div class="text-center tbmar-20">
            <p>Already have an account?</p>
            <a href="{{ route('login') }}" class="btn btn-outline btn-login">Login Here</a>
        </div>

    </div>
</div>

{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

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

@endsection