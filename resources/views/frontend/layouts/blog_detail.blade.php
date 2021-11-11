@extends('frontend.layouts.master')
@section('title')
Blog
@endsection
@section('meta')
@include('meta::manager', [
    'title'         => $data->title,
    'description'   => substr(strip_tags($data->deskripsi),0,50)."...",
    'image'         => url('/upload/'.$data->image),
])    
@endsection
<style>
    .iconDetails {
        margin-left: 2%;
        float: left;
        height: 60;
        width: 60px;
    }

    .container2 {
        width: 100%;
        height: auto;
        padding: 1%;
    }

</style>

@section('content')
<section class=" pt100 section-fix" id="tours">
    <div class="wrapper offers-section">
        <div class="component">
            <div class="row">
                <div class="column large-12 mb50">
                    <h1 class="text fz8 fw3 ttu lsm mb30 title ac">{{ $data->title }}</h1>
                </div>
            </div>
            <div class="row">
                <div class="column large-12">
                    <div class="ovh pr wrapper">
                        <div class="wrapper best-offers mb-40">
                            <div class="row">
                                <div class="column large-10 medium-6 mb40">
                                    <div class="wrapper component offer-item-wrapper">
                                        <div class="row">
                                            <div class="column small-12 large-3">
                                                <div class="wrapper  ovh pointer">
                                                    <img src="{{ url('/upload/'.$data->image) }}" alt=""
                                                        class="image fullwidth pointer">
                                                </div>
                                            </div>
                                            <div class="column large-9">
                                                <div class="wrapper fullwidth">
                                                    <div class="description text fz1 c6 lh2 mb10">
                                                        {!! $data->deskripsi !!}
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
</section>


<section class="mt50">
    <div>
        <p class="text fz5 fw2 ttu lsm mb30 title ac fsi">{{ $count }} COMMENTS</p>
    </div>

    <div class="row">
        <div class="column large-12">
            <div class="ovh wrapper">
                <div class="wrapper best-offers mb-40">
                    <div class="row">
                        <form action="{{ route('blog.comment') }}" method="post">
                            @csrf
                            <div class="column large-12 medium-6 mb40">
                                <div class="wrapper component offer-item-wrapper">
                                    <div class="row">
                                        <div class="column large-12">
                                            <div class="wrapper fullwidth">
                                                <h4 class="title text fz6 fw3 lh15 ctm mb5 pt20 pointer">
                                                    @if (Sentinel::check())
                                                        {{ Sentinel::getUser()->name }}
                                                    @endif

                                                    @if (!Sentinel::check())
                                                    <p class="title text fz4 fw2 lh15 ctm mb5 pt20 pointer">
                                                        You must me logged in to write a comment. <a
                                                            href="{{ route('login_user') }}"
                                                            class="pl10 link fz2 fw3 ttu ctm link_route">login</a>
                                                    </p>
                                                    @else

                                                    <input type="hidden" value="{{$data->id}}" name="blog_id">
                                                    <textarea class="mt10" required name="comment" id="" cols="50"
                                                        placeholder="Type here..." rows="auto"></textarea>
                                                    <span>
                                                        <button type="submit"
                                                            class="button c6  pt5 tbgc1 pb5 fz3  lh22 ttu fw3 lss">POST</button>
                                                    </span>
                                                    @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mb50" >
    <div class="row">
        <div class="column large-12">
            <div class="ovh wrapper">
                <div class="wrapper best-offers mb-40">
                    <div class="row">
                        <div class="column large-10 medium-6 mb40">
                            <div class="column large-12">
                                <div class="wrapper fullwidth">
                                    <h4 class="title text fz6 fw3 lh15 ctm mb5 pt20 pointer">
                                        @foreach ($comment as $comments)
                                        <div class='container2'>
                                            <div>
                                                <img src='{{ asset('/assets/img/profile_def.png') }}'
                                                    class='iconDetails'>
                                            </div>
                                            <div class="pl10">
                                                <h4 class="title text fw3 lh15 ctm mt10  pointer">
                                                    {{ $comments->user->name }}</h4>
                                                <div style="">
                                                    <p class="title text fz4 fw2 lh15 ctm mb5  pointer" >
                                                        {{ $comments["commentar"] }}
                                                    </p>
                                                    
                                                </div>
                                                <div style="float:right;font-size:.6em">{{ $comments["created_at"] }}</div>
                                            </div>
                                        </div>
                                        @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="assets/frontend/js/libs/require.js" data-main="assets/frontend/js/index.min"></script>
@endsection
