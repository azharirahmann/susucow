<!doctype html>
<html lang="en">
<head>
    @include('backend.layouts.header')
</head>
<body>
    <div class="page-container">
        <div class="left-content">
            <div class="mother-grid-inner">
                @include('backend.layouts.nav')
                <div class="inner-block">
                    @include('backend.layouts.message')
                    @yield('content')
                </div>
                @include('backend.layouts.footer')
            </div>
        </div>
        @include('backend.layouts.sidebar')
    </div>
    @include('backend.layouts.footer_script')
</body>
</html>