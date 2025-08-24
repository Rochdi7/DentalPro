@extends('layouts.main')

@section('title', 'Gallery')
@section('breadcrumb-item', 'Gallery')

@section('breadcrumb-item-active', 'Grid')

@section('css')
@endsection

@section('content')
    <!-- [ Main Content ] start -->
    <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5>New Publish</h5>
                </div>
                <div class="card-body">
                    <div class="grid row g-3">
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <a class="card-gallery" data-fslightbox="gallery" href="{{ URL::asset('build/images/pages/img-gallery-1.jpg') }}">
                                <img class="img-fluid" src="{{ URL::asset('build/images/pages/img-gallery-1.jpg') }}" alt="Card image" />
                                <div class="gallery-hover-data card-body justify-content-end">
                                    <div>
                                        <p class="text-white mb-0 text-truncate w-100">Mountain.jpg</p>
                                        <span
                                            class="text-white text-opacity-75 mb-0 text-sm text-truncate w-100">12-Aug-2023</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <a class="card-gallery" data-fslightbox="gallery"
                                href="{{ URL::asset('build/images/pages/img-gallery-2.jpg') }}">
                                <img class="img-fluid" src="{{ URL::asset('build/images/pages/img-gallery-2.jpg') }}" alt="Card image" />
                                <div class="gallery-hover-data card-body justify-content-end">
                                    <div>
                                        <p class="text-white mb-0 text-truncate w-100">Lily Garden.jpg</p>
                                        <span
                                            class="text-white text-opacity-75 mb-0 text-sm text-truncate w-100">12-Aug-2023</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <a class="card-gallery" data-fslightbox="gallery"
                                href="{{ URL::asset('build/images/pages/img-gallery-3.jpg') }}">
                                <img class="img-fluid" src="{{ URL::asset('build/images/pages/img-gallery-3.jpg') }}" alt="Card image" />
                                <div class="gallery-hover-data card-body justify-content-end">
                                    <div>
                                        <p class="text-white mb-0 text-truncate w-100">Boat Zeel.jpg</p>
                                        <span
                                            class="text-white text-opacity-75 mb-0 text-sm text-truncate w-100">12-Aug-2023</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Old Publish</h5>
                </div>
                <div class="card-body">
                    <div class="grid row g-3">
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <a class="card-gallery" data-fslightbox="gallery"
                                href="{{ URL::asset('build/images/pages/img-gallery-4.jpg') }}">
                                <img class="img-fluid" src="{{ URL::asset('build/images/pages/img-gallery-4.jpg') }}" alt="Card image" />
                                <div class="gallery-hover-data card-body justify-content-end">
                                    <div>
                                        <p class="text-white mb-0 text-truncate w-100">lily.jpg</p>
                                        <span
                                            class="text-white text-opacity-75 mb-0 text-sm text-truncate w-100">12-Aug-2023</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <a class="card-gallery" data-fslightbox="gallery"
                                href="{{ URL::asset('build/images/pages/img-gallery-5.jpg') }}">
                                <img class="img-fluid" src="{{ URL::asset('build/images/pages/img-gallery-5.jpg') }}" alt="Card image" />
                                <div class="gallery-hover-data card-body justify-content-end">
                                    <div>
                                        <p class="text-white mb-0 text-truncate w-100">Mountain Climbing.jpg</p>
                                        <span
                                            class="text-white text-opacity-75 mb-0 text-sm text-truncate w-100">12-Aug-2023</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <a class="card-gallery" data-fslightbox="gallery"
                                href="{{ URL::asset('build/images/pages/img-gallery-6.jpg') }}">
                                <img class="img-fluid" src="{{ URL::asset('build/images/pages/img-gallery-6.jpg') }}" alt="Card image" />
                                <div class="gallery-hover-data card-body justify-content-end">
                                    <div>
                                        <p class="text-white mb-0 text-truncate w-100">Hill Station.jpg</p>
                                        <span
                                            class="text-white text-opacity-75 mb-0 text-sm text-truncate w-100">12-Aug-2023</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <a class="card-gallery" data-fslightbox="gallery"
                                href="{{ URL::asset('build/images/pages/img-gallery-7.jpg') }}">
                                <img class="img-fluid" src="{{ URL::asset('build/images/pages/img-gallery-7.jpg') }}" alt="Card image" />
                                <div class="gallery-hover-data card-body justify-content-end">
                                    <div>
                                        <p class="text-white mb-0 text-truncate w-100">bungee jumping.jpg</p>
                                        <span
                                            class="text-white text-opacity-75 mb-0 text-sm text-truncate w-100">12-Aug-2023</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <a class="card-gallery" data-fslightbox="gallery"
                                href="{{ URL::asset('build/images/pages/img-gallery-8.jpg') }}">
                                <img class="img-fluid" src="{{ URL::asset('build/images/pages/img-gallery-8.jpg') }}" alt="Card image" />
                                <div class="gallery-hover-data card-body justify-content-end">
                                    <div>
                                        <p class="text-white mb-0 text-truncate w-100">Party Time.jpg</p>
                                        <span
                                            class="text-white text-opacity-75 mb-0 text-sm text-truncate w-100">12-Aug-2023</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <a class="card-gallery" data-fslightbox="gallery"
                                href="{{ URL::asset('build/images/pages/img-gallery-9.jpg') }}">
                                <img class="img-fluid" src="{{ URL::asset('build/images/pages/img-gallery-9.jpg') }}" alt="Card image" />
                                <div class="gallery-hover-data card-body justify-content-end">
                                    <div>
                                        <p class="text-white mb-0 text-truncate w-100">Creative Glass Click.jpg</p>
                                        <span
                                            class="text-white text-opacity-75 mb-0 text-sm text-truncate w-100">12-Aug-2023</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ sample-page ] end -->
    </div>
    <!-- [ Main Content ] end -->
@endsection

@section('scripts')
    <!-- [Page Specific JS] start -->
    <script src="{{ URL::asset('build/js/plugins/index.js') }}"></script>

@endsection
