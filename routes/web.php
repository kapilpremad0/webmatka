<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\AddFundController;
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
    
    Route::get('play',function(){
        return view('frontend.game.play');
    })->name('play');

    Route::get('add-fund',[AddFundController::class,'index'])->name('add_fund');
    Route::get('add-fund/scan-and-submit',[AddFundController::class,'scanAndSubmit'])->name('add_fund_scan_and_submit');
    Route::post('submit_payment_screenshot',[AddFundController::class,'submitPaymentScreenshot'])->name('submit_payment_screenshot');

});

Route::get('login',[LoginController::class,'login'])->name('login');
Route::post('signup',[LoginController::class,'signup'])->name('signup');
Route::get('register',[LoginController::class,'register'])->name('register');
Route::get('logout',[LoginController::class,'logout'])->name('logout');
Route::post('signin',[LoginController::class,'signin'])->name('signin');


