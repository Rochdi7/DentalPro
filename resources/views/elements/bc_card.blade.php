@extends('layouts.layout-components')

@section('title', 'Cards')
@section('breadcrumb-title', 'Cards')
@section('breadcrumb-text', 'Bootstrap’s cards provide a flexible and extensible content container with multiple
    variants and options.')

@section('breadcrumb-link', 'https://getbootstrap.com/docs/5.2/components/card/')

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
        <!-- [ card ] start -->
        <div class="col-md-6 col-xl-4">
            <h5>Body Content</h5>
            <hr />
            <div class="pc-component">
                <div class="card">
                    <div class="card-body"> This is some text within a card body. </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <h5>Titles, Text, and Links</h5>
            <hr />
            <div class="pc-component">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#!" class="card-link">Card link</a>
                        <a href="#!" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <h5>Header and Footer</h5>
            <hr />
            <div class="pc-component">
                <div class="card">
                    <h5 class="card-header">Featured</h5>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#!" class="btn btn-success">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <h5>Left Align</h5>
                    <hr />
                    <div class="pc-component">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.
                                </p>
                                <a href="#!" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <h5>Center Align</h5>
                    <hr />
                    <div class="pc-component">
                        <div class="card text-center">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.
                                </p>
                                <a href="#!" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <h5>Right Align</h5>
                    <hr />
                    <div class="pc-component">
                        <div class="card text-end">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.
                                </p>
                                <a href="#!" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xxl-4">
            <h5>Image Caps</h5>
            <hr />
            <div class="pc-component">
                <div class="card mb-3">
                    <img class="img-fluid card-img-top" src="{{ URL::asset('build/images/light-box/l3.jpg') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a
                            little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xxl-4">
            <h5>Image Caps [ Bottom ]</h5>
            <hr />
            <div class="pc-component">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a
                            little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                    <img class="img-fluid card-img-bottom" src="{{ URL::asset('build/images/light-box/l3.jpg') }}" alt="Card image cap" />
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xxl-4">
            <h5>Image Overlays</h5>
            <hr />
            <div class="pc-component">
                <div class="card bg-dark">
                    <img class="img-fluid card-img" src="{{ URL::asset('build/images/light-box/l3.jpg') }}" alt="Card image" />
                    <div class="card-img-overlay">
                        <h5 class="card-title text-white">Card title</h5>
                        <p class="card-text text-white">This is a wider card with supporting text below as a natural lead-in
                            to additional content. This content is a
                            little bit longer.</p>
                        <p class="card-text text-white">Last updated 3 mins ago</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <h5>Card Styles</h5>
            <hr />
            <div class="pc-component">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card text-white bg-primary">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                                <h5 class="card-title text-white">Primary card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card text-white bg-secondary">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                                <h5 class="card-title text-white">Secondary card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card text-white bg-success">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                                <h5 class="card-title text-white">Success card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card text-white bg-danger">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                                <h5 class="card-title text-white">Danger card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card text-white bg-warning">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                                <h5 class="card-title text-white">Warning card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card text-white bg-info">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                                <h5 class="card-title text-white">Info card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card bg-light">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                                <h5 class="card-title">Light card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card text-white bg-dark">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                                <h5 class="card-title text-white">Dark card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <h5>Card Groups</h5>
            <hr />
            <div class="pc-component">
                <div class="card-group">
                    <div class="card">
                        <img class="img-fluid card-img-top" src="{{ URL::asset('build/images/light-box/l3.jpg') }}"
                            alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a
                                little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <div class="card">
                        <img class="img-fluid card-img-top" src="{{ URL::asset('build/images/light-box/l3.jpg') }}"
                            alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional
                                content.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <div class="card">
                        <img class="img-fluid card-img-top" src="{{ URL::asset('build/images/light-box/l3.jpg') }}"
                            alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This card has even
                                longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <h5>Horizontal</h5>
            <hr />
            <div class="pc-component">
                <div class="card overflow-hidden">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ URL::asset('build/images/light-box/l3.jpg') }}" class="img-fluid rounded-md-start"
                                alt="..." />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                    to additional content. This content is a
                                    little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ card ] end -->
    </div>
    <!-- [ Main Content ] end -->
@endsection

@section('scripts')
@endsection
