<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="Updates and statistics" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>@yield('title') - Admin Goreala</title>
    @include('admin.layouts.css')
</head>
<body id="kt_body" class="header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-secondary-enabled aside-minimize">
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile">
        <a href="{{ route('home') }}">
            <img alt="Salvus" src="{{ asset('assets/img/triangle-green.png') }}" class="logo-default max-h-30px" />
        </a>
        <div class="d-flex align-items-center">
            <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
                <span></span>
            </button>
        </div>
    </div>
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-row flex-column-fluid page">
            @include('admin.layouts.side_menu')
            <div class="d-flex flex-column flex-row-fluid wrapper">
                <div class="content d-flex flex-column flex-column-fluid">
                    @include('admin.layouts.header')
                    <!-- 
                        ＿人人人人人人人人人＿
                     ＞     COUNT PERILS     ＜
                        ￣Y^Y^Y^Y^Y^Y^Y^Y^Y￣ 
                    -->
                        @yield('content')
                    <!-- 
                      ＿人人人人人人人人人＿
                    ＞     END CONTENT    ＜
                      ￣Y^Y^Y^Y^Y^Y^Y^Y^Y￣ 
                    -->
                </div>

                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted font-weight-bold mr-2"> &copy;
                                <script>
                                    document.write(new Date().getFullYear())
                                </script></span>
                            <a href="#" class="text-dark-75 text-hover-primary">PT Salvus Inti</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="d-flex flex-column flex-row-fluid wrapper">
        <div class="content d-flex flex-column flex-column-fluid">
            <div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
                <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                    <!--begin::Info-->
                    <div class="d-flex align-items-center flex-wrap mr-1">
                        <!--begin::Page Heading-->
                        <div class="d-flex align-items-baseline flex-wrap mr-5">
                            <!--begin::Page Title-->
                            <h2 class="subheader-title text-dark font-weight-bold my-1 mr-3">Dashboard</h2>
                            <!--end::Page Title-->
                        </div>
                        <!--end::Page Heading-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Toolbar-->
                    <div class="d-flex align-items-center">
                        <!--begin::Dropdown-->
                        <div class="dropdown dropdown-inline">
                            <a href="#" class="btn btn-fixed-height btn-white btn-hover-primary font-weight-bold px-2 px-lg-5 mr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="svg-icon svg-icon-success svg-icon-lg">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
                                    <title>Stockholm-icons / General / User</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs></defs>
                                    <g id="Stockholm-icons-/-General-/-User" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                                        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" id="Mask" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" id="Mask-Copy" fill="#000000" fill-rule="nonzero"></path>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span></a>
                            <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                <!--begin::Navigation-->
                                <ul class="navi navi-hover">
                                    <li class="navi-footer py-4">
                                        <a class="btn btn-clean font-weight-bold w-100 text-left" href="http://momentic4.salvustest.xyz/admin/users/edit/1">Profile</a>
                                    </li>
                                    <li class="navi-footer py-4">
                                        <a class="btn btn-clean font-weight-bold w-100 text-left" href="http://momentic4.salvustest.xyz/auth/signoff">Log Out</a>
                                    </li>
                                </ul>
                                <!--end::Navigation-->
                            </div>
                        </div>
                        <!--end::Dropdown-->
                    </div>
                    <!--end::Toolbar-->
                </div>
            </div>
            
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                @yield('content')
                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted font-weight-bold mr-2"> &copy;
                                <script>
                                    document.write(new Date().getFullYear())
                                </script></span>
                            <a href="#" class="text-dark-75 text-hover-primary">PT Salvus Inti</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

</div>
</body>
@include('admin.layouts.js')
</html>