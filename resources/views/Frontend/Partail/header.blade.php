<div class="header">
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light col-md-12"
                 style="background-color: white;z-index: 50000;position: fixed;padding: 0px;box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;">

                {{-- Nav Phone --}}
                <div class="screen">
                    <header>
                        <a class="target-burger">
                            <ul class="buns">
                                <li class="bun"></li>
                                <li class="bun"></li>
                            </ul>
                            <!--buns-->
                        </a>
                        <!--target-burger-->
                    </header>
                </div>
                <div class="screen">
                    <nav class="main-nav" role="navigation">
                        <ul>
                            <li><a href="">
                                    <span>My Account</span>
                                </a>
                            </li>
                            <li><a href=""><span>Billing Information</span></a></li>
                            <li><a href=""><span>Order Tracker</span></a></li>
                            <li><a href=""><span>Change Password</span></a></li>
                            <li><a href=""><span>Log Out</span></a></li>
                        </ul>
                    </nav>
                    <!--main-nav-->
                    <div class="container">
                        <div class="app-content">
                        </div>
                        <!--app-content-->
                    </div>
                    <!--contaienr-->
                </div>
                <!--screen-->
                {{-- End Nav Phone--}}

                <div class="col-md-2 col-sm-5 col-5" style="margin: 0 auto">
                    <a class="navbar-brand" href="/">
                        <img src="{{asset('images/pink-flamingo-2017.png')}}" alt="" style="width: 100%">
                    </a>
                </div>

                <div class="col-md-8">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pricing</a>
                            </li>
                        </ul>
                    </div>
                    <div class="top-search col-sm-12">
                        <form style="position: relative">
                            <input type="text" placeholder="Search..." name="search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="nav-right" style="position: relative">
                        @if (Auth::guard('customers')->guest())
                            <div class="nav-user-account" data-widget-cid="widget-10">
                                <div class="user-account-info" data-role="user-account-top">
                                    <div class="user-account-inner">
                                        <div style="font-size: 12px">
                                            <span>Hello.Sign in</span>
                                        </div>
                                        <span class="account-unsigned" data-role="unsigned">
                                        <a href="{{url('/customer-login')}}">Sign in</a>
                                            <span class="ua-line">|</span>
                                        <a href="{{url('/register')}}">Join</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="user-account-main" data-role="user-account-main">
                                    <hr>
                                    <div class="flyout-user-signIn" data-role="user-signIn" style="display: block;">
                                        <p class="flyout-welcome-text" data-role="flyout-welcome">Welcome to SN9
                                            Fashion</p>

                                        <p><a class="sign-btn" data-role="sign-link" href="{{url('/customer-login')}}"
                                              rel="nofollow"
                                              onclick="document.getElementById('id01').style.display='block'"
                                              style="width:auto;">Sign in</a>
                                        </p>
                                        <hr style="padding-left: 5px">
                                    </div>
                                    <dl class="flyout-visitors-login" data-role="user-login" style="display: block;">
                                        <dt>New Customer?</dt>
                                        <p><a class="join-btn" rel="nofollow"
                                              onclick="document.getElementById('id02').style.display='block'">Join
                                                Free</a></p>
                                    </dl>
                                    <div class="flyout-remind-list" id="flyout-remind-list"></div>
                                </div>
                            </div>
                        @elseif (Auth::guard('customers')->check())
                            <div class="nav-user-account" data-widget-cid="widget-10">
                                <div class="user-account-info" data-role="user-account-top">
                                    <div class="user-account-inner">
                                        <div style="font-size: 12px">
{{--                                            <span>{{ Auth::guard('customers')->name }}</span>--}}
{{--                                            <span>{{ Auth::guard('customers')->namel }}</span>--}}
                                            <span>Hong</span>
                                        </div>
                                        <span class="account-unsigned" data-role="unsigned">
                                            <a data-role="sign-link"
                                               href="{{ url('/setting-profile') }}">Account & List</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="user-account-main" data-role="user-account-main">
                                    <hr>
                                    <dl class="flyout-visitors-login" data-role="user-login"
                                        style="display: block;">
                                        {{--<dt>New Customer?</dt>--}}
                                        <p><a class="join-btn" data-role="join-link" href="{{ url('/cus_logout') }}"
                                              rel="nofollow">Sign
                                                out</a></p>
                                    </dl>
                                    <div class="flyout-remind-list" id="flyout-remind-list"></div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>