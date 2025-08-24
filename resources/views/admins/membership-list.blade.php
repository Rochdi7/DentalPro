@extends('layouts.main')

@section('title', 'Membership List')
@section('breadcrumb-item', 'Membership')

@section('breadcrumb-item-active', 'Membership List')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('build/css/plugins/style.css') }}">
@endsection

@section('content')
    <!-- [ Main Content ] start -->
    <div class="row">
        <div class="col-12">
            <div class="card table-card">
                <div class="card-header">
                    <h5>Membership list</h5>
                </div>
                <div class="card-body pt-3">
                    <div class="table-responsive">
                        <table class="table table-hover" id="pc-dt-simple">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Start Date</th>
                                    <th>Status</th>
                                    <th>Plan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{ URL::asset('build/images/user/avatar-1.jpg') }}" alt="user image"
                                                    class="img-radius wid-40" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-0">Airi Satou</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>(123) 4567 890</td>
                                    <td>2023/02/07 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                                    <td class="text-success"><i class="fas fa-circle f-10 m-r-10"></i> Active</td>
                                    <td><span class="badge text-bg-success">Casual</span></td>
                                    <td>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-eye f-20"></i>
                                        </a>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-edit f-20"></i>
                                        </a>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-trash f-20"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{ URL::asset('build/images/user/avatar-2.jpg') }}" alt="user image"
                                                    class="img-radius wid-40" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-0">Ashton Cox</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>(123) 4567 890</td>
                                    <td>2023/02/01 <span class="text-muted text-sm d-block">02:14 PM</span></td>
                                    <td class="text-secondary"><i class="fas fa-circle f-10 m-r-10"></i> Inactive</td>
                                    <td><span class="badge text-bg-primary">Addicted</span></td>
                                    <td>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-eye f-20"></i>
                                        </a>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-edit f-20"></i>
                                        </a>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-trash f-20"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{ URL::asset('build/images/user/avatar-3.jpg') }}" alt="user image"
                                                    class="img-radius wid-40" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-0">Bradley Greer</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>(123) 4567 890</td>
                                    <td>2023/01/22 <span class="text-muted text-sm d-block">10:32 AM</span></td>
                                    <td class="text-success"><i class="fas fa-circle f-10 m-r-10"></i> Active</td>
                                    <td><span class="badge text-bg-warning">Diehard</span></td>
                                    <td>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-eye f-20"></i>
                                        </a>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-edit f-20"></i>
                                        </a>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-trash f-20"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{ URL::asset('build/images/user/avatar-4.jpg') }}" alt="user image"
                                                    class="img-radius wid-40" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-0">Brielle Williamson</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>(123) 4567 890</td>
                                    <td>2023/02/07 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                                    <td class="text-success"><i class="fas fa-circle f-10 m-r-10"></i> Active</td>
                                    <td><span class="badge text-bg-success">Casual</span></td>
                                    <td>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-eye f-20"></i>
                                        </a>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-edit f-20"></i>
                                        </a>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-trash f-20"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{ URL::asset('build/images/user/avatar-5.jpg') }}" alt="user image"
                                                    class="img-radius wid-40" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-0">Airi Satou</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>(123) 4567 890</td>
                                    <td>2023/02/07 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                                    <td class="text-success"><i class="fas fa-circle f-10 m-r-10"></i> Active</td>
                                    <td><span class="badge text-bg-success">Casual</span></td>
                                    <td>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-eye f-20"></i>
                                        </a>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-edit f-20"></i>
                                        </a>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-trash f-20"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{ URL::asset('build/images/user/avatar-6.jpg') }}" alt="user image"
                                                    class="img-radius wid-40" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-0">Ashton Cox</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>(123) 4567 890</td>
                                    <td>2023/02/01 <span class="text-muted text-sm d-block">02:14 PM</span></td>
                                    <td class="text-secondary"><i class="fas fa-circle f-10 m-r-10"></i> Inactive</td>
                                    <td><span class="badge text-bg-primary">Addicted</span></td>
                                    <td>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-eye f-20"></i>
                                        </a>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-edit f-20"></i>
                                        </a>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-trash f-20"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{ URL::asset('build/images/user/avatar-7.jpg') }}" alt="user image"
                                                    class="img-radius wid-40" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-0">Bradley Greer</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>(123) 4567 890</td>
                                    <td>2023/01/22 <span class="text-muted text-sm d-block">10:32 AM</span></td>
                                    <td class="text-success"><i class="fas fa-circle f-10 m-r-10"></i> Active</td>
                                    <td><span class="badge text-bg-warning">Diehard</span></td>
                                    <td>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-eye f-20"></i>
                                        </a>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-edit f-20"></i>
                                        </a>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-trash f-20"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{ URL::asset('build/images/user/avatar-8.jpg') }}" alt="user image"
                                                    class="img-radius wid-40" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-0">Brielle Williamson</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>(123) 4567 890</td>
                                    <td>2023/02/07 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                                    <td class="text-success"><i class="fas fa-circle f-10 m-r-10"></i> Active</td>
                                    <td><span class="badge text-bg-success">Casual</span></td>
                                    <td>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-eye f-20"></i>
                                        </a>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-edit f-20"></i>
                                        </a>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-trash f-20"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{ URL::asset('build/images/user/avatar-9.jpg') }}" alt="user image"
                                                    class="img-radius wid-40" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-0">Airi Satou</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>(123) 4567 890</td>
                                    <td>2023/02/07 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                                    <td class="text-success"><i class="fas fa-circle f-10 m-r-10"></i> Active</td>
                                    <td><span class="badge text-bg-success">Casual</span></td>
                                    <td>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-eye f-20"></i>
                                        </a>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-edit f-20"></i>
                                        </a>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-trash f-20"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{ URL::asset('build/images/user/avatar-10.jpg') }}" alt="user image"
                                                    class="img-radius wid-40" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-0">Ashton Cox</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>(123) 4567 890</td>
                                    <td>2023/02/01 <span class="text-muted text-sm d-block">02:14 PM</span></td>
                                    <td class="text-secondary"><i class="fas fa-circle f-10 m-r-10"></i> Inactive</td>
                                    <td><span class="badge text-bg-primary">Addicted</span></td>
                                    <td>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-eye f-20"></i>
                                        </a>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-edit f-20"></i>
                                        </a>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-trash f-20"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{ URL::asset('build/images/user/avatar-4.jpg') }}" alt="user image"
                                                    class="img-radius wid-40" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-0">Bradley Greer</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>(123) 4567 890</td>
                                    <td>2023/01/22 <span class="text-muted text-sm d-block">10:32 AM</span></td>
                                    <td class="text-success"><i class="fas fa-circle f-10 m-r-10"></i> Active</td>
                                    <td><span class="badge text-bg-warning">Diehard</span></td>
                                    <td>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-eye f-20"></i>
                                        </a>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-edit f-20"></i>
                                        </a>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-trash f-20"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{ URL::asset('build/images/user/avatar-6.jpg') }}" alt="user image"
                                                    class="img-radius wid-40" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-0">Brielle Williamson</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>(123) 4567 890</td>
                                    <td>2023/02/07 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                                    <td class="text-success"><i class="fas fa-circle f-10 m-r-10"></i> Active</td>
                                    <td><span class="badge text-bg-success">Casual</span></td>
                                    <td>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-eye f-20"></i>
                                        </a>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-edit f-20"></i>
                                        </a>
                                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                                            <i class="ti ti-trash f-20"></i>
                                        </a>
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
        import {
            DataTable
        } from "/build/js/plugins/module.js"
        window.dt = new DataTable("#pc-dt-simple");
    </script>
@endsection
