@if(Auth::guard('admin')->check())
    @include('backend.layouts.nav-admin')
@elseif(Auth::guard('web')->check())
    @include('backend.layouts.nav-user')
@endif