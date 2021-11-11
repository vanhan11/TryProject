@extends('frontend.layouts.master')

@section('title')
Signup
@endsection
@section('meta')
@include('meta::manager', [
    'title'         => 'Register',
    'description'   => 'Live virtual trip',
    'image'         =>  URL::to('/assets/img/logogori.png'),
])    
@endsection
@push('css')

@endpush

@section('content')
<section class="tbgc1 section-fix" id="contacts">
    <div class="component">
        {{-- <div class="wrapper pa close-btn pointer ovh pt50 fa fa-angle-left">
            <a href="{{ route('goreala') }}" class=" link"><span class="fw3 text">back</span></a>
        </div> --}}
        <div class="wrapper pt50">
            <div class="row">
                <div class="column large-12">
                    <h2 class="text fz8 fw3 ttu lsm mb30 cmt title ac">REGISTER</h2>
                </div>
            </div>
            <div class="row">
                <div class="column large-12 wrapper ovh">
                    <div class="wrapper separator around m40">
                        <div class="row">
                            <div class="column large-12 wrapper pr">
                                <div class="wrapper pr">
                                    <div class="row">
                                        <div class="column medium-6">
                                            <div class="wrapper component contacts">
                                                <div class="wrapper mb40 logo-container">
                                                    <img src="img/theme/logo.png" alt="" class="image">
                                                </div>
                                                <div class="wrapper mb40 ac  col-3">
                                                    <a href="{{ route('goreala') }}"><img src="{{ URL::to('/assets/img/fotlogo.png') }}" alt=""></a>
                                                </div>
                                                <div class="row">
                                                    <div class=" column ">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class=" column ac ">
                                                    <div class="wrapper inline ac method-item m10" id="pro1">
                                                        <div class="wrapper">
                                                            <div class="wrapper icon">
                                                                <span class="text fz9 cm">
                                                                    <div class="wrapper inline ac method-item"
                                                                        id="pro1">
                                                                        <img src="{{ asset('/assets/img/ig.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <p class="text fz3 ctm lh14">
                                                            @goreala.id
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="wrapper mt40 ac">
                                                    <p class="text fz6 fw4 ac mb30 lighttext text-bold" style="vertical-align: sub;"  >Insurance managed by <img class="" style=" vertical-align: baseline;" src="{{ asset('/assets/img/salvuslog.png') }}" ></p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="column medium-6 separator left">
                                            <div class="wrapper pt40 pb40 pl90 pr90">
                                                <form action="{{ route('register.post_user') }}"  method="POST" class="form contact-form">
                                                    @csrf
                                                    <div class="wrapper mb10 pr">
                                                        <input type="text" title="name" name="name" required
                                                            class="input required dark pt20 pb20" placeholder="Name">
                                                        <span class="error-star pt20 pb20"></span>
                                                        @if ($errors->has('name'))
                                                        <span class="help-block">
                                                            <strong style="color: rgb(179, 0, 0)">{{ $errors->first('name') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                    <div class="wrapper mb10 pr">
                                                        <input type="text" title="email" name="email" required
                                                            class="input required dark pt20 pb20" placeholder="E-mail">
                                                        <span class="error-star pt20 pb20"></span>
                                                    </div>
                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong style="color: rgb(179, 0, 0)">{{ $errors->first('email') }}</strong>
                                                        </span>
                                                        @endif
                                                    <div class="wrapper mb10 pr">
                                                        <input type="password" id="password" title="email" required name="password"
                                                            class="input required dark pt20 pb20"
                                                            placeholder="Set Password">
                                                        <span class="error-star pt20 pb20"></span>
                                                    </div>
                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong style="color: rgb(179, 0, 0)">{{ $errors->first('password') }}</strong>
                                                        </span>
                                                        @endif
                                                    <div class="pt20">
                                                        <button type="submit" class="button dark nopadding  tbgc1 fullwidth js-checkout" >
                                                            <span class="text  fullwidth ttu fw3 ff1 c6 fz4 lh24" >REGISTER</span>
                                                        </button>
                                                    </div>
                                                    
                                                    <div class="wrapper pt20 ac">
                                                        {{-- <div class="button dark nopadding js-checkout wrapper fullwidth pr">
                                                        </div> --}}
                                                        <div class=" pt20 ac row ">
                                                        <ul class=" list  column link c6 fsi" >
                                                            <li><a href="{{ route('login_user') }}"><p>already have an account?</p></a></li>
                                                        </ul>
                                                    </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection

@push('js')

@endpush
