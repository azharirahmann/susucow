<div class="header-main">
    <div class="header-left">
        <div class="logo-name">
            <a href="#"> <h1>Susucow</h1>
                <!--<img id="logo" src="" alt="Logo"/>-->
            </a>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="header-right">
        <div class="profile_details">
            <ul>
                <li class="dropdown profile_details_drop">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <div class="profile_img">
                            <span class="prfil-img"><img src="images/p1.png" alt=""> </span>
                            <div class="user-name">
                                <p>{{Auth::guard('admin')->user()->name}}</p>
                                <span>Administrator</span>
                            </div>
                            <i class="fa fa-angle-down lnr"></i>
                            <i class="fa fa-angle-up lnr"></i>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                    <ul class="dropdown-menu drp-mnu">
                        <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
                        <li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
                        <li> <a href="{{ route('admins.logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i> Logout</a>
                        </li>
                        <form id="logout-form" action="{{ route('admins.logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
</div>