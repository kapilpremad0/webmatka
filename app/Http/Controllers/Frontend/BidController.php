<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\StoreFullSangamRequest;
use App\Http\Requests\Frontend\StoreHalfSangamRequest;
use App\Models\Bid;
use App\Models\Game;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;

class BidController extends Controller
{
    function storeSingleAnk(Request $request){

        $wallet_amount = User::walletAmount(auth()->user()->id);
        if($wallet_amount < $request->total_point){
            $return_message = [
                "error" => [
                    'amount' => "You don't have enough balance to create bids."
                ]
            ];
            throw new HttpResponseException(response()->json($return_message, 400));

        }

        if(empty($request->total_point)){
            $return_message = [
                "error" => [
                    'amount' => "You haven't selected any number. Please select a number."
                ]
            ];
            throw new HttpResponseException(response()->json($return_message, 400));
        }

        $game = Game::find($request->game_id);
        for($i = 0 ; $i<10 ; $i++){
            $name = "single{$i}";
            $bid_amount = $request->$name;
            if(!empty($bid_amount)){
                Bid::create([
                    'user_id' => auth()->user()->id,
                    'game_id' => $request->game_id,
                    'type' => Bid::$single_ank,
                    'number' => $i,
                    'amount' => $bid_amount,
                ]);
                Wallet::create([
                    'user_id' => auth()->user()->id,
                    'amount' => $bid_amount,
                    'type' => Wallet::$debit,
                    'description' => "For placing this game: {$game->name}",
                    'type_by' => Wallet::$play_bid
                ]);
            }
        }
        session()->flash('success','Bid Create Successfully');
        
    }
    

    function storeJodi(Request $request){
        $wallet_amount = User::walletAmount(auth()->user()->id);
        if($wallet_amount < $request->total_point){
            $return_message = [
                "error" => [
                    'amount' => "You don't have enough balance to create bids."
                ]
            ];
            throw new HttpResponseException(response()->json($return_message, 400));

        }

        if(empty($request->total_point)){
            $return_message = [
                "error" => [
                    'amount' => "You haven't selected any number. Please select a number."
                ]
            ];
            throw new HttpResponseException(response()->json($return_message, 400));
        }

        $game = Game::find($request->game_id);
        for($i = 0 ; $i<100 ; $i++){
            if($i < 10){
                $name = "jodi0{$i}";
                $game_number = "0{$i}";
            }else{
                $name = "jodi{$i}";
                $game_number = $i;
            }

            $bid_amount = $request->$name;

            // echo $bid_amount;

            if(!empty($bid_amount)){
                Bid::create([
                    'user_id' => auth()->user()->id,
                    'game_id' => $request->game_id,
                    'type' => Bid::$jodi,
                    'number' => $game_number,
                    'amount' => $bid_amount,
                ]);
                Wallet::create([
                    'user_id' => auth()->user()->id,
                    'amount' => $bid_amount,
                    'type' => Wallet::$debit,
                    'description' => "For placing this game: {$game->name}",
                    'type_by' => Wallet::$play_bid
                ]);
            }
        }
        session()->flash('success','Bid Create Successfully');
    }


    function storeSinglePatti(Request $request){
        $wallet_amount = User::walletAmount(auth()->user()->id);
        if($wallet_amount < $request->total_point){
            $return_message = [
                "error" => [
                    'amount' => "You don't have enough balance to create bids."
                ]
            ];
            throw new HttpResponseException(response()->json($return_message, 400));

        }

        if(empty($request->total_point)){
            $return_message = [
                "error" => [
                    'amount' => "You haven't selected any number. Please select a number."
                ]
            ];
            throw new HttpResponseException(response()->json($return_message, 400));
        }

        $type = $request->type ?? 'single_patti';

        $game = Game::find($request->game_id);
        for($i = 100 ; $i<1000 ; $i++){

                

                if($type == Bid::$single_patti){
                    $name = "single_patti{$i}";
                    $type = Bid::$single_patti;
                }

                if($type == Bid::$double_patti){
                    $name = "double_patti{$i}";
                    $type = Bid::$double_patti;
                }

                if($type == Bid::$triple_patti){
                    $name = "triple_patti{$i}";
                    $type = Bid::$triple_patti;
                }
                

                $game_number = "{$i}";
            

            $bid_amount = $request->$name;

            // echo $bid_amount;

            if(!empty($bid_amount)){
                Bid::create([
                    'user_id' => auth()->user()->id,
                    'game_id' => $request->game_id,
                    'type' => $type,
                    'number' => $game_number,
                    'amount' => $bid_amount,
                ]);
                Wallet::create([
                    'user_id' => auth()->user()->id,
                    'amount' => $bid_amount,
                    'type' => Wallet::$debit,
                    'description' => "For placing this game: {$game->name}",
                    'type_by' => Wallet::$play_bid
                ]);
            }
        }
        session()->flash('success','Bid Create Successfully');
    }



    function storeHalfSangamPatti(StoreHalfSangamRequest $request){
        $close_amount = $request->close_amount ?? 0;
        $open_amount = $request->open_amount ?? 0;
        $totl = $open_amount + $close_amount;
        if($totl < 1){
            $return_message = [
                "error" => [
                    'amount' => "You haven't selected any number. Please select a number."
                ]
            ];
            throw new HttpResponseException(response()->json($return_message, 400));
        }        

        $wallet_amount = User::walletAmount(auth()->user()->id);
        if($wallet_amount < $totl){
            $return_message = [
                "error" => [
                    'amount' => "You don't have enough balance to create bids."
                ]
            ];
            throw new HttpResponseException(response()->json($return_message, 400));

        }

        $game = Game::find($request->game_id);
        if(!empty($request->close_amount)){
            Bid::create([
                'user_id' => auth()->user()->id,
                'game_id' => $request->game_id,
                'type' => Bid::$half_sangam,
                'number' => $request->close_patti,
                'number_2' => $request->open_ank,
                'amount' => $request->close_amount,
                'session' => 'close'
            ]);
            Wallet::create([
                'user_id' => auth()->user()->id,
                'amount' => $request->close_amount,
                'type' => Wallet::$debit,
                'description' => "For placing this game: {$game->name}",
                'type_by' => Wallet::$play_bid
            ]);
        }

        if(!empty($request->open_amount)){
            Bid::create([
                'user_id' => auth()->user()->id,
                'game_id' => $request->game_id,
                'type' => Bid::$half_sangam,
                'number' => $request->open_patti,
                'number_2' => $request->close_ank,
                'amount' => $request->open_amount,
                'session' => 'open'
            ]);
            Wallet::create([
                'user_id' => auth()->user()->id,
                'amount' => $request->close_amount,
                'type' => Wallet::$debit,
                'description' => "For placing this game: {$game->name}",
                'type_by' => Wallet::$play_bid
            ]);
        }
        session()->flash('success','Bid Create Successfully');
    }



    function storeFullSangamPatti(StoreFullSangamRequest $request){
        if($request->amount < 1){
            $return_message = [
                "error" => [
                    'amount' => "You haven't selected any number. Please select a number."
                ]
            ];
            throw new HttpResponseException(response()->json($return_message, 400));
        }        

        $wallet_amount = User::walletAmount(auth()->user()->id);
        if($wallet_amount < $request->amount){
            $return_message = [
                "error" => [
                    'amount' => "You don't have enough balance to create bids."
                ]
            ];
            throw new HttpResponseException(response()->json($return_message, 400));
        }
        $game = Game::find($request->game_id);
        Bid::create([
            'user_id' => auth()->user()->id,
            'game_id' => $request->game_id,
            'type' => Bid::$full_sangam,
            'number' => $request->open_patti,
            'number_2' => $request->close_patti,
            'amount' => $request->amount,
            'session' => 'open'
        ]);
        Wallet::create([
            'user_id' => auth()->user()->id,
            'amount' => $request->amount,
            'type' => Wallet::$debit,
            'description' => "For placing this game: {$game->name}",
            'type_by' => Wallet::$play_bid
        ]);
        session()->flash('success','Bid Create Successfully');

    }
}
