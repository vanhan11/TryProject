@extends('auth.layouts.master')

@section('title')
Login
@endsection

@push('css')

@endpush

@section('content')
<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex pt-4 px-4">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line py-auto">
                        <img src="{{ asset('assets/img/salvus.png') }}" class="img-fluid"> 
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <form action="{{ route('login.post') }}" method="POST">
                    @csrf
                    <div class="card2 card border-0 px-4 pt-5 mt-2">
                        @if (Session::has('error'))
                            <div class="px-1">
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    {{ Session::get('error') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        @endif
                        @if (Session::has('success'))
                            <div class="px-1">
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    {{ Session::get('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        @endif
                        <div class="row px-3 mb-4">
                            <label class="mb-1">
                                <h6 class="mb-0 text-sm">Email Address</h6>
                            </label>
                            <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" placeholder="Enter Email Address" value="{{ old('email') }}"> 
                            @error('email') 
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row px-3 mb-4"> 
                            <label class="mb-1">
                                <h6 class="mb-0 text-sm">Password</h6>
                            </label> 
                            <input type="password" name="password" placeholder="Enter password" class="form-control @error('password') is-invalid @enderror"> 
                            @error('password') 
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row px-3 mb-4">
                            <div class="custom-control custom-checkbox custom-control-inline"> 
                                <input id="chk1" type="checkbox" name="remember" class="custom-control-input"> 
                                <label for="chk1" class="custom-control-label text-sm">Remember me</label> 
                            </div> 
                            <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a>
                        </div>
                        <div class="row mb-3 px-3">
                            <button type="submit" class="btn btn-primary text-center" style="width: 150px">Login</button>
                        </div>
                        {{-- <div class="row mb-4 px-3"> 
                            <small class="font-weight-bold">
                                Do not have an account? <a class="text-danger" href="{{ route('register.index') }}">Register</a>
                            </small>
                         </div>  --}}
                    </div>
                </form>
            </div>
        </div>
        <div class="bg-blue py-4">
            <div class="row px-3">
                <small class="ml-4 ml-sm-5 mb-2">
                    Copyright &copy; {{ date('Y') }} <a href="https://salvus.co.id">PT. Salvus Inti</a>
                </small>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
    
@endpush

