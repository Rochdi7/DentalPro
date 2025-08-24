@extends('layouts.layout-components')

@section('title', 'Slider')
@section('breadcrumb-title', 'Slider')
@section('breadcrumb-text', 'tiny-slider works with static content and it works in the browser only. If the HTML is
    loaded dynamically.')

@section('breadcrumb-link', 'http://ganlanyuan.github.io/tiny-slider/demo')

@section('css')
    <!-- [Page specific CSS] start -->
    <link rel="stylesheet" href="{{ URL::asset('build/css/plugins/tiny-slider.css') }}">
    <!-- [Page specific CSS] end -->
@endsection

@section('css-bottom')
    <link rel="stylesheet" href="{{ URL::asset('build/css/uikit.css') }}">
@endsection

@section('content')
    <!-- [ Main Content ] start -->
    <div class="row">
        <!-- [ rangeslider ] start -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Slider1</h5>
                </div>
                <div class="card-body">
                    <div class="slider1 owl-carousel owl-theme">
                        <div class="item">
                            <img src="{{ URL::asset('build/images/slider/img-slide-1.jpg') }}" alt="" class="img-fluid" />
                        </div>
                        <div class="item">
                            <img src="{{ URL::asset('build/images/slider/img-slide-2.jpg') }}" alt="" class="img-fluid" />
                        </div>
                        <div class="item">
                            <img src="{{ URL::asset('build/images/slider/img-slide-3.jpg') }}" alt="" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Vertical</h5>
                </div>
                <div class="card-body">
                    <div class="slider2 owl-carousel owl-theme">
                        <div class="item">
                            <img src="{{ URL::asset('build/images/slider/img-slide-1.jpg') }}" alt="" class="img-fluid" />
                        </div>
                        <div class="item">
                            <img src="{{ URL::asset('build/images/slider/img-slide-2.jpg') }}" alt="" class="img-fluid" />
                        </div>
                        <div class="item">
                            <img src="{{ URL::asset('build/images/slider/img-slide-3.jpg') }}" alt="" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Customize</h5>
                </div>
                <div class="card-body">
                    <div id="slider3">
                        <div class="customize" id="customize">
                            <div>
                                <div>
                                    <img src="{{ URL::asset('build/images/slider/img-slide-1.jpg') }}" alt="" class="img-fluid" />
                                </div>
                            </div>
                            <div>
                                <div>
                                    <img src="{{ URL::asset('build/images/slider/img-slide-2.jpg') }}" alt="" class="img-fluid" />
                                </div>
                            </div>
                            <div>
                                <div>
                                    <img src="{{ URL::asset('build/images/slider/img-slide-3.jpg') }}" alt="" class="img-fluid" />
                                </div>
                            </div>
                            <div>
                                <div>
                                    <img src="{{ URL::asset('build/images/slider/img-slide-4.jpg') }}" alt="" class="img-fluid" />
                                </div>
                            </div>
                        </div>
                        <div class="customize-tools">
                            <ul class="thumbnails" id="customize-thumbnails">
                                <li>
                                    <img src="{{ URL::asset('build/images/slider/img-slide-1.jpg') }}" alt="" />
                                </li>
                                <li>
                                    <img src="{{ URL::asset('build/images/slider/img-slide-2.jpg') }}" alt="" />
                                </li>
                                <li>
                                    <img src="{{ URL::asset('build/images/slider/img-slide-3.jpg') }}" alt="" />
                                </li>
                                <li>
                                    <img src="{{ URL::asset('build/images/slider/img-slide-4.jpg') }}" alt="" />
                                </li>
                            </ul>
                            <ul class="controls" id="customize-controls">
                                <li class="prev">
                                    <i class="feather icon-chevron-left"></i>
                                </li>
                                <li class="next">
                                    <i class="feather icon-chevron-right"></i>
                                </li>
                            </ul>
                            <div class="playbutton-wrapper">
                                <button id="customize-toggle">Pause</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ rangeslider ] end -->
    </div>
    <!-- [ Main Content ] end -->
@endsection

@section('scripts')
    <!-- [Page Specific JS] start -->
    <script src="{{ URL::asset('build/js/plugins/tiny-slider.js') }}"></script>
    <script src="{{ URL::asset('build/js/elements/ac-slider.js') }}"></script>
    <!-- [Page Specific JS] end -->
@endsection
