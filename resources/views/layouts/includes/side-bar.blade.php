<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="" target="_blank">
            <img src="{{ asset('assets/img/logo-ct-dark.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Dotty Care</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0" />
    <div class="collapse navbar-collapse w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            @if (Auth::user()->role == 'user')
                {{-- <li class="nav-item">
                    <a href="{{ route('call-details') }}" class="nav-link active" aria-controls="pagesExamples"
                        role="button" aria-expanded="false">
                        <div
                            class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                            <i class="ni ni-ungroup text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Call Details</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="assessment.html" class="nav-link" aria-controls="ecommerceExamples" role="button"
                        aria-expanded="false">
                        <div
                            class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                            <i class="ni ni-archive-2 text-success text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Assessment</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="treatment.html" class="nav-link" aria-controls="ecommerceExamples" role="button"
                        aria-expanded="false">
                        <div
                            class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                            <i class="ni ni-archive-2 text-success text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Treatment</span>
                    </a>
                </li> --}}

                <li class="nav-item">
                    <a href="#authExamples" class="nav-link" aria-controls="authExamples" role="button"
                        aria-expanded="false">
                        <div
                            class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-copy-04 text-secondary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Call Report</span>
                    </a>
                </li>
            @endif


            @if (Auth::user()->role == 'paramedic')
                <li class="nav-item">
                    <a href="{{ route('paramedic') }}" class="nav-link {{ request()->is('paramedic') ? 'active' : '' }}"
                        aria-controls="pagesExamples" role="button" aria-expanded="false">
                        <div
                            class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                            <i class="ni ni-shop text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('add-user') }}"
                        class="nav-link {{ request()->is('call-details') || request()->is('add-user') || request()->is('assessment')|| request()->is('treatement')|| request()->is('call-report') ? 'active' : '' }}"
                        aria-controls="pagesExamples" role="button" aria-expanded="false">
                        <div
                            class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                            <i class="ni ni-circle-08 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Add New User</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('profile') }}" class="nav-link {{ request()->is('profile') ? 'active' : '' }}"
                        aria-controls="pagesExamples" role="button" aria-expanded="false">
                        <div
                            class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-02 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('password') }}"
                        class="nav-link {{ request()->is('update-password') ? 'active' : '' }}"
                        aria-controls="pagesExamples" role="button" aria-expanded="false">
                        <div
                            class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                            <i class="ni ni-ungroup text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Change Password</span>
                    </a>
                </li>
            @endif

            <li class="nav-item">
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();"
                    class="nav-link" aria-controls="authExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-button-power text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</aside>
