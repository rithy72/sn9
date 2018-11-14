<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('css/Backend_style/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('css/Backend_style/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/Backend_style/skins/_all-skins.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/Backend_style/AdminLTE.min.css')}}">

    {{--custom style--}}
    <link rel="stylesheet" href="{{asset('css/Backend_style/style.css')}}">

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <link rel="stylesheet" href="{{url('/css/Backend_style/jquery-ui.css')}}">
    @yield('head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

{{-- Header --}}
@include('Backend.Partail.header')

<!-- Left side column. contains the logo and sidebar -->
@include('Backend.Partail.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
        @include('Backend.Pages.popup')
    </div>

    <!-- /.content-wrapper -->
    <footer class="main-footer">

        <strong>Copyright &copy; 2014-2016 </strong> All rights
        reserved.
    </footer>


</div>

<!-- jQuery 3 -->
<script src="{{asset('js/Backend_js/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('js/Backend_js/bootstrap.min.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{asset('js/Backend_js/adminlte.min.js')}}"></script>

<script src="{{asset('js/Backend_js/jquery-ui.js')}}"></script>

{{-- pop up create user--}}
<script type="text/javascript">
    $(document).ready(function () {
        $('.custom-dialog').click(function () {
            $('.dialog-user').dialog("open");
        });
        $('.dialog-user').dialog({
            draggable: false,
            resizable: false,
            closeOnEscape: false,
            modal: true,
            autoOpen: false
        });
    })
</script>
{{--End popup create user--}}


@yield('script')


</body>
</html>
