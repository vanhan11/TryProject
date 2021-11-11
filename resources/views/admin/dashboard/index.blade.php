@extends('admin.layouts.master')

@section('title')
Dashboard
@endsection

@push('css')

@endpush

@section('content')

<center>
    <div class="m-10 card-body rounded h-100 align-center" style="background-color: white">
        <div class="container align-center rounded mb-10" style="background-color: white" >
            <img src="{{ URL::to('/assets/img/dash.png') }}" class="align-center m-10" alt="" srcset="">
        </div>
    </div>
</center>




{{-- <div class="container">
    <div class="row">
        <div class="col-xl-4">
            <div class="row">
                <div class="col-xl-12">
                    <!--begin::Stats Widget 11-->
                    <div class="card card-custom gutter-b">
                        <!--begin::Body-->
                        <div class="card-body p-0" style="position: relative;">
                            <div class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">
                                <span class="symbol symbol-circle symbol-50 symbol-light-danger mr-2">
                                    <span class="symbol-label">
                                        <span class="svg-icon svg-icon-xl svg-icon-danger">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5">
                                                    </rect>
                                                    <path
                                                        d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                        fill="#000000" opacity="0.3"></path>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                </span>
                                <div class="d-flex flex-column text-right">
                                    <span class="text-dark-75 font-weight-bolder font-size-h3">750$</span>
                                    <span class="text-muted font-weight-bold mt-2">Weekly Income</span>
                                </div>
                            </div>
                            <div id="kt_stats_widget_11_chart" class="carad-rounded-bottom" data-color="danger"
                                style="height: 150px; min-height: 150px;">
                                <div id="apexchartsggo1axls"
                                    class="apexcharts-canvas apexchartsggo1axls apexcharts-theme-light"
                                    style="width: 275px; height: 150px;"><svg id="SvgjsSvg2232" width="275" height="150"
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG2234" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(0, 0)">
                                            <defs id="SvgjsDefs2233">
                                                <clipPath id="gridRectMaskggo1axls">
                                                    <rect id="SvgjsRect2237" width="282" height="153" x="-3.5" y="-1.5"
                                                        rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="gridRectMarkerMaskggo1axls">
                                                    <rect id="SvgjsRect2238" width="279" height="154" x="-2" y="-2"
                                                        rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <g id="SvgjsG2246" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG2247" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -4)"></g>
                                            </g>
                                            <g id="SvgjsG2249" class="apexcharts-grid">
                                                <g id="SvgjsG2250" class="apexcharts-gridlines-horizontal"
                                                    style="display: none;">
                                                    <line id="SvgjsLine2252" x1="0" y1="0" x2="275" y2="0"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2253" x1="0" y1="15" x2="275" y2="15"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2254" x1="0" y1="30" x2="275" y2="30"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2255" x1="0" y1="45" x2="275" y2="45"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2256" x1="0" y1="60" x2="275" y2="60"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2257" x1="0" y1="75" x2="275" y2="75"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2258" x1="0" y1="90" x2="275" y2="90"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2259" x1="0" y1="105" x2="275" y2="105"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2260" x1="0" y1="120" x2="275" y2="120"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2261" x1="0" y1="135" x2="275" y2="135"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2262" x1="0" y1="150" x2="275" y2="150"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG2251" class="apexcharts-gridlines-vertical"
                                                    style="display: none;"></g>
                                                <line id="SvgjsLine2264" x1="0" y1="150" x2="275" y2="150"
                                                    stroke="transparent" stroke-dasharray="0"></line>
                                                <line id="SvgjsLine2263" x1="0" y1="1" x2="0" y2="150"
                                                    stroke="transparent" stroke-dasharray="0"></line>
                                            </g>
                                            <g id="SvgjsG2240" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG2241" class="apexcharts-series" seriesName="NetxProfit"
                                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath2244"
                                                        d="M 0 150L 0 40.90909090909091C 16.041666666666664 40.90909090909091 29.791666666666664 40.90909090909091 45.83333333333333 40.90909090909091C 61.87499999999999 40.90909090909091 75.625 68.18181818181817 91.66666666666666 68.18181818181817C 107.70833333333333 68.18181818181817 121.45833333333333 68.18181818181817 137.5 68.18181818181817C 153.54166666666666 68.18181818181817 167.29166666666666 54.54545454545453 183.33333333333331 54.54545454545453C 199.37499999999997 54.54545454545453 213.125 54.54545454545453 229.16666666666666 54.54545454545453C 245.20833333333331 54.54545454545453 258.9583333333333 13.636363636363626 275 13.636363636363626C 275 13.636363636363626 275 13.636363636363626 275 150M 275 13.636363636363626z"
                                                        fill="rgba(255,226,229,1)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMaskggo1axls)"
                                                        pathTo="M 0 150L 0 40.90909090909091C 16.041666666666664 40.90909090909091 29.791666666666664 40.90909090909091 45.83333333333333 40.90909090909091C 61.87499999999999 40.90909090909091 75.625 68.18181818181817 91.66666666666666 68.18181818181817C 107.70833333333333 68.18181818181817 121.45833333333333 68.18181818181817 137.5 68.18181818181817C 153.54166666666666 68.18181818181817 167.29166666666666 54.54545454545453 183.33333333333331 54.54545454545453C 199.37499999999997 54.54545454545453 213.125 54.54545454545453 229.16666666666666 54.54545454545453C 245.20833333333331 54.54545454545453 258.9583333333333 13.636363636363626 275 13.636363636363626C 275 13.636363636363626 275 13.636363636363626 275 150M 275 13.636363636363626z"
                                                        pathFrom="M -1 150L -1 150L 45.83333333333333 150L 91.66666666666666 150L 137.5 150L 183.33333333333331 150L 229.16666666666666 150L 275 150">
                                                    </path>
                                                    <path id="SvgjsPath2245"
                                                        d="M 0 40.90909090909091C 16.041666666666664 40.90909090909091 29.791666666666664 40.90909090909091 45.83333333333333 40.90909090909091C 61.87499999999999 40.90909090909091 75.625 68.18181818181817 91.66666666666666 68.18181818181817C 107.70833333333333 68.18181818181817 121.45833333333333 68.18181818181817 137.5 68.18181818181817C 153.54166666666666 68.18181818181817 167.29166666666666 54.54545454545453 183.33333333333331 54.54545454545453C 199.37499999999997 54.54545454545453 213.125 54.54545454545453 229.16666666666666 54.54545454545453C 245.20833333333331 54.54545454545453 258.9583333333333 13.636363636363626 275 13.636363636363626"
                                                        fill="none" fill-opacity="1" stroke="#f64e60" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="3" stroke-dasharray="0"
                                                        class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMaskggo1axls)"
                                                        pathTo="M 0 40.90909090909091C 16.041666666666664 40.90909090909091 29.791666666666664 40.90909090909091 45.83333333333333 40.90909090909091C 61.87499999999999 40.90909090909091 75.625 68.18181818181817 91.66666666666666 68.18181818181817C 107.70833333333333 68.18181818181817 121.45833333333333 68.18181818181817 137.5 68.18181818181817C 153.54166666666666 68.18181818181817 167.29166666666666 54.54545454545453 183.33333333333331 54.54545454545453C 199.37499999999997 54.54545454545453 213.125 54.54545454545453 229.16666666666666 54.54545454545453C 245.20833333333331 54.54545454545453 258.9583333333333 13.636363636363626 275 13.636363636363626"
                                                        pathFrom="M -1 150L -1 150L 45.83333333333333 150L 91.66666666666666 150L 137.5 150L 183.33333333333331 150L 229.16666666666666 150L 275 150">
                                                    </path>
                                                    <g id="SvgjsG2242" class="apexcharts-series-markers-wrap"
                                                        data:realIndex="0">
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle2270" r="0" cx="0" cy="0"
                                                                class="apexcharts-marker wtii9x3s8 no-pointer-events"
                                                                stroke="#f64e60" fill="#ffe2e5" fill-opacity="1"
                                                                stroke-width="3" stroke-opacity="0.9"
                                                                default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG2243" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine2265" x1="0" y1="0" x2="275" y2="0" stroke="#b6b6b6"
                                                stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs">
                                            </line>
                                            <line id="SvgjsLine2266" x1="0" y1="0" x2="275" y2="0" stroke-dasharray="0"
                                                stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG2267" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG2268" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG2269" class="apexcharts-point-annotations"></g>
                                        </g>
                                        <g id="SvgjsG2248" class="apexcharts-yaxis" rel="0"
                                            transform="translate(-18, 0)"></g>
                                        <g id="SvgjsG2235" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: Poppins; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(255, 226, 229);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Poppins; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-label"></span><span
                                                        class="apexcharts-tooltip-text-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                        <div class="apexcharts-xaxistooltip-text"
                                            style="font-family: Poppins; font-size: 12px;"></div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 276px; height: 258px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Stats Widget 11-->
                </div>
                <div class="col-xl-12">
                    <!--begin::Stats Widget 10-->
                    <div class="card card-custom gutter-b">
                        <!--begin::Body-->
                        <div class="card-body p-0" style="position: relative;">
                            <div class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">
                                <span class="symbol symbol-circle symbol-50 symbol-light-info mr-2">
                                    <span class="symbol-label">
                                        <span class="svg-icon svg-icon-xl svg-icon-info">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart3.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <path
                                                        d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                    <path
                                                        d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z"
                                                        fill="#000000"></path>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                </span>
                                <div class="d-flex flex-column text-right">
                                    <span class="text-dark-75 font-weight-bolder font-size-h3">+259</span>
                                    <span class="text-muted font-weight-bold mt-2">Sales Change</span>
                                </div>
                            </div>
                            <div id="kt_stats_widget_10_chart" class="card-rounded-bottom" data-color="info"
                                style="height: 150px; min-height: 150px;">
                                <div id="apexchartsb7l2vs23j"
                                    class="apexcharts-canvas apexchartsb7l2vs23j apexcharts-theme-light"
                                    style="width: 275px; height: 150px;"><svg id="SvgjsSvg2192" width="275" height="150"
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG2194" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(0, 0)">
                                            <defs id="SvgjsDefs2193">
                                                <clipPath id="gridRectMaskb7l2vs23j">
                                                    <rect id="SvgjsRect2197" width="282" height="153" x="-3.5" y="-1.5"
                                                        rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="gridRectMarkerMaskb7l2vs23j">
                                                    <rect id="SvgjsRect2198" width="279" height="154" x="-2" y="-2"
                                                        rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <g id="SvgjsG2206" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG2207" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -4)"></g>
                                            </g>
                                            <g id="SvgjsG2209" class="apexcharts-grid">
                                                <g id="SvgjsG2210" class="apexcharts-gridlines-horizontal"
                                                    style="display: none;">
                                                    <line id="SvgjsLine2212" x1="0" y1="0" x2="275" y2="0"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2213" x1="0" y1="15" x2="275" y2="15"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2214" x1="0" y1="30" x2="275" y2="30"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2215" x1="0" y1="45" x2="275" y2="45"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2216" x1="0" y1="60" x2="275" y2="60"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2217" x1="0" y1="75" x2="275" y2="75"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2218" x1="0" y1="90" x2="275" y2="90"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2219" x1="0" y1="105" x2="275" y2="105"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2220" x1="0" y1="120" x2="275" y2="120"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2221" x1="0" y1="135" x2="275" y2="135"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2222" x1="0" y1="150" x2="275" y2="150"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG2211" class="apexcharts-gridlines-vertical"
                                                    style="display: none;"></g>
                                                <line id="SvgjsLine2224" x1="0" y1="150" x2="275" y2="150"
                                                    stroke="transparent" stroke-dasharray="0"></line>
                                                <line id="SvgjsLine2223" x1="0" y1="1" x2="0" y2="150"
                                                    stroke="transparent" stroke-dasharray="0"></line>
                                            </g>
                                            <g id="SvgjsG2200" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG2201" class="apexcharts-series" seriesName="NetxProfit"
                                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath2204"
                                                        d="M 0 150L 0 40.90909090909091C 16.041666666666664 40.90909090909091 29.791666666666664 40.90909090909091 45.83333333333333 40.90909090909091C 61.87499999999999 40.90909090909091 75.625 68.18181818181817 91.66666666666666 68.18181818181817C 107.70833333333333 68.18181818181817 121.45833333333333 68.18181818181817 137.5 68.18181818181817C 153.54166666666666 68.18181818181817 167.29166666666666 54.54545454545453 183.33333333333331 54.54545454545453C 199.37499999999997 54.54545454545453 213.125 54.54545454545453 229.16666666666666 54.54545454545453C 245.20833333333331 54.54545454545453 258.9583333333333 13.636363636363626 275 13.636363636363626C 275 13.636363636363626 275 13.636363636363626 275 150M 275 13.636363636363626z"
                                                        fill="rgba(225,233,255,1)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMaskb7l2vs23j)"
                                                        pathTo="M 0 150L 0 40.90909090909091C 16.041666666666664 40.90909090909091 29.791666666666664 40.90909090909091 45.83333333333333 40.90909090909091C 61.87499999999999 40.90909090909091 75.625 68.18181818181817 91.66666666666666 68.18181818181817C 107.70833333333333 68.18181818181817 121.45833333333333 68.18181818181817 137.5 68.18181818181817C 153.54166666666666 68.18181818181817 167.29166666666666 54.54545454545453 183.33333333333331 54.54545454545453C 199.37499999999997 54.54545454545453 213.125 54.54545454545453 229.16666666666666 54.54545454545453C 245.20833333333331 54.54545454545453 258.9583333333333 13.636363636363626 275 13.636363636363626C 275 13.636363636363626 275 13.636363636363626 275 150M 275 13.636363636363626z"
                                                        pathFrom="M -1 150L -1 150L 45.83333333333333 150L 91.66666666666666 150L 137.5 150L 183.33333333333331 150L 229.16666666666666 150L 275 150">
                                                    </path>
                                                    <path id="SvgjsPath2205"
                                                        d="M 0 40.90909090909091C 16.041666666666664 40.90909090909091 29.791666666666664 40.90909090909091 45.83333333333333 40.90909090909091C 61.87499999999999 40.90909090909091 75.625 68.18181818181817 91.66666666666666 68.18181818181817C 107.70833333333333 68.18181818181817 121.45833333333333 68.18181818181817 137.5 68.18181818181817C 153.54166666666666 68.18181818181817 167.29166666666666 54.54545454545453 183.33333333333331 54.54545454545453C 199.37499999999997 54.54545454545453 213.125 54.54545454545453 229.16666666666666 54.54545454545453C 245.20833333333331 54.54545454545453 258.9583333333333 13.636363636363626 275 13.636363636363626"
                                                        fill="none" fill-opacity="1" stroke="#6993ff" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="3" stroke-dasharray="0"
                                                        class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMaskb7l2vs23j)"
                                                        pathTo="M 0 40.90909090909091C 16.041666666666664 40.90909090909091 29.791666666666664 40.90909090909091 45.83333333333333 40.90909090909091C 61.87499999999999 40.90909090909091 75.625 68.18181818181817 91.66666666666666 68.18181818181817C 107.70833333333333 68.18181818181817 121.45833333333333 68.18181818181817 137.5 68.18181818181817C 153.54166666666666 68.18181818181817 167.29166666666666 54.54545454545453 183.33333333333331 54.54545454545453C 199.37499999999997 54.54545454545453 213.125 54.54545454545453 229.16666666666666 54.54545454545453C 245.20833333333331 54.54545454545453 258.9583333333333 13.636363636363626 275 13.636363636363626"
                                                        pathFrom="M -1 150L -1 150L 45.83333333333333 150L 91.66666666666666 150L 137.5 150L 183.33333333333331 150L 229.16666666666666 150L 275 150">
                                                    </path>
                                                    <g id="SvgjsG2202" class="apexcharts-series-markers-wrap"
                                                        data:realIndex="0">
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle2230" r="0" cx="0" cy="0"
                                                                class="apexcharts-marker wyashth8el no-pointer-events"
                                                                stroke="#6993ff" fill="#e1e9ff" fill-opacity="1"
                                                                stroke-width="3" stroke-opacity="0.9"
                                                                default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG2203" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine2225" x1="0" y1="0" x2="275" y2="0" stroke="#b6b6b6"
                                                stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs">
                                            </line>
                                            <line id="SvgjsLine2226" x1="0" y1="0" x2="275" y2="0" stroke-dasharray="0"
                                                stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG2227" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG2228" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG2229" class="apexcharts-point-annotations"></g>
                                        </g>
                                        <g id="SvgjsG2208" class="apexcharts-yaxis" rel="0"
                                            transform="translate(-18, 0)"></g>
                                        <g id="SvgjsG2195" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: Poppins; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(225, 233, 255);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Poppins; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-label"></span><span
                                                        class="apexcharts-tooltip-text-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                        <div class="apexcharts-xaxistooltip-text"
                                            style="font-family: Poppins; font-size: 12px;"></div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 276px; height: 258px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Stats Widget 10-->
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!--begin::List Widget 14-->
            <div class="card card-custom gutter-b card-stretch">
                <!--begin::Header-->
                <div class="card-header border-0">
                    <h3 class="card-title font-weight-bolder text-dark">Market Leaders</h3>
                    <div class="card-toolbar">
                        <div class="dropdown dropdown-inline">
                            <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ki ki-bold-more-ver"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                <!--begin::Navigation-->
                                <ul class="navi navi-hover">
                                    <li class="navi-header font-weight-bold py-4">
                                        <span class="font-size-lg">Choose Label:</span>
                                        <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip"
                                            data-placement="right" title=""
                                            data-original-title="Click to learn more..."></i>
                                    </li>
                                    <li class="navi-separator mb-3 opacity-70"></li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-text">
                                                <span
                                                    class="label label-xl label-inline label-light-success">Customer</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-text">
                                                <span
                                                    class="label label-xl label-inline label-light-danger">Partner</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-text">
                                                <span
                                                    class="label label-xl label-inline label-light-warning">Suplier</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-text">
                                                <span
                                                    class="label label-xl label-inline label-light-primary">Member</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-text">
                                                <span class="label label-xl label-inline label-light-dark">Staff</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-separator mt-3 opacity-70"></li>
                                    <li class="navi-footer py-4">
                                        <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                            <i class="ki ki-plus icon-sm"></i>Add new</a>
                                    </li>
                                </ul>
                                <!--end::Navigation-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-2">
                    <!--begin::Item-->
                    <div class="d-flex flex-wrap align-items-center mb-10">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                            <div class="symbol-label"
                                style="background-image: url('assets/media/stock-600x400/img-17.jpg')"></div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Title-->
                        <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                            <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Cup
                                &amp; Green</a>
                            <span class="text-muted font-weight-bold font-size-sm my-1">Local, clean &amp;
                                environmental</span>
                            <span class="text-muted font-weight-bold font-size-sm">Created by:
                                <span class="text-primary font-weight-bold">CoreAd</span></span>
                        </div>
                        <!--end::Title-->
                        <!--begin::Info-->
                        <div class="d-flex align-items-center py-lg-0 py-2">
                            <div class="d-flex flex-column text-right">
                                <span class="text-dark-75 font-weight-bolder font-size-h4">24,900</span>
                                <span class="text-muted font-size-sm font-weight-bolder">votes</span>
                            </div>
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Item-->
                    <!--begin: Item-->
                    <div class="d-flex flex-wrap align-items-center mb-10">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                            <div class="symbol-label"
                                style="background-image: url('assets/media/stock-600x400/img-10.jpg')"></div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Title-->
                        <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                            <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Yellow
                                Background</a>
                            <span class="text-muted font-weight-bold font-size-sm my-1">Strong abstract concept</span>
                            <span class="text-muted font-weight-bold font-size-sm">Created by:
                                <span class="text-primary font-weight-bold">KeenThemes</span></span>
                        </div>
                        <!--end::Title-->
                        <!--begin::Info-->
                        <div class="d-flex align-items-center py-lg-0 py-2">
                            <div class="d-flex flex-column text-right">
                                <span class="text-dark-75 font-weight-bolder font-size-h4">70,380</span>
                                <span class="text-muted font-weight-bolder font-size-sm">votes</span>
                            </div>
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end: Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-wrap align-items-center mb-10">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                            <div class="symbol-label"
                                style="background-image: url('assets/media/stock-600x400/img-1.jpg')"></div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Title-->
                        <div class="d-flex flex-column flex-grow-1 pr-3">
                            <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Nike
                                &amp; Blue</a>
                            <span class="text-muted font-weight-bold font-size-sm my-1">Footwear overalls</span>
                            <span class="text-muted font-weight-bold font-size-sm">Created by:
                                <span class="text-primary font-weight-bold">Invision Inc.</span></span>
                        </div>
                        <!--end::Title-->
                        <!--begin::Info-->
                        <div class="d-flex align-items-center py-lg-0 py-2">
                            <div class="d-flex flex-column text-right">
                                <span class="text-dark-75 font-size-h4 font-weight-bolder">7,200</span>
                                <span class="text-muted font-size-sm font-weight-bolder">votes</span>
                            </div>
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-wrap align-items-center mb-10">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                            <div class="symbol-label"
                                style="background-image: url('assets/media/stock-600x400/img-9.jpg')"></div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Title-->
                        <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                            <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Desserts
                                platter</a>
                            <span class="text-muted font-size-sm font-weight-bold my-1">Food trends &amp; reviews</span>
                            <span class="text-muted font-size-sm font-weight-bold">Created by:
                                <span class="text-primary font-weight-bold">Figma Studio</span></span>
                        </div>
                        <!--end::Title-->
                        <!--begin::Info-->
                        <div class="d-flex align-items-center py-lg-0 py-2">
                            <div class="d-flex flex-column text-right">
                                <span class="text-dark-75 font-size-h4 font-weight-bolder">36,450</span>
                                <span class="text-muted font-size-sm font-weight-bolder">votes</span>
                            </div>
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-wrap align-items-center">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                            <div class="symbol-label"
                                style="background-image: url('assets/media/stock-600x400/img-12.jpg')"></div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Title-->
                        <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                            <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Cup
                                &amp; Green</a>
                            <span class="text-muted font-weight-bold font-size-sm my-1">Local, clean &amp;
                                environmental</span>
                            <span class="text-muted font-weight-bold font-size-sm">Created by:
                                <span class="text-primary font-weight-bold">CoreAd</span></span>
                        </div>
                        <!--end::Title-->
                        <!--begin::Info-->
                        <div class="d-flex align-items-center py-lg-0 py-2">
                            <div class="d-flex flex-column text-right">
                                <span class="text-dark-75 font-weight-bolder font-size-h4">23,900</span>
                                <span class="text-muted font-size-sm font-weight-bolder">votes</span>
                            </div>
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::List Widget 14-->
        </div>
    </div>
</div> --}}
@endsection

@push('js')

@endpush
