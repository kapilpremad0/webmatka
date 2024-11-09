<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $marque = Setting::where('key',Setting::$marque_tag)->first()->value ?? '';
        // return $marque;
        $date = $request->date ?? $todayDate = Carbon::today()->toDateString();
        $games = Game::orderBy('open_time','ASC')->get()->map(function ($game) use ($date) {
            $game->game_value = $game->game_value($date);
            return $game;
        });
        return view('frontend.index',compact('games','marque'));
    }
}
