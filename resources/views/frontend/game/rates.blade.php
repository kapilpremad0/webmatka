@extends('frontend.layouts.app')

@section('content')
    <div class="container">
        <div class="tb-10" style="text-align:center;">
            <h1 class="gdash3" style="font-size:22px;"> Game Rate List</h1>
            <span style="font-size:12px;">We Offer Best Rate in market - Full rate</span>
            <div class="row game-list-inner">
                <div class="col-12 game-rates">
                    <h2 style="font-size:16px; color:var(--primary-light);">Main Games Win Ratio</h2>

                    @foreach ($game_rates as $key => $val)
                        <p>{{ $key }} : <span>1 ka {{ $val }}</span></p>    
                    @endforeach
                    
                    {{-- <p>jodi : <span>10 ka 950</span></p>
                    <p>Single Panna : <span>10 ka 1400</span></p>
                    <p>Double Panna : <span>10 ka 2800</span></p>
                    <p>Triple Panna : <span>10 ka 6,000</span></p>
                    <p>half Sangam : <span>10 ka 10,000</span></p>
                    <p>Full Sangam : <span>10 ka 1,00,000</span></p> --}}
                </div>
            </div>

            {{-- <div class="row game-list-inner">
                <div class="col-12 game-rates">
                    <h2 style="font-size:16px; color:var(--primary-light);">Starline Games Win Ratio</h2>
                    <p>Single ank : <span>10 ka 100</span></p>
                    <p>Single Panna : <span>10 ka 1600</span></p>
                    <p>Double Panna : <span>10 ka 3,000</span></p>
                    <p>Triple Panna : <span>10 ka 10,000</span></p>
                </div>
            </div> --}}


        </div>
    </div>
@endsection
