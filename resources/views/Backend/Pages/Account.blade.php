@extends('Backend.main')

@section('content')
    <div class="container">
        <div class="row margin-top-15">
        </div>

        <div class="box box-primary">
            <!-- form start -->
            {!! Form::open(['route' => 'admin.account', 'method' => 'post']) !!}
            <div class="box-body">
                <div class="form-group">
                    <img class="center-block" src="{{url('/images/admin.jpg')}}" alt="">
                </div>
                <div class="form-group">
                    <label for="password" class="margin-top-15">Change Password</label>
                    <hr class="margin-10">
                    <div class="row">
                        <div class="col-sm-2 col-md-2">
                            <label class="float-right control-label" for="current_password">Current Password</label>
                        </div>
                        <div class="col-sm-10 col-md-10">
                            {!! Form::text('current_pass','', array('class' => 'form-control','placeholder'=>'Current password')) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-2 col-md-2">
                            <label class="float-right control-label" for="new_password">New Password</label>
                        </div>
                        <div class="col-sm-10 col-md-10">
                            {!! Form::text('new_pass','', array('class' => 'form-control','placeholder'=>'New password')) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-2 col-md-2">
                            <label class="float-right control-label" for="confirm_password">Confirm Password</label>
                        </div>
                        <div class="col-sm-10 col-md-10">
                            {!! Form::text('confirm_pass','', array('class' => 'form-control','placeholder'=>'Confirm password')) !!}
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary float-right">Save</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop