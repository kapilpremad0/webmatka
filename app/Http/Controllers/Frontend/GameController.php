<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class GameController extends Controller
{
    function singlePlay(){
        return view('frontend.game.single_ank');
    }

    function jodi(){
        return view('frontend.game.jodi');
    }

    function singlePatti(){
        return view('frontend.game.single_patti');
    }

    function doublePatti(){
        return view('frontend.game.double_patti');
    }

    function triplePatti(){
        return view('frontend.game.triple_patti');
    }
    function halfSangam(){
        return view('frontend.game.half_sangam');
    }
    function fullSangam(){
        return view('frontend.game.full_sangam');
    }

    function rates(){

        $game_rates = [];
        foreach(config('constant.game_type') as $key => $val){
            $game_key = "{$key}_winning_amount";
            $hh = Setting::where('key',$game_key)->first()->value ?? 0;
            $game_rates[$val] = $hh ;
        }
        return view('frontend.game.rates',compact('game_rates'));
    }
}
