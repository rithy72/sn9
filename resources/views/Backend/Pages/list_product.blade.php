@extends('Backend.main')

@section('head')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('/css/Backend_style/dataTables.bootstrap.min.css')}}">


@stop

@section('content')
    <div class="container" style="background: white">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List Products</h3>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid"
                                   aria-describedby="example1_info">
                                <thead>
                                <tr role="row">
                                    <th rowspan="1" colspan="1">Image color</th>
                                    <th rowspan="1" colspan="1">Product Name</th>
                                    <th rowspan="1" colspan="1">Barcode</th>
                                    <th rowspan="1" colspan="1">Brand</th>
                                    <th rowspan="1" colspan="1">Category</th>
                                    <th rowspan="1" colspan="1">Size</th>
                                    <th rowspan="1" colspan="1">Cost</th>
                                    <th rowspan="1" colspan="1">Price</th>
                                    <th rowspan="1" colspan="1">Description</th>
                                    <th rowspan="1" colspan="1">Items in stock</th>
                                    <th rowspan="1" colspan="1">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr role="row" class="odd">
                                    <td class="center"><img src="{{url('images/admin.jpg')}}" alt=""
                                                            style="max-width: 50px;max-height: 50px"></td>
                                    <td>T-shirt</td>
                                    <td>123212313</td>
                                    <td>Nike</td>
                                    <td>T-shirt</td>
                                    <td>S</td>
                                    <td>12$</td>
                                    <td>15$</td>
                                    <td>best quality</td>
                                    <td>10</td>
                                    <td class="center">
                                        <a href="#"><i class="fa fa-trash" style="color:red;"></i></a>
                                        <a href="#"><i class="fa fa-pencil" style="color:yellowgreen;"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">Image color</th>
                                    <th rowspan="1" colspan="1">Product Name</th>
                                    <th rowspan="1" colspan="1">Barcode</th>
                                    <th rowspan="1" colspan="1">Brand</th>
                                    <th rowspan="1" colspan="1">Category</th>
                                    <th rowspan="1" colspan="1">Size</th>
                                    <th rowspan="1" colspan="1">Cost</th>
                                    <th rowspan="1" colspan="1">Price</th>
                                    <th rowspan="1" colspan="1">Description</th>
                                    <th rowspan="1" colspan="1">Items in stocks</th>
                                    <th rowspan="1" colspan="1">Actions</th>
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

@section('script')

    <!-- DataTables -->
    <script src="/js/Backend_js/jquery.dataTables.min.js"></script>
    <script src="/js/Backend_js/dataTables.bootstrap.min.js"></script>
    <!-- page script -->
    <script>
        $(function () {
            $('#example1').DataTable()
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
@stop