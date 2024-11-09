
@extends('admin.layouts.app')

@section('content')

 <!-- BEGIN: Content-->
<!-- BEGIN: Content-->
<div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            
            <div class="content-body">

                @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <div class="alert-body">
                                            {{$error}}
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endforeach
            @endif


                <!-- Ajax Sourced Server-side -->
                <section id="ajax-datatable">
                     <!-- Responsive tables start -->
                <div class="row" >
                    <div class="col-12">
                        <div class="card card-company-table">
                            <form action="">
                                <div class="card-header">
                                    <div class="col-md-2" style="text-align: end">
                                        <input type="date" name="date" class="form-control" value="{{ $date }}" max="{{ date('Y-m-d') }}">
                                    </div>
                                    <div class="col-md-2" >
                                        <Button class="btn btn-primary ">Submit</Button>
                                    </div>
                                    <div class="col-md-7" style="text-align: end">
                                        <h4 class="card-title">Declare Result</h4>
                                    </div>
                                    
                                </div>
                            </form>
                            <div class="table-responsive" id="table-responsive">
                                <table class="table mb-0">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col" >Name</th>
                                            <th>Open Session</th>
                                            <th>Close Session</th>
                                            <th>Result</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($games as $item)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <div class="fw-bolder">
                                                                {{ $item->name ?? '' }}
                                                            </div>
                                                            <div class="font-small-2 text-muted">{{ $item->hindi_name ?? '' }} <br>
                                                               <span style="color: rgb(238, 63, 63)">{{ $item->open_time }} - {{ $item->close_time }}</span> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>

                                                    @if (empty($item->open_result))

                                                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#open_session{{ $item->id }}">Declare</button>

                                                        <div class="modal fade modal-danger text-start" id="open_session{{ $item->id }}" tabindex="-1" aria-labelledby="myModalLabel120" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="myModalLabel120">Declare Result</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <form action="{{ route('admin.declare_result.store') }}" method="POST">
                                                                            @csrf
                                                                            <div class="modal-body">
                                                                                
                                                                                    <label for="">Select Number</label>
                                                                                    <select name="number" id="" class="form-select select2">
                                                                                        <option value="">(Select Panna)</option>
                                                                                        <option value="000">000 - 0</option>
                                                                                        @for ($i =100 ; $i < 1000 ; $i++)
                                                                                            <?php 
                                                                                                $number = $i; 
                                                                                                $sum = array_sum(str_split($number)); 
                                                                                                $sum = $sum % 10; // Get the last digit of the sum
                                                                                            ?>
                                                                                            <option value="{{ $i }}">{{ $i }} - {{ $sum }}</option>
                                                                                        @endfor
                                                                                    </select>
                                                                                    <input type="hidden" name="game_id" id="" value="{{ $item->id }}">
                                                                                    <input type="hidden" name="date" value="{{ $date }}">
                                                                                    <input type="hidden" name="session" value="open">
                                                                                
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="submit" class="btn btn-danger">Declare</button>
                                                                            </div>
                                                                        </form>
                                                                        
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <?php 
                                                            $number = $item->open_result->number; 
                                                            $sum = array_sum(str_split($number)); 
                                                            $sum = $sum % 10; // Get the last digit of the sum
                                                        ?>
                                                        <span class="badge bg-light-primary">Number : {{ $item->open_result->number }} -  {{ $sum }}
                                                        <br>
                                                        <button class="btn-danger" data-bs-toggle="modal" data-bs-target="#open_session_delete{{ $item->id }}">Delete</button>
                                                        <div class="modal fade modal-danger text-start" id="open_session_delete{{ $item->id }}" tabindex="-1" aria-labelledby="myModalLabel120" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="myModalLabel120">Delete Open Result</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <form action="{{ route('admin.declare_result.destroy',$item->open_result->id) }}" method="POST">
                                                                            @csrf
                                                                            @method('delete')
                                                                            <div class="modal-body">
                                                                                Are you sure you want to delete !
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                                            </div>
                                                                        </form>
                                                                        
                                                                    </div>
                                                            </div>
                                                        </div>

                                                    @endif


                                                </td>
                                                <td>
                                                    @if (empty($item->close_result))

                                                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#close_session{{ $item->id }}" @if (empty($item->open_result))
                                                            @disabled(true)
                                                        @endif>Declare</button>

                                                        <div class="modal fade modal-danger text-start" id="close_session{{ $item->id }}" tabindex="-1" aria-labelledby="myModalLabel120" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="myModalLabel120">Declare Result</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <form action="{{ route('admin.declare_result.store') }}" method="POST">
                                                                            @csrf
                                                                            <div class="modal-body">
                                                                                
                                                                                    <label for="">Select Number</label>
                                                                                    <select name="number" id="" class="form-select select2">
                                                                                        <option value="">(Select Panna)</option>
                                                                                        <option value="000">000 - 0</option>
                                                                                        @for ($i =100 ; $i < 1000 ; $i++)
                                                                                            <?php 
                                                                                                $number = $i; 
                                                                                                $sum = array_sum(str_split($number)); 
                                                                                                $sum = $sum % 10; // Get the last digit of the sum
                                                                                            ?>
                                                                                            <option value="{{ $i }}">{{ $i }} - {{ $sum }}</option>
                                                                                        @endfor
                                                                                    </select>
                                                                                    <input type="hidden" name="game_id" id="" value="{{ $item->id }}">
                                                                                    <input type="hidden" name="date" value="{{ $date }}">
                                                                                    <input type="hidden" name="session" value="close">
                                                                                
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="submit" class="btn btn-danger">Declare</button>
                                                                            </div>
                                                                        </form>
                                                                        
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <?php 
                                                            $number = $item->close_result->number; 
                                                            $sum = array_sum(str_split($number)); 
                                                            $sum = $sum % 10; // Get the last digit of the sum
                                                        ?>
                                                        <span class="badge bg-light-primary">Number : {{ $item->close_result->number }} -  {{ $sum }}
                                                            <br>
                                                            <button class="btn-danger" data-bs-toggle="modal" data-bs-target="#open_session_delete{{ $item->id }}">Delete</button>
                                                            <div class="modal fade modal-danger text-start" id="open_session_delete{{ $item->id }}" tabindex="-1" aria-labelledby="myModalLabel120" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="myModalLabel120">Delete Open Result</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <form action="{{ route('admin.declare_result.destroy',$item->close_result->id) }}" method="POST">
                                                                                @csrf
                                                                                @method('delete')
                                                                                <div class="modal-body">
                                                                                    Are you sure you want to delete !
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                                                </div>
                                                                            </form>
                                                                            
                                                                        </div>
                                                                </div>
                                                            </div>
                                                    @endif

                                                </td>
                                                <td class="text-dark bold">
                                                    <strong>{{ $item->game_value ?? '' }}</strong>
                                                </td>
                                                
                                            </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                            {{-- <div class="table-responsive">
                                <table class="table mb-0">
                                    <!-- ... (your table structure) ... -->
                                </table>
                                {{ $bids->links('admin._pagination') }}
                            </div> --}}
                        </div>
                    </div>


                    
                </div>
                <!-- Responsive tables end -->
                </section>

                <!--/ Ajax Sourced Server-side -->
                
                

            </div>
        </div>
    </div>
    <!-- END: Content-->
    <!-- END: Content-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        $('#searchInput').on('input', function () {
            fetch_data($(this).val());
        });

        function fetch_data(query = '') {
            $.ajax({
                url: "",
                method: 'GET',
                data: {search: query},
                dataType: 'html',
                success: function (data) {
                    $('#table-responsive').html(data);
                }
            });
        }


    });

</script>

@endsection