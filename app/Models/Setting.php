<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = ['key','value'];

    static $jodi_winning_amount = 'jodi_winning_amount';
    static $haruf_winning_amount = 'haruf_winning_amount';
    static $crossing_winning_amount = 'crossing_winning_amount';


    static $payment_whatsaap_no= 'payment_whatsaap_no';
    static $payment_upi_id = 'payment_upi_id';
    static $payment_qr_code = 'payment_qr_code';
    static $qr_code_status = 'qr_code_status';
    static $phone_pay_upi_status = 'phone_pay_upi_status';
    static $phone_pay_upi_id = 'phone_pay_upi_id';

    static $google_pay_upi_status = 'google_pay_upi_status';
    static $google_pay_upi_id = 'google_pay_upi_id';

    static $paytm_upi_status = 'paytm_upi_status';
    static $paytm_upi_id = 'paytm_upi_id';

    static $marque_tag= 'marque_tag';
    static $max_fund_amount = 'max_fund_amount';
    static $min_fund_amount = 'min_fund_amount';
    static $max_withdraw_amount= 'max_withdraw_amount';
    static $min_withdraw_amount = 'min_withdraw_amount';
    static $referral_commission = 'referral_commission';
    static $referral_bonus = 'referral_bonus';
    static $home_banner = 'home_banner';


    public static function  getReferralCommision(){
        return Setting::where('key','referral_commission')->first()->value ?? 0;
    }

    public static function  getReferralBonus(){
        return Setting::where('key','referral_bonus')->first()->value ?? 0;
    }


}
