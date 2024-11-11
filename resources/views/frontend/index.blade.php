
@extends('frontend.layouts.app')

@section('content')

    <div class="container text-center">
        <div class="tb-10">
            <div class="row">

                @auth
                    @if (auth()->user()->is_betting == 1)

                    <div class="col-3" style="padding-left:5px;padding-right:5px;">
                        <a href="{{ route('add_fund') }}" class="home-sl2-box"> <i class="fa fa-money"></i> <br> <span>Add
                                Fund</span></a>
                    </div>
                    
                    <div class="col-3" style="padding-left:5px;padding-right:5px;">
                        <a href="#" class="home-sl2-box"> <i class="fa fa-credit-card"></i> <br>
                            <span>Withdraw</span></a>
                    </div>

                    <div class="col-3" style="padding-left:5px;padding-right:5px;">
                        <a href="#" class="home-sl2-box"><i class="fa fa-comments"></i> <br>
                            <span>Support</span></a>
                    </div>
    
                    <div class="col-3" style="padding-left:5px;padding-right:5px;">
                        <a href="#" class="home-sl2-box"><i class="fa fa-info-circle"></i> <br> <span>How
                                ?</span></a>
                    </div>

                    @endif
                @endauth

                

            </div>
        </div>
    </div>


    <div id="scroll-container" class="noticebr">
        <div id="scroll-text" style="white-space: nowrap;">{{ $marque }}</div>
    </div>

    <div class="container text-center">
        <div class="tb-10">

            <div class="row game-list-inner" style="background: #1f1f1f;color: #ffe301;">
                <div class="col-3">
                    <i class="fa fa-star" style="font-size: 25px;padding-top: 13px;"></i>
                </div>
                <div class="col-6">
                    <div class="game-list-box">
                        <span class="gameName"> MUMBAI STARLINE </span>

                        <span class="gameResult" style="color: white;font-size: 12px;padding-top: 10px;">Play
                            and Win Hourly</span>
                    </div>
                </div>
                <div class="col-3">
                    <a href="#" class="game-play"> <i class="fa fa-play-circle"
                            style="color: white;"></i><br>Play Starline</a>
                </div>

            </div>
            <h3 class="gdash3" style="font-size: 16px;">WORLD KA SABSE TRUSTED MATKA PLAY</h3>


            @foreach ($games as $item)
                <div class="row game-list-inner">
                    
                    <div class="col-3">
                        <a href="#" class="game-time" data-toggle="modal"
                            data-target="#gameTimeModal{{ $item->id }}"><i class="fa fa-clock-o"></i> <br>Game Time</a>
                    </div>
                    <div class="col-6">
                        <div class="game-list-box">
                            <span class="gameName"> {{ $item->name }} </span>
                            <p class="gameon">Betting is Running Now</p>
                            <span class="gameResult">{{ $item->game_value ?? '' }}</span>
                        </div>
                    </div>
                    <div class="col-3">

                        {{-- <a href="{{ route('play',['game_id' => $item->id]) }}" class="game-play"> <i
                                class="fa fa-play-circle"></i><br>Play Game</a> --}}


                        
                                @auth
                                    @if (date('H:i') < $item->close_time)
                                        @if (auth()->user()->is_betting == 1)
                                            <a href="{{ route('play',['game_id' => $item->id]) }}" class="game-play"> <i
                                                class="fa fa-play-circle"></i><br>Play Game
                                            </a>
                                        @else
                                            <a href="#" class="game-play"> 
                                                <i class="fa fa-play-circle"></i><br>Play Game
                                            </a>
                                        @endif
                                    @else
                                        <a href="#" class="game-play"> 
                                            <i class="fa fa-play-circle"></i><br>Play Game
                                        </a>
                                    @endif
                                @else
                                    @if (date('H:i') < $item->close_time)
                                        <a href="#" class="game-play"> 
                                            <i class="fa fa-play-circle"></i><br>Play Game
                                        </a>
                                    @else
                                        <a href="#" class="game-play"> 
                                            <i class="fa fa-play-circle"></i><br>Play Game
                                        </a>
                                    @endif
                                @endauth

                    </div>

                </div>
                <div class="modal" id="gameTimeModal{{ $item->id }}">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <p class="modal-title">TIME BAZAR MOR</p>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="HomegameTimetable">
                                    <div><i class="fa fa-clock-o"></i> <span>Open Bid Ends</span> <span
                                            class="timeR">11:00 AM</span></div>
                                    <div><i class="fa fa-clock-o"></i> <span>Close Bid Ends</span> <span
                                            class="timeR">12:00 PM</span></div>
                                    <div><i class="fa fa-clock-o"></i> <span>Open Result</span> <span
                                            class="timeR">11:10 AM</span></div>
                                    <div><i class="fa fa-clock-o"></i> <span>Close Result</span> <span
                                            class="timeR">12:10 PM</span></div>
                                </div>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-theme" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach

            




            




            




        </div>
    </div>
    <br><br><br>




@endsection