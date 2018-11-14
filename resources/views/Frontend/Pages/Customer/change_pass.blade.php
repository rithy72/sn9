@extends('Frontend.Pages.setting')

@section('active')
    Account
@stop
@section('account')
    active
@stop

@section('content')

    <div class="row">

        <div class="col-md-1">
        </div>
        <div class="col-md-8 order-md-1">
            @if (session('msg'))
                <div class="alert alert-success">
                    {{ session('msg') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="needs-validation" action="{{route('setting.update-pass')}}" method="POST">
                {{csrf_field()}}

                <div class="form-group">
                    <label for="address">Current Password</label>
                    <input type="text" class="form-control" id="pass" placeholder="Enter Your Current Password" required="" name="old_password">
                </div>

                <div class="form-group">
                    <label for="address">New Password</label>
                    <input type="text" class="form-control" id="new-pass" placeholder="Enter Your New Password" required="" name="new_password">
                </div>

                <div class="form-group">
                    <label for="address">Confirm New Password</label>
                    <input type="text" class="form-control" id="con-pass" placeholder="Enter Your Confirm Password" required="" name="confirm_password">
                </div>

                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Save Change</button>
            </form>
        </div>
    </div>

@stop