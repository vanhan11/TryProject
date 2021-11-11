<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') - Salvus Inti</title>
    <meta charset="utf-8" />
    <meta name="description" content="Login Salvus Cargo" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    @include('auth.layouts.css')
</head>

<body id="kt_body"
    class="header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-secondary-enabled page-loading">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        @if (Session::has('form') && Session::get('form') == 'register')
        @php
        $status = "signup"
        @endphp
        @else
        @php
        $status = "signin"
        @endphp
        @endif
        <div class="login login-3 login-{{$status}}-on d-flex flex-row-fluid" id="kt_login">
            <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid"
                style="background-image: url({{asset('assets/backend/media/bg/bg-3.jpg')}});">
                <div class="login-form text-center p-7 position-relative overflow-hidden">
                    @if (Session::has('error'))
                    <div class="alert alert-custom alert-light-danger fade show mb-5" role="alert">
                        <div class="alert-icon"><i class="flaticon-warning"></i></div>
                        <div class="alert-text">{{ Session::get('error') }}</div>
                        <div class="alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="ki ki-close"></i></span>
                            </button>
                        </div>
                    </div>
                    @endif
                    @if (Session::has('success'))
                    <div class="alert alert-custom alert-light-primary fade show mb-5" role="alert">
                        <div class="alert-icon"><i class="flaticon-warning"></i></div>
                        <div class="alert-text">{{ Session::get('success') }}</div>
                        <div class="alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="ki ki-close"></i></span>
                            </button>
                        </div>
                    </div>
                    @endif
                    <!--begin::Login Header-->
                    <div class="d-flex flex-center mb-15">
                        <a href="#">
                            <img src="{{asset('assets/img/salvus-logo-green.png')}}" class="max-h-50px" alt="" />
                        </a>
                    </div>
                    {{-- Login --}}
                    <div class="login-signin">
                        <div class="mb-20">
                            <h3>Sign In To Continue</h3>
                            <p class="text-muted font-weight-bold">Enter your details to login to your account:</p>
                        </div>
                        <form class="form" id="kt_login_signin_form" method="POST" action="{{ route('login.post') }}">
                            @csrf
                            <div class="form-group">
                                <input
                                    class="form-control form-control-solid h-auto text-dark rounded-pill border-0 py-4 px-8 mb-5 @error('email') is-invalid @enderror"
                                    type="email" placeholder="Email" name="email" value="{{ old('email') }}" />
                                @error('email')
                                <div class="fv-plugins-message-container">
                                    <div data-field="email" data-validator="notEmpty" class="fv-help-block">
                                        {{ $message }}</div>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input
                                    class="form-control form-control-solid h-auto text-dark rounded-pill border-0 py-4 px-8 mb-5 @error('password') is-invalid @enderror"
                                    type="password" placeholder="Password" name="password" />
                                @error('password')
                                <div class="fv-plugins-message-container">
                                    <div data-field="email" data-validator="notEmpty" class="fv-help-block">
                                        {{ $message }}</div>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group d-flex flex-wrap justify-content-between align-items-center px-8">
                                <div class="checkbox-inline">
                                    <label class="checkbox checkbox-outline text-muted m-0">
                                        <input type="checkbox" name="remember" />
                                        <span></span>Remember me</label>
                                </div>
                                {{-- <a href="javascript:;" id="kt_login_forgot" class="text-muted font-weight-bold">Forget Password ?</a> --}}
                            </div>
                            <div class="form-group text-center mt-10">
                                <button type="submit" id="kt_login_signin_submit"
                                    class="btn btn-pill btn-outline-primary font-weight-bold opacity-90 px-15 py-3">Sign
                                    In</button>
                            </div>
                        </form>
                        {{-- <div class="mt-10">
                            <span class="mr-4">Don't have an account yet?</span>
                            <a href="javascript:;" id="kt_login_signup" class="text-muted text-hover-primary font-weight-bold">Sign Up</a>
                        </div> --}}
                    </div>
                    {{-- Register --}}
                    <div class="login-signup">
                        <div class="mb-20">
                            <h3>Sign Up</h3>
                            <p class="opacity-60">Enter your details to create your account</p>
                        </div>
                        <form class="form text-center" id="kt_login_signup_form" method="POST"
                            action="{{ route('register.post') }}">
                            @csrf
                            <div class="form-group">
                                <input
                                    class="form-control form-control-solid h-auto text-dark rounded-pill border-0 py-4 px-8 @error('name') is-invalid @enderror"
                                    type="text" placeholder="Name" name="name" value="{{ old('name') }}" />
                                @error('name')
                                <div class="fv-plugins-message-container">
                                    <div data-field="email" data-validator="notEmpty" class="fv-help-block">
                                        {{ $message }}</div>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input
                                    class="form-control form-control-solid h-auto text-dark rounded-pill border-0 py-4 px-8 @error('email') is-invalid @enderror"
                                    type="email" placeholder="Email" name="email" autocomplete="off" />
                                @error('email')
                                <div class="fv-plugins-message-container">
                                    <div data-field="email" data-validator="notEmpty" class="fv-help-block">
                                        {{ $message }}</div>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input
                                    class="form-control form-control-solid h-auto text-dark rounded-pill border-0 py-4 px-8 @error('password') is-invalid @enderror"
                                    type="password" placeholder="Password" name="password" />
                                @error('password')
                                <div class="fv-plugins-message-container">
                                    <div data-field="email" data-validator="notEmpty" class="fv-help-block">
                                        {{ $message }}</div>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input
                                    class="form-control form-control-solid h-auto text-dark rounded-pill border-0 py-4 px-8 @error('password_confirmation') is-invalid @enderror"
                                    type="password" placeholder="Confirm Password" name="password_confirmation" />
                                @error('password_confirmation')
                                <div class="fv-plugins-message-container">
                                    <div data-field="email" data-validator="notEmpty" class="fv-help-block">
                                        {{ $message }}</div>
                                </div>
                                @enderror
                            </div>
                            {{-- <div class="form-group text-left px-8">
                                <div class="checkbox-inline">
                                    <label class="checkbox checkbox-outline text-muted m-0">
                                    <input type="checkbox" name="agree" />
                                    <span></span>I Agree the
                                    <a href="#" class="text-primary font-weight-bold ml-1">terms and conditions</a>.</label>
                                </div>
                                <div class="form-text text-muted text-center"></div>
                            </div> --}}
                            <div class="form-group">
                                <button type="submit" id="kt_login_signup_submit"
                                    class="btn btn-pill btn-outline-primary font-weight-bold opacity-90 px-15 py-3 m-2">Sign
                                    Up</button>
                                <button id="kt_login_signup_cancel"
                                    class="btn btn-pill btn-outline-primary font-weight-bold opacity-70 px-15 py-3 m-2">Cancel</button>
                            </div>
                        </form>
                    </div>
                    <!--end::Login Sign up form-->
                    <!--begin::Login forgot password form-->
                    <div class="login-forgot">
                        <div class="mb-20">
                            <h3>Forgotten Password ?</h3>
                            <p class="opacity-60">Enter your email to reset your password</p>
                        </div>
                        <form class="form" id="kt_login_forgot_form">
                            <div class="form-group mb-10">
                                <input class="form-control h-auto form-control-solid rounded-pill border-0 py-4 px-8"
                                    type="text" placeholder="Email" name="email" autocomplete="off" />
                            </div>
                            <div class="form-group">
                                <button id="kt_login_forgot_submit"
                                    class="btn btn-pill btn-outline-primary font-weight-bold px-15 py-3 m-2">Request</button>
                                <button id="kt_login_forgot_cancel"
                                    class="btn btn-pill btn-outline-primary font-weight-bold px-15 py-3 m-2">Cancel</button>
                            </div>
                        </form>
                    </div>
                    <!--end::Login forgot password form-->
                </div>
            </div>
        </div>
        <!--end::Login-->
    </div>
</body>
@include('auth.layouts.js')

</html>
