@extends('layouts.layout-components')

@section('title', 'Tabs &amp; Pills')
@section('breadcrumb-title', 'Tabs &amp; Pills')
@section('breadcrumb-text', 'Takes the basic nav from above and adds the .nav-tabs class to generate a tabbed
    interface.')

@section('breadcrumb-link', 'https://getbootstrap.com/docs/5.2/components/navs-tabs/')

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
        <!-- [ tabs ] start -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body pc-component">
                    <h5 class="mb-3">Basic Tabs</h5>
                    <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active text-uppercase" id="home-tab" data-bs-toggle="tab" href="#home"
                                role="tab" aria-controls="home" aria-selected="true">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" id="profile-tab" data-bs-toggle="tab" href="#profile"
                                role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" id="contact-tab" data-bs-toggle="tab" href="#contact"
                                role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                scrambled it to make a
                                type specimen book. It has survived not only five centuries, but also the leap into
                                electronic typesetting,
                                remaining essentially unchanged.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <p class="mb-0">It is a long established fact that a reader will be distracted by the readable
                                content of a page when looking at
                                its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                of letters, as
                                opposed to using 'Content here, content here', making it look like readable English. Many
                                desktop publishing
                                packages and web page editors now use Lorem Ipsum as their default model text, and a search
                                for 'lorem ipsum' will
                                uncover many web sites still in their infancy.</p>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the
                                majority have suffered alteration in some
                                form, by injected humour, or words which don't look even slightly believable. If you are
                                going to use a passage of
                                Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of
                                text.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body pc-component">
                    <h5 class="mb-3">Basic Pills</h5>
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home"
                                role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile"
                                role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact"
                                role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                scrambled it to make a
                                type specimen book. It has survived not only five centuries, but also the leap into
                                electronic typesetting,
                                remaining essentially unchanged.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <p class="mb-0">It is a long established fact that a reader will be distracted by the readable
                                content of a page when looking at
                                its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                of letters, as
                                opposed to using 'Content here, content here', making it look like readable English. Many
                                desktop publishing
                                packages and web page editors now use Lorem Ipsum as their default model text, and a search
                                for 'lorem ipsum' will
                                uncover many web sites still in their infancy.</p>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the
                                majority have suffered alteration in some
                                form, by injected humour, or words which don't look even slightly believable. If you are
                                going to use a passage of
                                Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of
                                text.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body pc-component">
                    <h5 class="mb-3">Vertical Pills</h5>
                    <div class="row g-4">
                        <div class="col-md-3 col-sm-12">
                            <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <li><a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                        href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                        aria-selected="true">Home</a></li>
                                <li><a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                        href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                        aria-selected="false">Profile</a></li>
                                <li><a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                        href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                        aria-selected="false">Messages</a></li>
                                <li><a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                        href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                                        aria-selected="false">Settings</a></li>
                            </ul>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab">
                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                        galley of type and
                                        scrambled it to make a type specimen book. It has survived not only five centuries,
                                        but also the leap into
                                        electronic typesetting, remaining essentially unchanged.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                    aria-labelledby="v-pills-profile-tab">
                                    <p class="mb-0">It is a long established fact that a reader will be distracted by the
                                        readable content of a page when looking
                                        at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                                        distribution of letters, as
                                        opposed to using 'Content here, content here', making it look like readable English.
                                        Many desktop publishing
                                        packages and web page editors now use Lorem Ipsum as their default model text, and a
                                        search for 'lorem ipsum'
                                        will uncover many web sites still in their infancy.</p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                    aria-labelledby="v-pills-messages-tab">
                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                        galley of type and
                                        scrambled it to make a type specimen book. It has survived not only five centuries,
                                        but also the leap into
                                        electronic typesetting, remaining essentially unchanged.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                    aria-labelledby="v-pills-settings-tab">
                                    <p class="mb-0">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in
                                        some form, by injected humour, or words which don't look even slightly believable.
                                        If you are going to use a
                                        passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden
                                        in the middle of text.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ tabs ] end -->
    </div>
    <!-- [ Main Content ] end -->
@endsection

@section('scripts')
@endsection
