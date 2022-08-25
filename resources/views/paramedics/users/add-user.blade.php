@extends('layouts.user')
@section('content')
    <div class="row mb-5">
        <div class="col-lg-3">
            <div class="card position-sticky top-1">
                <ul class="nav flex-column bg-white border-radius-lg p-3">
                    <li class="nav-item mb-2 {{ request()->is('add-user') ? 'nav-item-active' : '' }}">
                        <a class="nav-link text-body d-flex align-items-center" href="{{ route('add-user') }}">
                            <i class="ni ni-single-02 me-2 text-dark opacity-6"></i>
                            <span class="text-sm">Add New User</span>
                        </a>
                    <li class="nav-item mb-2 {{ request()->is('call-details') ? 'nav-item-active' : '' }}">
                        <a class="nav-link text-body d-flex align-items-center"
                            href="{{ route('call-details') }}">
                            <i class="ni ni-ui-04 me-2 text-dark opacity-6"></i>
                            <span class="text-sm">Call Details</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2 {{ request()->is('assessment') ? 'nav-item-active' : '' }}">
                        <a class="nav-link text-body d-flex align-items-center"
                            href="{{ route('assessment') }}">
                            <i class="ni ni-paper-diploma me-2 text-dark opacity-6"></i>
                            <span class="text-sm">Assessment</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2 {{ request()->is('treatement') ? 'nav-item-active' : '' }}">
                        <a class="nav-link text-body d-flex align-items-center"
                            href="{{ route('treatement') }}">
                            <i class="ni ni-spaceship me-2 text-dark opacity-6"></i>
                            <span class="text-sm">Treatment</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2 {{ request()->is('call-report') ? 'nav-item-active' : '' }}">
                        <a class="nav-link text-body d-flex align-items-center"
                            href="{{ route('call-report') }}">
                            <i class="ni ni-collection me-2 text-dark opacity-6"></i>
                            <span class="text-sm">Call Report</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-9 mt-lg-0 mt-4">
            <div class="row container">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body pb-3">
                            <div class="text-center">
                                <h5>Register User</h5>
                            </div>
                            <form role="form" method="POST" action="{{ route('register') }}">
                                @csrf
                                <label>Email Address</label>
                                <div class="mb-3">
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Email Address" aria-label="Email" value="{{ old('email') }}">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <label>Password</label>
                                <div class="mb-3">
                                    <input type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                                        aria-label="Password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <label>Confirm Password</label>
                                <div class="mb-3">
                                    <input type="password" name="password_confirmation"
                                        class="form-control @error('password_confirmation') is-invalid @enderror"
                                        placeholder="Confirm Password" aria-label="Confirm Password">
                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="text-right mb-3 mt-4">
                                    <button class="btn bg-gradient-dark ms-auto mb-0" type="submit" title="Send">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
