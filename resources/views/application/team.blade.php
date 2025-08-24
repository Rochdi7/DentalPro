@extends('layouts.main')

@section('title', 'Team')
@section('breadcrumb-item', 'Application')

@section('breadcrumb-item-active', 'Team')
@section('css')
    <!-- [Page specific CSS] start -->
    <link rel="stylesheet" href="{{ URL::asset('build/css/plugins/style.css') }}">
    <!-- [Page specific CSS] end -->
@endsection

@section('content')
  <!-- [ Main Content ] start -->
  <div class="row">
    <!-- [ sample-page ] start -->
    <div class="col-sm-12">
      <div class="card table-card">
        <div class="card-body p-4">
          <div class="mb-3 row">
            <label class="col-form-label col-sm-3 text-sm-end">Team name</label>
            <div class="col-lg-6 col-sm-8">
              <input type="text" class="form-control" placeholder="Enter team name" />
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-form-label col-sm-3 text-sm-end">Team Email ID</label>
            <div class="col-lg-6 col-sm-8">
              <input type="email" class="form-control" placeholder="Enter email id" />
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-form-label col-sm-3 text-sm-end">Organization</label>
            <div class="col-lg-6 col-sm-8">
              <select class="form-select" aria-label="Default select example">
                <option>Select Organization</option>
                <option>SR.Pvt.Ltd</option>
                <option>JCBK.Pvt.Ltd</option>
                <option>SMT.Pvt.Ltd</option>
                <option>DDMS.Pvt.Ltd</option>
              </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-form-label col-sm-3 text-sm-end">Location</label>
            <div class="col-lg-6 col-sm-8">
              <select class="form-select" aria-label="Default select example">
                <option>Select Location</option>
                <option>India</option>
                <option>Australia</option>
                <option>Indonasia</option>
                <option>Malaysia</option>
              </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-form-label col-sm-3 text-sm-end">Team Member</label>
            <div class="col-lg-6 col-sm-8">
              <select class="form-select" multiple>
                <option>Select Team Member</option>
                <option>user One</option>
                <option>user Two</option>
                <option>user Three</option>
                <option>user Four</option>
                <option>user Five</option>
                <option>user Six</option>
              </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-form-label col-sm-3 text-sm-end">Team leader</label>
            <div class="col-lg-6 col-sm-8">
              <select class="form-select" aria-label="Default select example">
                <option>Select Team leader</option>
                <option>user One</option>
                <option>user Two</option>
                <option>user Three</option>
              </select>
            </div>
          </div>
          <div class="row mb-0">
            <span class="col-form-label col-sm-3 text-sm-end"></span>
            <div class="col-lg-6 col-sm-8">
              <button class="btn btn-primary me-2">Create Team</button>
              <button class="btn btn-outline-secondary">Cancel</button>
            </div>
          </div>
        </div>
        <div class="card-body table-card">
          <table class="table tbl-product" id="pc-dt-simple">
            <thead>
              <tr>
                <th class="text-end">#</th>
                <th>Name</th>
                <th>Organization</th>
                <th>Team Leader</th>
                <th>Members</th>
                <th>Location</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-end">1</td>
                <td>
                  <div class="row">
                    <div class="col-auto pe-0">
                      <div class="avtar avtar-s btn-light-primary">
                        <i class="ph-duotone ph-paint-brush f-18"></i>
                      </div>
                    </div>
                    <div class="col">
                      <h6 class="mb-1">Design</h6>
                      <a class="text-muted f-12 text-hover-primary" href="mailto:demo@mail.com">Carson_Darrin@domain.com</a>
                    </div>
                  </div>
                </td>
                <td><a class="text-muted text-hover-primary" href="#">SR.Pvt.Ltd</a></td>
                <td>
                  <div class="row align-items-center">
                    <div class="col-auto pe-0">
                      <img src="{{ URL::asset('build/images/user/avatar-2.jpg') }}" alt="user-image" class="wid-40 rounded" />
                    </div>
                    <div class="col">
                      <h6 class="mb-0">Carson Darrin</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="user-group">
                    <img
                      src="{{ URL::asset('build/images/user/avatar-4.jpg') }}"
                      alt="user-image"
                      class="avtar"
                      data-bs-toggle="tooltip"
                      data-bs-title="John Doe"
                    />
                    <img
                      src="{{ URL::asset('build/images/user/avatar-6.jpg') }}"
                      alt="user-image"
                      class="avtar"
                      data-bs-toggle="tooltip"
                      data-bs-title="Keefs"
                    />
                    <img
                      src="{{ URL::asset('build/images/user/avatar-7.jpg') }}"
                      alt="user-image"
                      class="avtar"
                      data-bs-toggle="tooltip"
                      data-bs-title="Lazaro"
                    />
                    <img
                      src="{{ URL::asset('build/images/user/avatar-8.jpg') }}"
                      alt="user-image"
                      class="avtar"
                      data-bs-toggle="tooltip"
                      data-bs-title="Adeline"
                    />
                    <span class="avtar rounded-circle bg-light-primary text-primary">+1</span>
                  </div>
                </td>
                <td>
                  <span>India</span>
                  <div class="prod-action-links">
                    <ul class="list-inline me-auto mb-0">
                      <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="View">
                        <a
                          href="#"
                          class="avtar avtar-xs btn-link-warning btn-pc-default"
                          data-bs-toggle="offcanvas"
                          data-bs-target="#productOffcanvas"
                        >
                          <i class="ti ti-eye f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
                        <a href="#!" class="avtar avtar-xs btn-link-success btn-pc-default">
                          <i class="ti ti-edit-circle f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
                        <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default">
                          <i class="ti ti-trash f-18"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="text-end">2</td>
                <td>
                  <div class="row">
                    <div class="col-auto pe-0">
                      <div class="avtar avtar-s btn-light-success">
                        <i class="ph-duotone ph-buildings f-18"></i>
                      </div>
                    </div>
                    <div class="col">
                      <h6 class="mb-1">Managment</h6>
                      <a class="text-muted f-12 text-hover-primary" href="mailto:demo@mail.com">John_Doe@domain.com</a>
                    </div>
                  </div>
                </td>
                <td><a class="text-muted text-hover-primary" href="#">SMT.Pvt.Ltd</a></td>
                <td>
                  <div class="row align-items-center">
                    <div class="col-auto pe-0">
                      <img src="{{ URL::asset('build/images/user/avatar-8.jpg') }}" alt="user-image" class="wid-40 rounded" />
                    </div>
                    <div class="col">
                      <h6 class="mb-0">John Doe</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="user-group">
                    <img
                      src="{{ URL::asset('build/images/user/avatar-1.jpg') }}"
                      alt="user-image"
                      class="avtar"
                      data-bs-toggle="tooltip"
                      data-bs-title="Carson Darrin"
                    />
                    <img
                      src="{{ URL::asset('build/images/user/avatar-5.jpg') }}"
                      alt="user-image"
                      class="avtar"
                      data-bs-toggle="tooltip"
                      data-bs-title="Lazaro"
                    />
                    <img
                      src="{{ URL::asset('build/images/user/avatar-3.jpg') }}"
                      alt="user-image"
                      class="avtar"
                      data-bs-toggle="tooltip"
                      data-bs-title="Adeline"
                    />
                    <img
                      src="{{ URL::asset('build/images/user/avatar-4.jpg') }}"
                      alt="user-image"
                      class="avtar"
                      data-bs-toggle="tooltip"
                      data-bs-title="Keefs"
                    />
                    <span class="avtar rounded-circle bg-light-primary text-primary">+5</span>
                  </div>
                </td>
                <td>
                  <span>Indonasia</span>
                  <div class="prod-action-links">
                    <ul class="list-inline me-auto mb-0">
                      <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="View">
                        <a
                          href="#"
                          class="avtar avtar-xs btn-link-warning btn-pc-default"
                          data-bs-toggle="offcanvas"
                          data-bs-target="#productOffcanvas"
                        >
                          <i class="ti ti-eye f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
                        <a href="#!" class="avtar avtar-xs btn-link-success btn-pc-default">
                          <i class="ti ti-edit-circle f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
                        <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default">
                          <i class="ti ti-trash f-18"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="text-end">3</td>
                <td>
                  <div class="row">
                    <div class="col-auto pe-0">
                      <div class="avtar avtar-s btn-light-warning">
                        <i class="ph-duotone ph-devices f-18"></i>
                      </div>
                    </div>
                    <div class="col">
                      <h6 class="mb-1">Production</h6>
                      <a class="text-muted f-12 text-hover-primary" href="mailto:demo@mail.com">Adeline@domain.com</a>
                    </div>
                  </div>
                </td>
                <td><a class="text-muted text-hover-primary" href="#">JCBK.Pvt.Ltd</a></td>
                <td>
                  <div class="row align-items-center">
                    <div class="col-auto pe-0">
                      <img src="{{ URL::asset('build/images/user/avatar-3.jpg') }}" alt="user-image" class="wid-40 rounded" />
                    </div>
                    <div class="col">
                      <h6 class="mb-0">Adeline</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="user-group">
                    <img
                      src="{{ URL::asset('build/images/user/avatar-6.jpg') }}"
                      alt="user-image"
                      class="avtar"
                      data-bs-toggle="tooltip"
                      data-bs-title="Keefs"
                    />
                    <img
                      src="{{ URL::asset('build/images/user/avatar-4.jpg') }}"
                      alt="user-image"
                      class="avtar"
                      data-bs-toggle="tooltip"
                      data-bs-title="John Doe"
                    />
                    <img
                      src="{{ URL::asset('build/images/user/avatar-1.jpg') }}"
                      alt="user-image"
                      class="avtar"
                      data-bs-toggle="tooltip"
                      data-bs-title="Carson Darrin"
                    />
                    <img
                      src="{{ URL::asset('build/images/user/avatar-7.jpg') }}"
                      alt="user-image"
                      class="avtar"
                      data-bs-toggle="tooltip"
                      data-bs-title="Lazaro"
                    />
                  </div>
                </td>
                <td>
                  <span>Malaysia</span>
                  <div class="prod-action-links">
                    <ul class="list-inline me-auto mb-0">
                      <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="View">
                        <a
                          href="#"
                          class="avtar avtar-xs btn-link-warning btn-pc-default"
                          data-bs-toggle="offcanvas"
                          data-bs-target="#productOffcanvas"
                        >
                          <i class="ti ti-eye f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
                        <a href="#!" class="avtar avtar-xs btn-link-success btn-pc-default">
                          <i class="ti ti-edit-circle f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
                        <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default">
                          <i class="ti ti-trash f-18"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="text-end">4</td>
                <td>
                  <div class="row">
                    <div class="col-auto pe-0">
                      <div class="avtar avtar-s btn-light-danger">
                        <i class="ph-duotone ph-gear-fine f-18"></i>
                      </div>
                    </div>
                    <div class="col">
                      <h6 class="mb-1">Service</h6>
                      <a class="text-muted f-12 text-hover-primary" href="mailto:demo@mail.com">Lazaro@domain.com</a>
                    </div>
                  </div>
                </td>
                <td><a class="text-muted text-hover-primary" href="#">DDMS.Pvt.Ltd</a></td>
                <td>
                  <div class="row align-items-center">
                    <div class="col-auto pe-0">
                      <img src="{{ URL::asset('build/images/user/avatar-6.jpg') }}" alt="user-image" class="wid-40 rounded" />
                    </div>
                    <div class="col">
                      <h6 class="mb-0">Lazaro</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="user-group">
                    <img
                      src="{{ URL::asset('build/images/user/avatar-7.jpg') }}"
                      alt="user-image"
                      class="avtar"
                      data-bs-toggle="tooltip"
                      data-bs-title="Carson Darrin"
                    />
                    <img
                      src="{{ URL::asset('build/images/user/avatar-9.jpg') }}"
                      alt="user-image"
                      class="avtar"
                      data-bs-toggle="tooltip"
                      data-bs-title="Adeline"
                    />
                    <img
                      src="{{ URL::asset('build/images/user/avatar-1.jpg') }}"
                      alt="user-image"
                      class="avtar"
                      data-bs-toggle="tooltip"
                      data-bs-title="John Doe"
                    />
                  </div>
                </td>
                <td>
                  <span>Australia</span>
                  <div class="prod-action-links">
                    <ul class="list-inline me-auto mb-0">
                      <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="View">
                        <a
                          href="#"
                          class="avtar avtar-xs btn-link-warning btn-pc-default"
                          data-bs-toggle="offcanvas"
                          data-bs-target="#productOffcanvas"
                        >
                          <i class="ti ti-eye f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
                        <a href="#!" class="avtar avtar-xs btn-link-success btn-pc-default">
                          <i class="ti ti-edit-circle f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
                        <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default">
                          <i class="ti ti-trash f-18"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="text-end">5</td>
                <td>
                  <div class="row">
                    <div class="col-auto pe-0">
                      <div class="avtar avtar-s btn-light-primary">
                        <i class="ph-duotone ph-paint-brush f-18"></i>
                      </div>
                    </div>
                    <div class="col">
                      <h6 class="mb-1">Design</h6>
                      <a class="text-muted f-12 text-hover-primary" href="mailto:demo@mail.com">Carson_Darrin@domain.com</a>
                    </div>
                  </div>
                </td>
                <td><a class="text-muted text-hover-primary" href="#">SR.Pvt.Ltd</a></td>
                <td>
                  <div class="row align-items-center">
                    <div class="col-auto pe-0">
                      <img src="{{ URL::asset('build/images/user/avatar-2.jpg') }}" alt="user-image" class="wid-40 rounded" />
                    </div>
                    <div class="col">
                      <h6 class="mb-0">Carson Darrin</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="user-group">
                    <img
                      src="{{ URL::asset('build/images/user/avatar-4.jpg') }}"
                      alt="user-image"
                      class="avtar"
                      data-bs-toggle="tooltip"
                      data-bs-title="John Doe"
                    />
                    <img
                      src="{{ URL::asset('build/images/user/avatar-6.jpg') }}"
                      alt="user-image"
                      class="avtar"
                      data-bs-toggle="tooltip"
                      data-bs-title="Keefs"
                    />
                    <img
                      src="{{ URL::asset('build/images/user/avatar-7.jpg') }}"
                      alt="user-image"
                      class="avtar"
                      data-bs-toggle="tooltip"
                      data-bs-title="Lazaro"
                    />
                    <img
                      src="{{ URL::asset('build/images/user/avatar-8.jpg') }}"
                      alt="user-image"
                      class="avtar"
                      data-bs-toggle="tooltip"
                      data-bs-title="Adeline"
                    />
                    <span class="avtar rounded-circle bg-light-primary text-primary">+1</span>
                  </div>
                </td>
                <td>
                  <span>India</span>
                  <div class="prod-action-links">
                    <ul class="list-inline me-auto mb-0">
                      <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="View">
                        <a
                          href="#"
                          class="avtar avtar-xs btn-link-warning btn-pc-default"
                          data-bs-toggle="offcanvas"
                          data-bs-target="#productOffcanvas"
                        >
                          <i class="ti ti-eye f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
                        <a href="#!" class="avtar avtar-xs btn-link-success btn-pc-default">
                          <i class="ti ti-edit-circle f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
                        <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default">
                          <i class="ti ti-trash f-18"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="text-end">6</td>
                <td>
                  <div class="row">
                    <div class="col-auto pe-0">
                      <div class="avtar avtar-s btn-light-success">
                        <i class="ph-duotone ph-buildings f-18"></i>
                      </div>
                    </div>
                    <div class="col">
                      <h6 class="mb-1">Managment</h6>
                      <a class="text-muted f-12 text-hover-primary" href="mailto:demo@mail.com">John_Doe@domain.com</a>
                    </div>
                  </div>
                </td>
                <td><a class="text-muted text-hover-primary" href="#">SMT.Pvt.Ltd</a></td>
                <td>
                  <div class="row align-items-center">
                    <div class="col-auto pe-0">
                      <img src="{{ URL::asset('build/images/user/avatar-8.jpg') }}" alt="user-image" class="wid-40 rounded" />
                    </div>
                    <div class="col">
                      <h6 class="mb-0">John Doe</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="user-group">
                    <img
                      src="{{ URL::asset('build/images/user/avatar-1.jpg') }}"
                      alt="user-image"
                      class="avtar"
                      data-bs-toggle="tooltip"
                      data-bs-title="Carson Darrin"
                    />
                    <img
                      src="{{ URL::asset('build/images/user/avatar-5.jpg') }}"
                      alt="user-image"
                      class="avtar"
                      data-bs-toggle="tooltip"
                      data-bs-title="Lazaro"
                    />
                    <img
                      src="{{ URL::asset('build/images/user/avatar-3.jpg') }}"
                      alt="user-image"
                      class="avtar"
                      data-bs-toggle="tooltip"
                      data-bs-title="Adeline"
                    />
                    <img
                      src="{{ URL::asset('build/images/user/avatar-4.jpg') }}"
                      alt="user-image"
                      class="avtar"
                      data-bs-toggle="tooltip"
                      data-bs-title="Keefs"
                    />
                    <span class="avtar rounded-circle bg-light-primary text-primary">+5</span>
                  </div>
                </td>
                <td>
                  <span>Indonasia</span>
                  <div class="prod-action-links">
                    <ul class="list-inline me-auto mb-0">
                      <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="View">
                        <a
                          href="#"
                          class="avtar avtar-xs btn-link-warning btn-pc-default"
                          data-bs-toggle="offcanvas"
                          data-bs-target="#productOffcanvas"
                        >
                          <i class="ti ti-eye f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
                        <a href="#!" class="avtar avtar-xs btn-link-success btn-pc-default">
                          <i class="ti ti-edit-circle f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
                        <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default">
                          <i class="ti ti-trash f-18"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="text-end">7</td>
                <td>
                  <div class="row">
                    <div class="col-auto pe-0">
                      <div class="avtar avtar-s btn-light-warning">
                        <i class="ph-duotone ph-devices f-18"></i>
                      </div>
                    </div>
                    <div class="col">
                      <h6 class="mb-1">Production</h6>
                      <a class="text-muted f-12 text-hover-primary" href="mailto:demo@mail.com">Adeline@domain.com</a>
                    </div>
                  </div>
                </td>
                <td><a class="text-muted text-hover-primary" href="#">JCBK.Pvt.Ltd</a></td>
                <td>
                  <div class="row align-items-center">
                    <div class="col-auto pe-0">
                      <img src="{{ URL::asset('build/images/user/avatar-3.jpg') }}" alt="user-image" class="wid-40 rounded" />
                    </div>
                    <div class="col">
                      <h6 class="mb-0">Adeline</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="user-group">
                    <img
                      src="{{ URL::asset('build/images/user/avatar-6.jpg') }}"
                      alt="user-image"
                      class="avtar"
                      data-bs-toggle="tooltip"
                      data-bs-title="Keefs"
                    />
                    <img
                      src="{{ URL::asset('build/images/user/avatar-4.jpg') }}"
                      alt="user-image"
                      class="avtar"
                      data-bs-toggle="tooltip"
                      data-bs-title="John Doe"
                    />
                    <img
                      src="{{ URL::asset('build/images/user/avatar-1.jpg') }}"
                      alt="user-image"
                      class="avtar"
                      data-bs-toggle="tooltip"
                      data-bs-title="Carson Darrin"
                    />
                    <img
                      src="{{ URL::asset('build/images/user/avatar-7.jpg') }}"
                      alt="user-image"
                      class="avtar"
                      data-bs-toggle="tooltip"
                      data-bs-title="Lazaro"
                    />
                  </div>
                </td>
                <td>
                  <span>Malaysia</span>
                  <div class="prod-action-links">
                    <ul class="list-inline me-auto mb-0">
                      <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="View">
                        <a
                          href="#"
                          class="avtar avtar-xs btn-link-warning btn-pc-default"
                          data-bs-toggle="offcanvas"
                          data-bs-target="#productOffcanvas"
                        >
                          <i class="ti ti-eye f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
                        <a href="#!" class="avtar avtar-xs btn-link-success btn-pc-default">
                          <i class="ti ti-edit-circle f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
                        <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default">
                          <i class="ti ti-trash f-18"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="text-end">8</td>
                <td>
                  <div class="row">
                    <div class="col-auto pe-0">
                      <div class="avtar avtar-s btn-light-danger">
                        <i class="ph-duotone ph-gear-fine f-18"></i>
                      </div>
                    </div>
                    <div class="col">
                      <h6 class="mb-1">Service</h6>
                      <a class="text-muted f-12 text-hover-primary" href="mailto:demo@mail.com">Lazaro@domain.com</a>
                    </div>
                  </div>
                </td>
                <td><a class="text-muted text-hover-primary" href="#">DDMS.Pvt.Ltd</a></td>
                <td>
                  <div class="row align-items-center">
                    <div class="col-auto pe-0">
                      <img src="{{ URL::asset('build/images/user/avatar-6.jpg') }}" alt="user-image" class="wid-40 rounded" />
                    </div>
                    <div class="col">
                      <h6 class="mb-0">Lazaro</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="user-group">
                    <img
                      src="{{ URL::asset('build/images/user/avatar-7.jpg') }}"
                      alt="user-image"
                      class="avtar"
                      data-bs-toggle="tooltip"
                      data-bs-title="Carson Darrin"
                    />
                    <img
                      src="{{ URL::asset('build/images/user/avatar-9.jpg') }}"
                      alt="user-image"
                      class="avtar"
                      data-bs-toggle="tooltip"
                      data-bs-title="Adeline"
                    />
                    <img
                      src="{{ URL::asset('build/images/user/avatar-1.jpg') }}"
                      alt="user-image"
                      class="avtar"
                      data-bs-toggle="tooltip"
                      data-bs-title="John Doe"
                    />
                  </div>
                </td>
                <td>
                  <span>Australia</span>
                  <div class="prod-action-links">
                    <ul class="list-inline me-auto mb-0">
                      <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="View">
                        <a
                          href="#"
                          class="avtar avtar-xs btn-link-warning btn-pc-default"
                          data-bs-toggle="offcanvas"
                          data-bs-target="#productOffcanvas"
                        >
                          <i class="ti ti-eye f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
                        <a href="#!" class="avtar avtar-xs btn-link-success btn-pc-default">
                          <i class="ti ti-edit-circle f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
                        <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default">
                          <i class="ti ti-trash f-18"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
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
    <script src="{{ URL::asset('build/js/plugins/simple-datatables.js') }}"></script>
    <script>
        const dataTable = new simpleDatatables.DataTable('#pc-dt-simple', {
          sortable: false,
          perPage: 3
        });
      </script>
    <!-- [Page Specific JS] end -->
@endsection
