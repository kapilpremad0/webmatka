@extends('frontend.layouts.app')

@section('content')
    <div class="container">

        <div class="text-center tb-10">
            <h3 class="gdash3">Winning History</h3>
            <span style="font-size:12px;">Main markets winning records</span>
        </div>

        <div class="tb-10">

            @if (!empty($winner->toArray()))
                <table class="table mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col" >#</th>
                            <th>Game</th>
                            <th>Number</th>
                            <th>Amount</th>
                            {{-- <th>Type</th>
                            <th>Session</th> --}}
                            <th scope="col" >Date</th>
                            {{-- <th>Updated at</th> --}}
                            
                        </tr>
                    </thead>
                    <tbody>
                        @php  $i = ($winner->currentPage() - 1) * $winner->perPage() + 1; @endphp
                        @foreach ($winner as $item)
                            <tr>
                                <td >{{ $i }}</td>
                                <td>{{ $item->game->name ?? '' }} <br>  <span style="text-transform: uppercase;">{{ $item->bid->session }} - {{ $item->bid->type }}</span></td>
                                <td>{{ $item->bid->number }} @if (!empty($item->bid->number_2))
                                    - {{ $item->bid->number_2 }}
                                @endif</td>
                                <td>{{ $item->amount }}</td>
                                {{-- <td>Open</td> --}}
                                {{-- <td > {{ $item->type }}</td> --}}
                                <td>{{ date('d-m-y',strtotime($item->created_at)) }} <br> {{ date('h:i a',strtotime($item->created_at)) }}</td>
                            </tr>
                            @php $i++; @endphp
                        @endforeach
                        
                    </tbody>
                </table>
                <div >
                    @include('frontend._pagination', ['data' => $winner])    
                </div>
                
            @else
                <div class="tbmar-40 text-center">
                    <p>No Record Found.</p>
                </div>    
            @endif

        </div>

    </div>
    @endsection
