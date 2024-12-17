@extends('admin.layouts.master')

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
                                    <h3 class="mb-1 fw-semibold fs-8 d-flex align-content-center">${{ $todayTotalSales }}<i
                                            class="ti {{ $dayPositive ? 'ti-arrow-up-right text-success' : 'ti-arrow-down-right text-danger' }}  fs-5 lh-base "></i>
                                    </h3>
                                    <p class="mb-0 text-dark">Today’s Sales</p>
                                </div>
                                <div class="ps-4">
                                    <h3 class="mb-1 fw-semibold fs-8 d-flex align-content-center">{{$percentageChangeDay}}%<i
                                            class="ti  fs-5 lh-base {{ $dayPositive ? 'ti-arrow-up-right text-success' : 'ti-arrow-down-right text-danger' }}"></i>
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
                            <h4 class="mb-1 fw-semibold d-flex align-content-center">${{$totalSales}}
                            </h4>
                            <p class="mb-0">Sales</p>
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
                                <h4 class="fw-semibold mb-0 me-8">${{$monthSales}}</h4>
                                <div class="d-flex align-items-center">
                                    <span
                                        class="me-2 rounded-circle bg-danger-subtle text-success round-20 d-flex align-items-center justify-content-center">
                                        <i class="ti {{$monthPositive ? 'ti-arrow-up-right text-success' : 'ti-arrow-up-left text-danger'}} "></i>
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
                    <div class="mb-4">
                        <h4 class="card-title fw-semibold">Recent Transactions</h4>
                        <p class="card-subtitle">How to Secure Recent Transactions</p>
                    </div>
                    <ul class="timeline-widget mb-0 position-relative mb-n5">
                        @forelse ($lastFiveBookings as $booking)
                        <li class="timeline-item d-flex position-relative overflow-hidden">
                            <div class="timeline-time text-dark flex-shrink-0 text-end">09:30</div>
                            <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                <span class="timeline-badge border-2 border border-primary flex-shrink-0 my-8"></span>
                                <span class="timeline-badge-border d-block flex-shrink-0"></span>
                            </div>
                            <div class="timeline-desc fs-3 text-dark mt-n1">{{$booking->service->name}} from {{$booking->name}} of {{$booking->service->price}}
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
                            <h4 class="card-title fw-semibold">Service Performances</h4>
                            <p class="card-subtitle">What Impacts Service Performance?</p>
                        </div>
                        <div>
                            <h4 class="card-title fw-semibold">Current Month</h4>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-middle text-nowrap mb-0">
                            <thead>
                                <tr class="text-muted fw-semibold">
                                    <th scope="col" class="ps-0">Service</th>
                                    <th scope="col">Total Revenue</th>
                                    <th scope="col">Total Sales</th>
                                </tr>
                            </thead>
                            <tbody class="border-top">
                                @forelse ($bestSellingItems  as  $item)
                                <tr>
                                    <td>
                                        <p class="fs-3 text-dark mb-0">{{$item->name}}</p>
                                    </td>
                                    <td>
                                        <p class="fs-3 text-dark mb-0">{{$item->total_revenue}}</p>
                                    </td>
                                    <td>
                                        <p class="fs-3 text-dark mb-0">{{$item->total_sales}}</p>
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
