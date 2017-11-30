@if(Auth::guard('admin')->check())
    @include('backend.layouts.sidebar-admin')
@elseif(Auth::guard('web')->check())
    @include('backend.layouts.sidebar-user')
@endif