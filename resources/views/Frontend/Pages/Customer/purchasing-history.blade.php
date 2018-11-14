@extends('Frontend.Pages.setting')

@section('active')
    Purchasing-History
@stop
@section('purchas-history')
    active
@stop
@section('extra-css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@stop

@section('content')
    <style type="text/css">
        .card {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.125);
            border-radius: 0.25rem;
        }

        .card-deck .card {
            margin-bottom: 15px;
        }

        .card-group {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .card-group > .card {
            margin-bottom: 15px;
        }

        .card-img {
            width: 100%;
            border-radius: calc(0.25rem - 1px);
        }

        .card-img-top {
            width: 100%;
            border-top-left-radius: calc(0.25rem - 1px);
            border-top-right-radius: calc(0.25rem - 1px);
        }

        .card-img-bottom {
            width: 100%;
            border-bottom-right-radius: calc(0.25rem - 1px);
            border-bottom-left-radius: calc(0.25rem - 1px);
        }

        .card-body {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.25rem;
        }


    </style>
    <div class="row">
        {{-- Right Sidbar --}}
        <div class="col-md-8 order-md-1">
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Data Table With Full Features</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>No#</th>
                                        <th>Order#</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->order_date}}</td>
                                            <td> {{$item->statusName}}</td>
                                            <td>
                                                @if(($item->statusName)=='New')
                                                    <button class="btn btn-danger btn_cancel" type="button"
                                                            value="{{$item->id}}">cancel
                                                    </button>
                                                @endif
                                                <button class="btn btn-success btn_preview" type="button"
                                                        value="{{$item->id}}">Preview
                                                </button>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->

        </div>
        {{--Sidebar Sidbar Order Item--}}
        <div class="col-md-4 order-md-2 mb-4">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Order Item(s)</span>
                        <span class="badge badge-secondary badge-pill" id="order_item">{{$orderdetails->count()}}</span>
                    </h4>
                    {{-- Title Right --}}
                </div>

                <div class="col-md-12" style="height: 380px;
                overflow: scroll;">
                    <ul class="list-group ">

                        @foreach($orderdetails as $item)
                            <div class="card-group card-group-original" id="list_order-original">

                                <div class="card">
                                    <img class="card-img-top" src="{{$item->image_color}}" data-holder-rendered="true"
                                         style="padding:5px;">
                                </div>
                                <div class="card">
                                    <div class="card-body" style="padding: 0.25rem;">
                                        <h5 class="card-title">{{$item->title}}</h5>
                                        <h6 class="card-title">Quantty(s) : {{$item->qty}}
                                        </h6>
                                        <h6 class="card-title">Price : $ {{$item->price}}</h6>
                                        <p class="card-text">{{$item->description}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="card-group"></div>

                    </ul>
                </div>

                <div class="col-md-12" style="padding-top: 10px;">
                    <h5 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Subtotal</span>
                        <span class="badge badge-secondary badge-pill" id="subtotal">$ 00.00</span>
                    </h5>
                    <h5 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Discount</span>
                        <span class="badge badge-secondary badge-pill" id="discount">$ 00.00</span>
                    </h5>
                    <h5 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Total</span>
                        <span class="badge badge-secondary badge-pill" id="total">$ 00.00</span>
                    </h5>
                    {{-- Title Right --}}
                </div>
            </div>
        </div>
    </div>

@stop

@section('extra-js')
    <script src="js/orderAction.js"></script>

@stop
