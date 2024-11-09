@extends('frontend.layouts.app')

@section('content')
    <div class="container">

        <div class="text-center tb-10">
            <h3 class="gdash3">Fund History</h3>
            <span style="font-size:12px;">Deposit and Withdraw History</span>
        </div>

        <div class="tb-10">

            @if (!empty($history->toArray()))
                <table class="table mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col" >#</th>
                            <th>Description</th>
                            <th>Amount</th>
                            <th scope="col" >Date</th>
                            {{-- <th>Updated at</th> --}}
                            
                        </tr>
                    </thead>
                    <tbody>
                        @php  $i = ($history->currentPage() - 1) * $history->perPage() + 1; @endphp
                        @foreach ($history as $item)
                            <tr>
                                <td >{{ $i }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->amount }}</td>
                                <td>{{ date('d-m-y h:i a',strtotime($item->created_at)) }}</td>
                            </tr>
                            @php $i++; @endphp
                        @endforeach
                        
                    </tbody>
                </table>
                @include('frontend._pagination', ['data' => $history])    
            @else
                <div class="tbmar-40 text-center">
                    <p>No Record Found.</p>
                </div>    
            @endif

        </div>

    </div>
    @endsection
