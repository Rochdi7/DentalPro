<header class="pc-header">
    <div class="header-wrapper">
        <div class="me-auto pc-mob-drp">
            <ul class="list-unstyled">
                <li class="pc-h-item pc-sidebar-collapse">
                    <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
                <li class="pc-h-item pc-sidebar-popup">
                    <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>

            </ul>
        </div>
        <div class="ms-auto">
            <ul class="list-unstyled">
                {{-- <li class="dropdown pc-h-item d-none d-md-inline-flex">
                    <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#">
                        <i class="ph-duotone ph-sun-dim"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
                        <a href="#!" class="dropdown-item" onclick="layout_change('dark')">
                            <i class="ph-duotone ph-moon"></i> <span>Sombre</span>
                        </a>
                        <a href="#!" class="dropdown-item" onclick="layout_change('light')">
                            <i class="ph-duotone ph-sun-dim"></i> <span>Clair</span>
                        </a>
                        <a href="#!" class="dropdown-item" onclick="layout_change_default()">
                            <i class="ph-duotone ph-cpu"></i> <span>Par défaut</span>
                        </a>
                    </div>
                </li> --}}



                <li class="dropdown pc-h-item header-user-profile">
                    <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
                        aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false">
                        @php
                            $user = Auth::user();
                            $avatar =
                                optional($user)->getFirstMediaUrl('avatars', 'thumb') ?:
                                asset('build/images/user/avatar-1.jpg');
                        @endphp

                        <img src="{{ $avatar }}" alt="{{ $user->name }}" class="user-avtar avtar avtar-s" />
                    </a>
                    <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                        <div class="dropdown-header d-flex align-items-center justify-content-between">
                            <h5 class="m-0">Profil</h5>
                        </div>
                        <div class="dropdown-body">
                            <div class="profile-notification-scroll position-relative"
                                style="max-height: calc(100vh - 225px)">
                                <ul class="list-group list-group-flush w-100">
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{ $avatar }}" alt="{{ $user->name }}"
                                                    class="user-avtar avtar avtar-s" />
                                            </div>
                                            <div class="flex-grow-1 mx-3">
                                                <h5 class="mb-0">{{ $user->name }}</h5>
                                                @if ($user->email)
                                                    <a class="link-primary"
                                                        href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                                                @else
                                                    <span class="text-muted small">Aucun email fourni</span>
                                                @endif
                                            </div>
                                            <span class="badge bg-primary">DP</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ route('backoffice.profile.edit') }}" class="dropdown-item">
                                            <span class="d-flex align-items-center">
                                                <i class="ph-duotone ph-user-circle"></i>
                                                <span>Modifier le profil</span>
                                            </span>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <span class="d-flex align-items-center">
                                                <i class="ph-duotone ph-star text-warning"></i>
                                                <span>Langue</span>
                                                <span
                                                    class="badge bg-light-success border border-success ms-2">Bientôt</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                            class="dropdown-item">
                                            <span class="d-flex align-items-center">
                                                <i class="ph-duotone ph-power"></i>
                                                <span>Se déconnecter</span>
                                            </span>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>
