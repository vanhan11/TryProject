<div class="aside aside-left d-flex aside-fixed" id="kt_aside">

    <div class="aside-primary d-flex flex-column align-items-center flex-row-auto">
        <div class="aside-brand d-flex flex-column align-items-center flex-column-auto py-5 py-lg-12">
            <a href="#">
                <img alt="Logo" src="{{ asset('assets/img/logogori.png') }}" class="max-h-30px">
            </a>
        </div>
        {{-- <span class="aside-toggle btn btn-icon btn-primary btn-hover-primary shadow-sm" id="kt_aside_toggle" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="" data-original-title="Toggle Menu">
            <i class="ki ki-bold-arrow-back icon-sm"></i>
        </span> --}}
        <div class="aside-nav d-flex flex-column align-items-center flex-column-fluid py-5 scroll scroll-pull ps" style="height: 3px;">
            {!! Menu::mainMenu( url('/admin') ) !!}
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 33px; right: -2px;"><div class="ps__thumb-y" tabindex="0" style="top: -7px; height: 40px;"></div></div></div>

    </div>
    <div class="aside-secondary d-flex flex-row-fluid">
        <div class="aside-workspace scroll scroll-push my-2">
            {!! Menu::subMenu( url('/admin') ) !!}
        </div>
    </div>
</div>