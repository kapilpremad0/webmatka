<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\StorePaymentScreenshotRequest;
use App\Models\FundRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class AddFundController extends Controller
{
    function index(){
        $setting = Setting::where('key',Setting::$payment_whatsaap_no)->first();

        $data = [
            'whatsapp_no' => $setting->value ?? '-',
            'text' => Setting::where('key',Setting::$add_fund_text_1_page)->first()->value ?? '',
        ];

        return view('frontend.add_fund.index',compact('data'));
    }

    function scanAndSubmit(){
        $setting = Setting::where('key',Setting::$payment_whatsaap_no)->first();

        $data = [
            'whatsapp_no' => $setting->value ?? '-',
            'text' => Setting::where('key',Setting::$add_fund_text_2_page)->first()->value ?? '',

            'qr_code' => Setting::where('key',Setting::$payment_qr_code)->first()->value ?? 0,
            'qr_code_status' => Setting::where('key',Setting::$qr_code_status)->first()->value ?? 0,

            'phone_pay_upi_status' => Setting::where('key',Setting::$phone_pay_upi_status)->first()->value ?? '',
            'phone_pay_upi_id' => Setting::where('key',Setting::$phone_pay_upi_id)->first()->value ?? '',

            'google_pay_upi_status' => Setting::where('key',Setting::$google_pay_upi_status)->first()->value ?? '',
            'google_pay_upi_id' => Setting::where('key',Setting::$google_pay_upi_id)->first()->value ?? '',

            'paytm_upi_status' => Setting::where('key',Setting::$paytm_upi_status)->first()->value ?? '',
            'paytm_upi_id' => Setting::where('key',Setting::$paytm_upi_id)->first()->value ?? '',
        ];
        
        return view('frontend.add_fund.scan_and_submit',compact('data'));
    }

    function submitPaymentScreenshot(StorePaymentScreenshotRequest $request){
        $data = $request->validated();
        $data['user_id'] = auth()->user()->id;
        if ($request->hasFile('file')) {
            $image = $request->file;
            $image_name = time() . rand(1, 100) . '-' . $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '', $image_name);
            $image->move(public_path('upload'), $image_name);
            $data['image'] = $image_name;
        }
        FundRequest::create($data);
        session()->flash('success', 'Funds added successfully! Please wait for admin approval.');
        return route('home');

    }
}
