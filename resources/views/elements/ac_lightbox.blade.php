@extends('layouts.layout-components')

@section('title', 'Lightbox')
@section('breadcrumb-title', 'Lightbox')
@section('breadcrumb-text', 'Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes')

@section('breadcrumb-link', 'https://getbootstrap.com/docs/5.2/components/modal')

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
        <!-- [ single-light ] start -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>light box</h5>
                </div>
                <div class="card-body">
                    <p> Add this code <code>data-lightbox="example-set"</code> to see road trip gallery in lightbox popup.
                    </p>
                    <div class="row text-center">
                        <div class="col-xl-2 col-lg-3 col-sm-4 col-xs-12">
                            <a data-lightbox="../build/images/light-box/l1.jpg"><img
                                    src="{{ URL::asset('build/images/light-box/sl1.jpg') }}" class="img-fluid m-b-10" alt="" /></a>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-4 col-xs-12">
                            <a data-lightbox="../build/images/light-box/l2.jpg"><img
                                    src="{{ URL::asset('build/images/light-box/sl2.jpg') }}" class="img-fluid m-b-10" alt="" /></a>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-4 col-xs-12">
                            <a data-lightbox="../build/images/light-box/l3.jpg"><img
                                    src="{{ URL::asset('build/images/light-box/sl3.jpg') }}" class="img-fluid m-b-10" alt="" /></a>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-4 col-xs-12">
                            <a data-lightbox="../build/images/light-box/l4.jpg"><img
                                    src="{{ URL::asset('build/images/light-box/sl4.jpg') }}" class="img-fluid m-b-10" alt="" /></a>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-4 col-xs-12">
                            <a data-lightbox="../build/images/light-box/l5.jpg"><img
                                    src="{{ URL::asset('build/images/light-box/sl5.jpg') }}" class="img-fluid m-b-10" alt="" /></a>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-4 col-xs-12">
                            <a data-lightbox="../build/images/light-box/l6.jpg"><img
                                    src="{{ URL::asset('build/images/light-box/sl6.jpg') }}" class="img-fluid m-b-10" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ multiple-light ] end -->
    </div>
    <div class="modal fade modal-lightbox" id="lightboxModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <img src="{{ URL::asset('build/images/light-box/l1.jpg') }}" alt="images" class="modal-image img-fluid" />
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
@endsection

@section('scripts')
    <!-- [Page Specific JS] start -->
    <script>
        var lightboxModal = new bootstrap.Modal(document.getElementById('lightboxModal'));
        var elem = document.querySelectorAll('[data-lightbox]');
        for (var j = 0; j < elem.length; j++) {
            elem[j].addEventListener('click', function() {
                var images_path = event.target;
                if (images_path.tagName == 'IMG') {
                    images_path = images_path.parentNode;
                }
                var recipient = images_path.getAttribute('data-lightbox');
                var image = document.querySelector('.modal-image');
                image.setAttribute('src', recipient);
                lightboxModal.show();
            });
        }

        function removeClassByPrefix(node, prefix) {
            for (let i = 0; i < node.classList.length; i++) {
                let value = node.classList[i];
                if (value.startsWith(prefix)) {
                    node.classList.remove(value);
                }
            }
        }
    </script>
    <!-- [Page Specific JS] end -->
@endsection
