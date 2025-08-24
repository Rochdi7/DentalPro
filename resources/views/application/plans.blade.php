@extends('layouts.main')

@section('title', 'Plans')
@section('breadcrumb-item', 'Ui kit')

@section('breadcrumb-item-active', 'Plans')
@section('css')
    <!-- [Page specific CSS] start -->
    <!-- dropzone css -->
    <link rel="stylesheet" href="{{ URL::asset('build/css/plugins/dropzone.min.css') }}">
    <!-- [Page specific CSS] end -->
@endsection

@section('content')
<!-- [ Main Content ] start -->
<div class="row">
    <!-- [ sample-page ] start -->
    <div class="col-sm-12">
      <div class="row align-items-center justify-content-center mb-4">
        <div class="col-auto">
          <label for="swc-price" class="h4 mb-0">Annual</label>
        </div>
        <div class="col-auto">
          <div class="form-check form-switch p-0 m-0">
            <input class="form-check-input f-20 m-0 postion-relative" type="checkbox" role="switch" id="swc-price" checked />
          </div>
        </div>
        <div class="col-auto">
          <label for="swc-price" class="h4 mb-0">Monthly</label>
        </div>
      </div>
      <div class="collapse multi-collapse" id="pricemonth">
        <div class="row">
          <div class="col-md-6 col-xxl-3">
            <div class="card price-card">
              <div class="card-body price-head bg-light-primary">
                <h5 class="text-primary">Lite</h5>
                <h2 class="price-price text-primary">$0 <span>/month</span></h2>
                <div class="price-icon bg-light-primary">
                  <i class="ph-duotone ph-rocket text-primary"></i>
                </div>
              </div>
              <div class="card-body">
                <ul class="list-unstyled product-list">
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>Free domains</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>CDN Integration</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>Advanced Settings</li>
                  <li>100,000 unique users</li>
                  <li>2000 Items</li>
                  <li>API Access</li>
                  <li>Search Features</li>
                  <li>Editor personalization</li>
                  <li>Upload special sites</li>
                  <li>Advanced Features</li>
                </ul>
                <div class="d-grid">
                  <button class="btn btn-primary">Current Plan</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xxl-3">
            <div class="card price-card">
              <div class="card-body price-head bg-light-secondary">
                <h5 class="text-secondary">Standard</h5>
                <h2 class="price-price text-secondary">$9 <span>/month</span></h2>
                <div class="price-icon bg-light-secondary">
                  <i class="ph-duotone ph-grains text-secondary"></i>
                </div>
              </div>
              <div class="card-body">
                <ul class="list-unstyled product-list">
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>Free domains</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>CDN Integration</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>Advanced Settings</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>100,000 unique users</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>2000 Items</li>
                  <li>API Access</li>
                  <li>Search Features</li>
                  <li>Editor personalization</li>
                  <li>Upload special sites</li>
                  <li>Advanced Features</li>
                </ul>
                <div class="d-grid">
                  <button class="btn btn-outline-secondary">Upgrade Plan</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xxl-3">
            <div class="card price-card">
              <div class="card-body price-head bg-light-secondary">
                <h5 class="text-secondary">Standard</h5>
                <h2 class="price-price text-secondary">$36 <span>/month</span></h2>
                <div class="price-icon bg-light-secondary">
                  <i class="ph-duotone ph-flower-lotus text-secondary"></i>
                </div>
              </div>
              <div class="card-body">
                <ul class="list-unstyled product-list">
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>Free domains</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>CDN Integration</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>Advanced Settings</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>100,000 unique users</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>2000 Items</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>API Access</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>Search Features</li>
                  <li>Editor personalization</li>
                  <li>Upload special sites</li>
                  <li>Advanced Features</li>
                </ul>
                <div class="d-grid">
                  <button class="btn btn-outline-secondary">Upgrade Plan</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xxl-3">
            <div class="card price-card">
              <div class="card-body price-head bg-light-secondary">
                <h5 class="text-secondary">ENTERPRISE</h5>
                <h2 class="price-price text-secondary">$69 <span>/month</span></h2>
                <div class="price-icon bg-light-secondary">
                  <i class="ph-duotone ph-buildings text-secondary"></i>
                </div>
              </div>
              <div class="card-body">
                <ul class="list-unstyled product-list">
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>Free domains</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>CDN Integration</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>Advanced Settings</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>100,000 unique users</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>2000 Items</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>API Access</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>Search Features</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>Editor personalization</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>Upload special sites</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>Advanced Features</li>
                </ul>
                <div class="d-grid">
                  <button class="btn btn-outline-secondary">Upgrade Plan</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="collapse multi-collapse" id="priceyear">
        <div class="row">
          <div class="col-md-6 col-xxl-3">
            <div class="card price-card">
              <div class="card-body price-head bg-light-primary">
                <h5 class="text-primary">Lite</h5>
                <h2 class="price-price text-primary">$120 <span>/year</span></h2>
                <div class="price-icon bg-light-primary">
                  <i class="ph-duotone ph-rocket text-primary"></i>
                </div>
              </div>
              <div class="card-body">
                <ul class="list-unstyled product-list">
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>Free domains</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>CDN Integration</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>Advanced Settings</li>
                  <li>100,000 unique users</li>
                  <li>2000 Items</li>
                  <li>API Access</li>
                  <li>Search Features</li>
                  <li>Editor personalization</li>
                  <li>Upload special sites</li>
                  <li>Advanced Features</li>
                </ul>
                <div class="d-grid">
                  <button class="btn btn-primary">Current Plan</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xxl-3">
            <div class="card price-card">
              <div class="card-body price-head bg-light-secondary">
                <h5 class="text-secondary">Standard</h5>
                <h2 class="price-price text-secondary">$99 <span>/year</span></h2>
                <div class="price-icon bg-light-secondary">
                  <i class="ph-duotone ph-grains text-secondary"></i>
                </div>
              </div>
              <div class="card-body">
                <ul class="list-unstyled product-list">
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>Free domains</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>CDN Integration</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>Advanced Settings</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>100,000 unique users</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>2000 Items</li>
                  <li>API Access</li>
                  <li>Search Features</li>
                  <li>Editor personalization</li>
                  <li>Upload special sites</li>
                  <li>Advanced Features</li>
                </ul>
                <div class="d-grid">
                  <button class="btn btn-outline-secondary">Upgrade Plan</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xxl-3">
            <div class="card price-card">
              <div class="card-body price-head bg-light-secondary">
                <h5 class="text-secondary">Standard</h5>
                <h2 class="price-price text-secondary">$1236 <span>/year</span></h2>
                <div class="price-icon bg-light-secondary">
                  <i class="ph-duotone ph-flower-lotus text-secondary"></i>
                </div>
              </div>
              <div class="card-body">
                <ul class="list-unstyled product-list">
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>Free domains</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>CDN Integration</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>Advanced Settings</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>100,000 unique users</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>2000 Items</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>API Access</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>Search Features</li>
                  <li>Editor personalization</li>
                  <li>Upload special sites</li>
                  <li>Advanced Features</li>
                </ul>
                <div class="d-grid">
                  <button class="btn btn-outline-secondary">Upgrade Plan</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xxl-3">
            <div class="card price-card">
              <div class="card-body price-head bg-light-secondary">
                <h5 class="text-secondary">ENTERPRISE</h5>
                <h2 class="price-price text-secondary">$3469 <span>/year</span></h2>
                <div class="price-icon bg-light-secondary">
                  <i class="ph-duotone ph-buildings text-secondary"></i>
                </div>
              </div>
              <div class="card-body">
                <ul class="list-unstyled product-list">
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>Free domains</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>CDN Integration</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>Advanced Settings</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>100,000 unique users</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>2000 Items</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>API Access</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>Search Features</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>Editor personalization</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>Upload special sites</li>
                  <li class="enable"><i class="ph-duotone ph-check-circle"></i>Advanced Features</li>
                </ul>
                <div class="d-grid">
                  <button class="btn btn-outline-secondary">Upgrade Plan</button>
                </div>
              </div>
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
    <!-- file-upload Js -->
    <script src="{{ URL::asset('build/js/plugins/dropzone-amd-module.min.js') }}"></script>
    <script>
        const checkbox = document.getElementById('swc-price')
        const pricemonth = new bootstrap.Collapse('#pricemonth');
        const priceyear = new bootstrap.Collapse('#priceyear');

        checkbox.addEventListener('change', (event) => {
            if (event.currentTarget.checked) {
                pricemonth.show();
                priceyear.hide();
            } else {
                priceyear.show();
                pricemonth.hide();
            }
        })
        // const bsCollapse = new bootstrap.Collapse('#pricemonth', {
        //   toggle: false
        // })
        // const collapseElementList = document.querySelectorAll('.collapse')
        // const collapseList = [...collapseElementList].map(collapseEl => new bootstrap.Collapse(collapseEl))
    </script>
    <!-- [Page Specific JS] end -->
@endsection
