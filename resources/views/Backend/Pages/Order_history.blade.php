@extends('Backend.main')
@section('head')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('/css/Backend_style/dataTables.bootstrap.min.css')}}">

@stop

@section('content')
    <div class="container" style="background: white">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Order History</h3>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row" style="border: solid 1px red;margin: 20px;padding: 20px">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3>options</h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <h2 class="float-right">150$</h2>
                                    </div>
                                </div>
                                <hr class="margin-top-0">
                                <div class="row margin-10">
                                    <div class="col-md-4">
                                        <label class="col-sm-5" for="start">Order from date</label>
                                        <input class="col-sm-7" type="date" id="start" name="order"
                                               value="2018-07-22"
                                               min="2018-01-01" max="2018-12-31"/>
                                    </div>

                                    <div class="col-md-4">
                                        <label class="col-sm-5" for="end">Order till</label>
                                        <input class="col-sm-7" type="date" id="end" name="order"
                                               value="2018-07-29"
                                               min="2018-01-01" max="2106-12-31"/>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="col-sm-5" for="end">Order Status</label>
                                        <select class="col-sm-7" name="status" id="">
                                            <option value="pre order">Pre order</option>
                                            <option value="order">Order</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row margin-10">
                                    <div class="col-md-4">
                                        <label for="" class="col-sm-5">Order ID</label>
                                        <input class="col-sm-7" type="text" placeholder="1221342">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="col-sm-5">Payment method</label>
                                        <select class="col-sm-7" name="payment" id="">
                                            <option value="master-card">Master Card</option>
                                            <option value="visa-card">Visa Card</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <div class="btn btn-block btn-border">Search</div>
                            </div>
                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid"
                                   aria-describedby="example1_info">
                                <thead>
                                <tr role="row">
                                    <th rowspan="1" colspan="1">Order ID</th>
                                    <th rowspan="1" colspan="1">Name</th>
                                    <th rowspan="1" colspan="1">Card Number</th>
                                    <th rowspan="1" colspan="1">Method</th>
                                    <th rowspan="1" colspan="1">Date</th>
                                    <th rowspan="1" colspan="1">Total Order</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr role="row" class="odd">
                                    <td>123242432</td>
                                    <td>dd</td>
                                    <td>17634723848</td>
                                    <td>Master Card</td>
                                    <td>18-08-2018</td>
                                    <td>100$</td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">Order ID</th>
                                    <th rowspan="1" colspan="1">Name</th>
                                    <th rowspan="1" colspan="1">Card Number</th>
                                    <th rowspan="1" colspan="1">Method</th>
                                    <th rowspan="1" colspan="1">Date</th>
                                    <th rowspan="1" colspan="1">Total Order</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@stop
@section('script')

    <!-- DataTables -->
    <script src="/js/Backend_js/jquery.dataTables.min.js"></script>
    <script src="/js/Backend_js/dataTables.bootstrap.min.js"></script>
    <!-- page script -->
    <script>
    $(function () {
    // $('#example1').DataTable()
    $('#example2').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': false,
        'ordering': true,
        'info': true,
        'autoWidth': false
    })
    })
    </script>
@stop