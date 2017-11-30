<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <link href="{{ asset('dash/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
    <!-- Custom Theme files -->
    <link href="{{ asset('dash/css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <!--js-->
    <script src="{{ asset('dash/js/jquery-2.1.1.min.js') }}"></script>
    <!--icons-css-->
    <link href="{{ asset('dash/css/font-awesome.css') }}" rel="stylesheet">
    <!--Google Fonts-->
    <link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
    <!--skycons-icons-->
    <script src="{{ asset('dash/js/skycons.js') }}"></script>
    <!--//skycons-icons-->
</head>
<body>
<div class="login-page">
    <div class="login-main">
        <div class="login-head">
            <h1>Login</h1>
        </div>
        <div class="login-block">
            <form action="{{ route('login') }}" method="post">
                {{ csrf_field() }}
                <input type="text" name="email" placeholder="Email" required="">
                <input type="password" name="password" class="lock" placeholder="Password">
                @if($errors->has('email') || $errors->has('password'))
                    <div class="alert alert-danger">
                        <span class="help-block"> <b>Error :</b>
                            Email atau password tidak cocok
                        </span>
                    </div>
                @endif
                <button type="submit" class="btn btn-primary btn-block">Login</button>
                <h3>Not a member?<a href="{{ route('register') }}"> Sign up now</a></h3>
            </form>
            <h5><a href="index.html">Go Back to Home</a></h5>
        </div>
    </div>
</div>
@include('backend.layouts.footer')
<!--scrolling js-->
<script src="{{ asset('dash/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('dash/js/scripts.js') }}"></script>
<!--//scrolling js-->
<script src="{{ asset('dash/js/bootstrap.js') }}"></script>
</body>
</html>