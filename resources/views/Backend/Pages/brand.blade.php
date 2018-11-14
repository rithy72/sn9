@extends('Backend.main')

@section('head')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('/css/Backend_style/dataTables.bootstrap.min.css')}}">

@stop

@section('content')
    <div class="container" style="background: white">
        <div class="card">
        <h3 class="card-title">List Brand</h3>
         <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Create</button>  
            <hr>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                     <h4 class="modal-title" id="myModalLabel">Create Brand</h4>
                </div>
                <div class="modal-body">
                   <div class="form-group">
                   <label>Create Brand</label>
                    <input type="text" class="form-control my-colorpicker1">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Create</button>
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
                                    <th rowspan="1" colspan="1">Brand Name</th>
                                    <th rowspan="1" colspan="1">Created Date</th>
                                    <th rowspan="1" colspan="1">Updated Date</th>
                                    <th rowspan="1" colspan="1">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                               
                                <tr role="row" class="odd">
                                    <td>Shoes</td>
                                    <td>16/09/18</td>
                                    <td>16/09/18</td>
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