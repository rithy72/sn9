@extends('Backend.main')

@section('head')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('/css/Backend_style/dataTables.bootstrap.min.css')}}">
@stop

@section('content')
    <div class="container" style="background: white">
        <div class="card">
            <h3 class="card-title">Import Stock</h3>

            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Create</button>
            <hr>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="vertical-alignment-helper">
                    <div class="modal-dialog vertical-align-center">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                            class="sr-only">Close</span>
                                </button>
                                <h4 class="modal-title" id="myModalLabel">Create Product</h4>

                            </div>


                            <!-- /.box-header -->
                            <div class="box-body">
                                <form role="form">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Barcode</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>

                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" rows="3"
                                                  placeholder="Enter Description"></textarea>
                                    </div>


                                    <div clas="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Cost</label>
                                                    <input type="text" class="form-control" placeholder="">

                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Size</label>
                                                    <select class="form-control select2 select2-hidden-accessible"
                                                            style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                        <option>40</option>
                                                        <option>50</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div clas="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Price</label>
                                                    <input type="text" class="form-control" placeholder="">

                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Discount</label>
                                                    <select class="form-control select2 select2-hidden-accessible"
                                                            style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                        <option>10%</option>
                                                        <option>20%</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div clas="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3 class="box-title">Dimension</h3>
                                                <hr>
                                                <div class="box-body">
                                                    <input type="text" class="form-control" placeholder="Width">
                                                    <br>
                                                    <input type="text" class="form-control" placeholder="Height">
                                                    <br>
                                                    <input type="text" class="form-control" placeholder="length">
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>


                                    <div clas="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select class="form-control select2 select2-hidden-accessible"
                                                            style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                        <option>Pre-Order</option>
                                                        <option>In Stock</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">Choose Image</label>
                                                            <input type="file" id="exampleInputFile">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="col-md-12">
                                            <img src="/images/cart_1.jpg" height="100%" width="100%"
                                                 alt="Girl in a jacket">
                                        </div>
                                    </div>


                                </form>
                            </div>
                            <!-- /.box-body -->


                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Import</button>
                            </div>
                        </div>
                    </div>
                </div>
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
                                    <th rowspan="1" colspan="1">Image</th>
                                    <th rowspan="1" colspan="1">Product Name</th>
                                    <th rowspan="1" colspan="1">Barcode</th>
                                    <th rowspan="1" colspan="1">Discount</th>
                                    <th rowspan="1" colspan="1">Size</th>
                                    <th rowspan="1" colspan="1">Cost</th>
                                    <th rowspan="1" colspan="1">Price</th>
                                    <th rowspan="1" colspan="1">Description</th>
                                    <th rowspan="1" colspan="1">Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td class="sorting_1 ">
                                        <img src="/images/cart_1.jpg" height="50%" alt="Girl in a jacket">
                                    </td>
                                    <td>Shoes</td>
                                    <td>078760567</td>
                                    <td>10%</td>
                                    <td>40</td>
                                    <td>$6.00</td>
                                    <td>$40.00</td>
                                    <td>This shoes is for people no crush</td>
                                    <td>
                                        <a href="#" class="btn btn-primary a-btn-slide-text">
                                            <span class="fa fa-edit" aria-hidden="true"></span>
                                        </a>
                                        <a href="#" class="btn btn-primary a-btn-slide-text">
                                            <span class="fa fa-trash" aria-hidden="true"></span>
                                        </a>
                                    </td>


                                </tr>

                                <tr>
                                    <td class="sorting_1 ">
                                        <img src="/images/cart_1.jpg" height="50%" alt="Girl in a jacket">
                                    </td>
                                    <td>Shoes</td>
                                    <td>078760567</td>
                                    <td>10%</td>
                                    <td>40</td>
                                    <td>$6.00</td>
                                    <td>$40.00</td>
                                    <td>This shoes is for people no crush</td>
                                    <td>
                                        <a href="#" class="btn btn-primary a-btn-slide-text">
                                            <span class="fa fa-edit" aria-hidden="true"></span>
                                        </a>
                                        <a href="#" class="btn btn-primary a-btn-slide-text">
                                            <span class="fa fa-trash" aria-hidden="true"></span>
                                        </a>
                                    </td>


                                </tr>
                                </tbody>
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


        <!-- bootstrap Modal -->

    </script>
@stop
@stop