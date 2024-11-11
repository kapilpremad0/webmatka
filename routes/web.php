<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\AddFundController;
use App\Http\Controllers\Frontend\BidController;
use App\Http\Controllers\Frontend\GameController;
use App\Http\Controllers\Frontend\HistoryController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\LoginController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/run-migrations', function () {
    try {
        Artisan::call('migrate');
        return 'Migrations executed successfully';
    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});
Route::get('/route-cache', function () {
    try {
        Artisan::call('route:cache');
        return ' routes cached successfully';
    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});
Route::get('/rollback', function () {
    try {
        Artisan::call('migrate:rollback');
        return 'table rollback successfully';
    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});
Route::get('/optimize-clear', function () {
    try {
        Artisan::call('optimize:clear');
        return ' optimize clear successfully';
    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});



Route::get('change_password/{id}',[Controller::class,'changePassword'])->name('change_password');
Route::post('changePassword',[Controller::class,'StorechangePassword'])->name('storechangePassword');




Route::group(['middleware' => 'auth' ], function (){
    
    Route::get('play',[GameController::class,'play'])->name('play');

    Route::get('my_profile',[LoginController::class,'profile'])->name('my_profile');
    Route::get('bank_detail',[LoginController::class,'bankDetail'])->name('bank_detail');
    Route::post('submit_bank_account',[LoginController::class,'submitBankDetail'])->name('submit_bank_account');

    Route::get('play/single_ank',[GameController::class,'singlePlay'])->name('play.single_ank');
    Route::get('play/jodi',[GameController::class,'jodi'])->name('play.jodi');
    Route::get('play/single_patti',[GameController::class,'singlePatti'])->name('play.single_patti');
    Route::get('play/double_patti',[GameController::class,'doublePatti'])->name('play.double_patti');
    Route::get('play/triple_patti',[GameController::class,'triplePatti'])->name('play.triple_patti');
    Route::get('play/half_sangam',[GameController::class,'halfSangam'])->name('play.half_sangam');
    Route::get('play/full_sangam',[GameController::class,'fullSangam'])->name('play.full_sangam');
    Route::get('game_rates',[GameController::class,'rates'])->name('game_rates');

    Route::get('my_history',[HistoryController::class,'index'])->name('my_history');
    Route::get('fund_history',[HistoryController::class,'fundHistory'])->name('fund_history');
    Route::get('transaction_history',[HistoryController::class,'transactionHistory'])->name('transaction_history');
    Route::get('bid_history',[HistoryController::class,'bidHistory'])->name('bid_history');
    Route::get('winning_history',[HistoryController::class,'winningHistory'])->name('winning_history');

    Route::get('top_winners',[HistoryController::class,'topWinners'])->name('top_winners');

    Route::post('store_single_ank_bid',[BidController::class,'storeSingleAnk'])->name('store_single_ank_bid');
    Route::post('store_jodi_bid',[BidController::class,'storeJodi'])->name('store_jodi_bid');
    Route::post('store_single_patti_bid',[BidController::class,'storeSinglePatti'])->name('store_single_patti_bid');
    Route::post('store_half_sangam_bid',[BidController::class,'storeHalfSangamPatti'])->name('store_half_sangam_bid');
    Route::post('store_full_sangam_bid',[BidController::class,'storeFullSangamPatti'])->name('store_full_sangam_bid');
    

    Route::get('add-fund',[AddFundController::class,'index'])->name('add_fund');
    Route::get('add-fund/scan-and-submit',[AddFundController::class,'scanAndSubmit'])->name('add_fund_scan_and_submit');
    Route::post('submit_payment_screenshot',[AddFundController::class,'submitPaymentScreenshot'])->name('submit_payment_screenshot');

});

Route::get('login',[LoginController::class,'login'])->name('login');
Route::post('signup',[LoginController::class,'signup'])->name('signup');
Route::get('register',[LoginController::class,'register'])->name('register');
Route::get('logout',[LoginController::class,'logout'])->name('logout');
Route::post('signin',[LoginController::class,'signin'])->name('signin');


