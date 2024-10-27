<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $games = Game::orderBy('open_time','ASC')->get();
        return view('frontend.index',compact('games'));
    }
}
