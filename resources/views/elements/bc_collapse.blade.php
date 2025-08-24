@extends('layouts.layout-components')

@section('title', 'Collapse')
@section('breadcrumb-title', 'Collapse')
@section('breadcrumb-text', 'Toggle the visibility of content across your project with a few classes and our JavaScript
    plugins.')

@section('breadcrumb-link', 'https://getbootstrap.com/docs/5.2/components/collapse/')

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
        <!-- [ basic-collapse ] start -->
        <div class="col-sm-12">
            <h5 class="mb-3">Basic Collapse</h5>
            <hr />
            <div class="pc-component">
                <div class="card">
                    <div class="card-header border-bottom-0">
                        <a class="btn btn-primary m-t-5" data-bs-toggle="collapse" href="#collapseExample" role="button"
                            aria-expanded="false" aria-controls="collapseExample">Link with href</a>
                        <button class="btn btn-primary m-t-5" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Button
                            with data-bs-target</button>
                    </div>
                    <div class="collapse" id="collapseExample">
                        <div class="card-body border-top">
                            <p class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                richardson ad squid. Nihil anim
                                keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ basic-collapse ] end -->
        <!-- [ multiple-collapse ] start -->
        <div class="col-sm-12 mb-3">
            <h5 class="mb-3">Multiple Targets</h5>
            <hr />
            <div class="pc-component">
                <a class="btn mb-1 btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button"
                    aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
                <button class="btn mb-1 btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#multiCollapseExample2" aria-expanded="false"
                    aria-controls="multiCollapseExample2">Toggle second element</button>
                <button class="btn mb-1 btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target=".multi-collapse" aria-expanded="false"
                    aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="collapse multi-collapse mt-2" id="multiCollapseExample1">
                            <div class="card">
                                <div class="card-body">
                                    <p class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                        terry richardson ad squid. Nihil anim
                                        keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                        proident.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="collapse multi-collapse mt-2" id="multiCollapseExample2">
                            <div class="card">
                                <div class="card-body">
                                    <p class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                        terry richardson ad squid. Nihil anim
                                        keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                        proident.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ multiple-collapse ] end -->
        <!-- [ accordion-collapse ] start -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Accordion</h5>
                </div>
                <div class="card-body pc-component">
                    <div class="accordion card" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is hidden by default, until
                                    the collapse plugin
                                    adds the appropriate classes that we use to style each element. These classes control
                                    the overall appearance, as
                                    well as the showing and hiding via CSS transitions. You can modify any of this with
                                    custom CSS or overriding our
                                    default variables. It's also worth noting that just about any HTML can go within the
                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin
                                    adds the appropriate classes that we use to style each element. These classes control
                                    the overall appearance, as
                                    well as the showing and hiding via CSS transitions. You can modify any of this with
                                    custom CSS or overriding our
                                    default variables. It's also worth noting that just about any HTML can go within the
                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until
                                    the collapse plugin
                                    adds the appropriate classes that we use to style each element. These classes control
                                    the overall appearance, as
                                    well as the showing and hiding via CSS transitions. You can modify any of this with
                                    custom CSS or overriding our
                                    default variables. It's also worth noting that just about any HTML can go within the
                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h5 class="mt-5 mb-3">Accordion Flush</h5>
            <hr />
            <div class="card">
                <div class="card-body pc-component">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                    accusamus terry richardson ad squid. 3 wolf moon
                                    officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                    eiusmod. Brunch 3 wolf
                                    moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                    shoreditch et. Nihil anim
                                    keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                    Ad vegan excepteur
                                    butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                    nesciunt you probably
                                    haven't heard of them accusamus labore sustainable VHS.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                    accusamus terry richardson ad squid. 3 wolf moon
                                    officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                    eiusmod. Brunch 3 wolf
                                    moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                    shoreditch et. Nihil anim
                                    keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                    Ad vegan excepteur
                                    butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                    nesciunt you probably
                                    haven't heard of them accusamus labore sustainable VHS.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                    accusamus terry richardson ad squid. 3 wolf moon
                                    officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                    eiusmod. Brunch 3 wolf
                                    moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                    shoreditch et. Nihil anim
                                    keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                    Ad vegan excepteur
                                    butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                    nesciunt you probably
                                    haven't heard of them accusamus labore sustainable VHS.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ accordion-collapse ] end -->
    </div>
    <!-- [ Main Content ] end -->
@endsection

@section('scripts')
@endsection
