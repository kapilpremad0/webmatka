<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Bid;
use App\Models\Wallet;
use App\Models\Winner;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    function index(){
        return view('frontend.history.index');
    }

    function fundHistory(){
        $history = Wallet::where('user_id',auth()->user()->id)->where('type_by',Wallet::$wallet_recharge)->latest()->paginate(10);
        return view('frontend.history.fund_history',compact('history'));
    }

    function transactionHistory(){
        $history = Wallet::where('user_id',auth()->user()->id)->latest()->paginate(10);
        return view('frontend.history.transaction_history',compact('history'));
    }

    function bidHistory(){
        $history = Bid::where('user_id',auth()->user()->id)->latest()->with('game')->paginate(10);
        // return $history;
        return view('frontend.history.bid_history',compact('history'));
    }

    function winningHistory(){
        $winner = Winner::where('user_id',auth()->user()->id)->with('game','bid')->latest()->paginate(10);
        return view('frontend.history.winner_history',compact('winner'));
    }


    function topWinners(){
        return view('frontend.history.top_winners');
    }
}
