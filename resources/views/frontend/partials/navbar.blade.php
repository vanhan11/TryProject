<header class="wrapper pt20 pb20 tbgc1 section-fix header-wrapper fixed-top" style="z-index: 10;">
    <div class="row">
        <div class="column large-3 medium-4">
            <div class="logo component">
                <a href="{{ route('goreala') }}" class="link">
                    <img src="{{ URL::to('/assets/img/logogori.png') }}" height="50px" alt="logo" class="">
                </a>
            </div>
        </div>
        {{-- <div class="column medium-1">
            <h1>GOREALA</h1>
        </div> --}}
        <div class="column large-9 medium-6">
            <div class="wrapper pt20 pb20 js-menu-container">
                <nav class="menu component">
                    <ul class="list inline xsgutter ac">
                        @if(\Request::route()->getName() == "goreala")
                        //mulai
                        <li><a class="link fz2 fw3 ttu ctm link_route" href="#upcoming">UPCOMING</a></li>
                        <li><a class="link fz2 fw3 ttu ctm link_route" href="#protected">PROTECTED TRIP</a></li>
                        <li><a class="link fz2 fw3 ttu ctm link_route" href="#programs">PROGRAMS</a></li>
                        <li><a class="link fz2 fw3 ttu ctm link_route" href="#tours">TOURS</a></li>
                        <li><a class="link fz2 fw3 ttu ctm link_route" href="#blog">BLOG</a></li>
                        <li><a class="link fz2 fw3 ttu ctm link_route" href="#testimonials">TESTIMONIALS</a></li>
                        <li><a class="link fz2 fw3 ttu ctm link_route" href="#contacts">CONTACTS</a></li>
                        <li>
                            @if (Sentinel::guest())
                            <a href="{{ route('login_user') }}" class="link fz2 fw3 ttu ctm">LOGIN/REGISTER</a>
                            @else
                            <div class="dropdown">
                                <a class="link fz2 fw3 ttu ctm dropbtn nav_dropdown" href="javascript:;">
                                    {{ Sentinel::getUser()->name }}</a>
                                <div class="dropdown-content">
                                    <a href="{{ route('profile_user') }}" class="link fz2 fw3 ttu ctm mt5 mb5 ac">
                                        Profile </a>
                                    <a class="link fz2 fw3 ttu ctm mt5 mb5 ac" href="{{ route('logout_user') }}">Logout</a>
                                </div>
                            </div>
                            @endif
                        </li>
                        //akhir
                    </ul>

                        @else
                        <ul class="list inline xsgutter ar" >
                        <li><a class="link fz2 fw3 ttu ctm " href="{{ route('goreala') }}">HOME</a></li>    
                        <li class="ar" >
                        @if (Sentinel::guest())
                        {{-- <a href="{{ route('login_user') }}" class=" ar link fz2 fw3 ttu ctm">LOGIN/REGISTER</a> --}}
                        @else
                        <div class="dropdown ar">
                            <a class="link fz2 fw3 ttu ctm dropbtn nav_dropdown" href="javascript:;">
                                {{ Sentinel::getUser()->name }}</a>
                            <div class="dropdown-content">
                                <a href="{{ route('profile_user') }}" class="link fz2 fw3 ttu ctm mt5 mb5 ac">
                                    Profile </a>
                                <a class="link fz2 fw3 ttu ctm mt5 mb5 ac" href="{{ route('logout_user') }}">Logout</a>
                            </div>
                        </div>
                        @endif
                        </li>
                        </ul>
                        @endif
                    
                    <div class="component menutoggle js-menu-toggle">
                        <span class="line"></span>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>


{{-- <a class="link fz2 fw3 ttu ctm dropbtn nav_dropdown" href="javascript:;">
{{ Sentinel::getUser()->name }}</a>
<div id="myDropdown" class="dropdown-content">
<a href="#" class="link fz2 fw3 ttu ctm"> Profile </a>
<a class="link fz2 fw3 ttu ctm" href="{{ route('logout') }}">Logout</a>
</div> --}}