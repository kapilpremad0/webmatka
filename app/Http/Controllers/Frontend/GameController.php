<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Setting;
use Illuminate\Http\Request;

class GameController extends Controller
{

    function play(Request $request){
        $game = Game::find($request->game_id);
        return view('frontend.game.play',compact('game'));
    }

    function singlePlay(Request $request){
        $game = Game::find($request->game_id);
        return view('frontend.game.single_ank',compact('game'));
    }

    function jodi(Request $request){
        $game = Game::find($request->game_id);
        return view('frontend.game.jodi',compact('game'));
    }

    function singlePatti(Request $request){
        $game = Game::find($request->game_id);
        return view('frontend.game.single_patti',compact('game'));
    }

    function doublePatti(Request $request){
        $game = Game::find($request->game_id);
        return view('frontend.game.double_patti',compact('game'));
    }

    function triplePatti(Request $request){
        $game = Game::find($request->game_id);
        return view('frontend.game.triple_patti',compact('game'));
    }
    function halfSangam(Request $request){
        $game = Game::find($request->game_id);
        return view('frontend.game.half_sangam',compact('game'));
    }
    function fullSangam(Request $request){
        $game = Game::find($request->game_id);
        return view('frontend.game.full_sangam',compact('game'));
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
