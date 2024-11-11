<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Setting\StoreGameRateRequest;
use App\Http\Requests\Admin\Setting\StoreGeneralSettingRequest;
use App\Http\Requests\Admin\Setting\StorePaymentRequest;
use App\Http\Requests\StoreGameRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    function index(){

        

        $game_rates = [];
        foreach(config('constant.game_type') as $key => $val){
            $game_key = "{$key}_winning_amount";
            $hh = Setting::where('key',$game_key)->first()->value ?? 0;
            $game_rates[$key] = $hh ;
        }

        

        $payments =[
            'qr_code' => Setting::where('key',Setting::$payment_qr_code)->first()->value ?? 0,
            'qr_code_status' => Setting::where('key',Setting::$qr_code_status)->first()->value ?? 0,

            'phone_pay_upi_status' => Setting::where('key',Setting::$phone_pay_upi_status)->first()->value ?? '',
            'phone_pay_upi_id' => Setting::where('key',Setting::$phone_pay_upi_id)->first()->value ?? '',

            'google_pay_upi_status' => Setting::where('key',Setting::$google_pay_upi_status)->first()->value ?? '',
            'google_pay_upi_id' => Setting::where('key',Setting::$google_pay_upi_id)->first()->value ?? '',

            'paytm_upi_status' => Setting::where('key',Setting::$paytm_upi_status)->first()->value ?? '',
            'paytm_upi_id' => Setting::where('key',Setting::$paytm_upi_id)->first()->value ?? '',

            'whatsaap_no' => Setting::where('key',Setting::$payment_whatsaap_no)->first()->value ?? 0,


            'add_fund_text_2_page' => Setting::where('key',Setting::$add_fund_text_2_page)->first()->value ?? '',
            'add_fund_text_1_page' => Setting::where('key',Setting::$add_fund_text_1_page)->first()->value ?? '',
        ];

        $settings = Setting::get();

        $general_settings = [
            'max_withdraw_amount' => $settings->where('key',Setting::$max_withdraw_amount)->first()->value ?? 0,
            'min_fund_amount' => $settings->where('key',Setting::$min_fund_amount)->first()->value ?? 0,
            'marque_tag' => $settings->where('key',Setting::$marque_tag)->first()->value ?? 0,
            'max_fund_amount' => $settings->where('key',Setting::$max_fund_amount)->first()->value ?? 0,
            'referral_commission' => $settings->where('key',Setting::$referral_commission)->first()->value ?? 0,
            'referral_bonus' => $settings->where('key',Setting::$referral_bonus)->first()->value ?? 0,
            'min_withdraw_amount' => $settings->where('key',Setting::$min_withdraw_amount)->first()->value ?? 0,
            'home_banner' => $settings->where('key',Setting::$home_banner)->first()->value ?? '',
            'globel_setting' => $settings->where('key',Setting::$globel_setting)->first()->value ?? 0,
        ];
        return view('admin.settings.index',compact('game_rates','payments','general_settings'));
    }


    function storeGameRates(StoreGameRateRequest $request){

        foreach(config('constant.game_type') as $key => $val){
            $game_key = $key."_winning_amount";
            Setting::updateOrCreate(['key' => $game_key],[
                'value' => $request->$key,
            ]);
        }
        
    }


    function storePaymentSetting(StorePaymentRequest $request){
        Setting::updateOrCreate(['key' => Setting::$payment_whatsaap_no],[
            'value' => $request->whatsaap_no,
        ]);

        Setting::updateOrCreate(['key' => Setting::$phone_pay_upi_id],[
            'value' => $request->phone_pay_upi_id,
        ]);

        Setting::updateOrCreate(['key' => Setting::$phone_pay_upi_status],[
            'value' => $request->phone_pay_upi_status ?? 0,
        ]);

        Setting::updateOrCreate(['key' => Setting::$google_pay_upi_id],[
            'value' => $request->google_pay_upi_id,
        ]);

        Setting::updateOrCreate(['key' => Setting::$google_pay_upi_status],[
            'value' => $request->google_pay_upi_status ?? 0,
        ]);

        Setting::updateOrCreate(['key' => Setting::$paytm_upi_id],[
            'value' => $request->paytm_upi_id,
        ]);

        Setting::updateOrCreate(['key' => Setting::$paytm_upi_status],[
            'value' => $request->paytm_upi_status ?? 0,
        ]);

        Setting::updateOrCreate(['key' => Setting::$qr_code_status],[
            'value' => $request->qr_code_status ?? 0,
        ]);

        Setting::updateOrCreate(['key' => Setting::$add_fund_text_1_page],[
            'value' => $request->add_fund_text_1_page ?? '',
        ]);

        Setting::updateOrCreate(['key' => Setting::$add_fund_text_2_page],[
            'value' => $request->add_fund_text_2_page ?? '',
        ]);



        if ($request->hasFile('qr_code')) {
            
            $image = $request->qr_code;
            $image_name = time() . rand(1, 100) . '-' . $request->qr_code->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '', $image_name);
            $request->qr_code->move(public_path('upload'), $image_name);

            Setting::updateOrCreate(['key' => Setting::$payment_qr_code],[
                'value' => $image_name,
            ]);
            
        }

    }


    function storeGeneralSetting(StoreGeneralSettingRequest $request){

        Setting::updateOrCreate(['key' => Setting::$globel_setting],[
            'value' => $request->globel_setting ?? 0,
        ]);

        Setting::updateOrCreate(['key' => Setting::$referral_bonus],[
            'value' => $request->referral_bonus,
        ]);
        Setting::updateOrCreate(['key' => Setting::$referral_commission],[
            'value' => $request->referral_commission,
        ]);
        Setting::updateOrCreate(['key' => Setting::$min_withdraw_amount],[
            'value' => $request->min_withdraw_amount,
        ]);
        Setting::updateOrCreate(['key' => Setting::$max_fund_amount],[
            'value' => $request->max_fund_amount,
        ]);
        Setting::updateOrCreate(['key' => Setting::$max_withdraw_amount],[
            'value' => $request->max_withdraw_amount,
        ]);
        Setting::updateOrCreate(['key' => Setting::$min_fund_amount],[
            'value' => $request->min_fund_amount,
        ]);
        Setting::updateOrCreate(['key' => Setting::$marque_tag],[
            'value' => $request->marque_tag,
        ]);

        if ($request->hasFile('home_banner')) {
            
            $image = $request->home_banner;
            $image_name = time() . rand(1, 100) . '-' . $request->home_banner->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '', $image_name);
            $request->home_banner->move(public_path('upload'), $image_name);

            Setting::updateOrCreate(['key' => Setting::$home_banner],[
                'value' => $image_name,
            ]);
            
        }
    }
}
