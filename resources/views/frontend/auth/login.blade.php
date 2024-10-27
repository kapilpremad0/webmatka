
@extends('frontend.layouts.app')

@section('content')

<div class="container">
    <div class="card tb-10">

        <center><img src="{{ url('public/frontend/assets/img/logo-fill.png')}}"
                style="min-height: 100px;height: 100px;margin: auto;margin-bottom: auto;border-radius: 10px;margin-bottom: 10px;">
        </center>

        <div class="text-center tb-10">
            <h3>Welcome</h3>
            <span>Sign in to Continue</span>
        </div>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="mobile">Mobile Number:</label>
                <input type="text" class="form-control" name="mobile" maxlength="10" minlength="10"
                    placeholder="Enter 10 Digit Phone Number" id="mobile" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" name="password" placeholder="Enter password"
                    id="pwd" autocomplete="off" required>
            </div>
            <button type="submit" class="btn btn-theme btn-login" name="login">Submit</button>
            <input type="hidden" name="return_url"
                value="aHR0cDovL3RtbWF0a2EuY29tL3RyYW5zYWN0aW9uLWhpc3RvcnkucGhw">
        </form>

        <div class="text-center tbmar-20">
            <p>Dont have an account?</p>
            <a href="{{ route('register') }}" class="btn btn-outline btn-login">Create Account Now</a>
        </div>

    </div>
</div>


@endsection