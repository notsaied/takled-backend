@extends('layouts.master')

@section('title', env('APP_NAME'))

@section('pageContent')
    <div class="row">
        <div class="col-lg-8 d-flex align-items-stretch">
            <div class="card w-100 bg-primary-subtle overflow-hidden shadow-none">
                <div class="card-body position-relative">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="d-flex align-items-center mb-7">
                                <div class="rounded-circle overflow-hidden me-6">
                                    <img src="{{ asset('build/images/profile/user-1.jpg') }}" alt="modernize-img"
                                        width="40" height="40">
                                </div>
                                <h5 class="fw-semibold mb-0 fs-5">Welcome back, {{ auth()->user()->name }}</h5>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="border-end pe-4 border-muted border-opacity-10">
                                    <h3 class="mb-1 fw-semibold fs-8 d-flex align-content-center">{{ $todaySales }} {{ Auth::user()->currency->symbol }}<i
                                            class="ti {{$dayPositive ? 'ti-arrow-up-right text-success' : 'ti-arrow-down-right text-danger'}}  fs-5 lh-base "></i>
                                    </h3>
                                    <p class="mb-0 text-dark">Today’s Sales</p>
                                </div>
                                <div class="ps-4">
                                    <h3 class="mb-1 fw-semibold fs-8 d-flex align-content-center">{{$percentageChangeDay}}%<i
                                            class="ti {{$dayPositive ? 'ti-arrow-up-right text-success' : 'ti-arrow-down-right text-danger'}} fs-5 lh-base "></i>
                                    </h3>
                                    <p class="mb-0 text-dark">Overall Performance</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="welcome-bg-img mb-n7 text-end">
                                <img src="{{ asset('build/images/backgrounds/welcome-bg.svg') }}" alt="modernize-img"
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-2 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h4 class="fw-semibold">$10,230</h4>
                    <p class="mb-2 fs-3">Expense</p>
                    <div id="expense" style="min-height: 88.7px;">
                        <div id="apexcharts9g89d1al" class="apexcharts-canvas apexcharts9g89d1al apexcharts-theme-light"
                            style="width: 118px; height: 88.7px;"><svg id="SvgjsSvg2116" width="118" height="88.7"
                                xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                transform="translate(0, 0)" style="background: transparent;">
                                <foreignObject x="0" y="0" width="118" height="88.7">
                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"></div>
                                </foreignObject>
                                <g id="SvgjsG2118" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(17, 0)">
                                    <defs id="SvgjsDefs2117">
                                        <clipPath id="gridRectMask9g89d1al">
                                            <rect id="SvgjsRect2119" width="92" height="110" x="-3" y="-1"
                                                rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMask9g89d1al"></clipPath>
                                        <clipPath id="nonForecastMask9g89d1al"></clipPath>
                                        <clipPath id="gridRectMarkerMask9g89d1al">
                                            <rect id="SvgjsRect2120" width="90" height="112" x="-2" y="-2"
                                                rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <g id="SvgjsG2121" class="apexcharts-pie">
                                        <g id="SvgjsG2122" transform="translate(0, 0) scale(1)">
                                            <circle id="SvgjsCircle2123" r="25.165853658536584" cx="43"
                                                cy="43" fill="none"></circle>
                                            <g id="SvgjsG2124" class="apexcharts-slices">
                                                <g id="SvgjsG2125" class="apexcharts-series apexcharts-pie-series"
                                                    seriesName="" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath2126"
                                                        d="M 43 7.048780487804876 A 35.951219512195124 35.951219512195124 0 1 1 21.86840336880231 72.08514755387006 L 28.20788235816162 63.35960328770904 A 25.165853658536584 25.165853658536584 0 1 0 43 17.834146341463416 L 43 7.048780487804876 z"
                                                        fill="var(--bs-primary)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                        index="0" j="0" data:angle="216" data:startAngle="0"
                                                        data:strokeWidth="0" data:value="60"
                                                        data:pathOrig="M 43 7.048780487804876 A 35.951219512195124 35.951219512195124 0 1 1 21.86840336880231 72.08514755387006 L 28.20788235816162 63.35960328770904 A 25.165853658536584 25.165853658536584 0 1 0 43 17.834146341463416 L 43 7.048780487804876 z">
                                                    </path>
                                                </g>
                                                <g id="SvgjsG2127" class="apexcharts-series apexcharts-pie-series"
                                                    seriesName="" rel="2" data:realIndex="1">
                                                    <path id="SvgjsPath2128"
                                                        d="M 21.86840336880231 72.08514755387006 A 35.951219512195124 35.951219512195124 0 0 1 13.914852446129931 21.86840336880231 L 22.640396712290954 28.20788235816162 A 25.165853658536584 25.165853658536584 0 0 0 28.20788235816162 63.35960328770904 L 21.86840336880231 72.08514755387006 z"
                                                        fill="var(--bs-secondary)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                        index="0" j="1" data:angle="90" data:startAngle="216"
                                                        data:strokeWidth="0" data:value="25"
                                                        data:pathOrig="M 21.86840336880231 72.08514755387006 A 35.951219512195124 35.951219512195124 0 0 1 13.914852446129931 21.86840336880231 L 22.640396712290954 28.20788235816162 A 25.165853658536584 25.165853658536584 0 0 0 28.20788235816162 63.35960328770904 L 21.86840336880231 72.08514755387006 z">
                                                    </path>
                                                </g>
                                                <g id="SvgjsG2129" class="apexcharts-series apexcharts-pie-series"
                                                    seriesName="" rel="3" data:realIndex="2">
                                                    <path id="SvgjsPath2130"
                                                        d="M 13.914852446129931 21.86840336880231 A 35.951219512195124 35.951219512195124 0 0 1 42.9937253285259 7.04878103537326 L 42.99560772996813 17.834146724761283 A 25.165853658536584 25.165853658536584 0 0 0 22.640396712290954 28.20788235816162 L 13.914852446129931 21.86840336880231 z"
                                                        fill="var(--bs-yellow)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                        index="0" j="2" data:angle="54" data:startAngle="306"
                                                        data:strokeWidth="0" data:value="15"
                                                        data:pathOrig="M 13.914852446129931 21.86840336880231 A 35.951219512195124 35.951219512195124 0 0 1 42.9937253285259 7.04878103537326 L 42.99560772996813 17.834146724761283 A 25.165853658536584 25.165853658536584 0 0 0 22.640396712290954 28.20788235816162 L 13.914852446129931 21.86840336880231 z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG2131" class="apexcharts-datalabels-group"
                                            transform="translate(0, 0) scale(1)"><text id="SvgjsText2132"
                                                font-family="inherit" x="43" y="33" text-anchor="middle"
                                                dominant-baseline="auto" font-size="18px" font-weight="600"
                                                fill="var(--bs-primary)"
                                                class="apexcharts-text apexcharts-datalabel-label"
                                                style="font-family: inherit;"></text></g>
                                    </g>
                                    <line id="SvgjsLine2133" x1="0" y1="0" x2="86"
                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine2134" x1="0" y1="0" x2="86"
                                        y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs-hidden"></line>
                                </g>
                            </svg>
                            <div class="apexcharts-tooltip apexcharts-theme-dark">
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: var(--bs-primary);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: var(--bs-secondary);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: var(--bs-yellow);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-2 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h4 class="fw-semibold">$65,432</h4>
                    <p class="mb-1 fs-3">Sales</p>
                    <div id="sales" class="sales-chart mx-n2" style="min-height: 85px;">
                        <div id="apexchartsfy6bhwdf" class="apexcharts-canvas apexchartsfy6bhwdf apexcharts-theme-light"
                            style="width: 134px; height: 85px;"><svg id="SvgjsSvg2135" width="134" height="85"
                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                style="background: transparent;">
                                <foreignObject x="0" y="0" width="134" height="85">
                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                        style="max-height: 42.5px;"></div>
                                </foreignObject>
                                <g id="SvgjsG2219" class="apexcharts-yaxis" rel="0"
                                    transform="translate(-18, 0)"></g>
                                <g id="SvgjsG2137" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(17.933333333333334, 0)">
                                    <defs id="SvgjsDefs2136">
                                        <linearGradient id="SvgjsLinearGradient2139" x1="0" y1="0"
                                            x2="0" y2="1">
                                            <stop id="SvgjsStop2140" stop-opacity="0.4"
                                                stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                            <stop id="SvgjsStop2141" stop-opacity="0.5"
                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            <stop id="SvgjsStop2142" stop-opacity="0.5"
                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                        </linearGradient>
                                        <clipPath id="gridRectMaskfy6bhwdf">
                                            <rect id="SvgjsRect2144" width="139" height="86"
                                                x="-16.433333333333334" y="-0.5" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMaskfy6bhwdf"></clipPath>
                                        <clipPath id="nonForecastMaskfy6bhwdf"></clipPath>
                                        <clipPath id="gridRectMarkerMaskfy6bhwdf">
                                            <rect id="SvgjsRect2145" width="110.13333333333333" height="89" x="-2"
                                                y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <rect id="SvgjsRect2143" width="10.613333333333333" height="85" x="0" y="0"
                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                        stroke-dasharray="3" fill="url(#SvgjsLinearGradient2139)"
                                        class="apexcharts-xcrosshairs" y2="85" filter="none" fill-opacity="0.9">
                                    </rect>
                                    <g id="SvgjsG2192" class="apexcharts-grid">
                                        <g id="SvgjsG2193" class="apexcharts-gridlines-horizontal"
                                            style="display: none;">
                                            <line id="SvgjsLine2196" x1="-13.933333333333334" y1="0"
                                                x2="120.06666666666666" y2="0" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine2197" x1="-13.933333333333334" y1="8.5"
                                                x2="120.06666666666666" y2="8.5" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine2198" x1="-13.933333333333334" y1="17"
                                                x2="120.06666666666666" y2="17" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine2199" x1="-13.933333333333334" y1="25.5"
                                                x2="120.06666666666666" y2="25.5" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine2200" x1="-13.933333333333334" y1="34"
                                                x2="120.06666666666666" y2="34" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine2201" x1="-13.933333333333334" y1="42.5"
                                                x2="120.06666666666666" y2="42.5" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine2202" x1="-13.933333333333334" y1="51"
                                                x2="120.06666666666666" y2="51" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine2203" x1="-13.933333333333334" y1="59.5"
                                                x2="120.06666666666666" y2="59.5" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine2204" x1="-13.933333333333334" y1="68"
                                                x2="120.06666666666666" y2="68" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine2205" x1="-13.933333333333334" y1="76.5"
                                                x2="120.06666666666666" y2="76.5" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine2206" x1="-13.933333333333334" y1="85"
                                                x2="120.06666666666666" y2="85" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                        </g>
                                        <g id="SvgjsG2194" class="apexcharts-gridlines-vertical" style="display: none;">
                                        </g>
                                        <line id="SvgjsLine2208" x1="0" y1="85" x2="106.13333333333333"
                                            y2="85" stroke="transparent" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                        <line id="SvgjsLine2207" x1="0" y1="1" x2="0"
                                            y2="85" stroke="transparent" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG2195" class="apexcharts-grid-borders" style="display: none;"></g>
                                    <g id="SvgjsG2146" class="apexcharts-bar-series apexcharts-plot-series">
                                        <g id="SvgjsG2147" class="apexcharts-series" seriesName="" rel="1"
                                            data:realIndex="0">
                                            <path id="SvgjsPath2151"
                                                d="M -5.306666666666667 82.001 L -5.306666666666667 66.751 C -5.306666666666667 65.251 -3.8066666666666666 63.751 -2.306666666666666 63.751 L 1.3066666666666666 63.751 C 2.8066666666666666 63.751 4.306666666666667 65.251 4.306666666666667 66.751 L 4.306666666666667 82.001 C 4.306666666666667 83.501 2.8066666666666666 85.001 1.3066666666666662 85.001 L -2.3066666666666666 85.001 C -3.8066666666666666 85.001 -5.306666666666667 83.501 -5.306666666666667 82.001 Z "
                                                fill="var(--bs-primary)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskfy6bhwdf)"
                                                pathTo="M -5.306666666666667 82.001 L -5.306666666666667 66.751 C -5.306666666666667 65.251 -3.8066666666666666 63.751 -2.306666666666666 63.751 L 1.3066666666666666 63.751 C 2.8066666666666666 63.751 4.306666666666667 65.251 4.306666666666667 66.751 L 4.306666666666667 82.001 C 4.306666666666667 83.501 2.8066666666666666 85.001 1.3066666666666662 85.001 L -2.3066666666666666 85.001 C -3.8066666666666666 85.001 -5.306666666666667 83.501 -5.306666666666667 82.001 Z "
                                                pathFrom="M -5.306666666666667 85.001 L -5.306666666666667 85.001 L 4.306666666666667 85.001 L 4.306666666666667 85.001 L 4.306666666666667 85.001 L 4.306666666666667 85.001 L 4.306666666666667 85.001 L -5.306666666666667 85.001 Z"
                                                cy="63.75" cx="4.806666666666667" j="0" val="25"
                                                barHeight="21.25" barWidth="10.613333333333333"></path>
                                            <path id="SvgjsPath2153"
                                                d="M 15.92 82.001 L 15.92 58.251 C 15.92 56.751 17.42 55.251 18.92 55.251 L 22.53333333333333 55.251 C 24.03333333333333 55.251 25.53333333333333 56.751 25.53333333333333 58.251 L 25.53333333333333 82.001 C 25.53333333333333 83.501 24.03333333333333 85.001 22.53333333333333 85.001 L 18.92 85.001 C 17.42 85.001 15.92 83.501 15.92 82.001 Z "
                                                fill="var(--bs-primary)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskfy6bhwdf)"
                                                pathTo="M 15.92 82.001 L 15.92 58.251 C 15.92 56.751 17.42 55.251 18.92 55.251 L 22.53333333333333 55.251 C 24.03333333333333 55.251 25.53333333333333 56.751 25.53333333333333 58.251 L 25.53333333333333 82.001 C 25.53333333333333 83.501 24.03333333333333 85.001 22.53333333333333 85.001 L 18.92 85.001 C 17.42 85.001 15.92 83.501 15.92 82.001 Z "
                                                pathFrom="M 15.92 85.001 L 15.92 85.001 L 25.53333333333333 85.001 L 25.53333333333333 85.001 L 25.53333333333333 85.001 L 25.53333333333333 85.001 L 25.53333333333333 85.001 L 15.92 85.001 Z"
                                                cy="55.25" cx="26.033333333333335" j="1" val="35"
                                                barHeight="29.75" barWidth="10.613333333333333"></path>
                                            <path id="SvgjsPath2155"
                                                d="M 37.14666666666667 82.001 L 37.14666666666667 71.001 C 37.14666666666667 69.501 38.64666666666667 68.001 40.14666666666667 68.001 L 43.760000000000005 68.001 C 45.260000000000005 68.001 46.760000000000005 69.501 46.760000000000005 71.001 L 46.760000000000005 82.001 C 46.760000000000005 83.501 45.260000000000005 85.001 43.760000000000005 85.001 L 40.14666666666667 85.001 C 38.64666666666667 85.001 37.14666666666667 83.501 37.14666666666667 82.001 Z "
                                                fill="var(--bs-primary)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskfy6bhwdf)"
                                                pathTo="M 37.14666666666667 82.001 L 37.14666666666667 71.001 C 37.14666666666667 69.501 38.64666666666667 68.001 40.14666666666667 68.001 L 43.760000000000005 68.001 C 45.260000000000005 68.001 46.760000000000005 69.501 46.760000000000005 71.001 L 46.760000000000005 82.001 C 46.760000000000005 83.501 45.260000000000005 85.001 43.760000000000005 85.001 L 40.14666666666667 85.001 C 38.64666666666667 85.001 37.14666666666667 83.501 37.14666666666667 82.001 Z "
                                                pathFrom="M 37.14666666666667 85.001 L 37.14666666666667 85.001 L 46.760000000000005 85.001 L 46.760000000000005 85.001 L 46.760000000000005 85.001 L 46.760000000000005 85.001 L 46.760000000000005 85.001 L 37.14666666666667 85.001 Z"
                                                cy="68" cx="47.260000000000005" j="2" val="20"
                                                barHeight="17" barWidth="10.613333333333333"></path>
                                            <path id="SvgjsPath2157"
                                                d="M 58.373333333333335 82.001 L 58.373333333333335 66.751 C 58.373333333333335 65.251 59.873333333333335 63.751 61.373333333333335 63.751 L 64.98666666666666 63.751 C 66.48666666666666 63.751 67.98666666666666 65.251 67.98666666666666 66.751 L 67.98666666666666 82.001 C 67.98666666666666 83.501 66.48666666666666 85.001 64.98666666666666 85.001 L 61.373333333333335 85.001 C 59.873333333333335 85.001 58.373333333333335 83.501 58.373333333333335 82.001 Z "
                                                fill="var(--bs-primary)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskfy6bhwdf)"
                                                pathTo="M 58.373333333333335 82.001 L 58.373333333333335 66.751 C 58.373333333333335 65.251 59.873333333333335 63.751 61.373333333333335 63.751 L 64.98666666666666 63.751 C 66.48666666666666 63.751 67.98666666666666 65.251 67.98666666666666 66.751 L 67.98666666666666 82.001 C 67.98666666666666 83.501 66.48666666666666 85.001 64.98666666666666 85.001 L 61.373333333333335 85.001 C 59.873333333333335 85.001 58.373333333333335 83.501 58.373333333333335 82.001 Z "
                                                pathFrom="M 58.373333333333335 85.001 L 58.373333333333335 85.001 L 67.98666666666666 85.001 L 67.98666666666666 85.001 L 67.98666666666666 85.001 L 67.98666666666666 85.001 L 67.98666666666666 85.001 L 58.373333333333335 85.001 Z"
                                                cy="63.75" cx="68.48666666666666" j="3" val="25"
                                                barHeight="21.25" barWidth="10.613333333333333"></path>
                                            <path id="SvgjsPath2159"
                                                d="M 79.6 82.001 L 79.6 54.001 C 79.6 52.501 81.1 51.001 82.6 51.001 L 86.21333333333332 51.001 C 87.71333333333332 51.001 89.21333333333332 52.501 89.21333333333332 54.001 L 89.21333333333332 82.001 C 89.21333333333332 83.501 87.71333333333332 85.001 86.21333333333332 85.001 L 82.6 85.001 C 81.1 85.001 79.6 83.501 79.6 82.001 Z "
                                                fill="var(--bs-primary)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskfy6bhwdf)"
                                                pathTo="M 79.6 82.001 L 79.6 54.001 C 79.6 52.501 81.1 51.001 82.6 51.001 L 86.21333333333332 51.001 C 87.71333333333332 51.001 89.21333333333332 52.501 89.21333333333332 54.001 L 89.21333333333332 82.001 C 89.21333333333332 83.501 87.71333333333332 85.001 86.21333333333332 85.001 L 82.6 85.001 C 81.1 85.001 79.6 83.501 79.6 82.001 Z "
                                                pathFrom="M 79.6 85.001 L 79.6 85.001 L 89.21333333333332 85.001 L 89.21333333333332 85.001 L 89.21333333333332 85.001 L 89.21333333333332 85.001 L 89.21333333333332 85.001 L 79.6 85.001 Z"
                                                cy="51" cx="89.71333333333332" j="4" val="40"
                                                barHeight="34" barWidth="10.613333333333333"></path>
                                            <path id="SvgjsPath2161"
                                                d="M 100.82666666666665 82.001 L 100.82666666666665 66.751 C 100.82666666666665 65.251 102.32666666666665 63.751 103.82666666666665 63.751 L 107.43999999999998 63.751 C 108.93999999999998 63.751 110.43999999999998 65.251 110.43999999999998 66.751 L 110.43999999999998 82.001 C 110.43999999999998 83.501 108.93999999999998 85.001 107.43999999999998 85.001 L 103.82666666666665 85.001 C 102.32666666666665 85.001 100.82666666666665 83.501 100.82666666666665 82.001 Z "
                                                fill="var(--bs-primary)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskfy6bhwdf)"
                                                pathTo="M 100.82666666666665 82.001 L 100.82666666666665 66.751 C 100.82666666666665 65.251 102.32666666666665 63.751 103.82666666666665 63.751 L 107.43999999999998 63.751 C 108.93999999999998 63.751 110.43999999999998 65.251 110.43999999999998 66.751 L 110.43999999999998 82.001 C 110.43999999999998 83.501 108.93999999999998 85.001 107.43999999999998 85.001 L 103.82666666666665 85.001 C 102.32666666666665 85.001 100.82666666666665 83.501 100.82666666666665 82.001 Z "
                                                pathFrom="M 100.82666666666665 85.001 L 100.82666666666665 85.001 L 110.43999999999998 85.001 L 110.43999999999998 85.001 L 110.43999999999998 85.001 L 110.43999999999998 85.001 L 110.43999999999998 85.001 L 100.82666666666665 85.001 Z"
                                                cy="63.75" cx="110.93999999999998" j="5" val="25"
                                                barHeight="21.25" barWidth="10.613333333333333"></path>
                                            <g id="SvgjsG2149" class="apexcharts-bar-goals-markers">
                                                <g id="SvgjsG2150" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskfy6bhwdf)"></g>
                                                <g id="SvgjsG2152" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskfy6bhwdf)"></g>
                                                <g id="SvgjsG2154" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskfy6bhwdf)"></g>
                                                <g id="SvgjsG2156" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskfy6bhwdf)"></g>
                                                <g id="SvgjsG2158" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskfy6bhwdf)"></g>
                                                <g id="SvgjsG2160" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskfy6bhwdf)"></g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG2162" class="apexcharts-series" seriesName="" rel="2"
                                            data:realIndex="1">
                                            <path id="SvgjsPath2166"
                                                d="M -5.306666666666667 60.751999999999995 L -5.306666666666667 37.001999999999995 C -5.306666666666667 35.501999999999995 -3.8066666666666666 34.001999999999995 -2.306666666666666 34.001999999999995 L 1.3066666666666666 34.001999999999995 C 2.8066666666666666 34.001999999999995 4.306666666666667 35.501999999999995 4.306666666666667 37.001999999999995 L 4.306666666666667 60.751999999999995 C 4.306666666666667 62.251999999999995 2.8066666666666666 63.751999999999995 1.3066666666666662 63.751999999999995 L -2.3066666666666666 63.751999999999995 C -3.8066666666666666 63.751999999999995 -5.306666666666667 62.251999999999995 -5.306666666666667 60.751999999999995 Z "
                                                fill="var(--bs-secondary)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskfy6bhwdf)"
                                                pathTo="M -5.306666666666667 60.751999999999995 L -5.306666666666667 37.001999999999995 C -5.306666666666667 35.501999999999995 -3.8066666666666666 34.001999999999995 -2.306666666666666 34.001999999999995 L 1.3066666666666666 34.001999999999995 C 2.8066666666666666 34.001999999999995 4.306666666666667 35.501999999999995 4.306666666666667 37.001999999999995 L 4.306666666666667 60.751999999999995 C 4.306666666666667 62.251999999999995 2.8066666666666666 63.751999999999995 1.3066666666666662 63.751999999999995 L -2.3066666666666666 63.751999999999995 C -3.8066666666666666 63.751999999999995 -5.306666666666667 62.251999999999995 -5.306666666666667 60.751999999999995 Z "
                                                pathFrom="M -5.306666666666667 63.751999999999995 L -5.306666666666667 63.751999999999995 L 4.306666666666667 63.751999999999995 L 4.306666666666667 63.751999999999995 L 4.306666666666667 63.751999999999995 L 4.306666666666667 63.751999999999995 L 4.306666666666667 63.751999999999995 L -5.306666666666667 63.751999999999995 Z"
                                                cy="34.001" cx="4.806666666666667" j="0" val="35"
                                                barHeight="29.75" barWidth="10.613333333333333"></path>
                                            <path id="SvgjsPath2168"
                                                d="M 15.92 52.251999999999995 L 15.92 24.252 C 15.92 22.752 17.42 21.252 18.92 21.252 L 22.53333333333333 21.252 C 24.03333333333333 21.252 25.53333333333333 22.752 25.53333333333333 24.252 L 25.53333333333333 52.251999999999995 C 25.53333333333333 53.751999999999995 24.03333333333333 55.251999999999995 22.53333333333333 55.251999999999995 L 18.92 55.251999999999995 C 17.42 55.251999999999995 15.92 53.751999999999995 15.92 52.251999999999995 Z "
                                                fill="var(--bs-secondary)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskfy6bhwdf)"
                                                pathTo="M 15.92 52.251999999999995 L 15.92 24.252 C 15.92 22.752 17.42 21.252 18.92 21.252 L 22.53333333333333 21.252 C 24.03333333333333 21.252 25.53333333333333 22.752 25.53333333333333 24.252 L 25.53333333333333 52.251999999999995 C 25.53333333333333 53.751999999999995 24.03333333333333 55.251999999999995 22.53333333333333 55.251999999999995 L 18.92 55.251999999999995 C 17.42 55.251999999999995 15.92 53.751999999999995 15.92 52.251999999999995 Z "
                                                pathFrom="M 15.92 55.251999999999995 L 15.92 55.251999999999995 L 25.53333333333333 55.251999999999995 L 25.53333333333333 55.251999999999995 L 25.53333333333333 55.251999999999995 L 25.53333333333333 55.251999999999995 L 25.53333333333333 55.251999999999995 L 15.92 55.251999999999995 Z"
                                                cy="21.250999999999998" cx="26.033333333333335" j="1" val="40"
                                                barHeight="34" barWidth="10.613333333333333"></path>
                                            <path id="SvgjsPath2170"
                                                d="M 37.14666666666667 65.00200000000001 L 37.14666666666667 54.002 C 37.14666666666667 52.502 38.64666666666667 51.002 40.14666666666667 51.002 L 43.760000000000005 51.002 C 45.260000000000005 51.002 46.760000000000005 52.502 46.760000000000005 54.002 L 46.760000000000005 65.00200000000001 C 46.760000000000005 66.50200000000001 45.260000000000005 68.00200000000001 43.760000000000005 68.00200000000001 L 40.14666666666667 68.00200000000001 C 38.64666666666667 68.00200000000001 37.14666666666667 66.50200000000001 37.14666666666667 65.00200000000001 Z "
                                                fill="var(--bs-secondary)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskfy6bhwdf)"
                                                pathTo="M 37.14666666666667 65.00200000000001 L 37.14666666666667 54.002 C 37.14666666666667 52.502 38.64666666666667 51.002 40.14666666666667 51.002 L 43.760000000000005 51.002 C 45.260000000000005 51.002 46.760000000000005 52.502 46.760000000000005 54.002 L 46.760000000000005 65.00200000000001 C 46.760000000000005 66.50200000000001 45.260000000000005 68.00200000000001 43.760000000000005 68.00200000000001 L 40.14666666666667 68.00200000000001 C 38.64666666666667 68.00200000000001 37.14666666666667 66.50200000000001 37.14666666666667 65.00200000000001 Z "
                                                pathFrom="M 37.14666666666667 68.00200000000001 L 37.14666666666667 68.00200000000001 L 46.760000000000005 68.00200000000001 L 46.760000000000005 68.00200000000001 L 46.760000000000005 68.00200000000001 L 46.760000000000005 68.00200000000001 L 46.760000000000005 68.00200000000001 L 37.14666666666667 68.00200000000001 Z"
                                                cy="51.001000000000005" cx="47.260000000000005" j="2" val="20"
                                                barHeight="17" barWidth="10.613333333333333"></path>
                                            <path id="SvgjsPath2172"
                                                d="M 58.373333333333335 60.751999999999995 L 58.373333333333335 37.001999999999995 C 58.373333333333335 35.501999999999995 59.873333333333335 34.001999999999995 61.373333333333335 34.001999999999995 L 64.98666666666666 34.001999999999995 C 66.48666666666666 34.001999999999995 67.98666666666666 35.501999999999995 67.98666666666666 37.001999999999995 L 67.98666666666666 60.751999999999995 C 67.98666666666666 62.251999999999995 66.48666666666666 63.751999999999995 64.98666666666666 63.751999999999995 L 61.373333333333335 63.751999999999995 C 59.873333333333335 63.751999999999995 58.373333333333335 62.251999999999995 58.373333333333335 60.751999999999995 Z "
                                                fill="var(--bs-secondary)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskfy6bhwdf)"
                                                pathTo="M 58.373333333333335 60.751999999999995 L 58.373333333333335 37.001999999999995 C 58.373333333333335 35.501999999999995 59.873333333333335 34.001999999999995 61.373333333333335 34.001999999999995 L 64.98666666666666 34.001999999999995 C 66.48666666666666 34.001999999999995 67.98666666666666 35.501999999999995 67.98666666666666 37.001999999999995 L 67.98666666666666 60.751999999999995 C 67.98666666666666 62.251999999999995 66.48666666666666 63.751999999999995 64.98666666666666 63.751999999999995 L 61.373333333333335 63.751999999999995 C 59.873333333333335 63.751999999999995 58.373333333333335 62.251999999999995 58.373333333333335 60.751999999999995 Z "
                                                pathFrom="M 58.373333333333335 63.751999999999995 L 58.373333333333335 63.751999999999995 L 67.98666666666666 63.751999999999995 L 67.98666666666666 63.751999999999995 L 67.98666666666666 63.751999999999995 L 67.98666666666666 63.751999999999995 L 67.98666666666666 63.751999999999995 L 58.373333333333335 63.751999999999995 Z"
                                                cy="34.001" cx="68.48666666666666" j="3" val="35"
                                                barHeight="29.75" barWidth="10.613333333333333"></path>
                                            <path id="SvgjsPath2174"
                                                d="M 79.6 48.001999999999995 L 79.6 20.002 C 79.6 18.502 81.1 17.002 82.6 17.002 L 86.21333333333332 17.002 C 87.71333333333332 17.002 89.21333333333332 18.502 89.21333333333332 20.002 L 89.21333333333332 48.001999999999995 C 89.21333333333332 49.501999999999995 87.71333333333332 51.001999999999995 86.21333333333332 51.001999999999995 L 82.6 51.001999999999995 C 81.1 51.001999999999995 79.6 49.501999999999995 79.6 48.001999999999995 Z "
                                                fill="var(--bs-secondary)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskfy6bhwdf)"
                                                pathTo="M 79.6 48.001999999999995 L 79.6 20.002 C 79.6 18.502 81.1 17.002 82.6 17.002 L 86.21333333333332 17.002 C 87.71333333333332 17.002 89.21333333333332 18.502 89.21333333333332 20.002 L 89.21333333333332 48.001999999999995 C 89.21333333333332 49.501999999999995 87.71333333333332 51.001999999999995 86.21333333333332 51.001999999999995 L 82.6 51.001999999999995 C 81.1 51.001999999999995 79.6 49.501999999999995 79.6 48.001999999999995 Z "
                                                pathFrom="M 79.6 51.001999999999995 L 79.6 51.001999999999995 L 89.21333333333332 51.001999999999995 L 89.21333333333332 51.001999999999995 L 89.21333333333332 51.001999999999995 L 89.21333333333332 51.001999999999995 L 89.21333333333332 51.001999999999995 L 79.6 51.001999999999995 Z"
                                                cy="17.000999999999998" cx="89.71333333333332" j="4" val="40"
                                                barHeight="34" barWidth="10.613333333333333"></path>
                                            <path id="SvgjsPath2176"
                                                d="M 100.82666666666665 60.751999999999995 L 100.82666666666665 37.001999999999995 C 100.82666666666665 35.501999999999995 102.32666666666665 34.001999999999995 103.82666666666665 34.001999999999995 L 107.43999999999998 34.001999999999995 C 108.93999999999998 34.001999999999995 110.43999999999998 35.501999999999995 110.43999999999998 37.001999999999995 L 110.43999999999998 60.751999999999995 C 110.43999999999998 62.251999999999995 108.93999999999998 63.751999999999995 107.43999999999998 63.751999999999995 L 103.82666666666665 63.751999999999995 C 102.32666666666665 63.751999999999995 100.82666666666665 62.251999999999995 100.82666666666665 60.751999999999995 Z "
                                                fill="var(--bs-secondary)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskfy6bhwdf)"
                                                pathTo="M 100.82666666666665 60.751999999999995 L 100.82666666666665 37.001999999999995 C 100.82666666666665 35.501999999999995 102.32666666666665 34.001999999999995 103.82666666666665 34.001999999999995 L 107.43999999999998 34.001999999999995 C 108.93999999999998 34.001999999999995 110.43999999999998 35.501999999999995 110.43999999999998 37.001999999999995 L 110.43999999999998 60.751999999999995 C 110.43999999999998 62.251999999999995 108.93999999999998 63.751999999999995 107.43999999999998 63.751999999999995 L 103.82666666666665 63.751999999999995 C 102.32666666666665 63.751999999999995 100.82666666666665 62.251999999999995 100.82666666666665 60.751999999999995 Z "
                                                pathFrom="M 100.82666666666665 63.751999999999995 L 100.82666666666665 63.751999999999995 L 110.43999999999998 63.751999999999995 L 110.43999999999998 63.751999999999995 L 110.43999999999998 63.751999999999995 L 110.43999999999998 63.751999999999995 L 110.43999999999998 63.751999999999995 L 100.82666666666665 63.751999999999995 Z"
                                                cy="34.001" cx="110.93999999999998" j="5" val="35"
                                                barHeight="29.75" barWidth="10.613333333333333"></path>
                                            <g id="SvgjsG2164" class="apexcharts-bar-goals-markers">
                                                <g id="SvgjsG2165" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskfy6bhwdf)"></g>
                                                <g id="SvgjsG2167" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskfy6bhwdf)"></g>
                                                <g id="SvgjsG2169" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskfy6bhwdf)"></g>
                                                <g id="SvgjsG2171" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskfy6bhwdf)"></g>
                                                <g id="SvgjsG2173" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskfy6bhwdf)"></g>
                                                <g id="SvgjsG2175" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskfy6bhwdf)"></g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG2177" class="apexcharts-series" seriesName="" rel="3"
                                            data:realIndex="2">
                                            <path id="SvgjsPath2181"
                                                d="M -5.306666666666667 31.002999999999993 L -5.306666666666667 3.0029999999999952 C -5.306666666666667 1.5029999999999952 -3.8066666666666666 0.002999999999995339 -2.306666666666666 0.002999999999995339 L 1.3066666666666666 0.002999999999995339 C 2.8066666666666666 0.002999999999995339 4.306666666666667 1.5029999999999952 4.306666666666667 3.0029999999999952 L 4.306666666666667 31.002999999999993 C 4.306666666666667 32.50299999999999 2.8066666666666666 34.00299999999999 1.3066666666666662 34.00299999999999 L -2.3066666666666666 34.00299999999999 C -3.8066666666666666 34.00299999999999 -5.306666666666667 32.50299999999999 -5.306666666666667 31.002999999999993 Z "
                                                fill="var(--bs-gray-200)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="2"
                                                clip-path="url(#gridRectMaskfy6bhwdf)"
                                                pathTo="M -5.306666666666667 31.002999999999993 L -5.306666666666667 3.0029999999999952 C -5.306666666666667 1.5029999999999952 -3.8066666666666666 0.002999999999995339 -2.306666666666666 0.002999999999995339 L 1.3066666666666666 0.002999999999995339 C 2.8066666666666666 0.002999999999995339 4.306666666666667 1.5029999999999952 4.306666666666667 3.0029999999999952 L 4.306666666666667 31.002999999999993 C 4.306666666666667 32.50299999999999 2.8066666666666666 34.00299999999999 1.3066666666666662 34.00299999999999 L -2.3066666666666666 34.00299999999999 C -3.8066666666666666 34.00299999999999 -5.306666666666667 32.50299999999999 -5.306666666666667 31.002999999999993 Z "
                                                pathFrom="M -5.306666666666667 34.00299999999999 L -5.306666666666667 34.00299999999999 L 4.306666666666667 34.00299999999999 L 4.306666666666667 34.00299999999999 L 4.306666666666667 34.00299999999999 L 4.306666666666667 34.00299999999999 L 4.306666666666667 34.00299999999999 L -5.306666666666667 34.00299999999999 Z"
                                                cy="0.001999999999995339" cx="4.806666666666667" j="0" val="40"
                                                barHeight="34" barWidth="10.613333333333333"></path>
                                            <path id="SvgjsPath2183"
                                                d="M 15.92 18.253 L 15.92 3.002999999999999 C 15.92 1.5029999999999988 17.42 0.0029999999999988916 18.92 0.0029999999999988916 L 22.53333333333333 0.0029999999999988916 C 24.03333333333333 0.0029999999999988916 25.53333333333333 1.5029999999999988 25.53333333333333 3.002999999999999 L 25.53333333333333 18.253 C 25.53333333333333 19.753 24.03333333333333 21.253 22.53333333333333 21.253 L 18.92 21.253 C 17.42 21.253 15.92 19.753 15.92 18.253 Z "
                                                fill="var(--bs-gray-200)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="2"
                                                clip-path="url(#gridRectMaskfy6bhwdf)"
                                                pathTo="M 15.92 18.253 L 15.92 3.002999999999999 C 15.92 1.5029999999999988 17.42 0.0029999999999988916 18.92 0.0029999999999988916 L 22.53333333333333 0.0029999999999988916 C 24.03333333333333 0.0029999999999988916 25.53333333333333 1.5029999999999988 25.53333333333333 3.002999999999999 L 25.53333333333333 18.253 C 25.53333333333333 19.753 24.03333333333333 21.253 22.53333333333333 21.253 L 18.92 21.253 C 17.42 21.253 15.92 19.753 15.92 18.253 Z "
                                                pathFrom="M 15.92 21.253 L 15.92 21.253 L 25.53333333333333 21.253 L 25.53333333333333 21.253 L 25.53333333333333 21.253 L 25.53333333333333 21.253 L 25.53333333333333 21.253 L 15.92 21.253 Z"
                                                cy="0.0019999999999988916" cx="26.033333333333335" j="1" val="25"
                                                barHeight="21.25" barWidth="10.613333333333333"></path>
                                            <path id="SvgjsPath2185"
                                                d="M 37.14666666666667 48.003 L 37.14666666666667 3.0030000000000023 C 37.14666666666667 1.5030000000000023 38.64666666666667 0.0030000000000024443 40.14666666666667 0.0030000000000024443 L 43.760000000000005 0.0030000000000024443 C 45.260000000000005 0.0030000000000024443 46.760000000000005 1.5030000000000023 46.760000000000005 3.0030000000000023 L 46.760000000000005 48.003 C 46.760000000000005 49.503 45.260000000000005 51.003 43.760000000000005 51.003 L 40.14666666666667 51.003 C 38.64666666666667 51.003 37.14666666666667 49.503 37.14666666666667 48.003 Z "
                                                fill="var(--bs-gray-200)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="2"
                                                clip-path="url(#gridRectMaskfy6bhwdf)"
                                                pathTo="M 37.14666666666667 48.003 L 37.14666666666667 3.0030000000000023 C 37.14666666666667 1.5030000000000023 38.64666666666667 0.0030000000000024443 40.14666666666667 0.0030000000000024443 L 43.760000000000005 0.0030000000000024443 C 45.260000000000005 0.0030000000000024443 46.760000000000005 1.5030000000000023 46.760000000000005 3.0030000000000023 L 46.760000000000005 48.003 C 46.760000000000005 49.503 45.260000000000005 51.003 43.760000000000005 51.003 L 40.14666666666667 51.003 C 38.64666666666667 51.003 37.14666666666667 49.503 37.14666666666667 48.003 Z "
                                                pathFrom="M 37.14666666666667 51.003 L 37.14666666666667 51.003 L 46.760000000000005 51.003 L 46.760000000000005 51.003 L 46.760000000000005 51.003 L 46.760000000000005 51.003 L 46.760000000000005 51.003 L 37.14666666666667 51.003 Z"
                                                cy="0.0020000000000024443" cx="47.260000000000005" j="2" val="60"
                                                barHeight="51" barWidth="10.613333333333333"></path>
                                            <path id="SvgjsPath2187"
                                                d="M 58.373333333333335 31.002999999999993 L 58.373333333333335 3.0029999999999952 C 58.373333333333335 1.5029999999999952 59.873333333333335 0.002999999999995339 61.373333333333335 0.002999999999995339 L 64.98666666666666 0.002999999999995339 C 66.48666666666666 0.002999999999995339 67.98666666666666 1.5029999999999952 67.98666666666666 3.0029999999999952 L 67.98666666666666 31.002999999999993 C 67.98666666666666 32.50299999999999 66.48666666666666 34.00299999999999 64.98666666666666 34.00299999999999 L 61.373333333333335 34.00299999999999 C 59.873333333333335 34.00299999999999 58.373333333333335 32.50299999999999 58.373333333333335 31.002999999999993 Z "
                                                fill="var(--bs-gray-200)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="2"
                                                clip-path="url(#gridRectMaskfy6bhwdf)"
                                                pathTo="M 58.373333333333335 31.002999999999993 L 58.373333333333335 3.0029999999999952 C 58.373333333333335 1.5029999999999952 59.873333333333335 0.002999999999995339 61.373333333333335 0.002999999999995339 L 64.98666666666666 0.002999999999995339 C 66.48666666666666 0.002999999999995339 67.98666666666666 1.5029999999999952 67.98666666666666 3.0029999999999952 L 67.98666666666666 31.002999999999993 C 67.98666666666666 32.50299999999999 66.48666666666666 34.00299999999999 64.98666666666666 34.00299999999999 L 61.373333333333335 34.00299999999999 C 59.873333333333335 34.00299999999999 58.373333333333335 32.50299999999999 58.373333333333335 31.002999999999993 Z "
                                                pathFrom="M 58.373333333333335 34.00299999999999 L 58.373333333333335 34.00299999999999 L 67.98666666666666 34.00299999999999 L 67.98666666666666 34.00299999999999 L 67.98666666666666 34.00299999999999 L 67.98666666666666 34.00299999999999 L 67.98666666666666 34.00299999999999 L 58.373333333333335 34.00299999999999 Z"
                                                cy="0.001999999999995339" cx="68.48666666666666" j="3" val="40"
                                                barHeight="34" barWidth="10.613333333333333"></path>
                                            <path id="SvgjsPath2189"
                                                d="M 79.6 14.003 L 79.6 3.002999999999999 C 79.6 1.5029999999999988 81.1 0.0029999999999988916 82.6 0.0029999999999988916 L 86.21333333333332 0.0029999999999988916 C 87.71333333333332 0.0029999999999988916 89.21333333333332 1.5029999999999988 89.21333333333332 3.002999999999999 L 89.21333333333332 14.003 C 89.21333333333332 15.503 87.71333333333332 17.003 86.21333333333332 17.003 L 82.6 17.003 C 81.1 17.003 79.6 15.503 79.6 14.003 Z "
                                                fill="var(--bs-gray-200)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="2"
                                                clip-path="url(#gridRectMaskfy6bhwdf)"
                                                pathTo="M 79.6 14.003 L 79.6 3.002999999999999 C 79.6 1.5029999999999988 81.1 0.0029999999999988916 82.6 0.0029999999999988916 L 86.21333333333332 0.0029999999999988916 C 87.71333333333332 0.0029999999999988916 89.21333333333332 1.5029999999999988 89.21333333333332 3.002999999999999 L 89.21333333333332 14.003 C 89.21333333333332 15.503 87.71333333333332 17.003 86.21333333333332 17.003 L 82.6 17.003 C 81.1 17.003 79.6 15.503 79.6 14.003 Z "
                                                pathFrom="M 79.6 17.003 L 79.6 17.003 L 89.21333333333332 17.003 L 89.21333333333332 17.003 L 89.21333333333332 17.003 L 89.21333333333332 17.003 L 89.21333333333332 17.003 L 79.6 17.003 Z"
                                                cy="0.0019999999999988916" cx="89.71333333333332" j="4" val="20"
                                                barHeight="17" barWidth="10.613333333333333"></path>
                                            <path id="SvgjsPath2191"
                                                d="M 100.82666666666665 31.002999999999993 L 100.82666666666665 3.0029999999999952 C 100.82666666666665 1.5029999999999952 102.32666666666665 0.002999999999995339 103.82666666666665 0.002999999999995339 L 107.43999999999998 0.002999999999995339 C 108.93999999999998 0.002999999999995339 110.43999999999998 1.5029999999999952 110.43999999999998 3.0029999999999952 L 110.43999999999998 31.002999999999993 C 110.43999999999998 32.50299999999999 108.93999999999998 34.00299999999999 107.43999999999998 34.00299999999999 L 103.82666666666665 34.00299999999999 C 102.32666666666665 34.00299999999999 100.82666666666665 32.50299999999999 100.82666666666665 31.002999999999993 Z "
                                                fill="var(--bs-gray-200)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="2"
                                                clip-path="url(#gridRectMaskfy6bhwdf)"
                                                pathTo="M 100.82666666666665 31.002999999999993 L 100.82666666666665 3.0029999999999952 C 100.82666666666665 1.5029999999999952 102.32666666666665 0.002999999999995339 103.82666666666665 0.002999999999995339 L 107.43999999999998 0.002999999999995339 C 108.93999999999998 0.002999999999995339 110.43999999999998 1.5029999999999952 110.43999999999998 3.0029999999999952 L 110.43999999999998 31.002999999999993 C 110.43999999999998 32.50299999999999 108.93999999999998 34.00299999999999 107.43999999999998 34.00299999999999 L 103.82666666666665 34.00299999999999 C 102.32666666666665 34.00299999999999 100.82666666666665 32.50299999999999 100.82666666666665 31.002999999999993 Z "
                                                pathFrom="M 100.82666666666665 34.00299999999999 L 100.82666666666665 34.00299999999999 L 110.43999999999998 34.00299999999999 L 110.43999999999998 34.00299999999999 L 110.43999999999998 34.00299999999999 L 110.43999999999998 34.00299999999999 L 110.43999999999998 34.00299999999999 L 100.82666666666665 34.00299999999999 Z"
                                                cy="0.001999999999995339" cx="110.93999999999998" j="5" val="40"
                                                barHeight="34" barWidth="10.613333333333333"></path>
                                            <g id="SvgjsG2179" class="apexcharts-bar-goals-markers">
                                                <g id="SvgjsG2180" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskfy6bhwdf)"></g>
                                                <g id="SvgjsG2182" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskfy6bhwdf)"></g>
                                                <g id="SvgjsG2184" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskfy6bhwdf)"></g>
                                                <g id="SvgjsG2186" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskfy6bhwdf)"></g>
                                                <g id="SvgjsG2188" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskfy6bhwdf)"></g>
                                                <g id="SvgjsG2190" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskfy6bhwdf)"></g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG2148" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        <g id="SvgjsG2163" class="apexcharts-datalabels" data:realIndex="1"></g>
                                        <g id="SvgjsG2178" class="apexcharts-datalabels" data:realIndex="2"></g>
                                    </g>
                                    <line id="SvgjsLine2209" x1="-13.933333333333334" y1="0"
                                        x2="120.06666666666666" y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                        stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine2210" x1="-13.933333333333334" y1="0"
                                        x2="120.06666666666666" y2="0" stroke-dasharray="0" stroke-width="0"
                                        stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG2211" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG2212" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                        </g>
                                    </g>
                                    <g id="SvgjsG2220" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG2221" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG2222" class="apexcharts-point-annotations"></g>
                                </g>
                            </svg>
                            <div class="apexcharts-tooltip apexcharts-theme-dark">
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: var(--bs-primary);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: var(--bs-secondary);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: var(--bs-gray-200);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body">
                    <h4 class="card-title fw-semibold">Revenue Updates</h4>
                    <p class="card-subtitle mb-4">Overview of Profit</p>
                    <div class="d-flex align-items-center">
                        <div class="me-4">
                            <span class="round-8 text-bg-primary rounded-circle me-2 d-inline-block"></span>
                            <span class="fs-2">Footware</span>
                        </div>
                        <div>
                            <span class="round-8 text-bg-secondary rounded-circle me-2 d-inline-block"></span>
                            <span class="fs-2">Fashionware</span>
                        </div>
                    </div>
                    <div id="revenue-chart" class="revenue-chart mx-n3" style="min-height: 285px;">
                        <div id="apexchartsri0e2ro6" class="apexcharts-canvas apexchartsri0e2ro6 apexcharts-theme-light"
                            style="width: 327px; height: 270px;"><svg id="SvgjsSvg1666" width="327" height="270"
                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                style="background: transparent;">
                                <foreignObject x="0" y="0" width="327" height="270">
                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                        style="max-height: 135px;"></div>
                                </foreignObject>
                                <g id="SvgjsG1735" class="apexcharts-yaxis" rel="0"
                                    transform="translate(20.28125, 0)">
                                    <g id="SvgjsG1736" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1738"
                                            font-family="inherit" x="20" y="31.4" text-anchor="end"
                                            dominant-baseline="auto" font-size="11px" font-weight="400" fill="#adb0bb"
                                            class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1739">4.0</tspan>
                                            <title>4.0</title>
                                        </text><text id="SvgjsText1741" font-family="inherit" x="20" y="81.52587024688721"
                                            text-anchor="end" dominant-baseline="auto" font-size="11px"
                                            font-weight="400" fill="#adb0bb"
                                            class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1742">2.0</tspan>
                                            <title>2.0</title>
                                        </text><text id="SvgjsText1744" font-family="inherit" x="20" y="131.6517404937744"
                                            text-anchor="end" dominant-baseline="auto" font-size="11px"
                                            font-weight="400" fill="#adb0bb"
                                            class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1745">0.0</tspan>
                                            <title>0.0</title>
                                        </text><text id="SvgjsText1747" font-family="inherit" x="20"
                                            y="181.77761074066163" text-anchor="end" dominant-baseline="auto"
                                            font-size="11px" font-weight="400" fill="#adb0bb"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1748">-2.0</tspan>
                                            <title>-2.0</title>
                                        </text><text id="SvgjsText1750" font-family="inherit" x="20"
                                            y="231.90348098754882" text-anchor="end" dominant-baseline="auto"
                                            font-size="11px" font-weight="400" fill="#adb0bb"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1751">-4.0</tspan>
                                            <title>-4.0</title>
                                        </text></g>
                                </g>
                                <g id="SvgjsG1668" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(50.28125, 30)">
                                    <defs id="SvgjsDefs1667">
                                        <linearGradient id="SvgjsLinearGradient1671" x1="0" y1="0"
                                            x2="0" y2="1">
                                            <stop id="SvgjsStop1672" stop-opacity="0.4"
                                                stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                            <stop id="SvgjsStop1673" stop-opacity="0.5"
                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            <stop id="SvgjsStop1674" stop-opacity="0.5"
                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                        </linearGradient>
                                        <clipPath id="gridRectMaskri0e2ro6">
                                            <rect id="SvgjsRect1676" width="270.71875" height="200.5034809875488"
                                                x="-2" y="0" rx="0" ry="0" opacity="1"
                                                stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                            </rect>
                                        </clipPath>
                                        <clipPath id="forecastMaskri0e2ro6"></clipPath>
                                        <clipPath id="nonForecastMaskri0e2ro6"></clipPath>
                                        <clipPath id="gridRectMarkerMaskri0e2ro6">
                                            <rect id="SvgjsRect1677" width="270.71875" height="204.5034809875488"
                                                x="-2" y="-2" rx="0" ry="0" opacity="1"
                                                stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                            </rect>
                                        </clipPath>
                                    </defs>
                                    <rect id="SvgjsRect1675" width="10.66875" height="200.5034809875488" x="0" y="0"
                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                        stroke-dasharray="3" fill="url(#SvgjsLinearGradient1671)"
                                        class="apexcharts-xcrosshairs" y2="200.5034809875488" filter="none"
                                        fill-opacity="0.9"></rect>
                                    <g id="SvgjsG1705" class="apexcharts-grid">
                                        <g id="SvgjsG1706" class="apexcharts-gridlines-horizontal"
                                            style="display: none;">
                                            <line id="SvgjsLine1709" x1="0" y1="0" x2="266.71875"
                                                y2="0" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1710" x1="0" y1="50.1258702468872"
                                                x2="266.71875" y2="50.1258702468872" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1711" x1="0" y1="100.2517404937744"
                                                x2="266.71875" y2="100.2517404937744" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1712" x1="0" y1="150.37761074066162"
                                                x2="266.71875" y2="150.37761074066162" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1713" x1="0" y1="200.5034809875488"
                                                x2="266.71875" y2="200.5034809875488" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG1707" class="apexcharts-gridlines-vertical"
                                            style="display: none;"></g>
                                        <line id="SvgjsLine1715" x1="0" y1="200.5034809875488"
                                            x2="266.71875" y2="200.5034809875488" stroke="transparent"
                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                        <line id="SvgjsLine1714" x1="0" y1="1" x2="0"
                                            y2="200.5034809875488" stroke="transparent" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG1708" class="apexcharts-grid-borders" style="display: none;"></g>
                                    <g id="SvgjsG1678" class="apexcharts-bar-series apexcharts-plot-series">
                                        <g id="SvgjsG1679" class="apexcharts-series" seriesName="Footware"
                                            rel="1" data:realIndex="0">
                                            <path id="SvgjsPath1683"
                                                d="M 21.3375 100.25274049377441 L 21.3375 67.658337808609 C 21.3375 65.158337808609 23.8375 62.658337808609005 26.3375 62.658337808609005 L 27.006249999999994 62.658337808609005 C 29.506249999999994 62.658337808609005 32.006249999999994 65.158337808609 32.006249999999994 67.658337808609 L 32.006249999999994 100.25274049377441 z "
                                                fill="var(--bs-primary)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskri0e2ro6)"
                                                pathTo="M 21.3375 100.25274049377441 L 21.3375 67.658337808609 C 21.3375 65.158337808609 23.8375 62.658337808609005 26.3375 62.658337808609005 L 27.006249999999994 62.658337808609005 C 29.506249999999994 62.658337808609005 32.006249999999994 65.158337808609 32.006249999999994 67.658337808609 L 32.006249999999994 100.25274049377441 z "
                                                pathFrom="M 21.3375 100.25274049377441 L 21.3375 100.25274049377441 L 32.006249999999994 100.25274049377441 L 32.006249999999994 100.25274049377441 L 32.006249999999994 100.25274049377441 L 32.006249999999994 100.25274049377441 L 32.006249999999994 100.25274049377441 L 21.3375 100.25274049377441 z"
                                                cy="62.65733780860901" cx="74.68125" j="0" val="1.5"
                                                barHeight="37.5944026851654" barWidth="10.66875"></path>
                                            <path id="SvgjsPath1685"
                                                d="M 74.68125 100.25274049377441 L 74.68125 37.582815660476676 C 74.68125 35.082815660476676 77.18125 32.582815660476676 79.68125 32.582815660476676 L 80.35000000000001 32.582815660476676 C 82.85000000000001 32.582815660476676 85.35000000000001 35.082815660476676 85.35000000000001 37.582815660476676 L 85.35000000000001 100.25274049377441 z "
                                                fill="var(--bs-primary)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskri0e2ro6)"
                                                pathTo="M 74.68125 100.25274049377441 L 74.68125 37.582815660476676 C 74.68125 35.082815660476676 77.18125 32.582815660476676 79.68125 32.582815660476676 L 80.35000000000001 32.582815660476676 C 82.85000000000001 32.582815660476676 85.35000000000001 35.082815660476676 85.35000000000001 37.582815660476676 L 85.35000000000001 100.25274049377441 z "
                                                pathFrom="M 74.68125 100.25274049377441 L 74.68125 100.25274049377441 L 85.35000000000001 100.25274049377441 L 85.35000000000001 100.25274049377441 L 85.35000000000001 100.25274049377441 L 85.35000000000001 100.25274049377441 L 85.35000000000001 100.25274049377441 L 74.68125 100.25274049377441 z"
                                                cy="32.58181566047668" cx="128.025" j="1" val="2.7"
                                                barHeight="67.66992483329773" barWidth="10.66875"></path>
                                            <path id="SvgjsPath1687"
                                                d="M 128.025 100.25274049377441 L 128.025 50.11428322219848 C 128.025 47.61428322219848 130.525 45.11428322219848 133.025 45.11428322219848 L 133.69375 45.11428322219848 C 136.19375 45.11428322219848 138.69375 47.61428322219848 138.69375 50.11428322219848 L 138.69375 100.25274049377441 z "
                                                fill="var(--bs-primary)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskri0e2ro6)"
                                                pathTo="M 128.025 100.25274049377441 L 128.025 50.11428322219848 C 128.025 47.61428322219848 130.525 45.11428322219848 133.025 45.11428322219848 L 133.69375 45.11428322219848 C 136.19375 45.11428322219848 138.69375 47.61428322219848 138.69375 50.11428322219848 L 138.69375 100.25274049377441 z "
                                                pathFrom="M 128.025 100.25274049377441 L 128.025 100.25274049377441 L 138.69375 100.25274049377441 L 138.69375 100.25274049377441 L 138.69375 100.25274049377441 L 138.69375 100.25274049377441 L 138.69375 100.25274049377441 L 128.025 100.25274049377441 z"
                                                cy="45.11328322219848" cx="181.36875" j="2" val="2.2"
                                                barHeight="55.13845727157592" barWidth="10.66875"></path>
                                            <path id="SvgjsPath1689"
                                                d="M 181.36875 100.25274049377441 L 181.36875 15.02617404937744 C 181.36875 12.52617404937744 183.86875 10.02617404937744 186.36875 10.02617404937744 L 187.0375 10.02617404937744 C 189.5375 10.02617404937744 192.0375 12.52617404937744 192.0375 15.02617404937744 L 192.0375 100.25274049377441 z "
                                                fill="var(--bs-primary)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskri0e2ro6)"
                                                pathTo="M 181.36875 100.25274049377441 L 181.36875 15.02617404937744 C 181.36875 12.52617404937744 183.86875 10.02617404937744 186.36875 10.02617404937744 L 187.0375 10.02617404937744 C 189.5375 10.02617404937744 192.0375 12.52617404937744 192.0375 15.02617404937744 L 192.0375 100.25274049377441 z "
                                                pathFrom="M 181.36875 100.25274049377441 L 181.36875 100.25274049377441 L 192.0375 100.25274049377441 L 192.0375 100.25274049377441 L 192.0375 100.25274049377441 L 192.0375 100.25274049377441 L 192.0375 100.25274049377441 L 181.36875 100.25274049377441 z"
                                                cy="10.02517404937744" cx="234.7125" j="3" val="3.6"
                                                barHeight="90.22656644439697" barWidth="10.66875"></path>
                                            <path id="SvgjsPath1691"
                                                d="M 234.7125 100.25274049377441 L 234.7125 67.658337808609 C 234.7125 65.158337808609 237.2125 62.658337808609005 239.7125 62.658337808609005 L 240.38125 62.658337808609005 C 242.88125 62.658337808609005 245.38125 65.158337808609 245.38125 67.658337808609 L 245.38125 100.25274049377441 z "
                                                fill="var(--bs-primary)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskri0e2ro6)"
                                                pathTo="M 234.7125 100.25274049377441 L 234.7125 67.658337808609 C 234.7125 65.158337808609 237.2125 62.658337808609005 239.7125 62.658337808609005 L 240.38125 62.658337808609005 C 242.88125 62.658337808609005 245.38125 65.158337808609 245.38125 67.658337808609 L 245.38125 100.25274049377441 z "
                                                pathFrom="M 234.7125 100.25274049377441 L 234.7125 100.25274049377441 L 245.38125 100.25274049377441 L 245.38125 100.25274049377441 L 245.38125 100.25274049377441 L 245.38125 100.25274049377441 L 245.38125 100.25274049377441 L 234.7125 100.25274049377441 z"
                                                cy="62.65733780860901" cx="288.05625" j="4" val="1.5"
                                                barHeight="37.5944026851654" barWidth="10.66875"></path>
                                            <g id="SvgjsG1681" class="apexcharts-bar-goals-markers">
                                                <g id="SvgjsG1682" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskri0e2ro6)"></g>
                                                <g id="SvgjsG1684" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskri0e2ro6)"></g>
                                                <g id="SvgjsG1686" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskri0e2ro6)"></g>
                                                <g id="SvgjsG1688" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskri0e2ro6)"></g>
                                                <g id="SvgjsG1690" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskri0e2ro6)"></g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1692" class="apexcharts-series" seriesName="Fashionware"
                                            rel="2" data:realIndex="1">
                                            <path id="SvgjsPath1696"
                                                d="M 21.3375 100.25374049377442 L 21.3375 165.42995883941649 C 21.3375 167.92995883941649 23.8375 170.42995883941649 26.3375 170.42995883941649 L 27.006249999999994 170.42995883941649 C 29.506249999999994 170.42995883941649 32.006249999999994 167.92995883941649 32.006249999999994 165.42995883941649 L 32.006249999999994 100.25374049377442 z "
                                                fill="var(--bs-secondary)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskri0e2ro6)"
                                                pathTo="M 21.3375 100.25374049377442 L 21.3375 165.42995883941649 C 21.3375 167.92995883941649 23.8375 170.42995883941649 26.3375 170.42995883941649 L 27.006249999999994 170.42995883941649 C 29.506249999999994 170.42995883941649 32.006249999999994 167.92995883941649 32.006249999999994 165.42995883941649 L 32.006249999999994 100.25374049377442 z "
                                                pathFrom="M 21.3375 100.25374049377442 L 21.3375 100.25374049377442 L 32.006249999999994 100.25374049377442 L 32.006249999999994 100.25374049377442 L 32.006249999999994 100.25374049377442 L 32.006249999999994 100.25374049377442 L 32.006249999999994 100.25374049377442 L 21.3375 100.25374049377442 z"
                                                cy="170.42895883941648" cx="74.68125" j="0" val="-2.8"
                                                barHeight="-70.17621834564207" barWidth="10.66875"></path>
                                            <path id="SvgjsPath1698"
                                                d="M 74.68125 100.25374049377442 L 74.68125 122.82296912956238 C 74.68125 125.32296912956238 77.18125 127.82296912956238 79.68125 127.82296912956238 L 80.35000000000001 127.82296912956238 C 82.85000000000001 127.82296912956238 85.35000000000001 125.32296912956238 85.35000000000001 122.82296912956238 L 85.35000000000001 100.25374049377442 z "
                                                fill="var(--bs-secondary)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskri0e2ro6)"
                                                pathTo="M 74.68125 100.25374049377442 L 74.68125 122.82296912956238 C 74.68125 125.32296912956238 77.18125 127.82296912956238 79.68125 127.82296912956238 L 80.35000000000001 127.82296912956238 C 82.85000000000001 127.82296912956238 85.35000000000001 125.32296912956238 85.35000000000001 122.82296912956238 L 85.35000000000001 100.25374049377442 z "
                                                pathFrom="M 74.68125 100.25374049377442 L 74.68125 100.25374049377442 L 85.35000000000001 100.25374049377442 L 85.35000000000001 100.25374049377442 L 85.35000000000001 100.25374049377442 L 85.35000000000001 100.25374049377442 L 85.35000000000001 100.25374049377442 L 74.68125 100.25374049377442 z"
                                                cy="127.82196912956238" cx="128.025" j="1" val="-1.1"
                                                barHeight="-27.56922863578796" barWidth="10.66875"></path>
                                            <path id="SvgjsPath1700"
                                                d="M 128.025 100.25374049377442 L 128.025 157.9110783023834 C 128.025 160.4110783023834 130.525 162.9110783023834 133.025 162.9110783023834 L 133.69375 162.9110783023834 C 136.19375 162.9110783023834 138.69375 160.4110783023834 138.69375 157.9110783023834 L 138.69375 100.25374049377442 z "
                                                fill="var(--bs-secondary)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskri0e2ro6)"
                                                pathTo="M 128.025 100.25374049377442 L 128.025 157.9110783023834 C 128.025 160.4110783023834 130.525 162.9110783023834 133.025 162.9110783023834 L 133.69375 162.9110783023834 C 136.19375 162.9110783023834 138.69375 160.4110783023834 138.69375 157.9110783023834 L 138.69375 100.25374049377442 z "
                                                pathFrom="M 128.025 100.25374049377442 L 128.025 100.25374049377442 L 138.69375 100.25374049377442 L 138.69375 100.25374049377442 L 138.69375 100.25374049377442 L 138.69375 100.25374049377442 L 138.69375 100.25374049377442 L 128.025 100.25374049377442 z"
                                                cy="162.9100783023834" cx="181.36875" j="2" val="-2.5"
                                                barHeight="-62.657337808609" barWidth="10.66875"></path>
                                            <path id="SvgjsPath1702"
                                                d="M 181.36875 100.25374049377442 L 181.36875 132.8481431789398 C 181.36875 135.3481431789398 183.86875 137.8481431789398 186.36875 137.8481431789398 L 187.0375 137.8481431789398 C 189.5375 137.8481431789398 192.0375 135.3481431789398 192.0375 132.8481431789398 L 192.0375 100.25374049377442 z "
                                                fill="var(--bs-secondary)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskri0e2ro6)"
                                                pathTo="M 181.36875 100.25374049377442 L 181.36875 132.8481431789398 C 181.36875 135.3481431789398 183.86875 137.8481431789398 186.36875 137.8481431789398 L 187.0375 137.8481431789398 C 189.5375 137.8481431789398 192.0375 135.3481431789398 192.0375 132.8481431789398 L 192.0375 100.25374049377442 z "
                                                pathFrom="M 181.36875 100.25374049377442 L 181.36875 100.25374049377442 L 192.0375 100.25374049377442 L 192.0375 100.25374049377442 L 192.0375 100.25374049377442 L 192.0375 100.25374049377442 L 192.0375 100.25374049377442 L 181.36875 100.25374049377442 z"
                                                cy="137.8471431789398" cx="234.7125" j="3" val="-1.5"
                                                barHeight="-37.5944026851654" barWidth="10.66875"></path>
                                            <path id="SvgjsPath1704"
                                                d="M 234.7125 100.25374049377442 L 234.7125 125.32926264190672 C 234.7125 127.82926264190672 237.2125 130.32926264190672 239.7125 130.32926264190672 L 240.38125 130.32926264190672 C 242.88125 130.32926264190672 245.38125 127.82926264190672 245.38125 125.32926264190672 L 245.38125 100.25374049377442 z "
                                                fill="var(--bs-secondary)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskri0e2ro6)"
                                                pathTo="M 234.7125 100.25374049377442 L 234.7125 125.32926264190672 C 234.7125 127.82926264190672 237.2125 130.32926264190672 239.7125 130.32926264190672 L 240.38125 130.32926264190672 C 242.88125 130.32926264190672 245.38125 127.82926264190672 245.38125 125.32926264190672 L 245.38125 100.25374049377442 z "
                                                pathFrom="M 234.7125 100.25374049377442 L 234.7125 100.25374049377442 L 245.38125 100.25374049377442 L 245.38125 100.25374049377442 L 245.38125 100.25374049377442 L 245.38125 100.25374049377442 L 245.38125 100.25374049377442 L 234.7125 100.25374049377442 z"
                                                cy="130.32826264190672" cx="288.05625" j="4" val="-1.2"
                                                barHeight="-30.07552214813232" barWidth="10.66875"></path>
                                            <g id="SvgjsG1694" class="apexcharts-bar-goals-markers">
                                                <g id="SvgjsG1695" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskri0e2ro6)"></g>
                                                <g id="SvgjsG1697" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskri0e2ro6)"></g>
                                                <g id="SvgjsG1699" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskri0e2ro6)"></g>
                                                <g id="SvgjsG1701" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskri0e2ro6)"></g>
                                                <g id="SvgjsG1703" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskri0e2ro6)"></g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1680" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        <g id="SvgjsG1693" class="apexcharts-datalabels" data:realIndex="1"></g>
                                    </g>
                                    <line id="SvgjsLine1716" x1="0" y1="0" x2="266.71875"
                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1717" x1="0" y1="0" x2="266.71875"
                                        y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG1718" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG1719" class="apexcharts-xaxis-texts-g"
                                            transform="translate(0, -4)"><text id="SvgjsText1721"
                                                font-family="inherit" x="26.671875" y="229.5034809875488"
                                                text-anchor="middle" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#adb0bb"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1722">Jan</tspan>
                                                <title>Jan</title>
                                            </text><text id="SvgjsText1724" font-family="inherit" x="80.015625"
                                                y="229.5034809875488" text-anchor="middle" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#adb0bb"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1725">Fab</tspan>
                                                <title>Fab</title>
                                            </text><text id="SvgjsText1727" font-family="inherit" x="133.359375"
                                                y="229.5034809875488" text-anchor="middle" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#adb0bb"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1728">Mar</tspan>
                                                <title>Mar</title>
                                            </text><text id="SvgjsText1730" font-family="inherit" x="186.703125"
                                                y="229.5034809875488" text-anchor="middle" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#adb0bb"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1731">Apr</tspan>
                                                <title>Apr</title>
                                            </text><text id="SvgjsText1733" font-family="inherit" x="240.046875"
                                                y="229.5034809875488" text-anchor="middle" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#adb0bb"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1734">May</tspan>
                                                <title>May</title>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG1752" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG1753" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG1754" class="apexcharts-point-annotations"></g>
                                </g>
                            </svg>
                            <div class="apexcharts-tooltip apexcharts-theme-dark">
                                <div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;">
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: var(--bs-primary);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: var(--bs-secondary);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body">
                    <h4 class="card-title fw-semibold">Sales Overview</h4>
                    <p class="card-subtitle mb-2">Every Month</p>
                    <div id="sales-overview" class="mb-4" style="min-height: 224.533px;">
                        <div id="apexchartsl9bc6j32" class="apexcharts-canvas apexchartsl9bc6j32 apexcharts-theme-light"
                            style="width: 295px; height: 224.533px;"><svg id="SvgjsSvg1755" width="295"
                                height="224.53333333333336" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                style="background: transparent;">
                                <foreignObject x="0" y="0" width="295" height="224.53333333333336">
                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"></div>
                                </foreignObject>
                                <g id="SvgjsG1757" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(37.58333333333333, 0)">
                                    <defs id="SvgjsDefs1756">
                                        <clipPath id="gridRectMaskl9bc6j32">
                                            <rect id="SvgjsRect1758" width="227.83333333333334"
                                                height="245.83333333333334" x="-3" y="-1" rx="0"
                                                ry="0" opacity="1" stroke-width="0" stroke="none"
                                                stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMaskl9bc6j32"></clipPath>
                                        <clipPath id="nonForecastMaskl9bc6j32"></clipPath>
                                        <clipPath id="gridRectMarkerMaskl9bc6j32">
                                            <rect id="SvgjsRect1759" width="225.83333333333334"
                                                height="247.83333333333334" x="-2" y="-2" rx="0"
                                                ry="0" opacity="1" stroke-width="0" stroke="none"
                                                stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <g id="SvgjsG1760" class="apexcharts-pie">
                                        <g id="SvgjsG1761" transform="translate(0, 0) scale(1)">
                                            <circle id="SvgjsCircle1762" r="89.94601626016261" cx="110.91666666666667"
                                                cy="110.91666666666667" fill="transparent"></circle>
                                            <g id="SvgjsG1763" class="apexcharts-slices">
                                                <g id="SvgjsG1764" class="apexcharts-series apexcharts-pie-series"
                                                    seriesName="Expance" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath1765"
                                                        d="M 110.91666666666667 8.705284552845512 A 102.21138211382116 102.21138211382116 0 0 1 199.4343201331542 162.02235772357724 L 188.8122017171757 155.88967479674795 A 89.94601626016261 89.94601626016261 0 0 0 110.91666666666667 20.970650406504063 L 110.91666666666667 8.705284552845512 z"
                                                        fill="var(--bs-primary)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                        index="0" j="0" data:angle="120" data:startAngle="0"
                                                        data:strokeWidth="0" data:value="55"
                                                        data:pathOrig="M 110.91666666666667 8.705284552845512 A 102.21138211382116 102.21138211382116 0 0 1 199.4343201331542 162.02235772357724 L 188.8122017171757 155.88967479674795 A 89.94601626016261 89.94601626016261 0 0 0 110.91666666666667 20.970650406504063 L 110.91666666666667 8.705284552845512 z">
                                                    </path>
                                                </g>
                                                <g id="SvgjsG1766" class="apexcharts-series apexcharts-pie-series"
                                                    seriesName="Revenue" rel="2" data:realIndex="1">
                                                    <path id="SvgjsPath1767"
                                                        d="M 199.4343201331542 162.02235772357724 A 102.21138211382116 102.21138211382116 0 0 1 22.39901320017914 162.02235772357724 L 33.02113161615766 155.88967479674795 A 89.94601626016261 89.94601626016261 0 0 0 188.8122017171757 155.88967479674795 L 199.4343201331542 162.02235772357724 z"
                                                        fill="rgba(234,239,244,1)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                        index="0" j="1" data:angle="120" data:startAngle="120"
                                                        data:strokeWidth="0" data:value="55"
                                                        data:pathOrig="M 199.4343201331542 162.02235772357724 A 102.21138211382116 102.21138211382116 0 0 1 22.39901320017914 162.02235772357724 L 33.02113161615766 155.88967479674795 A 89.94601626016261 89.94601626016261 0 0 0 188.8122017171757 155.88967479674795 L 199.4343201331542 162.02235772357724 z">
                                                    </path>
                                                </g>
                                                <g id="SvgjsG1768" class="apexcharts-series apexcharts-pie-series"
                                                    seriesName="Profit" rel="3" data:realIndex="2">
                                                    <path id="SvgjsPath1769"
                                                        d="M 22.39901320017914 162.02235772357724 A 102.21138211382116 102.21138211382116 0 0 1 110.89882741524822 8.70528610961388 L 110.90096812541843 20.97065177646023 A 89.94601626016261 89.94601626016261 0 0 0 33.02113161615766 155.88967479674795 L 22.39901320017914 162.02235772357724 z"
                                                        fill="var(--bs-secondary)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                        index="0" j="2" data:angle="120" data:startAngle="240"
                                                        data:strokeWidth="0" data:value="55"
                                                        data:pathOrig="M 22.39901320017914 162.02235772357724 A 102.21138211382116 102.21138211382116 0 0 1 110.89882741524822 8.70528610961388 L 110.90096812541843 20.97065177646023 A 89.94601626016261 89.94601626016261 0 0 0 33.02113161615766 155.88967479674795 L 22.39901320017914 162.02235772357724 z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1770" class="apexcharts-datalabels-group"
                                            transform="translate(0, 0) scale(1)"><text id="SvgjsText1771"
                                                font-family="inherit" x="110.91666666666667" y="117.91666666666667"
                                                text-anchor="middle" dominant-baseline="auto" font-size="20px"
                                                font-weight="600" fill="#7c8fac"
                                                class="apexcharts-text apexcharts-datalabel-label"
                                                style="font-family: inherit;">$500,458</text></g>
                                    </g>
                                    <line id="SvgjsLine1772" x1="0" y1="0" x2="221.83333333333334"
                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1773" x1="0" y1="0" x2="221.83333333333334"
                                        y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs-hidden"></line>
                                </g>
                            </svg>
                            <div class="apexcharts-tooltip apexcharts-theme-dark">
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: var(--bs-primary);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(234, 239, 244);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: var(--bs-secondary);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <div
                                class="bg-primary-subtle text-primary rounded-2 me-8 p-8 d-flex align-items-center justify-content-center">
                                <i class="ti ti-grid-dots fs-6"></i>
                            </div>
                            <div>
                                <h6 class="fw-semibold text-dark fs-4 mb-0">$23,450</h6>
                                <p class="fs-3 mb-0 fw-normal">Profit</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div
                                class="bg-secondary-subtle text-secondary rounded-2 me-8 p-8 d-flex align-items-center justify-content-center">
                                <i class="ti ti-grid-dots fs-6"></i>
                            </div>
                            <div>
                                <h6 class="fw-semibold text-dark fs-4 mb-0">$23,450</h6>
                                <p class="fs-3 mb-0 fw-normal">Expance</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-sm-6 d-flex align-items-stretch">
                    <div class="card w-100">
                        <div class="card-body">
                            <div class="p-2 bg-primary-subtle rounded-2 d-inline-block mb-3">
                                <img src="{{ asset('build/images/svgs/icon-cart.svg') }}" alt="modernize-img"
                                    class="img-fluid" width="24" height="24">
                            </div>
                            <div id="sales-two" class="mb-3 mx-n4" style="min-height: 25px;">
                                <div id="apexchartsy6oh1r4v"
                                    class="apexcharts-canvas apexchartsy6oh1r4v apexcharts-theme-light"
                                    style="width: 154px; height: 25px;"><svg id="SvgjsSvg2223" width="154"
                                        height="25" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <foreignObject x="0" y="0" width="154" height="25">
                                            <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                style="max-height: 12.5px;"></div>
                                        </foreignObject>
                                        <g id="SvgjsG2272" class="apexcharts-yaxis" rel="0"
                                            transform="translate(-18, 0)"></g>
                                        <g id="SvgjsG2225" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(29.533333333333335, 0)">
                                            <defs id="SvgjsDefs2224">
                                                <linearGradient id="SvgjsLinearGradient2227" x1="0"
                                                    y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop2228" stop-opacity="0.4"
                                                        stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                    <stop id="SvgjsStop2229" stop-opacity="0.5"
                                                        stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    <stop id="SvgjsStop2230" stop-opacity="0.5"
                                                        stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                </linearGradient>
                                                <clipPath id="gridRectMasky6oh1r4v">
                                                    <rect id="SvgjsRect2232" width="163" height="30"
                                                        x="-30.033333333333335" y="-2.5" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMasky6oh1r4v"></clipPath>
                                                <clipPath id="nonForecastMasky6oh1r4v"></clipPath>
                                                <clipPath id="gridRectMarkerMasky6oh1r4v">
                                                    <rect id="SvgjsRect2233" width="106.93333333333334" height="29"
                                                        x="-2" y="-2" rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <rect id="SvgjsRect2231" width="20.586666666666666" height="25" x="0"
                                                y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke-dasharray="3" fill="url(#SvgjsLinearGradient2227)"
                                                class="apexcharts-xcrosshairs" y2="25" filter="none"
                                                fill-opacity="0.9"></rect>
                                            <g id="SvgjsG2251" class="apexcharts-grid">
                                                <g id="SvgjsG2252" class="apexcharts-gridlines-horizontal"
                                                    style="display: none;">
                                                    <line id="SvgjsLine2255" x1="-25.533333333333335" y1="0"
                                                        x2="128.46666666666667" y2="0" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2256" x1="-25.533333333333335" y1="6.25"
                                                        x2="128.46666666666667" y2="6.25" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2257" x1="-25.533333333333335" y1="12.5"
                                                        x2="128.46666666666667" y2="12.5" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2258" x1="-25.533333333333335" y1="18.75"
                                                        x2="128.46666666666667" y2="18.75" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2259" x1="-25.533333333333335" y1="25"
                                                        x2="128.46666666666667" y2="25" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG2253" class="apexcharts-gridlines-vertical"
                                                    style="display: none;"></g>
                                                <line id="SvgjsLine2261" x1="0" y1="25"
                                                    x2="102.93333333333334" y2="25" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine2260" x1="0" y1="1"
                                                    x2="0" y2="25" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG2254" class="apexcharts-grid-borders" style="display: none;">
                                            </g>
                                            <g id="SvgjsG2234" class="apexcharts-bar-series apexcharts-plot-series">
                                                <g id="SvgjsG2235" class="apexcharts-series" rel="1"
                                                    seriesName="" data:realIndex="0">
                                                    <path id="SvgjsPath2240"
                                                        d="M -10.293333333333333 21.001 L -10.293333333333333 8.167666666666666 C -10.293333333333333 6.1676666666666655 -8.293333333333333 4.167666666666665 -6.293333333333333 4.167666666666665 L 1.2933333333333334 4.167666666666665 C 3.293333333333333 4.167666666666665 5.293333333333333 6.1676666666666655 5.293333333333333 8.167666666666666 L 5.293333333333333 21.001 C 5.293333333333333 23.001 3.293333333333333 25.001 1.293333333333333 25.001 L -6.293333333333333 25.001 C -8.293333333333333 25.001 -10.293333333333333 23.001 -10.293333333333333 21.001 Z "
                                                        fill="var(--bs-primary)" fill-opacity="1"
                                                        stroke="rgba(0,0,0,0.01)" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="5" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMasky6oh1r4v)"
                                                        pathTo="M -10.293333333333333 21.001 L -10.293333333333333 8.167666666666666 C -10.293333333333333 6.1676666666666655 -8.293333333333333 4.167666666666665 -6.293333333333333 4.167666666666665 L 1.2933333333333334 4.167666666666665 C 3.293333333333333 4.167666666666665 5.293333333333333 6.1676666666666655 5.293333333333333 8.167666666666666 L 5.293333333333333 21.001 C 5.293333333333333 23.001 3.293333333333333 25.001 1.293333333333333 25.001 L -6.293333333333333 25.001 C -8.293333333333333 25.001 -10.293333333333333 23.001 -10.293333333333333 21.001 Z "
                                                        pathFrom="M -10.293333333333333 25.001 L -10.293333333333333 25.001 L 5.293333333333333 25.001 L 5.293333333333333 25.001 L 5.293333333333333 25.001 L 5.293333333333333 25.001 L 5.293333333333333 25.001 L -10.293333333333333 25.001 Z"
                                                        cy="4.166666666666664" cx="7.793333333333333" j="0"
                                                        val="100" barHeight="20.833333333333336"
                                                        barWidth="20.586666666666666"></path>
                                                    <path id="SvgjsPath2242"
                                                        d="M 10.293333333333333 21.001 L 10.293333333333333 16.500999999999998 C 10.293333333333333 14.500999999999998 12.293333333333333 12.501 14.293333333333333 12.501 L 21.88 12.501 C 23.88 12.501 25.88 14.500999999999998 25.88 16.500999999999998 L 25.88 21.001 C 25.88 23.001 23.88 25.001 21.88 25.001 L 14.293333333333333 25.001 C 12.293333333333333 25.001 10.293333333333333 23.001 10.293333333333333 21.001 Z "
                                                        fill="var(--bs-primary)" fill-opacity="1"
                                                        stroke="rgba(0,0,0,0.01)" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="5" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMasky6oh1r4v)"
                                                        pathTo="M 10.293333333333333 21.001 L 10.293333333333333 16.500999999999998 C 10.293333333333333 14.500999999999998 12.293333333333333 12.501 14.293333333333333 12.501 L 21.88 12.501 C 23.88 12.501 25.88 14.500999999999998 25.88 16.500999999999998 L 25.88 21.001 C 25.88 23.001 23.88 25.001 21.88 25.001 L 14.293333333333333 25.001 C 12.293333333333333 25.001 10.293333333333333 23.001 10.293333333333333 21.001 Z "
                                                        pathFrom="M 10.293333333333333 25.001 L 10.293333333333333 25.001 L 25.88 25.001 L 25.88 25.001 L 25.88 25.001 L 25.88 25.001 L 25.88 25.001 L 10.293333333333333 25.001 Z"
                                                        cy="12.5" cx="28.38" j="1" val="60"
                                                        barHeight="12.5" barWidth="20.586666666666666"></path>
                                                    <path id="SvgjsPath2244"
                                                        d="M 30.88 21.709333333333333 L 30.88 21.709333333333333 C 30.88 19.709333333333333 32.879999999999995 17.709333333333333 34.879999999999995 17.709333333333333 L 42.46666666666667 17.709333333333333 C 44.46666666666667 17.709333333333333 46.46666666666667 19.709333333333333 46.46666666666667 21.709333333333333 L 46.46666666666667 21.709333333333333 C 46.46666666666667 23.35516666666667 44.46666666666667 25.001 42.46666666666667 25.001 L 34.879999999999995 25.001 C 32.879999999999995 25.001 30.88 23.35516666666667 30.88 21.709333333333333 Z "
                                                        fill="var(--bs-primary)" fill-opacity="1"
                                                        stroke="rgba(0,0,0,0.01)" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="5" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMasky6oh1r4v)"
                                                        pathTo="M 30.88 21.709333333333333 L 30.88 21.709333333333333 C 30.88 19.709333333333333 32.879999999999995 17.709333333333333 34.879999999999995 17.709333333333333 L 42.46666666666667 17.709333333333333 C 44.46666666666667 17.709333333333333 46.46666666666667 19.709333333333333 46.46666666666667 21.709333333333333 L 46.46666666666667 21.709333333333333 C 46.46666666666667 23.35516666666667 44.46666666666667 25.001 42.46666666666667 25.001 L 34.879999999999995 25.001 C 32.879999999999995 25.001 30.88 23.35516666666667 30.88 21.709333333333333 Z "
                                                        pathFrom="M 30.88 25.001 L 30.88 25.001 L 46.46666666666667 25.001 L 46.46666666666667 25.001 L 46.46666666666667 25.001 L 46.46666666666667 25.001 L 46.46666666666667 25.001 L 30.88 25.001 Z"
                                                        cy="17.708333333333332" cx="48.96666666666667" j="2"
                                                        val="35" barHeight="7.291666666666667"
                                                        barWidth="20.586666666666666"></path>
                                                    <path id="SvgjsPath2246"
                                                        d="M 51.46666666666667 21.001 L 51.46666666666667 10.251000000000001 C 51.46666666666667 8.251000000000001 53.46666666666667 6.251 55.46666666666667 6.251 L 63.05333333333334 6.251 C 65.05333333333334 6.251 67.05333333333334 8.251000000000001 67.05333333333334 10.251000000000001 L 67.05333333333334 21.001 C 67.05333333333334 23.001 65.05333333333334 25.001 63.05333333333334 25.001 L 55.46666666666667 25.001 C 53.46666666666667 25.001 51.46666666666667 23.001 51.46666666666667 21.001 Z "
                                                        fill="var(--bs-primary)" fill-opacity="1"
                                                        stroke="rgba(0,0,0,0.01)" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="5" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMasky6oh1r4v)"
                                                        pathTo="M 51.46666666666667 21.001 L 51.46666666666667 10.251000000000001 C 51.46666666666667 8.251000000000001 53.46666666666667 6.251 55.46666666666667 6.251 L 63.05333333333334 6.251 C 65.05333333333334 6.251 67.05333333333334 8.251000000000001 67.05333333333334 10.251000000000001 L 67.05333333333334 21.001 C 67.05333333333334 23.001 65.05333333333334 25.001 63.05333333333334 25.001 L 55.46666666666667 25.001 C 53.46666666666667 25.001 51.46666666666667 23.001 51.46666666666667 21.001 Z "
                                                        pathFrom="M 51.46666666666667 25.001 L 51.46666666666667 25.001 L 67.05333333333334 25.001 L 67.05333333333334 25.001 L 67.05333333333334 25.001 L 67.05333333333334 25.001 L 67.05333333333334 25.001 L 51.46666666666667 25.001 Z"
                                                        cy="6.25" cx="69.55333333333334" j="3" val="90"
                                                        barHeight="18.75" barWidth="20.586666666666666"></path>
                                                    <path id="SvgjsPath2248"
                                                        d="M 72.05333333333333 21.709333333333333 L 72.05333333333333 21.709333333333333 C 72.05333333333333 19.709333333333333 74.05333333333333 17.709333333333333 76.05333333333333 17.709333333333333 L 83.63999999999999 17.709333333333333 C 85.63999999999999 17.709333333333333 87.63999999999999 19.709333333333333 87.63999999999999 21.709333333333333 L 87.63999999999999 21.709333333333333 C 87.63999999999999 23.35516666666667 85.63999999999999 25.001 83.63999999999999 25.001 L 76.05333333333333 25.001 C 74.05333333333333 25.001 72.05333333333333 23.35516666666667 72.05333333333333 21.709333333333333 Z "
                                                        fill="var(--bs-primary)" fill-opacity="1"
                                                        stroke="rgba(0,0,0,0.01)" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="5" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMasky6oh1r4v)"
                                                        pathTo="M 72.05333333333333 21.709333333333333 L 72.05333333333333 21.709333333333333 C 72.05333333333333 19.709333333333333 74.05333333333333 17.709333333333333 76.05333333333333 17.709333333333333 L 83.63999999999999 17.709333333333333 C 85.63999999999999 17.709333333333333 87.63999999999999 19.709333333333333 87.63999999999999 21.709333333333333 L 87.63999999999999 21.709333333333333 C 87.63999999999999 23.35516666666667 85.63999999999999 25.001 83.63999999999999 25.001 L 76.05333333333333 25.001 C 74.05333333333333 25.001 72.05333333333333 23.35516666666667 72.05333333333333 21.709333333333333 Z "
                                                        pathFrom="M 72.05333333333333 25.001 L 72.05333333333333 25.001 L 87.63999999999999 25.001 L 87.63999999999999 25.001 L 87.63999999999999 25.001 L 87.63999999999999 25.001 L 87.63999999999999 25.001 L 72.05333333333333 25.001 Z"
                                                        cy="17.708333333333332" cx="90.13999999999999" j="4"
                                                        val="35" barHeight="7.291666666666667"
                                                        barWidth="20.586666666666666"></path>
                                                    <path id="SvgjsPath2250"
                                                        d="M 92.64 21.001 L 92.64 8.167666666666666 C 92.64 6.1676666666666655 94.64 4.167666666666665 96.64 4.167666666666665 L 104.22666666666666 4.167666666666665 C 106.22666666666666 4.167666666666665 108.22666666666666 6.1676666666666655 108.22666666666666 8.167666666666666 L 108.22666666666666 21.001 C 108.22666666666666 23.001 106.22666666666666 25.001 104.22666666666666 25.001 L 96.64 25.001 C 94.64 25.001 92.64 23.001 92.64 21.001 Z "
                                                        fill="var(--bs-primary)" fill-opacity="1"
                                                        stroke="rgba(0,0,0,0.01)" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="5" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMasky6oh1r4v)"
                                                        pathTo="M 92.64 21.001 L 92.64 8.167666666666666 C 92.64 6.1676666666666655 94.64 4.167666666666665 96.64 4.167666666666665 L 104.22666666666666 4.167666666666665 C 106.22666666666666 4.167666666666665 108.22666666666666 6.1676666666666655 108.22666666666666 8.167666666666666 L 108.22666666666666 21.001 C 108.22666666666666 23.001 106.22666666666666 25.001 104.22666666666666 25.001 L 96.64 25.001 C 94.64 25.001 92.64 23.001 92.64 21.001 Z "
                                                        pathFrom="M 92.64 25.001 L 92.64 25.001 L 108.22666666666666 25.001 L 108.22666666666666 25.001 L 108.22666666666666 25.001 L 108.22666666666666 25.001 L 108.22666666666666 25.001 L 92.64 25.001 Z"
                                                        cy="4.166666666666664" cx="110.72666666666666" j="5"
                                                        val="100" barHeight="20.833333333333336"
                                                        barWidth="20.586666666666666"></path>
                                                    <g id="SvgjsG2237" class="apexcharts-bar-goals-markers">
                                                        <g id="SvgjsG2239" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6oh1r4v)"></g>
                                                        <g id="SvgjsG2241" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6oh1r4v)"></g>
                                                        <g id="SvgjsG2243" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6oh1r4v)"></g>
                                                        <g id="SvgjsG2245" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6oh1r4v)"></g>
                                                        <g id="SvgjsG2247" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6oh1r4v)"></g>
                                                        <g id="SvgjsG2249" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6oh1r4v)"></g>
                                                    </g>
                                                    <g id="SvgjsG2238"
                                                        class="apexcharts-bar-shadows apexcharts-hidden-element-shown">
                                                    </g>
                                                </g>
                                                <g id="SvgjsG2236"
                                                    class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                                    data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine2262" x1="-25.533333333333335" y1="0"
                                                x2="128.46666666666667" y2="0" stroke="#b6b6b6"
                                                stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine2263" x1="-25.533333333333335" y1="0"
                                                x2="128.46666666666667" y2="0" stroke-dasharray="0"
                                                stroke-width="0" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG2264" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG2265" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -4)"></g>
                                            </g>
                                            <g id="SvgjsG2273" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG2274" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG2275" class="apexcharts-point-annotations"></g>
                                        </g>
                                    </svg>
                                    <div class="apexcharts-tooltip apexcharts-theme-dark">
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: var(--bs-primary);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: inherit; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-1 fw-semibold d-flex align-content-center">{{$totalSales}} {{ Auth::user()->currency->symbol }}
                            </h4>
                            <p class="mb-0">Sales</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 d-flex align-items-stretch">
                    <div class="card w-100">
                        <div class="card-body">
                            <div class="p-2 bg-info-subtle rounded-2 d-inline-block mb-3">
                                <img src="{{ asset('build/images/svgs/icon-bar.svg') }}" alt="modernize-img"
                                    class="img-fluid" width="24" height="24">
                            </div>
                            <div id="growth" class="mb-3" style="min-height: 25px;">
                                <div id="apexchartsgrowth"
                                    class="apexcharts-canvas apexchartsgrowth apexcharts-theme-light"
                                    style="width: 106px; height: 25px;"><svg id="SvgjsSvg2276" width="106"
                                        height="25" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <foreignObject x="0" y="0" width="106" height="25">
                                            <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                style="max-height: 12.5px;"></div>
                                        </foreignObject>
                                        <rect id="SvgjsRect2281" width="0" height="0" x="0" y="0"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                        <g id="SvgjsG2324" class="apexcharts-yaxis" rel="0"
                                            transform="translate(-18, 0)"></g>
                                        <g id="SvgjsG2278" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(0, 0)">
                                            <defs id="SvgjsDefs2277">
                                                <clipPath id="gridRectMaskp1dizl1z">
                                                    <rect id="SvgjsRect2283" width="112" height="27" x="-3"
                                                        y="-1" rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskp1dizl1z"></clipPath>
                                                <clipPath id="nonForecastMaskp1dizl1z"></clipPath>
                                                <clipPath id="gridRectMarkerMaskp1dizl1z">
                                                    <rect id="SvgjsRect2284" width="110" height="29" x="-2"
                                                        y="-2" rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <line id="SvgjsLine2282" x1="0" y1="0" x2="0"
                                                y2="25" stroke="#b6b6b6" stroke-dasharray="3"
                                                stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0"
                                                width="1" height="25" fill="#b1b9c4" filter="none"
                                                fill-opacity="0.9" stroke-width="1"></line>
                                            <g id="SvgjsG2291" class="apexcharts-grid">
                                                <g id="SvgjsG2292" class="apexcharts-gridlines-horizontal"
                                                    style="display: none;">
                                                    <line id="SvgjsLine2295" x1="0" y1="0"
                                                        x2="106" y2="0" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2296" x1="0" y1="6.25"
                                                        x2="106" y2="6.25" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2297" x1="0" y1="12.5"
                                                        x2="106" y2="12.5" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2298" x1="0" y1="18.75"
                                                        x2="106" y2="18.75" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2299" x1="0" y1="25"
                                                        x2="106" y2="25" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG2293" class="apexcharts-gridlines-vertical"
                                                    style="display: none;"></g>
                                                <line id="SvgjsLine2301" x1="0" y1="25"
                                                    x2="106" y2="25" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine2300" x1="0" y1="1"
                                                    x2="0" y2="25" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG2294" class="apexcharts-grid-borders" style="display: none;">
                                            </g>
                                            <g id="SvgjsG2285" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG2286" class="apexcharts-series" seriesName="series-1"
                                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath2289"
                                                        d="M 0 25 L 0 25C0.8305880513607377, 24.583726507277934, 4.156862745098039, 21.875, 6.235294117647059, 21.875S10.392156862745098, 21.875, 12.470588235294118, 21.875S16.627450980392158, 21.875, 18.705882352941178, 21.875S23.766417504471775, 15.092838421048487, 24.941176470588236, 14.0625S29.130163756390914, 10.681108371599686, 31.176470588235297, 10.9375S35.333333333333336, 15.625, 37.411764705882355, 15.625S41.568627450980394, 15.625, 43.64705882352941, 15.625S47.80392156862745, 15.625, 49.88235294117647, 15.625S54.1372620266881, 9.81564668954927, 56.11764705882353, 9.375S60.35620871373954, 8.34610537834322, 62.352941176470594, 8.75S67.1366797115762, 14.671089599309468, 68.58823529411765, 15.625S72.98955186149037, 17.857069131703756, 74.82352941176471, 17.1875S79.31360825072898, 11.700083646637095, 81.05882352941177, 10.9375S85.78167895342332, 10.30021847576841, 87.29411764705883, 9.375S91.57378432794532, 0.49005994140521275, 93.52941176470588, 0S97.94357979034416, 5.565467049731371, 99.76470588235294, 6.25S105.02218628161971, 4.932529970702606, 106, 4.6875 L 106 25 L 0 25M 0 25z"
                                                        fill="rgba(243,254,255,0)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMaskp1dizl1z)"
                                                        pathTo="M 0 25 L 0 25C0.8305880513607377, 24.583726507277934, 4.156862745098039, 21.875, 6.235294117647059, 21.875S10.392156862745098, 21.875, 12.470588235294118, 21.875S16.627450980392158, 21.875, 18.705882352941178, 21.875S23.766417504471775, 15.092838421048487, 24.941176470588236, 14.0625S29.130163756390914, 10.681108371599686, 31.176470588235297, 10.9375S35.333333333333336, 15.625, 37.411764705882355, 15.625S41.568627450980394, 15.625, 43.64705882352941, 15.625S47.80392156862745, 15.625, 49.88235294117647, 15.625S54.1372620266881, 9.81564668954927, 56.11764705882353, 9.375S60.35620871373954, 8.34610537834322, 62.352941176470594, 8.75S67.1366797115762, 14.671089599309468, 68.58823529411765, 15.625S72.98955186149037, 17.857069131703756, 74.82352941176471, 17.1875S79.31360825072898, 11.700083646637095, 81.05882352941177, 10.9375S85.78167895342332, 10.30021847576841, 87.29411764705883, 9.375S91.57378432794532, 0.49005994140521275, 93.52941176470588, 0S97.94357979034416, 5.565467049731371, 99.76470588235294, 6.25S105.02218628161971, 4.932529970702606, 106, 4.6875 L 106 25 L 0 25M 0 25z"
                                                        pathFrom="M -1 25 L -1 25 L 6.235294117647059 25 L 12.470588235294118 25 L 18.705882352941178 25 L 24.941176470588236 25 L 31.176470588235297 25 L 37.411764705882355 25 L 43.64705882352941 25 L 49.88235294117647 25 L 56.11764705882353 25 L 62.352941176470594 25 L 68.58823529411765 25 L 74.82352941176471 25 L 81.05882352941177 25 L 87.29411764705883 25 L 93.52941176470588 25 L 99.76470588235294 25 L 106 25">
                                                    </path>
                                                    <path id="SvgjsPath2290"
                                                        d="M 0 25C0.8305880513607377, 24.583726507277934, 4.156862745098039, 21.875, 6.235294117647059, 21.875S10.392156862745098, 21.875, 12.470588235294118, 21.875S16.627450980392158, 21.875, 18.705882352941178, 21.875S23.766417504471775, 15.092838421048487, 24.941176470588236, 14.0625S29.130163756390914, 10.681108371599686, 31.176470588235297, 10.9375S35.333333333333336, 15.625, 37.411764705882355, 15.625S41.568627450980394, 15.625, 43.64705882352941, 15.625S47.80392156862745, 15.625, 49.88235294117647, 15.625S54.1372620266881, 9.81564668954927, 56.11764705882353, 9.375S60.35620871373954, 8.34610537834322, 62.352941176470594, 8.75S67.1366797115762, 14.671089599309468, 68.58823529411765, 15.625S72.98955186149037, 17.857069131703756, 74.82352941176471, 17.1875S79.31360825072898, 11.700083646637095, 81.05882352941177, 10.9375S85.78167895342332, 10.30021847576841, 87.29411764705883, 9.375S91.57378432794532, 0.49005994140521275, 93.52941176470588, 0S97.94357979034416, 5.565467049731371, 99.76470588235294, 6.25S105.02218628161971, 4.932529970702606, 106, 4.6875"
                                                        fill="none" fill-opacity="1" stroke="#008ffb"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMaskp1dizl1z)"
                                                        pathTo="M 0 25C0.8305880513607377, 24.583726507277934, 4.156862745098039, 21.875, 6.235294117647059, 21.875S10.392156862745098, 21.875, 12.470588235294118, 21.875S16.627450980392158, 21.875, 18.705882352941178, 21.875S23.766417504471775, 15.092838421048487, 24.941176470588236, 14.0625S29.130163756390914, 10.681108371599686, 31.176470588235297, 10.9375S35.333333333333336, 15.625, 37.411764705882355, 15.625S41.568627450980394, 15.625, 43.64705882352941, 15.625S47.80392156862745, 15.625, 49.88235294117647, 15.625S54.1372620266881, 9.81564668954927, 56.11764705882353, 9.375S60.35620871373954, 8.34610537834322, 62.352941176470594, 8.75S67.1366797115762, 14.671089599309468, 68.58823529411765, 15.625S72.98955186149037, 17.857069131703756, 74.82352941176471, 17.1875S79.31360825072898, 11.700083646637095, 81.05882352941177, 10.9375S85.78167895342332, 10.30021847576841, 87.29411764705883, 9.375S91.57378432794532, 0.49005994140521275, 93.52941176470588, 0S97.94357979034416, 5.565467049731371, 99.76470588235294, 6.25S105.02218628161971, 4.932529970702606, 106, 4.6875"
                                                        pathFrom="M -1 25 L -1 25 L 6.235294117647059 25 L 12.470588235294118 25 L 18.705882352941178 25 L 24.941176470588236 25 L 31.176470588235297 25 L 37.411764705882355 25 L 43.64705882352941 25 L 49.88235294117647 25 L 56.11764705882353 25 L 62.352941176470594 25 L 68.58823529411765 25 L 74.82352941176471 25 L 81.05882352941177 25 L 87.29411764705883 25 L 93.52941176470588 25 L 99.76470588235294 25 L 106 25"
                                                        fill-rule="evenodd"></path>
                                                    <g id="SvgjsG2287"
                                                        class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                        data:realIndex="0"></g>
                                                </g>
                                                <g id="SvgjsG2288" class="apexcharts-datalabels" data:realIndex="0">
                                                </g>
                                            </g>
                                            <line id="SvgjsLine2302" x1="0" y1="0" x2="106"
                                                y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs">
                                            </line>
                                            <line id="SvgjsLine2303" x1="0" y1="0" x2="106"
                                                y2="0" stroke-dasharray="0" stroke-width="0"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG2304" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG2305" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, 4)"></g>
                                            </g>
                                            <g id="SvgjsG2325" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG2326" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG2327" class="apexcharts-point-annotations"></g>
                                        </g>
                                    </svg></div>
                            </div>
                            <h4 class="mb-1 fw-semibold d-flex align-content-center">24%<i
                                    class="ti ti-arrow-up-right fs-5 text-success"></i>
                            </h4>
                            <p class="mb-0">Growth</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row alig n-items-start">
                        <div class="col-8">
                            <h4 class="card-title mb-9 fw-semibold"> Monthly Earnings </h4>
                            <div class="d-flex align-items-center mb-3">
                                <h4 class="fw-semibold mb-0 me-8">{{$monthSales}} {{ Auth::user()->currency->symbol }}</h4>
                                <div class="d-flex align-items-center">
                                    <span
                                        class="me-2 rounded-circle bg-success-subtle  round-20 d-flex align-items-center justify-content-center">
                                        <i class="ti {{$monthPositive ? 'ti-arrow-up-right text-success' : 'ti-arrow-down-right text-danger'}}"></i>
                                    </span>
                                    <p class="text-dark me-1 fs-3 mb-0">{{$percentageChangeMonth}}%</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex justify-content-end">
                                <div class="p-2 bg-primary-subtle rounded-2 d-inline-block">
                                    <img src="{{ asset('build/images/svgs/icon-master-card-2.svg') }}"
                                        alt="modernize-img" class="img-fluid" width="24" height="24">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="monthly-earning" style="min-height: 56px;">
                        <div id="apexchartsmonthly-earning"
                            class="apexcharts-canvas apexchartsmonthly-earning apexcharts-theme-light"
                            style="width: 295px; height: 56px;"><svg id="SvgjsSvg1775" width="295" height="56"
                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                style="background: transparent;">
                                <foreignObject x="0" y="0" width="295" height="56">
                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                        style="max-height: 28px;"></div>
                                </foreignObject>
                                <rect id="SvgjsRect1779" width="0" height="0" x="0" y="0" rx="0"
                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                    stroke-dasharray="0" fill="#fefefe"></rect>
                                <g id="SvgjsG1818" class="apexcharts-yaxis" rel="0"
                                    transform="translate(-18, 0)"></g>
                                <g id="SvgjsG1777" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(0, 0)">
                                    <defs id="SvgjsDefs1776">
                                        <clipPath id="gridRectMaskcr4xky8b">
                                            <rect id="SvgjsRect1781" width="301" height="58" x="-3" y="-1"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMaskcr4xky8b"></clipPath>
                                        <clipPath id="nonForecastMaskcr4xky8b"></clipPath>
                                        <clipPath id="gridRectMarkerMaskcr4xky8b">
                                            <rect id="SvgjsRect1782" width="299" height="60" x="-2" y="-2"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <linearGradient id="SvgjsLinearGradient1787" x1="0" y1="0"
                                            x2="0" y2="1">
                                            <stop id="SvgjsStop1788" stop-opacity="0.1" stop-color="var(--bs-primary)"
                                                offset="0.2"></stop>
                                            <stop id="SvgjsStop1789" stop-opacity="0" stop-color="" offset="1.8">
                                            </stop>
                                            <stop id="SvgjsStop1790" stop-opacity="0" stop-color="" offset="1">
                                            </stop>
                                        </linearGradient>
                                    </defs>
                                    <line id="SvgjsLine1780" x1="0" y1="0" x2="0"
                                        y2="56" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt"
                                        class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="56"
                                        fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                    <g id="SvgjsG1793" class="apexcharts-grid">
                                        <g id="SvgjsG1794" class="apexcharts-gridlines-horizontal"
                                            style="display: none;">
                                            <line id="SvgjsLine1797" x1="0" y1="0" x2="295"
                                                y2="0" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1798" x1="0" y1="8" x2="295"
                                                y2="8" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1799" x1="0" y1="16" x2="295"
                                                y2="16" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1800" x1="0" y1="24" x2="295"
                                                y2="24" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1801" x1="0" y1="32" x2="295"
                                                y2="32" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1802" x1="0" y1="40" x2="295"
                                                y2="40" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1803" x1="0" y1="48" x2="295"
                                                y2="48" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1804" x1="0" y1="56" x2="295"
                                                y2="56" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG1795" class="apexcharts-gridlines-vertical"
                                            style="display: none;"></g>
                                        <line id="SvgjsLine1806" x1="0" y1="56" x2="295"
                                            y2="56" stroke="transparent" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                        <line id="SvgjsLine1805" x1="0" y1="1" x2="0"
                                            y2="56" stroke="transparent" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG1796" class="apexcharts-grid-borders" style="display: none;"></g>
                                    <g id="SvgjsG1783" class="apexcharts-area-series apexcharts-plot-series">
                                        <g id="SvgjsG1784" class="apexcharts-series" seriesName="monthlyxearnings"
                                            data:longestSeries="true" rel="1" data:realIndex="0">
                                            <path id="SvgjsPath1791"
                                                d="M 0 56 L 0 36C5.670710244581284, 32.216963470733575, 32.804851622837376, 2.5344346422849133, 49.16666666666667, 3.200000000000003S82.64632819208906, 36.68179959046223, 98.33333333333334, 40S131.18024199981193, 22.93783269964878, 147.5, 24S180.6218566768909, 48.74961285274004, 196.66666666666669, 46.4S229.5135753331453, 10.662167300351223, 245.83333333333334, 9.600000000000001S289.07188203561174, 36.334614519646024, 295, 40 L 295 56 L 0 56M 0 36z"
                                                fill="url(#SvgjsLinearGradient1787)" fill-opacity="1"
                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                stroke-dasharray="0" class="apexcharts-area" index="0"
                                                clip-path="url(#gridRectMaskcr4xky8b)"
                                                pathTo="M 0 56 L 0 36C5.670710244581284, 32.216963470733575, 32.804851622837376, 2.5344346422849133, 49.16666666666667, 3.200000000000003S82.64632819208906, 36.68179959046223, 98.33333333333334, 40S131.18024199981193, 22.93783269964878, 147.5, 24S180.6218566768909, 48.74961285274004, 196.66666666666669, 46.4S229.5135753331453, 10.662167300351223, 245.83333333333334, 9.600000000000001S289.07188203561174, 36.334614519646024, 295, 40 L 295 56 L 0 56M 0 36z"
                                                pathFrom="M -1 56 L -1 56 L 49.16666666666667 56 L 98.33333333333334 56 L 147.5 56 L 196.66666666666669 56 L 245.83333333333334 56 L 295 56">
                                            </path>
                                            <path id="SvgjsPath1792"
                                                d="M 0 36C5.670710244581284, 32.216963470733575, 32.804851622837376, 2.5344346422849133, 49.16666666666667, 3.200000000000003S82.64632819208906, 36.68179959046223, 98.33333333333334, 40S131.18024199981193, 22.93783269964878, 147.5, 24S180.6218566768909, 48.74961285274004, 196.66666666666669, 46.4S229.5135753331453, 10.662167300351223, 245.83333333333334, 9.600000000000001S289.07188203561174, 36.334614519646024, 295, 40"
                                                fill="none" fill-opacity="1" stroke="var(--bs-primary)"
                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                stroke-dasharray="0" class="apexcharts-area" index="0"
                                                clip-path="url(#gridRectMaskcr4xky8b)"
                                                pathTo="M 0 36C5.670710244581284, 32.216963470733575, 32.804851622837376, 2.5344346422849133, 49.16666666666667, 3.200000000000003S82.64632819208906, 36.68179959046223, 98.33333333333334, 40S131.18024199981193, 22.93783269964878, 147.5, 24S180.6218566768909, 48.74961285274004, 196.66666666666669, 46.4S229.5135753331453, 10.662167300351223, 245.83333333333334, 9.600000000000001S289.07188203561174, 36.334614519646024, 295, 40"
                                                pathFrom="M -1 56 L -1 56 L 49.16666666666667 56 L 98.33333333333334 56 L 147.5 56 L 196.66666666666669 56 L 245.83333333333334 56 L 295 56"
                                                fill-rule="evenodd"></path>
                                            <g id="SvgjsG1785"
                                                class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                data:realIndex="0">
                                                <g class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1822" r="0" cx="0" cy="0"
                                                        class="apexcharts-marker wvy7qiqf2 no-pointer-events"
                                                        stroke="#ffffff" fill="var(--bs-primary)" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" default-marker-size="0">
                                                    </circle>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1786" class="apexcharts-datalabels" data:realIndex="0"></g>
                                    </g>
                                    <line id="SvgjsLine1807" x1="0" y1="0" x2="295"
                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1808" x1="0" y1="0" x2="295"
                                        y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG1809" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG1810" class="apexcharts-xaxis-texts-g"
                                            transform="translate(0, -4)"></g>
                                    </g>
                                    <g id="SvgjsG1819" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG1820" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG1821" class="apexcharts-point-annotations"></g>
                                </g>
                            </svg>
                            <div class="apexcharts-tooltip apexcharts-theme-dark">
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: var(--bs-primary);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body">
                    <h4 class="card-title fw-semibold">Weekly Stats</h4>
                    <p class="card-subtitle mb-0">Average sales</p>
                    <div id="weekly-stats" class="mb-4 mt-7" style="min-height: 120px;">
                        <div id="apexchartsweekly-stats2"
                            class="apexcharts-canvas apexchartsweekly-stats2 apexcharts-theme-light"
                            style="width: 295px; height: 120px;"><svg id="SvgjsSvg1824" width="295"
                                height="120" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                style="background: transparent;">
                                <foreignObject x="0" y="0" width="295" height="120">
                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                        style="max-height: 60px;"></div>
                                </foreignObject>
                                <rect id="SvgjsRect1828" width="0" height="0" x="0" y="0" rx="0"
                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                    stroke-dasharray="0" fill="#fefefe"></rect>
                                <g id="SvgjsG1862" class="apexcharts-yaxis" rel="0"
                                    transform="translate(-18, 0)"></g>
                                <g id="SvgjsG1826" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(0, 0)">
                                    <defs id="SvgjsDefs1825">
                                        <clipPath id="gridRectMaskigtlkj3vf">
                                            <rect id="SvgjsRect1830" width="301" height="122" x="-3" y="-1"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMaskigtlkj3vf"></clipPath>
                                        <clipPath id="nonForecastMaskigtlkj3vf"></clipPath>
                                        <clipPath id="gridRectMarkerMaskigtlkj3vf">
                                            <rect id="SvgjsRect1831" width="299" height="124" x="-2" y="-2"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <linearGradient id="SvgjsLinearGradient1836" x1="0" y1="0"
                                            x2="0" y2="1">
                                            <stop id="SvgjsStop1837" stop-opacity="0.18"
                                                stop-color="var(--bs-primary)" offset="0.2"></stop>
                                            <stop id="SvgjsStop1838" stop-opacity="0" stop-color="" offset="1.8">
                                            </stop>
                                            <stop id="SvgjsStop1839" stop-opacity="0" stop-color="" offset="1">
                                            </stop>
                                        </linearGradient>
                                    </defs>
                                    <line id="SvgjsLine1829" x1="0" y1="0" x2="0"
                                        y2="120" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt"
                                        class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="120"
                                        fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                    <g id="SvgjsG1842" class="apexcharts-grid">
                                        <g id="SvgjsG1843" class="apexcharts-gridlines-horizontal"
                                            style="display: none;">
                                            <line id="SvgjsLine1846" x1="0" y1="0" x2="295"
                                                y2="0" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1847" x1="0" y1="30" x2="295"
                                                y2="30" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1848" x1="0" y1="60" x2="295"
                                                y2="60" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1849" x1="0" y1="90" x2="295"
                                                y2="90" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1850" x1="0" y1="120" x2="295"
                                                y2="120" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG1844" class="apexcharts-gridlines-vertical"
                                            style="display: none;"></g>
                                        <line id="SvgjsLine1852" x1="0" y1="120" x2="295"
                                            y2="120" stroke="transparent" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                        <line id="SvgjsLine1851" x1="0" y1="1" x2="0"
                                            y2="120" stroke="transparent" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG1845" class="apexcharts-grid-borders" style="display: none;"></g>
                                    <g id="SvgjsG1832" class="apexcharts-area-series apexcharts-plot-series">
                                        <g id="SvgjsG1833" class="apexcharts-series" seriesName="WeeklyxStats"
                                            data:longestSeries="true" rel="1" data:realIndex="0">
                                            <path id="SvgjsPath1840"
                                                d="M 0 120 L 0 100C4.330259251762643, 94.12846203150828, 49.16666666666667, 0, 73.75, 0S125.4503779094735, 92.52555183371983, 147.5, 100S196.66666666666666, 50, 221.25, 50S286.5789624745785, 94.29082201666338, 295, 100 L 295 120 L 0 120M 0 100z"
                                                fill="url(#SvgjsLinearGradient1836)" fill-opacity="1"
                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                stroke-dasharray="0" class="apexcharts-area" index="0"
                                                clip-path="url(#gridRectMaskigtlkj3vf)"
                                                pathTo="M 0 120 L 0 100C4.330259251762643, 94.12846203150828, 49.16666666666667, 0, 73.75, 0S125.4503779094735, 92.52555183371983, 147.5, 100S196.66666666666666, 50, 221.25, 50S286.5789624745785, 94.29082201666338, 295, 100 L 295 120 L 0 120M 0 100z"
                                                pathFrom="M -1 150 L -1 150 L 73.75 150 L 147.5 150 L 221.25 150 L 295 150">
                                            </path>
                                            <path id="SvgjsPath1841"
                                                d="M 0 100C4.330259251762643, 94.12846203150828, 49.16666666666667, 0, 73.75, 0S125.4503779094735, 92.52555183371983, 147.5, 100S196.66666666666666, 50, 221.25, 50S286.5789624745785, 94.29082201666338, 295, 100"
                                                fill="none" fill-opacity="1" stroke="var(--bs-primary)"
                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                stroke-dasharray="0" class="apexcharts-area" index="0"
                                                clip-path="url(#gridRectMaskigtlkj3vf)"
                                                pathTo="M 0 100C4.330259251762643, 94.12846203150828, 49.16666666666667, 0, 73.75, 0S125.4503779094735, 92.52555183371983, 147.5, 100S196.66666666666666, 50, 221.25, 50S286.5789624745785, 94.29082201666338, 295, 100"
                                                pathFrom="M -1 150 L -1 150 L 73.75 150 L 147.5 150 L 221.25 150 L 295 150"
                                                fill-rule="evenodd"></path>
                                            <g id="SvgjsG1834"
                                                class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                data:realIndex="0">
                                                <g class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1866" r="0" cx="0" cy="0"
                                                        class="apexcharts-marker w8d5jiynol no-pointer-events"
                                                        stroke="#ffffff" fill="var(--bs-primary)" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" default-marker-size="0">
                                                    </circle>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1835" class="apexcharts-datalabels" data:realIndex="0"></g>
                                    </g>
                                    <line id="SvgjsLine1853" x1="0" y1="0" x2="295"
                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1854" x1="0" y1="0" x2="295"
                                        y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG1855" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG1856" class="apexcharts-xaxis-texts-g"
                                            transform="translate(0, -4)"></g>
                                    </g>
                                    <g id="SvgjsG1863" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG1864" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG1865" class="apexcharts-point-annotations"></g>
                                </g>
                            </svg>
                            <div class="apexcharts-tooltip apexcharts-theme-dark">
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: var(--bs-primary);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="d-flex">
                                <div
                                    class="p-6 bg-primary-subtle text-primary rounded-2 me-6 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-grid-dots fs-6"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1 fs-4 fw-semibold">Top Sales</h6>
                                    <p class="fs-3 mb-0">Johnathan Doe</p>
                                </div>
                            </div>
                            <div class="bg-primary-subtle text-primary badge">
                                <p class="fs-3 fw-semibold mb-0">+68</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body">
                    <div>
                        <h4 class="card-title fw-semibold">Yearly Sales</h4>
                        <p class="card-subtitle">Every month</p>
                        <div id="salary" class="mb-7 pb-8 mx-n4" style="min-height: 265px;">
                            <div id="apexcharts1dvtehpvj"
                                class="apexcharts-canvas apexcharts1dvtehpvj apexcharts-theme-light"
                                style="width: 343px; height: 250px;"><svg id="SvgjsSvg1867" width="343"
                                    height="250" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <foreignObject x="0" y="0" width="343" height="250">
                                        <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                            style="max-height: 125px;"></div>
                                    </foreignObject>
                                    <g id="SvgjsG1931" class="apexcharts-yaxis" rel="0"
                                        transform="translate(-8, 0)">
                                        <g id="SvgjsG1932" class="apexcharts-yaxis-texts-g"></g>
                                    </g>
                                    <g id="SvgjsG1869" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(22, 30)">
                                        <defs id="SvgjsDefs1868">
                                            <linearGradient id="SvgjsLinearGradient1873" x1="0" y1="0"
                                                x2="0" y2="1">
                                                <stop id="SvgjsStop1874" stop-opacity="0.4"
                                                    stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                <stop id="SvgjsStop1875" stop-opacity="0.5"
                                                    stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                <stop id="SvgjsStop1876" stop-opacity="0.5"
                                                    stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            </linearGradient>
                                            <clipPath id="gridRectMask1dvtehpvj">
                                                <rect id="SvgjsRect1878" width="315" height="187" x="-2" y="0"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMask1dvtehpvj"></clipPath>
                                            <clipPath id="nonForecastMask1dvtehpvj"></clipPath>
                                            <clipPath id="gridRectMarkerMask1dvtehpvj">
                                                <rect id="SvgjsRect1879" width="315" height="191" x="-2" y="-2"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <rect id="SvgjsRect1877" width="23.325" height="187" x="0" y="0"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke-dasharray="3" fill="url(#SvgjsLinearGradient1873)"
                                            class="apexcharts-xcrosshairs" y2="187" filter="none"
                                            fill-opacity="0.9"></rect>
                                        <g id="SvgjsG1897" class="apexcharts-grid">
                                            <g id="SvgjsG1898" class="apexcharts-gridlines-horizontal"></g>
                                            <g id="SvgjsG1899" class="apexcharts-gridlines-vertical"></g>
                                            <line id="SvgjsLine1902" x1="0" y1="187" x2="311"
                                                y2="187" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                            <line id="SvgjsLine1901" x1="0" y1="1" x2="0"
                                                y2="187" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG1900" class="apexcharts-grid-borders"></g>
                                        <g id="SvgjsG1880" class="apexcharts-bar-series apexcharts-plot-series">
                                            <g id="SvgjsG1881" class="apexcharts-series" rel="1"
                                                seriesName="YearlyxSales" data:realIndex="0">
                                                <path id="SvgjsPath1886"
                                                    d="M 14.254166666666668 182.001 L 14.254166666666668 75.126 C 14.254166666666668 72.626 16.75416666666667 70.126 19.25416666666667 70.126 L 32.579166666666666 70.126 C 35.079166666666666 70.126 37.579166666666666 72.626 37.579166666666666 75.126 L 37.579166666666666 182.001 C 37.579166666666666 184.501 35.079166666666666 187.001 32.579166666666666 187.001 L 19.25416666666667 187.001 C 16.75416666666667 187.001 14.254166666666668 184.501 14.254166666666668 182.001 Z "
                                                    fill="var(--bs-primary-bg-subtle)" fill-opacity="1"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask1dvtehpvj)"
                                                    pathTo="M 14.254166666666668 182.001 L 14.254166666666668 75.126 C 14.254166666666668 72.626 16.75416666666667 70.126 19.25416666666667 70.126 L 32.579166666666666 70.126 C 35.079166666666666 70.126 37.579166666666666 72.626 37.579166666666666 75.126 L 37.579166666666666 182.001 C 37.579166666666666 184.501 35.079166666666666 187.001 32.579166666666666 187.001 L 19.25416666666667 187.001 C 16.75416666666667 187.001 14.254166666666668 184.501 14.254166666666668 182.001 Z "
                                                    pathFrom="M 14.254166666666668 187.001 L 14.254166666666668 187.001 L 37.579166666666666 187.001 L 37.579166666666666 187.001 L 37.579166666666666 187.001 L 37.579166666666666 187.001 L 37.579166666666666 187.001 L 14.254166666666668 187.001 Z"
                                                    cy="70.125" cx="66.0875" j="0" val="20"
                                                    barHeight="116.875" barWidth="23.325"></path>
                                                <path id="SvgjsPath1888"
                                                    d="M 66.0875 182.001 L 66.0875 104.34475 C 66.0875 101.84475 68.5875 99.34475 71.0875 99.34475 L 84.41250000000001 99.34475 C 86.91250000000001 99.34475 89.41250000000001 101.84475 89.41250000000001 104.34475 L 89.41250000000001 182.001 C 89.41250000000001 184.501 86.91250000000001 187.001 84.41250000000001 187.001 L 71.0875 187.001 C 68.5875 187.001 66.0875 184.501 66.0875 182.001 Z "
                                                    fill="var(--bs-primary-bg-subtle)" fill-opacity="1"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask1dvtehpvj)"
                                                    pathTo="M 66.0875 182.001 L 66.0875 104.34475 C 66.0875 101.84475 68.5875 99.34475 71.0875 99.34475 L 84.41250000000001 99.34475 C 86.91250000000001 99.34475 89.41250000000001 101.84475 89.41250000000001 104.34475 L 89.41250000000001 182.001 C 89.41250000000001 184.501 86.91250000000001 187.001 84.41250000000001 187.001 L 71.0875 187.001 C 68.5875 187.001 66.0875 184.501 66.0875 182.001 Z "
                                                    pathFrom="M 66.0875 187.001 L 66.0875 187.001 L 89.41250000000001 187.001 L 89.41250000000001 187.001 L 89.41250000000001 187.001 L 89.41250000000001 187.001 L 89.41250000000001 187.001 L 66.0875 187.001 Z"
                                                    cy="99.34375" cx="117.92083333333335" j="1" val="15"
                                                    barHeight="87.65625" barWidth="23.325"></path>
                                                <path id="SvgjsPath1890"
                                                    d="M 117.92083333333335 182.001 L 117.92083333333335 16.688499999999998 C 117.92083333333335 14.188499999999998 120.42083333333335 11.6885 122.92083333333335 11.6885 L 136.24583333333334 11.6885 C 138.74583333333334 11.6885 141.24583333333334 14.188499999999998 141.24583333333334 16.688499999999998 L 141.24583333333334 182.001 C 141.24583333333334 184.501 138.74583333333334 187.001 136.24583333333334 187.001 L 122.92083333333335 187.001 C 120.42083333333335 187.001 117.92083333333335 184.501 117.92083333333335 182.001 Z "
                                                    fill="var(--bs-primary)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask1dvtehpvj)"
                                                    pathTo="M 117.92083333333335 182.001 L 117.92083333333335 16.688499999999998 C 117.92083333333335 14.188499999999998 120.42083333333335 11.6885 122.92083333333335 11.6885 L 136.24583333333334 11.6885 C 138.74583333333334 11.6885 141.24583333333334 14.188499999999998 141.24583333333334 16.688499999999998 L 141.24583333333334 182.001 C 141.24583333333334 184.501 138.74583333333334 187.001 136.24583333333334 187.001 L 122.92083333333335 187.001 C 120.42083333333335 187.001 117.92083333333335 184.501 117.92083333333335 182.001 Z "
                                                    pathFrom="M 117.92083333333335 187.001 L 117.92083333333335 187.001 L 141.24583333333334 187.001 L 141.24583333333334 187.001 L 141.24583333333334 187.001 L 141.24583333333334 187.001 L 141.24583333333334 187.001 L 117.92083333333335 187.001 Z"
                                                    cy="11.6875" cx="169.7541666666667" j="2" val="30"
                                                    barHeight="175.3125" barWidth="23.325"></path>
                                                <path id="SvgjsPath1892"
                                                    d="M 169.7541666666667 182.001 L 169.7541666666667 45.90725 C 169.7541666666667 43.40725 172.2541666666667 40.90725 174.7541666666667 40.90725 L 188.07916666666668 40.90725 C 190.57916666666668 40.90725 193.07916666666668 43.40725 193.07916666666668 45.90725 L 193.07916666666668 182.001 C 193.07916666666668 184.501 190.57916666666668 187.001 188.07916666666668 187.001 L 174.7541666666667 187.001 C 172.2541666666667 187.001 169.7541666666667 184.501 169.7541666666667 182.001 Z "
                                                    fill="var(--bs-primary-bg-subtle)" fill-opacity="1"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask1dvtehpvj)"
                                                    pathTo="M 169.7541666666667 182.001 L 169.7541666666667 45.90725 C 169.7541666666667 43.40725 172.2541666666667 40.90725 174.7541666666667 40.90725 L 188.07916666666668 40.90725 C 190.57916666666668 40.90725 193.07916666666668 43.40725 193.07916666666668 45.90725 L 193.07916666666668 182.001 C 193.07916666666668 184.501 190.57916666666668 187.001 188.07916666666668 187.001 L 174.7541666666667 187.001 C 172.2541666666667 187.001 169.7541666666667 184.501 169.7541666666667 182.001 Z "
                                                    pathFrom="M 169.7541666666667 187.001 L 169.7541666666667 187.001 L 193.07916666666668 187.001 L 193.07916666666668 187.001 L 193.07916666666668 187.001 L 193.07916666666668 187.001 L 193.07916666666668 187.001 L 169.7541666666667 187.001 Z"
                                                    cy="40.90625" cx="221.58750000000003" j="3" val="25"
                                                    barHeight="146.09375" barWidth="23.325"></path>
                                                <path id="SvgjsPath1894"
                                                    d="M 221.58750000000003 182.001 L 221.58750000000003 133.5635 C 221.58750000000003 131.0635 224.08750000000003 128.5635 226.58750000000003 128.5635 L 239.91250000000002 128.5635 C 242.41250000000002 128.5635 244.91250000000002 131.0635 244.91250000000002 133.5635 L 244.91250000000002 182.001 C 244.91250000000002 184.501 242.41250000000002 187.001 239.91250000000002 187.001 L 226.58750000000003 187.001 C 224.08750000000003 187.001 221.58750000000003 184.501 221.58750000000003 182.001 Z "
                                                    fill="var(--bs-primary-bg-subtle)" fill-opacity="1"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask1dvtehpvj)"
                                                    pathTo="M 221.58750000000003 182.001 L 221.58750000000003 133.5635 C 221.58750000000003 131.0635 224.08750000000003 128.5635 226.58750000000003 128.5635 L 239.91250000000002 128.5635 C 242.41250000000002 128.5635 244.91250000000002 131.0635 244.91250000000002 133.5635 L 244.91250000000002 182.001 C 244.91250000000002 184.501 242.41250000000002 187.001 239.91250000000002 187.001 L 226.58750000000003 187.001 C 224.08750000000003 187.001 221.58750000000003 184.501 221.58750000000003 182.001 Z "
                                                    pathFrom="M 221.58750000000003 187.001 L 221.58750000000003 187.001 L 244.91250000000002 187.001 L 244.91250000000002 187.001 L 244.91250000000002 187.001 L 244.91250000000002 187.001 L 244.91250000000002 187.001 L 221.58750000000003 187.001 Z"
                                                    cy="128.5625" cx="273.42083333333335" j="4" val="10"
                                                    barHeight="58.4375" barWidth="23.325"></path>
                                                <path id="SvgjsPath1896"
                                                    d="M 273.42083333333335 182.001 L 273.42083333333335 104.34475 C 273.42083333333335 101.84475 275.92083333333335 99.34475 278.42083333333335 99.34475 L 291.74583333333334 99.34475 C 294.24583333333334 99.34475 296.74583333333334 101.84475 296.74583333333334 104.34475 L 296.74583333333334 182.001 C 296.74583333333334 184.501 294.24583333333334 187.001 291.74583333333334 187.001 L 278.42083333333335 187.001 C 275.92083333333335 187.001 273.42083333333335 184.501 273.42083333333335 182.001 Z "
                                                    fill="var(--bs-primary-bg-subtle)" fill-opacity="1"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask1dvtehpvj)"
                                                    pathTo="M 273.42083333333335 182.001 L 273.42083333333335 104.34475 C 273.42083333333335 101.84475 275.92083333333335 99.34475 278.42083333333335 99.34475 L 291.74583333333334 99.34475 C 294.24583333333334 99.34475 296.74583333333334 101.84475 296.74583333333334 104.34475 L 296.74583333333334 182.001 C 296.74583333333334 184.501 294.24583333333334 187.001 291.74583333333334 187.001 L 278.42083333333335 187.001 C 275.92083333333335 187.001 273.42083333333335 184.501 273.42083333333335 182.001 Z "
                                                    pathFrom="M 273.42083333333335 187.001 L 273.42083333333335 187.001 L 296.74583333333334 187.001 L 296.74583333333334 187.001 L 296.74583333333334 187.001 L 296.74583333333334 187.001 L 296.74583333333334 187.001 L 273.42083333333335 187.001 Z"
                                                    cy="99.34375" cx="325.25416666666666" j="5" val="15"
                                                    barHeight="87.65625" barWidth="23.325"></path>
                                                <g id="SvgjsG1883" class="apexcharts-bar-goals-markers">
                                                    <g id="SvgjsG1885" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask1dvtehpvj)"></g>
                                                    <g id="SvgjsG1887" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask1dvtehpvj)"></g>
                                                    <g id="SvgjsG1889" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask1dvtehpvj)"></g>
                                                    <g id="SvgjsG1891" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask1dvtehpvj)"></g>
                                                    <g id="SvgjsG1893" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask1dvtehpvj)"></g>
                                                    <g id="SvgjsG1895" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask1dvtehpvj)"></g>
                                                </g>
                                                <g id="SvgjsG1884"
                                                    class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g>
                                            </g>
                                            <g id="SvgjsG1882"
                                                class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                                data:realIndex="0"></g>
                                        </g>
                                        <line id="SvgjsLine1903" x1="0" y1="0" x2="311"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1904" x1="0" y1="0" x2="311"
                                            y2="0" stroke-dasharray="0" stroke-width="0"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1905" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1906" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"><text id="SvgjsText1909"
                                                    font-family="inherit" x="25.916666666666668" y="216"
                                                    text-anchor="middle" dominant-baseline="auto" font-size="12px"
                                                    font-weight="400" fill="#adb0bb"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1910">Apr</tspan>
                                                    <title>Apr</title>
                                                </text><text id="SvgjsText1913" font-family="inherit" x="77.75" y="216"
                                                    text-anchor="middle" dominant-baseline="auto" font-size="12px"
                                                    font-weight="400" fill="#adb0bb"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1914">May</tspan>
                                                    <title>May</title>
                                                </text><text id="SvgjsText1917" font-family="inherit"
                                                    x="129.58333333333334" y="216" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#adb0bb" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1918">June</tspan>
                                                    <title>June</title>
                                                </text><text id="SvgjsText1921" font-family="inherit"
                                                    x="181.41666666666669" y="216" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#adb0bb" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1922">July</tspan>
                                                    <title>July</title>
                                                </text><text id="SvgjsText1925" font-family="inherit"
                                                    x="233.25000000000003" y="216" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#adb0bb" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1926">Aug</tspan>
                                                    <title>Aug</title>
                                                </text><text id="SvgjsText1929" font-family="inherit"
                                                    x="285.0833333333333" y="216" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#adb0bb" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1930">Sept</tspan>
                                                    <title>Sept</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG1933" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1934" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1935" class="apexcharts-point-annotations"></g>
                                    </g>
                                </svg>
                                <div class="apexcharts-tooltip apexcharts-theme-dark">
                                    <div class="apexcharts-tooltip-title"
                                        style="font-family: inherit; font-size: 12px;"></div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: var(--bs-primary-bg-subtle);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: inherit; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <div
                                    class="bg-primary-subtle text-primary rounded-2 me-8 p-8 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-grid-dots fs-6"></i>
                                </div>
                                <div>
                                    <p class="fs-3 mb-0 fw-normal">Total Sales</p>
                                    <h6 class="fw-semibold text-dark fs-4 mb-0">$36,358</h6>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div
                                    class="bg-light-subtle text-muted rounded-2 me-8 p-8 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-grid-dots fs-6"></i>
                                </div>
                                <div>
                                    <p class="fs-3 mb-0 fw-normal">Expenses</p>
                                    <h6 class="fw-semibold text-dark fs-4 mb-0">$5,296</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body">
                    <h4 class="card-title fw-semibold">Payment Gateways</h4>
                    <p class="card-subtitle mb-7">Platform for Income</p>
                    <div class="position-relative">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="d-flex">
                                <div
                                    class="p-8 bg-success-subtle rounded-2 d-flex align-items-center justify-content-center me-6">
                                    <img src="{{ asset('build/images/svgs/icon-wallet.svg') }}" alt="modernize-img"
                                        class="img-fluid" width="24" height="24">
                                </div>
                                <div>
                                    <h6 class="mb-1 fs-4 fw-semibold">Apple Pay</h6>
                                    <p class="fs-3 mb-0">Wallet</p>
                                </div>
                            </div>
                            <h6 class="mb-0 fw-semibold text-muted">+$345</h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="d-flex">
                                <div
                                    class="p-8 bg-warning-subtle rounded-2 d-flex align-items-center justify-content-center me-6">
                                    <img src="{{ asset('build/images/svgs/icon-credit-card.svg') }}" alt="modernize-img"
                                        class="img-fluid" width="24" height="24">
                                </div>
                                <div>
                                    <h6 class="mb-1 fs-4 fw-semibold">Credit card</h6>
                                    <p class="fs-3 mb-0">Credit card</p>
                                </div>
                            </div>
                            <h6 class="mb-0 fw-semibold">+$2,235</h6>
                        </div>
                    </div>
                    <button class="btn btn-outline-primary w-100">View all transactions</button>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title fw-semibold">Recent Transactions</h4>
                        <p class="card-subtitle">How to Secure Recent Transactions</p>
                    </div>
                    <ul class="timeline-widget mb-0 position-relative mb-n5">
                        @forelse ($lastFiveOrders as $order)
                        <li class="timeline-item d-flex position-relative overflow-hidden">
                            <div class="timeline-time text-dark flex-shrink-0 text-end">{{Carbon\Carbon::parse($order->created_at)->format('h:i A');}}</div>
                            <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                <span class="timeline-badge border-2 border border-primary flex-shrink-0 my-8"></span>
                                <span class="timeline-badge-border d-block flex-shrink-0"></span>
                            </div>
                            <div class="timeline-desc fs-3 text-dark mt-n1">{{$order->item->name}} <br> <span class="{{ $order->status == 4 ? 'text-danger' : ($order->status == 3 ? 'text-success' : '') }}">{{ $order->status == 4 ? 'Canceled' : ($order->status == 3 ? 'Delivered' : '') }}
                            </span> - {{$order->price}} {{ Auth::user()->currency->symbol }}
                            </div>
                        </li>

                        @empty

                        @endforelse

                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-8 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-3">
                        <div class="mb-3 mb-sm-0">
                            <h4 class="card-title fw-semibold">Product Performances</h4>
                            <p class="card-subtitle">What Impacts Product Performance?</p>
                        </div>
                        <div>
                            <p>Current Month</p>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-middle text-nowrap mb-0">
                            <thead>
                                <tr class="text-muted fw-semibold">
                                    <th scope="col" class="ps-0">Product</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                </tr>
                            </thead>
                            <tbody class="border-top">
                                @forelse ($bestSellingItems as $order)
                                <tr>
                                    <td class="ps-0">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2 pe-1">
                                                <img src="{{ $order->item->image }}"
                                                    class="rounded-2" width="48" height="48"
                                                    alt="modernize-img">
                                            </div>
                                            <div>
                                                <h6 class="fw-semibold mb-1">{{$order->item->name}}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fs-3 text-dark mb-0">{{$order->total_price}} {{Auth::user()->currency->symbol}}</p>
                                    </td>
                                    <td>
                                        <p class="fs-3 text-dark mb-0">{{$order->total_quantity}}</p>

                                    </td>
                                </tr>

                                @empty

                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
