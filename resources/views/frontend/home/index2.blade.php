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
{{-- @include('frontend.partials.coursel') --}}
{{-- @include('frontend.layouts.promotion') --}}

    <section class="hero-wrap hero-wrap-2" style="background-image: url('template/frontend/images/bg_4.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Stories</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
	
		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('template/frontend/images/image_1.jpg');">
              </a>
              <div class="text px-4 pt-3 pb-4">
                <div class="meta">
                  <div><a href="#">Feb 4, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <p class="clearfix">
                  <a href="#" class="float-left read">Read more</a>
                  <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row no-gutters my-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
			</div>
		</section>

    
  

  <!-- loader -->
  {{-- <div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
    </svg>
  </div> --}}
  @endsection

  @push('js')
  
  @endpush
  