<!doctype html>
<html lang="en">
<head>
    <title>Sign Up</title>
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

    @yield('header_script')

</head>
<body>
<div class="signup-page-main">
    <div class="signup-main">
        <div class="signup-head">
            <h1>Sign Up</h1>
        </div>
        <div class="signup-block">
            <form action="{{ route('register') }}" method="post">
                {{ csrf_field() }}
                <input type="text" name="name" placeholder="Name" required="" value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <span class="help-block small">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
                <input type="text" name="email" placeholder="Email" required="" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <span class="help-block small">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <input type="password" name="password" class="lock" placeholder="Password">
                @if ($errors->has('password'))
                    <span class="help-block small">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <input type="password" name="password_confirmation" class="lock" placeholder="Password Confirmation">
                <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
            </form>
            <div class="sign-down">
                <h4>Already have an account? <a href="{{ route('login') }}"> Login here.</a></h4>
                <h5><a href="index.html">Go Back to Home</a></h5>
            </div>
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