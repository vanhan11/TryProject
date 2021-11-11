<div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
    <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <div class="d-flex align-items-center flex-wrap mr-1">
            <div class="d-flex align-items-baseline flex-wrap mr-5">
                @if(count(Request::segments()) == null || Request::segment(2) == "dashboard")
                    <span class="subheader-title text-dark font-weight-bold my-1 mr-3">Dashboard </span>
                @else 
                    @for($i = 1; $i <= count(Request::segments()); $i++)
                        @if($i < count(Request::segments()) && $i > 0)
                            <span class="subheader-title text-dark font-weight-bold my-1 mr-3"> {{ ucwords(str_replace("-"," ",Request::segment($i))) }} </span> / &nbsp;&nbsp;&nbsp;
                        @else
                            <span class="subheader-title text-dark font-weight-bold my-1 mr-3"> {{ ucwords(str_replace("-"," ",Request::segment($i))) }} </span>
                        @endif
                    @endfor
                @endif
            </div>
        </div>
        <div class="d-flex align-items-center">
            <div class="dropdown dropdown-inline">
                <a href="#" class="btn btn-fixed-height btn-white btn-hover-primary font-weight-bold px-2 px-lg-5 mr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="svg-icon svg-icon-success svg-icon-lg">
                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Stockholm-icons-/-General-/-User" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                            <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" id="Mask" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                            <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" id="Mask-Copy" fill="#000000" fill-rule="nonzero"></path>
                        </g>
                    </svg>
                </span></a>
                <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                    <ul class="navi navi-hover">
                        <li class="navi-footer py-4">
                            <a class="btn btn-clean font-weight-bold w-100 text-left" href="{{ route('user.edit',Sentinel::getUser()->id) }}">Profile</a>
                        </li>
                        <li class="navi-footer py-4">
                            <a class="btn btn-clean font-weight-bold w-100 text-left" href="{{ route('logout') }}">Log Out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <div class="navbar-minimize">
                <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                    <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                    <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
                </button>
            </div>
            @php
                $link = '';
            @endphp
            @if(count(Request::segments()) == null)
                <span class="navbar-brand">Dashboard </span>
            @endif
            @for($i = 1; $i <= count(Request::segments()); $i++)
                @if($i < count(Request::segments()) && $i > 0)
                    @php
                        $link .= "/" . Request::segment($i);
                    @endphp
                    <span class="navbar-brand"> {{ ucwords(str_replace("-"," ",Request::segment($i))) }} </span> /
                @else
                    <span class="navbar-brand"> {{ ucwords(str_replace("-"," ",Request::segment($i))) }} </span>
                @endif
            @endfor
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">person</i>
                        <p class="d-lg-none d-md-block">
                            Account
                        </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}">Log out</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav> --}}