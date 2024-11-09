<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\UserResource;
use App\Http\Resources\Api\FundRequestResource;
use App\Http\Resources\Api\WithdrawRequestResource;
use App\Models\Bid;
use App\Models\FundRequest;
use App\Models\Game;
use App\Models\User;
use App\Models\Winner;
use App\Models\Withdraw;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function dashboard(Request $request){

        $data = [
            'total_game' => Game::count(),
            'total_user' => User::where('role',User::$user)->count(),
            'today_bids' => Bid::whereDate('created_at',now())->count(),
            'today_total_bids_amount' => Bid::whereDate('created_at',now())->sum('amount'),
            'today_winning' => Winner::whereDate('date',now())->sum('amount'),
            'total_winning' => Winner::sum('amount'),
        ];
        $query_user_data = $request->input('user_data');
        $users = User::when($query_user_data, function ($query) use ($query_user_data) {
            $query->where('name', 'like', '%' . $query_user_data . '%');
            $query->Orwhere('mobile', 'like', '%' . $query_user_data . '%');
            $query->Orwhere('email', 'like', '%' . $query_user_data . '%');

        })->where('role',User::$user)->latest()->limit(3)->get();


        $users = json_decode(json_encode(UserResource::collection($users)));
        if ($request->ajax()) {
            return view('admin.dashboard.user_filter', compact('users'))->render();
        }

        $withdrawls = Withdraw::where('status',Withdraw::$pending)->with('user')->latest()->limit(20)->get();
        $withdrawls = json_decode(json_encode(WithdrawRequestResource::collection($withdrawls)));


        $funds = FundRequest::with('user');
        $funds = $funds->where('status',FundRequest::$pending)->latest()->limit(10)->get();
        $funds = json_decode(json_encode(FundRequestResource::collection($funds)));

        return view('admin.dashboard.index',compact('data','users','withdrawls','funds'));
    }

    
}
