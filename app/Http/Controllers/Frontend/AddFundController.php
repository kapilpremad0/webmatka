<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\StorePaymentScreenshotRequest;
use App\Models\FundRequest;
use Illuminate\Http\Request;

class AddFundController extends Controller
{
    function index(){
        return view('frontend.add_fund.index');
    }

    function scanAndSubmit(){
        return view('frontend.add_fund.scan_and_submit');
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
