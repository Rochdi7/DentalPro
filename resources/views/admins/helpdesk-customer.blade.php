@extends('layouts.main')

@section('title', 'Customers')
@section('breadcrumb-item', 'Helpdesk')

@section('breadcrumb-item-active', 'Customers')

@section('css')
  <link rel="stylesheet" href="{{ URL::asset('build/css/plugins/style.css') }}">
@endsection

@section('content')
<!-- [ Main Content ] start -->
<div class="row">
    <div class="col-lg-12">
      <div class="card shadow-none">
        <div class="card-header">
          <h5>Customers</h5>
          <div class="card-header-right">
            <button type="button" class="btn btn-light-warning m-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
              New Customer
            </button>
            <div
              class="modal fade"
              id="exampleModal"
              tabindex="-1"
              role="dialog"
              aria-labelledby="exampleModalLabel"
              aria-hidden="true"
            >
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"
                      ><i data-feather="user" class="icon-svg-primary wid-20 me-2"></i>Add Customer</h5
                    >
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                  </div>
                  <form>
                    <div class="modal-body">
                      <small id="emailHelp" class="form-text text-muted mb-2 mt-0"
                        >We'll never share your email with anyone else.</small
                      >
                      <div class="mb-3">
                        <label class="form-label">First Name</label>
                        <input
                          type="text"
                          class="form-control"
                          id="fname"
                          aria-describedby="emailHelp"
                          placeholder="Enter First Name"
                        />
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Last Name</label>
                        <input
                          type="email"
                          class="form-control"
                          id="lname"
                          aria-describedby="emailHelp"
                          placeholder="Enter Last Name"
                        />
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" id="emial" aria-describedby="emailHelp" placeholder="Enter email" />
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" id="passwd" placeholder="Password" />
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="cnpasswd" placeholder="Confirm Password" />
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-light-danger" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-light-primary">Save changes</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body shadow border-0">
          <div class="table-responsive">
            <table id="report-table" class="table table-bordered table-striped mb-0">
              <thead>
                <tr>
                  <th class="border-top-0">Name</th>
                  <th class="border-top-0">Email</th>
                  <th class="border-top-0">Account</th>
                  <th class="border-top-0">Last Login</th>
                  <th class="border-top-0">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Mark Jason</td>
                  <td><a href="#" class="link-secondary">mark@mark.com</a></td>
                  <td>N/A</td>
                  <td>January 01,2019 at 03:35 PM</td>
                  <td>
                    <a href="#" class="btn btn-sm btn-light-success me-1"><i class="feather icon-edit"></i></a>
                    <a href="#" class="btn btn-sm btn-light-danger"><i class="feather icon-trash-2"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Alice Nicol</td>
                  <td><a href="#" class="link-secondary">mark@mark.com</a></td>
                  <td>N/A</td>
                  <td>January 01,2019 at 03:35 PM</td>
                  <td>
                    <a href="#" class="btn btn-sm btn-light-success me-1"><i class="feather icon-edit"></i></a>
                    <a href="#" class="btn btn-sm btn-light-danger"><i class="feather icon-trash-2"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Harry Cook</td>
                  <td><a href="#" class="link-secondary">mark@mark.com</a></td>
                  <td>N/A</td>
                  <td>January 01,2019 at 03:35 PM</td>
                  <td>
                    <a href="#" class="btn btn-sm btn-light-success me-1"><i class="feather icon-edit"></i></a>
                    <a href="#" class="btn btn-sm btn-light-danger"><i class="feather icon-trash-2"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Tom Hannry</td>
                  <td><a href="#" class="link-secondary">mark@mark.com</a></td>
                  <td>N/A</td>
                  <td>January 01,2019 at 03:35 PM</td>
                  <td>
                    <a href="#" class="btn btn-sm btn-light-success me-1"><i class="feather icon-edit"></i></a>
                    <a href="#" class="btn btn-sm btn-light-danger"><i class="feather icon-trash-2"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Martin Frank</td>
                  <td><a href="#" class="link-secondary">mark@mark.com</a></td>
                  <td>N/A</td>
                  <td>January 01,2019 at 03:35 PM</td>
                  <td>
                    <a href="#" class="btn btn-sm btn-light-success me-1"><i class="feather icon-edit"></i></a>
                    <a href="#" class="btn btn-sm btn-light-danger"><i class="feather icon-trash-2"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Endrew Khan</td>
                  <td><a href="#" class="link-secondary">mark@mark.com</a></td>
                  <td>N/A</td>
                  <td>January 01,2019 at 03:35 PM</td>
                  <td>
                    <a href="#" class="btn btn-sm btn-light-success me-1"><i class="feather icon-edit"></i></a>
                    <a href="#" class="btn btn-sm btn-light-danger"><i class="feather icon-trash-2"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Chritina Methewv</td>
                  <td><a href="#" class="link-secondary">mark@mark.com</a></td>
                  <td>N/A</td>
                  <td>January 01,2019 at 03:35 PM</td>
                  <td>
                    <a href="#" class="btn btn-sm btn-light-success me-1"><i class="feather icon-edit"></i></a>
                    <a href="#" class="btn btn-sm btn-light-danger"><i class="feather icon-trash-2"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Jakson Pit</td>
                  <td><a href="#" class="link-secondary">mark@mark.com</a></td>
                  <td>N/A</td>
                  <td>January 01,2019 at 03:35 PM</td>
                  <td>
                    <a href="#" class="btn btn-sm btn-light-success me-1"><i class="feather icon-edit"></i></a>
                    <a href="#" class="btn btn-sm btn-light-danger"><i class="feather icon-trash-2"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Nikolas Jons</td>
                  <td><a href="#" class="link-secondary">mark@mark.com</a></td>
                  <td>N/A</td>
                  <td>January 01,2019 at 03:35 PM</td>
                  <td>
                    <a href="#" class="btn btn-sm btn-light-success me-1"><i class="feather icon-edit"></i></a>
                    <a href="#" class="btn btn-sm btn-light-danger"><i class="feather icon-trash-2"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Nik Cage</td>
                  <td><a href="#" class="link-secondary">mark@mark.com</a></td>
                  <td>N/A</td>
                  <td>January 01,2019 at 03:35 PM</td>
                  <td>
                    <a href="#" class="btn btn-sm btn-light-success me-1"><i class="feather icon-edit"></i></a>
                    <a href="#" class="btn btn-sm btn-light-danger"><i class="feather icon-trash-2"></i></a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- [ Main Content ] end -->
@endsection

@section('scripts')
  <script type="module">
    import { DataTable } from "/build/js/plugins/module.js"
    window.dt = new DataTable("#report-table");
  </script>
@endsection
