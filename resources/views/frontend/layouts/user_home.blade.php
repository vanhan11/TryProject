@extends('frontend.layouts.master')

@section('title')
Profile
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
                                                    <img src="{{ asset('/assets/img/insursal.png') }}"
                                                        style="width: 250px" height="40px" alt="">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="column medium-6 separator left">
                                            <div class="wrapper pt40 pb40 pl90 pr90">
                                                <form action="#" class="form contact-form">
                                                    <div class="wrapper mb10 pr">
                                                        <input type="text" title="name" name="name_field"
                                                            class="input required dark pt20 pb20" placeholder="Name">
                                                        <span class="error-star pt20 pb20"></span>
                                                    </div>
                                                    <div class="wrapper mb10 pr">
                                                        <input type="text" title="email" name="mail_field"
                                                            class="input required dark pt20 pb20" placeholder="E-mail">
                                                        <span class="error-star pt20 pb20"></span>
                                                    </div>
                                                    <div class="wrapper mb10 pr">
                                                        <input type="text" title="email" name="mail_field"
                                                            class="input required dark pt20 pb20"
                                                            placeholder="Set Password">
                                                        <span class="error-star pt20 pb20"></span>
                                                    </div>
                                                    <div class="wrapper mb10 pr">
                                                        <input type="text" title="email" name="password"
                                                            class="input required dark pt20 pb20"
                                                            placeholder="Confirm Password">
                                                        <span class="error-star pt20 pb20"></span>
                                                    </div>
                                                    <div class="wrapper pt20 ac">
                                                        <div class="button dark nopadding js-checkout wrapper fullwidth pr">
                                                            <ul class="list inline btn-components">
                                                                <li>
                                                                    <span
                                                                        class="text ttu fw3 ff1 c6 fz4 lh24 pr30 pl30">REGISTER</span>
                                                                </li>
                                                            </ul>
                                                            <div class="wrapper form-states">
                                                                <div class="wrapper succes pa fullwidth fullheight">
                                                                    <svg class="wrapper pa acc"
                                                                        enable-background="new 0 0 24 24" version="1.0"
                                                                        viewBox="0 0 24 24" xml:space="preserve">
                                                                        <polyline points="20,6 9,17 4,12"
                                                                            class="check-mark" />
                                                                    </svg>
                                                                </div>
                                                                <div
                                                                    class="wrapper error-state pa fullwidth fullheight">
                                                                    <div class="error-sign wrapper pa acc"></div>
                                                                </div>
                                                            </div>
                                                        </div>
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
