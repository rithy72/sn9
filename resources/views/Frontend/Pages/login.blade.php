@extends('Frontend.main')

@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">


    </style>
@stop

@section('content')
    <section class="login-block" style="margin-top: 85px">
        <div class="container custom-container">
            <div class="row">
                <div class="col-md-4 login-sec">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>
                                {{ $message }}
                            </p>
                        </div>
                    @endif
                    @if ($message = Session::get('warning'))
                        <div class="alert alert-warning">
                            <p>
                                {{ $message }}
                            </p>
                        </div>
                    @endif

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
                    @if(Session::has('flash_message_error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{!! session('flash_message_error') !!}</strong>
                        </div>
                    @endif
                    @if(Session::has('flash_message_success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{!! session('flash_message_success') !!}</strong>
                        </div>
                    @endif
                    <h2 class="text-center">Login Now</h2>
                    <form class="login-form" method="post" action="{{ url('customer-login') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="exampleInputEmail1" class="text-uppercase">Username</label>
                            <input type="email" name="email" class="form-control form-control-lg"
                                   placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"
                                   required="">
{{--                            {!! Form::input('username','','',['class' => 'form-control','placeholder' => 'username']) !!}--}}

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="text-uppercase">Password</label>
                            <input type="password" name="password" class="form-control form-control-lg"
                                   placeholder="Password" aria-label="Password" aria-describedby="basic-addon1"
                                   required="">
{{--                            {!! Form::input('password','','',['class' => 'form-control','placeholder' => 'password']) !!}--}}
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                <small>Remember Me</small>
                            </label>
                            <button type="submit" class="btn btn-login float-right">Submit</button>
                        </div>

                    </form>
                    <div class="copy-text">Created with <i class="fa fa-heart"></i> by <a href="http://grafreez.com">Grafreez.com</a></div>
                </div>
                <div class="col-md-8 banner-sec">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="{{asset('images/people-coffee-tea-meeting.jpg')}}" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="banner-text">
                                        <h2>This is Heaven</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="{{asset('images/people-coffee-tea-meeting.jpg')}}" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="banner-text">
                                        <h2>This is Heaven</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="{{asset('images/pexels-photo-872957.jpeg')}}" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="banner-text">
                                        <h2>This is Heaven</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop