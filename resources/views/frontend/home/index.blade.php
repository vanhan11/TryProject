@extends('frontend.layouts.master')
@section('title')
Goreala
@endsection
@section('meta')
@include('meta::manager', [
    'title'         => 'Goreala',
    'description'   => 'Live virtual trip',
    'image'         =>  URL::to('/assets/img/logogori.png'),
])    
@endsection
@push('css')
<style>
    @media screen and (max-width: 1100px) {
        .resp {
            display: none;
        }
    }

</style>

@endpush


@section('content')
@include('frontend.partials.notif')
@include('frontend.partials.coursel')
@include('frontend.layouts.promotion')

{{-- @include('frontend.layouts.upcoming') --}}
<section class="pt100 pb100 tbgc1 section-fix" id="upcoming">
    <div class="card-body pt-0 pb-3">
    </div>
    <div class="wrapper offers-section">
        <div class="component">
            <div class="row">
                <div class="column large-12">
                    <h2 class="text fz8 fw3 ttu lsm mb30 title ac">UPCOMING</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($upcoming as $item)
                <div class="column large-6 medium-6 mb40">
                    <div class="wrapper component offer-item-wrapper js-offer-block">
                        <div class="row h200">
                            <div class="column small-12 large-6">
                                <div class="wrapper  ovh pr js-show-details pointer">
                                    <span class="lines-container pa wrapper"></span>
                                    <img src="{{ url('/upload/'.$item->image) }}" alt=""
                                        class="image ui large image fullwidth pointer"
                                        data-path="{{ url('/upload/'.$item->image) }}" data-large-images="[&quot;&quot;]">
                                    <div class="wrapper pa fullwidth left bottom pb15 price-palette pt15">
                                    </div>
                                </div>
                            </div>
                            <div class="column small-12 large-6">
                                <div class="wrapper">
                                    <h4 class="title text fz6 fw3 lh12 ctm mb5 pointer js-show-details js-name">
                                        {{ $item->title }}</h4>
                                    <p class="text fz1 c6 lh2 mb10">
                                        {{ $item->tanggal }}
                                    </p>                                       
                                    <div class="description text item-description fz1 c6 lh2 mb10 fsi js-description">
                                        {!! strip_tags($item->deskripsi) !!}
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row hide">
                            <div class="description text fz1 c6 lh2 mb10 js-description">
                                {!! $item->deskripsi !!}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    </div>
</section>


{{-- @include('frontend.layouts.protected') --}}

<section class="section-fix new-abs-section tbgc3" id="protected">
    <div class="wrapper">
        <div class="row fullwidth nogutter custom-row">
            <div class="column large-6">
                <div class="wrapper owl" data-config='{"items": 1, "smartSpeed": 700}'>
                    <div class="place-item" data-location="Palm Desert, US" data-unit="c">
                        <div class="place-view"><img src="{{ asset('/assets/img/protec.jpg') }}" class="resp" alt="">
                        </div>
                        <div class="place-weather wrapper pa top left fullwidth ar">
                            <div class="js-item-weather ar wrapper cw inline"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column large-6">
                <div class="wrapper ac">
                    <h2 class="text fz8 fw4 ttu lsm title">PROTECTED TRIP, ALWAYS</h2>
                    <p class="text fz3 fw3 fsi ac mb30 lighttext text-bold">
                        <i>Let’s say we’re too protective</i>
                    </p>
                </div>
                <div class="wrapper ac">
                    <p class="text fz3 fw4 ac mb30 lighttext text-bold">
                        Passengers are equipped with protections powered by PT. Salvus Inti.
                    </p>
                </div>
                <div class="wrapper ac payment-method">
                    @foreach ($output as $listitem)
                    <div class="wrapper inline ac method-item m10" id="pro1">
                        <div class="wrapper">
                            <div class="wrapper icon">
                                <span class="text fz9 cm">
                                    <div class="wrapper inline ac method-item" id="pro1">
                                        <img class="ui medium image" src="{{ url('/upload/'.$listitem["image"]) }}"
                                            alt="">
                                    </div>
                                </span>
                            </div>
                        </div>
                        <p class="text fz3 ctm lh14">
                            {{ $listitem["title"] }}
                        </p>
                    </div>
                    @endforeach
                </div>
                <div class="wrapper ac payment-method">
                    @foreach ($output1 as $listitem1)
                    <div class="wrapper inline ac method-item m10" id="pro1">
                        <div class="wrapper">
                            <div class="wrapper icon">
                                <span class="text fz9 cm">
                                    <div class="wrapper inline ac method-item ui medium image" id="pro1">
                                        <img class="ui medium image" src="{{ url('/upload/'.$listitem1["image"]) }}"
                                            alt="">
                                    </div>
                                </span>
                            </div>
                        </div>
                        <p class="text fz3 ctm lh14">
                            {{ $listitem1["title"] }}
                        </p>
                    </div>
                    @endforeach
                </div>
                <div class="wrapper mt40 ac">
                    <p class="text fz6 fw4 ac mb30 lighttext text-bold" style="vertical-align: sub;"  >Insurance managed by <img class="" style=" vertical-align: baseline;" src="{{ asset('/assets/img/salvuslog.png') }}" ></p> 
                </div>
            </div>
        </div>
</section>

{{-- @include('frontend.layouts.programs') --}}

<section class="pb50 pt100 section-fix" id="programs">
    <div class="wrapper">
        <div class="row">
            <div class="column large-12">
                <h2 class="text fz8 fw3 ttu lsm mb30 title ac">OUR PROGRAMS</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($program as $programs)
            <div class="column ac large-4 medium-4 small-12">
                <div class="wrapper">
                    <div class="teammember dib">
                        <div class="wrapper pr ovh mb40">
                            <div class="wrapper pa fullwidth fullheight ovh p10">
                                <div class="wrapper">
                                    <div class=""></div>
                                    <div class=""></div>
                                </div>
                            </div>
                            <img src="{{ url('/upload/'.$programs->image) }}" alt="" class="image" style="height: 300px; width:250px">
                        </div>
                        <h3 class="text fz4 fw3 ac lsm ttu mb5">
                            {{ $programs->title }}
                        </h3>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="row">
                <div class="column">
                    <div class="wrapper all-tours-btn ac mt40">
                        <p class="text fw3 ac lighttext">
                            From special occasion to private request, feel free to let us know!
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <div class="wrapper all-tours-btn ac mt40">
                    <a href="https://api.whatsapp.com/send?phone={{ env('WA_NUMBER') }}"><span class="button js-booknow-btn"><span class="text fz6 lh22 ttu fw3">QUOTE NOW</span></span></a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- @include('frontend.layouts.tours') --}}
<section class="pt100 pb100 tbgc5 section-fix" id="tours">
    <div class="card-body pt-0 pb-3">
    </div>
    <div class="wrapper offers-section">
        <div class="component">
            <div class="row">
                <div class="column large-12">
                    <h2 class="text fz8 fw3 ttu lsm mb30 title ac">TOURS</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($tour as $tours)
                <div class="column large-6 medium-6 mb40">
                    <div class="wrapper component offer-item-wrapper js-offer-block">
                        <div class="row">
                            <div class="column large-5 large-3">
                                <div class="wrapper  ovh pr js-show-details pointer">
                                    <span class="lines-container pa fullwidth wrapper"></span>
                                    <img src="{{ url('/upload/'.$tours->image) }}" alt=""
                                        class="image fullwidth fullheight pointer"
                                        data-path="{{ url('/upload/'.$tours->image) }}"
                                        data-large-images="[&quot;&quot;]">
                                    <div
                                        class="wrapper pa fullwidth left bottom pb15 price-palette pt15">
                                        <p class="text cw fz6 lh1 js-cost ac">

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="column small-12 large-6">
                                <div class="wrapper">
                                    <h4 class="title text fz6 fw3 lh12 ctm mb5 pointer js-show-details js-name">
                                        {{ $item->title }}</h4>
                                    <p class="text fz1 c6 lh2 mb10">
                                        {{ $item->tanggal }}
                                    </p>
                                    <div class="">
                                        <div class="">
                                            <span class="button js-show-details ac"><span
                                                    class="text fz6 lh22 ttu fw3">MORE
                                                    INFO</span></span>
                                        </div>
                                    </div>                                       
                                </div>
                            </div>

                        </div>
                        <div class="row hide">
                            <div class="description text fz1 c6 lh2 mb10 js-description">
                                {!! strip_tags($tours->deskripsi) !!}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    </div>
</section>


{{-- @include('frontend.layouts.blog') --}}

<section class="pb30 pt100 tbgc1 section-fix" id="blog">
    <div class="wrapper">
        <div class="row">
            <div class="column large-12">
                <h2 class="text fz8 fw3 ttu lsm mb30 title ac">blog</h2>
            </div>
        </div>
        <div class="row">
            <div class="column large-12">
                <div class="blog component row">
                    <div class="sizer"></div>
                    @foreach ($blogray as $blogs)
                    <div class="item column large-4 medium-6 small-12 mb10">
                        <div class="wrapper tbgc2 blog-item">
                            <a href="{{ route('blog.detail',$blogs->slug) }}" class="wrapper">
                                <img src="{{ url('/upload/'.$blogs->image) }}" alt=""
                                    class="image fullwidth fullheight">
                            </a>
                            <div class="wrapper separator left bottom right  pt30 pr30 pb20 pl30" style="height: 300px">
                                <h4 class="title text fz4 fw3 mb20 ctm">
                                    <a href="{{ route('blog.detail',$blogs->slug)}} ">{{ $blogs->title }}</a>
                                </h4>
                                <div class="description text fz1 fw3 lh2 fsi pb20 mb20 js-description">
                                    {!! substr(strip_tags($blogs->deskripsi),0,150) !!}
                                </div>
                                <div class="meta text fz1 fsi fw3 pr60">posted on {{ $blogs->created_at }}</div>
                                <div class="wrapper pr">
                                    
                                    <div class="wrapper pa right top">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


{{-- @include('frontend.layouts.company') --}}


<section class="tbgc5 section-fix" id="testimonials">
    
    <div class="wrapper pt100 pb100">
        <div class="row">
            <div class="column large-12">
                <h1 class="text fz8 fw3 ttu lsm mb30 title ac">testimonials</h1>
            </div>
        </div>
        <div class="row">
            <div class="column large-12">
                <div class="testimonials component owl tbgc5 mt50" data-config='{"items": 1}'>
                    @foreach ($testimoni as $testimonis)
                    <div class="testimonial">
                        <div class="wrapper pb50 pl70 pr70">
                            <div class="wrapper photo mb20 ac">
                                <div class="wrapper dib pl40 pr40" style="height: 100px">
                                    <img src="{{ url('/upload/'.$testimonis->image) }}" alt="testimonaial photo"
                                        class="image round wa" style="height: 100px">
                                </div>
                            </div>
                            <div class="wrapper pl40 pr40">
                                <h4 class="text fz4 fw3 ttu lsm ac mb5 lighttext">
                                    {{ $testimonis->title }}
                                </h4>
                                <div class="text fz3 fw3 fsi ac lighttext">
                                    {!! substr(strip_tags($testimonis->deskripsi),0,100)."..." !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>




{{-- @include('frontend.layouts.contacts') --}}

<section class="tbgc1 section-fix" id="contacts">
    <div class="wrapper pt100">
        <div class="row">
            <div class="column large-12">
                <h2 class="text fz8 fw3 ttu lsm mb30 cmt title ac">Contacts</h2>
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
                                        <div class="wrapper p40 component contacts">
                                            <div class="wrapper mb40 logo-container">
                                                <img src="img/theme/logo.png" alt="" class="image">
                                            </div>
                                            <div class="wrapper mb40 ac  col-3">
                                                <img src="{{ URL::to('/assets/img/fotlogo.png') }}" alt="">
                                            </div>
                                            <div class="row">
                                                <div class=" column ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class=" column ac ">
                                                <div class="component about-item">
                                                    <div class="column large-4 medium-4 small-12">
                                                        <img src="{{ URL::to('/assets/img/msg.png') }}" alt="">
                                                    </div>
                                                    <div class="column large-4 medium-4 small-12">
                                                        <img src="{{ URL::to('/assets/img/ig.png') }}" alt="">
                                                    </div>
                                                    <div class="column large-4 medium-4 small-12">
                                                        <img src="{{ URL::to('/assets/img/loc.png') }}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" column ac ">
                                                <div class="component about-item">
                                                    <div class="column large-4 medium-4 small-12">
                                                        <p class=" fw3">goreala.id@gmail.com</p>
                                                    </div>
                                                    <div class="column large-4 medium-4 small-12">
                                                        <p class=" fw3"> @goreala.id</p>
                                                    </div>
                                                    <div class="column large-4 medium-4 small-12">
                                                        <p class=" fw3"> Jl. Tomang Raya no 47F</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="column medium-6 separator left">
                                        <div class="wrapper pt40 pb40 pl90 pr90">
                                            <form method="post" action="{{ route('contact.store') }}"
                                                class="form contact-form">
                                                @csrf
                                                <div class="wrapper mb10 pr">
                                                    <input type="text" title="name" name="name"
                                                        class="input dark pt20 pb20" placeholder="Name">
                                                    <span class="error-star pt20 pb20"></span>
                                                    @if ($errors->has('name'))
                                                            <span class="help-block">
                                                                <strong style="color: rgb(179, 0, 0)">{{ $errors->first('name') }}</strong>
                                                            </span>
                                                    @endif
                                                </div>
                                                <div class="wrapper mb10 pr">
                                                    <input type="text" title="email"         name="email"
                                                        class="input dark pt20 pb20" placeholder="E-mail">
                                                    <span class="error-star pt20 pb20"></span>
                                                    @if ($errors->has('email'))
                                                            <span class="help-block">
                                                                <strong style="color: rgb(179, 0, 0)">{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                </div>
                                                <div class="wrapper mb40 pr">
                                                    <textarea name="message" class="textarea dark pt20 pb20"
                                                        placeholder="How Can We Help?"></textarea>
                                                    <span class="error-star pt20 pb20"></span>
                                                    @if ($errors->has('message'))
                                                            <span class="help-block">
                                                                <strong style="color: rgb(179, 0, 0)">{{ $errors->first('message') }}</strong>
                                                            </span>
                                                        @endif
                                                </div>
                                                <div class=" ac {{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                                                    <div class="ac">
                                                        {!! NoCaptcha::display() !!}
                                                        @if ($errors->has('g-recaptcha-response'))
                                                            <span class="help-block">
                                                                <strong style="color: rgb(179, 0, 0)">{{ $errors->first('g-recaptcha-response') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="wrapper al">
                                                    <div class="pt20">
                                                        <button type="submit"
                                                            class="button dark nopadding fullwidth  tbgc1">
                                                            <span
                                                                class="text  fullwidth ttu fw3 ff1 c6 fz4 lh24">SEND</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div>

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

<div class="modals">
    <div class="offer-modal">
        <div class="wrapper tbgc1 pf fullwidth fullheight top left js-details-wrapper details-wrapper">
            <div class="table-container">
                <div class="cell-container">
                    <div class="row ovh wrapper">
                        <div class="column medium-12 large-4 wrapper fullheight offer-slider-column">
                            <div class="offers-slider-container">
                            </div>
                        </div>
                        <div class="column medium-12 large-8">
                            <div class="wrapper pa close-btn pointer ovh js-close-details fa fa-angle-left"> <span
                                    class="fw3 text">back</span>
                            </div>
                            <div class="wrapper pb30 pt30 pr offer-tabs-container">
                                <div class="wrapper ovh js-details-container">
                                    <div class="row">
                                        <div class="column large-7">
                                            <div class="wrapper">
                                                <p class="text cm fz6 lh1 js-item-price mb20"></p>
                                                <h4 class="text title fw3 fz6 cmt lh1 mb15 js-item-title"></h4>
                                                <div class="description">
                                                    <p class="item-description text fsi fz1 c6 lh2 mb10"></p>
                                                </div>
                                                <div class="column large-10 mt20">
                                                    <div class="wrapper">
                                                        <a href="https://api.whatsapp.com/send?phone={{ env('WA_NUMBER') }}" rel="nofollow" >
                                                            <span class="button js-booknow-btn fullwidth ac"><span
                                                                    class="text fz6 lh22 ttu fw3">book now</span></span>
                                                        </a>
                                                    </div>
                                                    <div class="wrapper js-days-list mt30">
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
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')

@endpush
