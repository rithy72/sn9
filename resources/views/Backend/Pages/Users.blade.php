@extends('Backend.main')

@section('head')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('/css/Backend_style/dataTables.bootstrap.min.css')}}">


@stop

@section('content')
    <div class="container" style="background: white">
        <div class="card">
            <div class="row">
                <div class="btn btn-border margin-10 custom-dialog">Create</div>
            </div>
            <hr>

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
                                    <th rowspan="1" colspan="1">User Name</th>
                                    <th rowspan="1" colspan="1">Email</th>
                                    <th rowspan="1" colspan="1">Last Login</th>
                                    <th rowspan="1" colspan="1">Date of Birth</th>
                                    <th rowspan="1" colspan="1">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr role="row" class="odd">
                                    <td class="center"><img src="{{url('images/admin.jpg')}}" alt=""
                                                            style="max-width: 50px;max-height: 50px"></td>
                                    <td>Kimhak</td>
                                    <td>tankimhak5@gmail.com</td>
                                    <td>18-08-2018</td>
                                    <td>18-02-1990</td>
                                    <td class="center">
                                        <a href="#"><i class="fa fa-trash" style="color:red;"></i></a>
                                        <a href="#"><i class="fa fa-pencil" style="color:yellowgreen;"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">Image</th>
                                    <th rowspan="1" colspan="1">User Name</th>
                                    <th rowspan="1" colspan="1">Email</th>
                                    <th rowspan="1" colspan="1">Last Login</th>
                                    <th rowspan="1" colspan="1">Date of Birth</th>
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