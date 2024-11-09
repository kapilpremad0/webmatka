<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreDeclareResultRequest;
use App\Models\Bid;
use App\Models\DeclareResult;
use App\Models\Game;
use App\Models\Setting;
use App\Models\User;
use App\Models\Wallet;
use App\Models\Winner;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DeclareResultController extends Controller
{
    function index(Request $request)
    {
        $date = $request->date ?? $todayDate = Carbon::today()->toDateString();
        $games = Game::get()->map(function ($game) use ($date) {
            $game->open_result = $game->open_result($date);
            $game->close_result = $game->close_result($date);
            $game->game_value = $game->game_value($date);
            return $game;
        });

        // return $games;
        return view('admin.declare_results.index', compact('games', 'date'));
    }


    function store(StoreDeclareResultRequest $request)
    {
        $todayDate = $request->date;
        $game_id = $request->game_id;
        $game = Game::find($game_id);


        $prices = Setting::whereIn('key', [
            Setting::$crossing_winning_amount,
            Setting::$haruf_winning_amount,
            Setting::$jodi_winning_amount
        ])->pluck('value', 'key');

        $declare_result = DeclareResult::updateOrCreate([
            'game_id' => $game_id,
            'date' => $todayDate,
            'session' => $request->session
        ], [
            'number' => $request->number,
        ]);

        Winner::where('declare_id', $declare_result->id)->delete();
        Wallet::where('declare_id', $declare_result->id)->delete();

        $declare_number = $request->number;

        $bids = Bid::whereDate('created_at', $todayDate)->where('game_id', $game_id);
            if($request->session == 'open'){

                $open = $request->number; 
                $open_sum = array_sum(str_split($open)); 
                $open_sum = $open_sum % 10; // Get the last digit of the sum

                $bids->whereIn('type',[Bid::$double_patti,Bid::$single_patti,Bid::$single_ank,Bid::$triple_patti])
                ->whereIn('number',[$declare_number,$open_sum])
                ->where('session','open');
                $bids = $bids->get()->each(function ($bid) use ($prices, $declare_result, $game, $declare_number) {
                        $this->createWinnerAndWallet($bid, $declare_result, 100, $game);
                });
            }elseif($request->session == 'close'){
                
                $close = $request->number; 
                $close_sum = array_sum(str_split($close)); 
                $close_sum = $close_sum % 10; // Get the last digit of the sum

                $open_result = DeclareResult::whereDate('date',$declare_result->created_at)
                                                ->where('game_id',$declare_result->game_id)
                                                ->where('session','open')->first();

                $open_result_number = $open_result->number;
                $open = $open_result_number; 
                $open_sum = array_sum(str_split($open)); 
                $open_sum = $open_sum % 10; // Get the last digit of the sum

                $bids->whereIn('type',[Bid::$double_patti,Bid::$single_patti,Bid::$single_ank,Bid::$triple_patti])
                ->where('session','close')
                ->whereIn('number',[$declare_number,$close_sum])
                ->orWhereIn('type',[Bid::$full_sangam,Bid::$half_sangam,Bid::$jodi]);
                $bids = $bids->get()->each(function ($bid) use ($prices, $declare_result, $game, $declare_number ,$close_sum ,$open_result_number ,$open_sum) {
                    if($bid->type == Bid::$jodi){
                        if($bid->number == "{$open_sum}{$close_sum}"){
                            $this->createWinnerAndWallet($bid, $declare_result, 100, $game);
                        }
                    }elseif($bid->type == Bid::$full_sangam){
                        if($bid->number == $open_result_number && $bid->number_2 == $declare_number){
                            $this->createWinnerAndWallet($bid, $declare_result, 100, $game);
                        }
                    }elseif($bid->type == Bid::$half_sangam){
                        if($bid->session == 'close'){
                            if($bid->number == $declare_number && $bid->number_2 == $open_sum){
                                $this->createWinnerAndWallet($bid, $declare_result, 100, $game);
                            }
                        }
                        if($bid->session == 'open'){
                            if($bid->number == $open_result_number && $bid->number_2 == $close_sum){
                                $this->createWinnerAndWallet($bid, $declare_result, 100, $game);
                            }
                        }
                    }else{
                        $this->createWinnerAndWallet($bid, $declare_result, 100, $game);
                    }
                });
            }

        return redirect()->back()->with('success', 'Result declared successfully');
    }

    private function createWinnerAndWallet($bid, $declare_result, $price, $game)
    {
        $winner = Winner::updateOrCreate([
            'bid_id' => $bid->id,
        ], [
            'declare_id' => $declare_result->id,
            'user_id' => $bid->user_id,
            'game_id' => $declare_result->game_id,
            'bid_id' => $bid->id,
            'amount' => $bid->amount * $price,
            'date' => $declare_result->date,
        ]);

        Wallet::create([
            'user_id' => $bid->user_id,
            'type' => Wallet::$credit,
            'amount' => $winner->amount,
            'description' => "You've won the bid for '{$game->name}' with a {$bid->type}",
            'declare_id' => $declare_result->id,
            'type_by' => Wallet::$game_winner,
        ]);

    }



    function destroy($id)
    {
        Winner::where('declare_id', $id)->delete();
        Wallet::where('declare_id', $id)->delete();
        DeclareResult::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Delete result successful');
    }
}
