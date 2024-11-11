


@extends('admin.layouts.app')

@section('content')


 <!-- BEGIN: Content-->
 <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            {{-- <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Setting</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Setting
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="content-body">

                <!-- Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row">

                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Game Rates</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form" action="{{ route('admin.settings.store_game_rates') }}" method="POST" enctype="multipart/form-data" id="form_submit">
                                    {{ csrf_field() }}

                                    <table  class="table mb-5">


                                        @foreach (config('constant.game_type') as $key => $val)
                                            <tr>
                                                <td style="width: 50%">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="first-name-column">{{ $val }} Betting Amount<span class="error"></span></label>
                                                        <br>
                                                        <span>₹1</span>
                                                    </div>
                                                </td>

                                                <td style="width: 50%">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="first-name-column">{{ $val }} Winning Amount <span class="error"></span></label>
                                                        <input type="number" id="first-name-column" name="{{ $key }}" class="form-control" placeholder="Jodi Winning Amount"  value="{{ $game_rates[$key] ?? 0 }}" />
                                                        <span class="error text-danger validation-class" id="{{ $key }}-price_rate_error"></span>
                                                        @error($key)<span class="error text-danger">{{ $message }}</span>@enderror
                                                    </div>
                                                </td>

                                            </tr>    
                                        @endforeach


                                        

                                        {{-- <tr>
                                            <td>
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">Crossing Betting Amount<span class="error"></span></label>
                                                    <br>
                                                    <span>₹1</span>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">Crossing Winning Amount <span class="error"></span></label>
                                                    <input type="number" id="first-name-column" name="crossing_winning_amount" class="form-control" placeholder="Crossing Winning Amount"  value="{{ $game_rates['crossing_winning_amount'] ?? 0 }}" />
                                                    <span class="error text-danger validation-class" id="crossing_winning_amount-price_rate_error"></span>
                                                    @error('crossing_winning_amount')<span class="error text-danger">{{ $message }}</span>@enderror
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">Haruf Betting Amount<span class="error"></span></label>
                                                    <br>
                                                    <span>₹1</span>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">Haruf Winning Amount <span class="error"></span></label>
                                                    <input type="number" id="first-name-column" name="haruf_winning_amount" class="form-control" placeholder="Haruf Winning Amount"  value="{{ $game_rates['haruf_winning_amount'] ?? 0 }}" />
                                                    <span class="error text-danger validation-class" id="haruf_winning_amount-price_rate_error"></span>
                                                    @error('haruf_winning_amount')<span class="error text-danger">{{ $message }}</span>@enderror
                                                </div>
                                            </td>

                                        </tr> --}}

                                    </table>
                                    
                                        <div class="row">

                                            {{-- <div class="col-md-12 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">Jodi Digit <span class="error"></span></label>
                                                    <input type="number" id="first-name-column" name="name" class="form-control" placeholder="Name"  value="{{ old('name') }}" />
                                                    @error('name')<span class="error text-danger">{{ $message }}</span>@enderror
                                                </div>
                                            </div> --}}
                                            

                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary me-1">Submit</button>
                                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">General Setting</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form" action="{{ route('admin.settings.store_general_setting') }}" method="POST" enctype="multipart/form-data" id="form_submit_store_general_setting">
                                    {{ csrf_field() }}
                                    
                                        <div class="row">

                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">Marque Notification<span class="error"></span></label>
                                                    <input type="text" id="first-name-column" name="marque_tag" class="form-control" placeholder="Marque Tag"  value="{{ $general_settings['marque_tag'] ?? '' }}" />
                                                    @error('name')<span class="error text-danger">{{ $message }}</span>@enderror
                                                    <span class="error text-danger validation-class" id="marque_tag-general_setting_error"></span>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">Min Withdraw Amount<span class="error"></span></label>
                                                    <input type="text" id="first-name-column" name="min_withdraw_amount" class="form-control" placeholder="Enter Value"  value="{{ $general_settings['min_withdraw_amount'] ?? '' }}" />
                                                    @error('name')<span class="error text-danger">{{ $message }}</span>@enderror
                                                    <span class="error text-danger validation-class" id="min_withdraw_amount-general_setting_error"></span>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">Max Withdraw Amount<span class="error"></span></label>
                                                    <input type="text" id="first-name-column" name="max_withdraw_amount" class="form-control" placeholder="Enter Value"  value="{{ $general_settings['max_withdraw_amount'] ?? '' }}" />
                                                    @error('name')<span class="error text-danger">{{ $message }}</span>@enderror
                                                    <span class="error text-danger validation-class" id="max_withdraw_amount-general_setting_error"></span>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">Min Fund Amount<span class="error"></span></label>
                                                    <input type="text" id="first-name-column" name="min_fund_amount" class="form-control" placeholder="Enter Value"  value="{{ $general_settings['min_fund_amount'] ?? '' }}" />
                                                    @error('name')<span class="error text-danger">{{ $message }}</span>@enderror
                                                    <span class="error text-danger validation-class" id="min_fund_amount-general_setting_error"></span>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">Max Fund Amount<span class="error"></span></label>
                                                    <input type="text" id="first-name-column" name="max_fund_amount" class="form-control" placeholder="Enter Value"  value="{{ $general_settings['max_fund_amount'] ?? '' }}" />
                                                    @error('name')<span class="error text-danger">{{ $message }}</span>@enderror
                                                    <span class="error text-danger validation-class" id="max_fund_amount-general_setting_error"></span>
                                                </div>
                                            </div>


                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">Referral Bonus<span class="error"></span></label>
                                                    <input type="text" id="first-name-column" name="referral_bonus" class="form-control" placeholder="Enter Value"  value="{{ $general_settings['referral_bonus'] ?? '' }}" />
                                                    @error('name')<span class="error text-danger">{{ $message }}</span>@enderror
                                                    <span class="error text-danger validation-class" id="referral_bonus-general_setting_error"></span>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">Referral Commission<span class="error"></span></label>
                                                    <input type="text" id="first-name-column" name="referral_commission" class="form-control" placeholder="Enter Value"  value="{{ $general_settings['referral_commission'] ?? '' }}" />
                                                    @error('name')<span class="error text-danger">{{ $message }}</span>@enderror
                                                    <span class="error text-danger validation-class" id="referral_commission-general_setting_error"></span>
                                                </div>
                                            </div>


                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">Home Banner<span class="error"></span></label>
                                                    @if (!empty($general_settings['home_banner']))
                                                        <div>
                                                            <img src="{{ url('public/upload/'.$general_settings['home_banner']) }}" alt="" width="500" height="200">
                                                        </div>
                                                    @endif
                                                    <input type="file" id="first-name-column" name="home_banner" class="form-control" />
                                                    @error('name')<span class="error text-danger">{{ $message }}</span>@enderror
                                                    <span class="error text-danger validation-class" id="home_banner-general_setting_error"></span>
                                                </div>
                                            </div>

                                            <div class="col-md-2 col-12">
                                                <div class="mb-1">
                                                    <div class="d-flex flex-column">
                                                        <label class="form-check-label mb-50" for="customSwitch3">Globel Setting </label>
                                                        <div class="form-check form-check-primary form-switch">
                                                            <input type="checkbox" name="globel_setting" value="1" @if ($general_settings['globel_setting'] == 1)
                                                                checked
                                                            @endif class="form-check-input" id="customSwitch3" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            

                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary me-1">Submit</button>
                                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Payment Setting</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form" action="{{ route('admin.settings.store_payment_setting') }}" method="POST" enctype="multipart/form-data" id="form_submit_2">
                                    {{ csrf_field() }}
                                    
                                        <div class="row">

                                            
                                                <div class="col-md-4 col-12">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="first-name-column">Phone Pay UPI ID<span class="error"></span></label>
                                                        <input type="text" id="first-name-column" name="phone_pay_upi_id" class="form-control" placeholder="UPI ID"  value="{{ $payments['phone_pay_upi_id'] ?? '' }}" />
                                                        <span class="error text-danger validation-class" id="phone_pay_upi_id-payment_error"></span>
                                                    </div>
                                                </div>

                                                <div class="col-md-2 col-12">
                                                    <div class="mb-1">
                                                        <div class="d-flex flex-column">
                                                            <label class="form-check-label mb-50" for="customSwitch3">Phone Pay</label>
                                                            <div class="form-check form-check-primary form-switch">
                                                                <input type="checkbox" name="phone_pay_upi_status" value="1" @if ($payments['phone_pay_upi_status'] == 1)
                                                                    checked
                                                                @endif class="form-check-input" id="customSwitch3" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-12">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="first-name-column">Google Pay UPI ID<span class="error"></span></label>
                                                        <input type="text" id="first-name-column" name="google_pay_upi_id" class="form-control" placeholder="UPI ID"  value="{{ $payments['google_pay_upi_id'] ?? '' }}" />
                                                        @error('name')<span class="error text-danger">{{ $message }}</span>@enderror
                                                        <span class="error text-danger validation-class" id="google_pay_upi_id-payment_error"></span>
                                                    </div>
                                                </div>

                                                <div class="col-md-2 col-12">
                                                    <div class="mb-1">
                                                        <div class="d-flex flex-column">
                                                            <label class="form-check-label mb-50" for="customSwitch3">Google Pay</label>
                                                            <div class="form-check form-check-primary form-switch">
                                                                <input type="checkbox" name="google_pay_upi_status" value="1" @if ($payments['google_pay_upi_status'] == 1)
                                                                    checked
                                                                @endif class="form-check-input" id="customSwitch3" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-12">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="first-name-column">Paytm UPI ID<span class="error"></span></label>
                                                        <input type="text" id="first-name-column" name="paytm_upi_id" class="form-control" placeholder="UPI ID"  value="{{ $payments['paytm_upi_id'] ?? '' }}" />
                                                        @error('name')<span class="error text-danger">{{ $message }}</span>@enderror
                                                        <span class="error text-danger validation-class" id="paytm_upi_id-payment_error"></span>
                                                    </div>
                                                </div>

                                                <div class="col-md-2 col-12">
                                                    <div class="mb-1">
                                                        <div class="d-flex flex-column">
                                                            <label class="form-check-label mb-50" for="customSwitch3">Paytm</label>
                                                            <div class="form-check form-check-primary form-switch">
                                                                <input type="checkbox" name="paytm_upi_status" value="1" @if ($payments['paytm_upi_status'] == 1)
                                                                    checked
                                                                @endif class="form-check-input" id="customSwitch3" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            



                                            <div class="col-md-4 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">OR Code<span class="error"></span></label>
                                                    <div>
                                                        <img src="{{ url('public/upload/'.$payments['qr_code']) }}" alt="" width="200">
                                                    </div>
                                                    <input type="file" id="first-name-column" name="qr_code" class="form-control" placeholder="UPI ID"  value="{{ old('name') }}" />
                                                    @error('name')<span class="error text-danger">{{ $message }}</span>@enderror
                                                    <span class="error text-danger validation-class" id="qr_code-payment_error"></span>
                                                </div>
                                            </div>

                                            <div class="col-md-2 col-12">
                                                <div class="mb-1">
                                                    <div class="d-flex flex-column">
                                                        <label class="form-check-label mb-50" for="customSwitch3">Qr Code</label>
                                                        <div class="form-check form-check-primary form-switch">
                                                            <input type="checkbox" name="qr_code_status" value="1" @if ($payments['qr_code_status'] == 1)
                                                                checked
                                                            @endif class="form-check-input" id="customSwitch3" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">Whatsaap Number<span class="error"></span></label>
                                                    
                                                    <input type="number" id="first-name-column" name="whatsaap_no" class="form-control" placeholder="Whatsapp Number"  value="{{ $payments['whatsaap_no'] ?? '' }}" />
                                                    @error('name')<span class="error text-danger">{{ $message }}</span>@enderror
                                                    <span class="error text-danger validation-class" id="whatsaap_no-payment_error"></span>
                                                </div>
                                            </div>


                                            <div class="col-md-12 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">Add Fund Text (1 Page)<span class="error"></span></label>
                                                    
                                                    {{-- <input type="number" id="first-name-column" name="whatsaap_no" class="form-control" placeholder="Whatsapp Number"  value="{{ $payments['whatsaap_no'] ?? '' }}" /> --}}


                                                    <textarea name="add_fund_text_1_page" id="" cols="5" rows="5" class="form-control">{!!  $payments['add_fund_text_1_page'] ?? '' !!}</textarea>

                                                    @error('name')<span class="error text-danger">{{ $message }}</span>@enderror
                                                    <span class="error text-danger validation-class" id="whatsaap_no-payment_error"></span>
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">Add Fund Text (2 Page)<span class="error"></span></label>
                                                    
                                                    {{-- <input type="number" id="first-name-column" name="whatsaap_no" class="form-control" placeholder="Whatsapp Number"  value="{{ $payments['whatsaap_no'] ?? '' }}" /> --}}


                                                    <textarea name="add_fund_text_2_page" id="" cols="5" rows="5" class="form-control">{!!  $payments['add_fund_text_2_page'] ?? '' !!}</textarea>

                                                    @error('name')<span class="error text-danger">{{ $message }}</span>@enderror
                                                    <span class="error text-danger validation-class" id="whatsaap_no-payment_error"></span>
                                                </div>
                                            </div>
                                            

                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary me-1">Submit</button>
                                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        

                    </div>
                </section>
                <!-- Basic Floating Label Form section end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->



    @push('scripts')
    <script>
        $(document).ready(function() {

            


            $('#form_submit').on('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission
                var $form = $('#form_submit');
                var url = $form.attr('action');
                var formData = new FormData($form[0]);
                $('.validation-class').html('');
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    beforeSend: function () {
                        $('.spinner-loader').css('display', 'block');
                    },
                    success: function (res) {
                    // Toastify({
                    //     text: `Login successful`,
                    //     className: "success",
                    //     style: {
                    //         background: "linear-gradient(to right, #00b09b, #96c93d)",
                    //     }
                    // }).showToast();
                      location.reload();
                    },
                    error: function (res) {
                    if(res.status == 422 || res.status == 401){
                        if (res.responseJSON && res.responseJSON.errors) {
                            var  error = res.responseJSON.errors
                            $.each(error, function (key, value) {
                                $("#" + key + "-price_rate_error").text(value);
                            });
                        }
                    }
                    
                    }
                });
            });

            $('#form_submit_2').on('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission
                var $form = $('#form_submit_2');
                var url = $form.attr('action');
                var formData = new FormData($form[0]);
                $('.validation-class').html('');
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    beforeSend: function () {
                        $('.spinner-loader').css('display', 'block');
                    },
                    success: function (res) {
                    // Toastify({
                    //     text: `Login successful`,
                    //     className: "success",
                    //     style: {
                    //         background: "linear-gradient(to right, #00b09b, #96c93d)",
                    //     }
                    // }).showToast();
                      location.reload();
                    },
                    error: function (res) {
                    if(res.status == 422 || res.status == 401){
                        if (res.responseJSON && res.responseJSON.errors) {
                            var  error = res.responseJSON.errors
                            $.each(error, function (key, value) {
                                $("#" + key + "-payment_error").text(value);
                            });
                        }
                    }
                    
                    }
                });
            });

            $('#form_submit_store_general_setting').on('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission
                var $form = $('#form_submit_store_general_setting');
                var url = $form.attr('action');
                var formData = new FormData($form[0]);
                $('.validation-class').html('');
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    beforeSend: function () {
                        $('.spinner-loader').css('display', 'block');
                    },
                    success: function (res) {
                    // Toastify({
                    //     text: `Login successful`,
                    //     className: "success",
                    //     style: {
                    //         background: "linear-gradient(to right, #00b09b, #96c93d)",
                    //     }
                    // }).showToast();
                      location.reload();
                    },
                    error: function (res) {
                    if(res.status == 422 || res.status == 401){
                        if (res.responseJSON && res.responseJSON.errors) {
                            var  error = res.responseJSON.errors
                            $.each(error, function (key, value) {
                                $("#" + key + "-general_setting_error").text(value);
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