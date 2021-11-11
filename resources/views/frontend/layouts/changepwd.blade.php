@extends('frontend.layouts.master')

@section('title')
Change Password
@endsection
@section('meta')
@include('meta::manager', [
    'title'         => 'Changed Password',
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
           <a href="{{ route('goreala') }}" class=" link" ><span class="fw3 text">back</span></a>
    </div> --}}
    @include('frontend.partials.notif')
    <div class="wrapper pt100">
        <div class="row">
            <div class="column large-12">
                <h2 class="text fz8 fw3 ttu lsm mb30 cmt title ac">CHANGE PASSWORD</h2>
            </div>
        </div>
        <div class="row">
            <div class="column large-12 wrapper ovh">
                <div class="wrapper separator around">
                    <div class="row">
                        <div class="column large-12 wrapper pr">
                            <div class="wrapper pr">
                                <div class="row">
                                    <div class="column medium-6">
                                        <div class="wrapper component contacts">
                                            <div class="wrapper mb20 logo-container">
                                                <img src="img/theme/logo.png" alt="" class="image">
                                            </div>
                                            <div class="wrapper mb40 ac  col-3">
                                                <a href="{{ route('goreala') }}"><img
                                                        src="{{ URL::to('/assets/img/fotlogo.png') }}" alt=""></a>
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
                                                                <div class="wrapper inline ac method-item" id="pro1">
                                                                    <img src="{{ asset('/assets/img/ig.png') }}" alt="">
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <p class="text fz3 ctm lh14">
                                                        @goreala.id
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="wrapper mt20 ac">
                                                {{-- <img src="{{ asset('/assets/img/logo_ins1.png') }}" style="width: 250px"
                                                    height="50px" alt=""> --}}
                                            </div>
                                        </div>

                                    </div>

                                    <div class="column medium-6 separator left">
                                        <div class="wrapper pt30 pb40 pl90 pr90">
                                            <form action="{{ route('change.post') }}" class="form
                                                    contact-form" method="POST">
                                                @csrf
                                                <div class="wrapper mb10 pt10 pr">
                                                    <input type="password" title="oldpassword" name="current_password"
                                                        class="input required dark pt10 pb10"
                                                        placeholder="Old Password">
                                                    <span class="error-star pt20 pb20"></span>
                                                </div>
                                                <div class="wrapper mb10 pt10 pr">
                                                    <input type="password" title="new_password" name="new_password"
                                                        class="input required dark pt10 pb10"
                                                        placeholder="New Password">
                                                    <span class="error-star pt20 pb20"></span>
                                                </div>
                                                <div class="wrapper mb10 pt10 pr">
                                                    <input type="password" title="new_confirm_password" name="new_confirm_password"
                                                        class="input required dark pt10 pb10"
                                                        placeholder="Confirm New Password">
                                                    <span class="error-star pt20 pb20"></span>
                                                </div>
                                                <div class="pt10">
                                                    <button type="submit" class="button dark nopadding  tbgc1 fullwidth js-checkout" >
                                                        <span class="text  fullwidth ttu fw3 ff1 c6 fz4 lh24" >CHANGE PASSWORD</span>
                                                    </button>
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
