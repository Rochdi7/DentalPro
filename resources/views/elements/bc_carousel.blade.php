@extends('layouts.layout-components')

@section('title', 'Carousel')
@section('breadcrumb-title', 'Carousel')
@section('breadcrumb-text', 'A slideshow component for cycling through elements—images or slides of text—like a
    carousel.')

@section('breadcrumb-link', 'https://getbootstrap.com/docs/5.2/components/carousel/')

@section('css')
    <!-- [Page specific CSS] start -->
    <link href="{{ URL::asset('build/css/plugins/animate.min.css') }}" rel="stylesheet" type="text/css">
    <!-- [Page specific CSS] end -->
@endsection

@section('css-bottom')
    <link rel="stylesheet" href="{{ URL::asset('build/css/uikit.css') }}">
@endsection

@section('content')
    <!-- [ Main Content ] start -->
    <div class="row">
        <!-- [ basic-carousel ] start -->
        <div class="col-xxl-4">
            <div class="card">
                <div class="card-header">
                    <h5>Basic Carousel</h5>
                </div>
                <div class="card-body pc-component">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid d-block w-100" src="{{ URL::asset('build/images/slider/img-slide-1.jpg') }}"
                                    alt="First slide" />
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid d-block w-100" src="{{ URL::asset('build/images/slider/img-slide-2.jpg') }}"
                                    alt="Second slide" />
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid d-block w-100" src="{{ URL::asset('build/images/slider/img-slide-3.jpg') }}"
                                    alt="Third slide" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ basic-carousel ] end -->
        <!-- [ carousel-control ] start -->
        <div class="col-xxl-4">
            <div class="card">
                <div class="card-header">
                    <h5>Carousel Controls</h5>
                </div>
                <div class="card-body pc-component">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid d-block w-100" src="{{ URL::asset('build/images/slider/img-slide-4.jpg') }}"
                                    alt="First slide" />
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid d-block w-100" src="{{ URL::asset('build/images/slider/img-slide-3.jpg') }}"
                                    alt="Second slide" />
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span
                                class="sr-only">Previous</span></a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span
                                class="sr-only">Next</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ carousel-control ] end -->
        <!-- [ carousel-indicators ] start -->
        <div class="col-xxl-4">
            <div class="card">
                <div class="card-header">
                    <h5>Carousel Indicators</h5>
                </div>
                <div class="card-body pc-component">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"> </li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid d-block w-100" src="{{ URL::asset('build/images/slider/img-slide-7.jpg') }}"
                                    alt="First slide" />
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid d-block w-100" src="{{ URL::asset('build/images/slider/img-slide-3.jpg') }}"
                                    alt="Second slide" />
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span
                                class="sr-only">Previous</span></a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span
                                class="sr-only">Next</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ carousel-indicators ] end -->
        <!-- [ carousel-Crossfade ] start -->
        <div class="col-xxl-6">
            <div class="card">
                <div class="card-header">
                    <h5>Carousel Crossfade</h5>
                </div>
                <div class="card-body pc-component">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid d-block w-100" src="{{ URL::asset('build/images/slider/img-slide-1.jpg') }}"
                                    alt="First slide" />
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid d-block w-100" src="{{ URL::asset('build/images/slider/img-slide-2.jpg') }}"
                                    alt="Second slide" />
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid d-block w-100" src="{{ URL::asset('build/images/slider/img-slide-3.jpg') }}"
                                    alt="Third slide" />
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button"
                            data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span
                                class="sr-only">Previous</span></a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button"
                            data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span
                                class="sr-only">Next</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ carousel-Crossfade ] end -->
        <!-- [ carousel-Caption ] start -->
        <div class="col-xxl-6">
            <div class="card">
                <div class="card-header">
                    <h5>Carousel with Captions</h5>
                </div>
                <div class="card-body pc-component">
                    <div id="carouselExample_Indicators_caption" class="carousel slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselExample_Indicators_caption" data-bs-slide-to="0" class="active">
                            </li>
                            <li data-bs-target="#carouselExample_Indicators_caption" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carouselExample_Indicators_caption" data-bs-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid d-block w-100" src="{{ URL::asset('build/images/slider/img-slide-2.jpg') }}"
                                    alt="First slide" />
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="text-white">First slide label</h5>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid d-block w-100" src="{{ URL::asset('build/images/slider/img-slide-1.jpg') }}"
                                    alt="Second slide" />
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="text-white">Second slide label</h5>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid d-block w-100" src="{{ URL::asset('build/images/slider/img-slide-3.jpg') }}"
                                    alt="Third slide" />
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="text-white">Third slide label</h5>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExample_Indicators_caption" role="button"
                            data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span
                                class="sr-only">Previous</span></a>
                        <a class="carousel-control-next" href="#carouselExample_Indicators_caption" role="button"
                            data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span
                                class="sr-only">Next</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ carousel-Caption ] end -->
        <!-- [ Dark variant ] start -->
        <div class="col-xxl-6">
            <div class="card">
                <div class="card-header">
                    <h5>Dark variant</h5>
                </div>
                <div class="card-body pc-component">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid d-block w-100" src="{{ URL::asset('build/images/light-box/l6.jpg') }}"
                                    alt="First slide" />
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid d-block w-100" src="{{ URL::asset('build/images/pages/img-gallery-7.jpg') }}"
                                    alt="Second slide" />
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid d-block w-100" src="{{ URL::asset('build/images/light-box/l6.jpg') }}"
                                    alt="Third slide" />
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleDark" role="button"
                            data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span
                                class="sr-only">Previous</span></a>
                        <a class="carousel-control-next" href="#carouselExampleDark" role="button"
                            data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span
                                class="sr-only">Next</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Dark variant ] end -->
        <!-- [ Disable touch swiping ] start -->
        <div class="col-xxl-6">
            <div class="card">
                <div class="card-header">
                    <h5>Disable touch swiping - Mobile only</h5>
                </div>
                <div class="card-body pc-component">
                    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false"
                        data-bs-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid d-block w-100" src="{{ URL::asset('build/images/slider/img-slide-3.jpg') }}"
                                    alt="First slide" />
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid d-block w-100" src="{{ URL::asset('build/images/slider/img-slide-4.jpg') }}"
                                    alt="First slide" />
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid d-block w-100" src="{{ URL::asset('build/images/slider/img-slide-5.jpg') }}"
                                    alt="First slide" />
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Disable touch swiping ] end -->
    </div>
    <!-- [ Main Content ] end -->
@endsection

@section('scripts')
@endsection
