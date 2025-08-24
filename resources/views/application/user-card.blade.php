@extends('layouts.main')

@section('title', 'Customer List')
@section('breadcrumb-item', 'Profile')

@section('breadcrumb-item-active', 'User Card')

@section('css')
@endsection

@section('content')
<!-- [ Main Content ] start -->
<div class="row">
  <!-- [ sample-page ] start -->
  <div class="col-md-6 col-xl-4">
    <div class="card user-card">
      <div class="card-body">
        <div class="user-cover-bg">
          <img src="{{ URL::asset('build/images/application/img-user-cover-1.jpg') }}" alt="image" class="img-fluid" />
          <div class="cover-data">
            <div class="d-inline-flex align-items-center">
              <i class="ph-duotone ph-star text-warning me-1"></i>
              4.5 <small class="text-white text-opacity-50">/ 5</small>
            </div>
          </div>
        </div>
        <div class="chat-avtar card-user-image">
          <img src="{{ URL::asset('build/images/user/avatar-1.jpg') }}" alt="user-image" class="img-thumbnail rounded-circle" />
          <i class="chat-badge bg-success"></i>
        </div>
        <div class="d-flex">
          <div class="flex-grow-1 ms-2">
            <h6 class="mb-1">William Bond</h6>
            <p class="text-muted text-sm mb-0">DM on <a href="#" class="text-primary">@williambond</a></p>
          </div>
          <div class="flex-shrink-0">
            <button class="btn btn-primary btn-sm">Message</button>
            <button class="btn btn-outline-secondary btn-sm ms-1">Follow</button>
          </div>
        </div>
        <div class="row g-3 my-2 text-center">
          <div class="col-4">
            <h5 class="mb-0">86</h5>
            <small class="text-muted">Post</small>
          </div>
          <div class="col-4 border border-top-0 border-bottom-0">
            <h5 class="mb-0">40</h5>
            <small class="text-muted">Project</small>
          </div>
          <div class="col-4">
            <h5 class="mb-0">4.5K</h5>
            <small class="text-muted">Members</small>
          </div>
        </div>
        <div class="saprator my-2">
          <span>Skills</span>
        </div>
        <div class="text-center">
          <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">UX</span>
          <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">Figma</span>
          <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">Backend</span>
        </div>
        <div class="saprator my-2">
          <span>Task completed</span>
        </div>
        <div class="d-flex align-items-center">
          <div class="flex-grow-1 me-2">
            <div class="progress" style="height: 8px">
              <div class="progress-bar bg-danger" style="width: 30%"></div>
            </div>
          </div>
          <div class="flex-shrink-0">
            <h6 class="mb-0">30%</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xl-4">
    <div class="card user-card">
      <div class="card-body">
        <div class="user-cover-bg">
          <img src="{{ URL::asset('build/images/application/img-user-cover-2.jpg') }}" alt="image" class="img-fluid" />
          <div class="cover-data">
            <div class="d-inline-flex align-items-center">
              <i class="ph-duotone ph-star text-warning me-1"></i>
              4.5 <small class="text-white text-opacity-50">/ 5</small>
            </div>
          </div>
        </div>
        <div class="chat-avtar card-user-image">
          <img src="{{ URL::asset('build/images/user/avatar-2.jpg') }}" alt="user-image" class="img-thumbnail rounded-circle" />
          <i class="chat-badge bg-danger"></i>
        </div>
        <div class="d-flex">
          <div class="flex-grow-1 ms-2">
            <h6 class="mb-1">William Bond</h6>
            <p class="text-muted text-sm mb-0">DM on <a href="#" class="text-primary">@williambond</a></p>
          </div>
          <div class="flex-shrink-0">
            <button class="btn btn-primary btn-sm">Message</button>
            <button class="btn btn-outline-secondary btn-sm ms-1">Follow</button>
          </div>
        </div>
        <div class="row g-3 my-2 text-center">
          <div class="col-4">
            <h5 class="mb-0">86</h5>
            <small class="text-muted">Post</small>
          </div>
          <div class="col-4 border border-top-0 border-bottom-0">
            <h5 class="mb-0">40</h5>
            <small class="text-muted">Project</small>
          </div>
          <div class="col-4">
            <h5 class="mb-0">4.5K</h5>
            <small class="text-muted">Members</small>
          </div>
        </div>
        <div class="saprator my-2">
          <span>Skills</span>
        </div>
        <div class="text-center">
          <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">UX</span>
          <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">Figma</span>
          <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">Backend</span>
        </div>
        <div class="saprator my-2">
          <span>Task completed</span>
        </div>
        <div class="d-flex align-items-center">
          <div class="flex-grow-1 me-2">
            <div class="progress" style="height: 8px">
              <div class="progress-bar bg-primary" style="width: 60%"></div>
            </div>
          </div>
          <div class="flex-shrink-0">
            <h6 class="mb-0">60%</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xl-4">
    <div class="card user-card">
      <div class="card-body">
        <div class="user-cover-bg">
          <img src="{{ URL::asset('build/images/application/img-user-cover-3.jpg') }}" alt="image" class="img-fluid" />
          <div class="cover-data">
            <div class="d-inline-flex align-items-center">
              <i class="ph-duotone ph-star text-warning me-1"></i>
              4.5 <small class="text-white text-opacity-50">/ 5</small>
            </div>
          </div>
        </div>
        <div class="chat-avtar card-user-image">
          <img src="{{ URL::asset('build/images/user/avatar-3.jpg') }}" alt="user-image" class="img-thumbnail rounded-circle" />
          <i class="chat-badge bg-success"></i>
        </div>
        <div class="d-flex">
          <div class="flex-grow-1 ms-2">
            <h6 class="mb-1">William Bond</h6>
            <p class="text-muted text-sm mb-0">DM on <a href="#" class="text-primary">@williambond</a></p>
          </div>
          <div class="flex-shrink-0">
            <button class="btn btn-primary btn-sm">Message</button>
            <button class="btn btn-outline-secondary btn-sm ms-1">Follow</button>
          </div>
        </div>
        <div class="row g-3 my-2 text-center">
          <div class="col-4">
            <h5 class="mb-0">86</h5>
            <small class="text-muted">Post</small>
          </div>
          <div class="col-4 border border-top-0 border-bottom-0">
            <h5 class="mb-0">40</h5>
            <small class="text-muted">Project</small>
          </div>
          <div class="col-4">
            <h5 class="mb-0">4.5K</h5>
            <small class="text-muted">Members</small>
          </div>
        </div>
        <div class="saprator my-2">
          <span>Skills</span>
        </div>
        <div class="text-center">
          <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">UX</span>
          <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">Figma</span>
          <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">Backend</span>
        </div>
        <div class="saprator my-2">
          <span>Task completed</span>
        </div>
        <div class="d-flex align-items-center">
          <div class="flex-grow-1 me-2">
            <div class="progress" style="height: 8px">
              <div class="progress-bar bg-success" style="width: 90%"></div>
            </div>
          </div>
          <div class="flex-shrink-0">
            <h6 class="mb-0">90%</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xl-4">
    <div class="card user-card">
      <div class="card-body">
        <div class="user-cover-bg">
          <img src="{{ URL::asset('build/images/application/img-user-cover-4.jpg') }}" alt="image" class="img-fluid" />
          <div class="cover-data">
            <div class="d-inline-flex align-items-center">
              <i class="ph-duotone ph-star text-warning me-1"></i>
              4.5 <small class="text-white text-opacity-50">/ 5</small>
            </div>
          </div>
        </div>
        <div class="chat-avtar card-user-image">
          <img src="{{ URL::asset('build/images/user/avatar-4.jpg') }}" alt="user-image" class="img-thumbnail rounded-circle" />
          <i class="chat-badge bg-danger"></i>
        </div>
        <div class="d-flex">
          <div class="flex-grow-1 ms-2">
            <h6 class="mb-1">William Bond</h6>
            <p class="text-muted text-sm mb-0">DM on <a href="#" class="text-primary">@williambond</a></p>
          </div>
          <div class="flex-shrink-0">
            <button class="btn btn-primary btn-sm">Message</button>
            <button class="btn btn-outline-secondary btn-sm ms-1">Follow</button>
          </div>
        </div>
        <div class="row g-3 my-2 text-center">
          <div class="col-4">
            <h5 class="mb-0">86</h5>
            <small class="text-muted">Post</small>
          </div>
          <div class="col-4 border border-top-0 border-bottom-0">
            <h5 class="mb-0">40</h5>
            <small class="text-muted">Project</small>
          </div>
          <div class="col-4">
            <h5 class="mb-0">4.5K</h5>
            <small class="text-muted">Members</small>
          </div>
        </div>
        <div class="saprator my-2">
          <span>Skills</span>
        </div>
        <div class="text-center">
          <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">UX</span>
          <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">Figma</span>
          <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">Backend</span>
        </div>
        <div class="saprator my-2">
          <span>Task completed</span>
        </div>
        <div class="d-flex align-items-center">
          <div class="flex-grow-1 me-2">
            <div class="progress" style="height: 8px">
              <div class="progress-bar bg-warning" style="width: 40%"></div>
            </div>
          </div>
          <div class="flex-shrink-0">
            <h6 class="mb-0">40%</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xl-4">
    <div class="card user-card">
      <div class="card-body">
        <div class="user-cover-bg">
          <img src="{{ URL::asset('build/images/application/img-user-cover-5.jpg') }}" alt="image" class="img-fluid" />
          <div class="cover-data">
            <div class="d-inline-flex align-items-center">
              <i class="ph-duotone ph-star text-warning me-1"></i>
              4.5 <small class="text-white text-opacity-50">/ 5</small>
            </div>
          </div>
        </div>
        <div class="chat-avtar card-user-image">
          <img src="{{ URL::asset('build/images/user/avatar-5.jpg') }}" alt="user-image" class="img-thumbnail rounded-circle" />
          <i class="chat-badge bg-success"></i>
        </div>
        <div class="d-flex">
          <div class="flex-grow-1 ms-2">
            <h6 class="mb-1">William Bond</h6>
            <p class="text-muted text-sm mb-0">DM on <a href="#" class="text-primary">@williambond</a></p>
          </div>
          <div class="flex-shrink-0">
            <button class="btn btn-primary btn-sm">Message</button>
            <button class="btn btn-outline-secondary btn-sm ms-1">Follow</button>
          </div>
        </div>
        <div class="row g-3 my-2 text-center">
          <div class="col-4">
            <h5 class="mb-0">86</h5>
            <small class="text-muted">Post</small>
          </div>
          <div class="col-4 border border-top-0 border-bottom-0">
            <h5 class="mb-0">40</h5>
            <small class="text-muted">Project</small>
          </div>
          <div class="col-4">
            <h5 class="mb-0">4.5K</h5>
            <small class="text-muted">Members</small>
          </div>
        </div>
        <div class="saprator my-2">
          <span>Skills</span>
        </div>
        <div class="text-center">
          <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">UX</span>
          <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">Figma</span>
          <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">Backend</span>
        </div>
        <div class="saprator my-2">
          <span>Task completed</span>
        </div>
        <div class="d-flex align-items-center">
          <div class="flex-grow-1 me-2">
            <div class="progress" style="height: 8px">
              <div class="progress-bar bg-success" style="width: 90%"></div>
            </div>
          </div>
          <div class="flex-shrink-0">
            <h6 class="mb-0">90%</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xl-4">
    <div class="card user-card">
      <div class="card-body">
        <div class="user-cover-bg">
          <img src="{{ URL::asset('build/images/application/img-user-cover-6.jpg') }}" alt="image" class="img-fluid" />
          <div class="cover-data">
            <div class="d-inline-flex align-items-center">
              <i class="ph-duotone ph-star text-warning me-1"></i>
              4.5 <small class="text-white text-opacity-50">/ 5</small>
            </div>
          </div>
        </div>
        <div class="chat-avtar card-user-image">
          <img src="{{ URL::asset('build/images/user/avatar-1.jpg') }}" alt="user-image" class="img-thumbnail rounded-circle" />
          <i class="chat-badge bg-danger"></i>
        </div>
        <div class="d-flex">
          <div class="flex-grow-1 ms-2">
            <h6 class="mb-1">William Bond</h6>
            <p class="text-muted text-sm mb-0">DM on <a href="#" class="text-primary">@williambond</a></p>
          </div>
          <div class="flex-shrink-0">
            <button class="btn btn-primary btn-sm">Message</button>
            <button class="btn btn-outline-secondary btn-sm ms-1">Follow</button>
          </div>
        </div>
        <div class="row g-3 my-2 text-center">
          <div class="col-4">
            <h5 class="mb-0">86</h5>
            <small class="text-muted">Post</small>
          </div>
          <div class="col-4 border border-top-0 border-bottom-0">
            <h5 class="mb-0">40</h5>
            <small class="text-muted">Project</small>
          </div>
          <div class="col-4">
            <h5 class="mb-0">4.5K</h5>
            <small class="text-muted">Members</small>
          </div>
        </div>
        <div class="saprator my-2">
          <span>Skills</span>
        </div>
        <div class="text-center">
          <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">UX</span>
          <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">Figma</span>
          <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">Backend</span>
        </div>
        <div class="saprator my-2">
          <span>Task completed</span>
        </div>
        <div class="d-flex align-items-center">
          <div class="flex-grow-1 me-2">
            <div class="progress" style="height: 8px">
              <div class="progress-bar bg-primary" style="width: 60%"></div>
            </div>
          </div>
          <div class="flex-shrink-0">
            <h6 class="mb-0">60%</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xl-4">
    <div class="card user-card">
      <div class="card-body">
        <div class="user-cover-bg">
          <img src="{{ URL::asset('build/images/application/img-user-cover-7.jpg') }}" alt="image" class="img-fluid" />
          <div class="cover-data">
            <div class="d-inline-flex align-items-center">
              <i class="ph-duotone ph-star text-warning me-1"></i>
              4.5 <small class="text-white text-opacity-50">/ 5</small>
            </div>
          </div>
        </div>
        <div class="chat-avtar card-user-image">
          <img src="{{ URL::asset('build/images/user/avatar-3.jpg') }}" alt="user-image" class="img-thumbnail rounded-circle" />
          <i class="chat-badge bg-success"></i>
        </div>
        <div class="d-flex">
          <div class="flex-grow-1 ms-2">
            <h6 class="mb-1">William Bond</h6>
            <p class="text-muted text-sm mb-0">DM on <a href="#" class="text-primary">@williambond</a></p>
          </div>
          <div class="flex-shrink-0">
            <button class="btn btn-primary btn-sm">Message</button>
            <button class="btn btn-outline-secondary btn-sm ms-1">Follow</button>
          </div>
        </div>
        <div class="row g-3 my-2 text-center">
          <div class="col-4">
            <h5 class="mb-0">86</h5>
            <small class="text-muted">Post</small>
          </div>
          <div class="col-4 border border-top-0 border-bottom-0">
            <h5 class="mb-0">40</h5>
            <small class="text-muted">Project</small>
          </div>
          <div class="col-4">
            <h5 class="mb-0">4.5K</h5>
            <small class="text-muted">Members</small>
          </div>
        </div>
        <div class="saprator my-2">
          <span>Skills</span>
        </div>
        <div class="text-center">
          <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">UX</span>
          <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">Figma</span>
          <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">Backend</span>
        </div>
        <div class="saprator my-2">
          <span>Task completed</span>
        </div>
        <div class="d-flex align-items-center">
          <div class="flex-grow-1 me-2">
            <div class="progress" style="height: 8px">
              <div class="progress-bar bg-success" style="width: 90%"></div>
            </div>
          </div>
          <div class="flex-shrink-0">
            <h6 class="mb-0">90%</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xl-4">
    <div class="card user-card">
      <div class="card-body">
        <div class="user-cover-bg">
          <img src="{{ URL::asset('build/images/application/img-user-cover-8.jpg') }}" alt="image" class="img-fluid" />
          <div class="cover-data">
            <div class="d-inline-flex align-items-center">
              <i class="ph-duotone ph-star text-warning me-1"></i>
              4.5 <small class="text-white text-opacity-50">/ 5</small>
            </div>
          </div>
        </div>
        <div class="chat-avtar card-user-image">
          <img src="{{ URL::asset('build/images/user/avatar-1.jpg') }}" alt="user-image" class="img-thumbnail rounded-circle" />
          <i class="chat-badge bg-danger"></i>
        </div>
        <div class="d-flex">
          <div class="flex-grow-1 ms-2">
            <h6 class="mb-1">William Bond</h6>
            <p class="text-muted text-sm mb-0">DM on <a href="#" class="text-primary">@williambond</a></p>
          </div>
          <div class="flex-shrink-0">
            <button class="btn btn-primary btn-sm">Message</button>
            <button class="btn btn-outline-secondary btn-sm ms-1">Follow</button>
          </div>
        </div>
        <div class="row g-3 my-2 text-center">
          <div class="col-4">
            <h5 class="mb-0">86</h5>
            <small class="text-muted">Post</small>
          </div>
          <div class="col-4 border border-top-0 border-bottom-0">
            <h5 class="mb-0">40</h5>
            <small class="text-muted">Project</small>
          </div>
          <div class="col-4">
            <h5 class="mb-0">4.5K</h5>
            <small class="text-muted">Members</small>
          </div>
        </div>
        <div class="saprator my-2">
          <span>Skills</span>
        </div>
        <div class="text-center">
          <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">UX</span>
          <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">Figma</span>
          <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">Backend</span>
        </div>
        <div class="saprator my-2">
          <span>Task completed</span>
        </div>
        <div class="d-flex align-items-center">
          <div class="flex-grow-1 me-2">
            <div class="progress" style="height: 8px">
              <div class="progress-bar bg-warning" style="width: 40%"></div>
            </div>
          </div>
          <div class="flex-shrink-0">
            <h6 class="mb-0">40%</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xl-4">
    <div class="card user-card">
      <div class="card-body">
        <div class="user-cover-bg">
          <img src="{{ URL::asset('build/images/application/img-user-cover-9.jpg') }}" alt="image" class="img-fluid" />
          <div class="cover-data">
            <div class="d-inline-flex align-items-center">
              <i class="ph-duotone ph-star text-warning me-1"></i>
              4.5 <small class="text-white text-opacity-50">/ 5</small>
            </div>
          </div>
        </div>
        <div class="chat-avtar card-user-image">
          <img src="{{ URL::asset('build/images/user/avatar-5.jpg') }}" alt="user-image" class="img-thumbnail rounded-circle" />
          <i class="chat-badge bg-success"></i>
        </div>
        <div class="d-flex">
          <div class="flex-grow-1 ms-2">
            <h6 class="mb-1">William Bond</h6>
            <p class="text-muted text-sm mb-0">DM on <a href="#" class="text-primary">@williambond</a></p>
          </div>
          <div class="flex-shrink-0">
            <button class="btn btn-primary btn-sm">Message</button>
            <button class="btn btn-outline-secondary btn-sm ms-1">Follow</button>
          </div>
        </div>
        <div class="row g-3 my-2 text-center">
          <div class="col-4">
            <h5 class="mb-0">86</h5>
            <small class="text-muted">Post</small>
          </div>
          <div class="col-4 border border-top-0 border-bottom-0">
            <h5 class="mb-0">40</h5>
            <small class="text-muted">Project</small>
          </div>
          <div class="col-4">
            <h5 class="mb-0">4.5K</h5>
            <small class="text-muted">Members</small>
          </div>
        </div>
        <div class="saprator my-2">
          <span>Skills</span>
        </div>
        <div class="text-center">
          <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">UX</span>
          <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">Figma</span>
          <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">Backend</span>
        </div>
        <div class="saprator my-2">
          <span>Task completed</span>
        </div>
        <div class="d-flex align-items-center">
          <div class="flex-grow-1 me-2">
            <div class="progress" style="height: 8px">
              <div class="progress-bar bg-success" style="width: 90%"></div>
            </div>
          </div>
          <div class="flex-shrink-0">
            <h6 class="mb-0">90%</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- [ sample-page ] end -->
</div>
<!-- [ Main Content ] end -->
@endsection