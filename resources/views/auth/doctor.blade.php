@extends('layouts.app2')

@section('content')
    <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
            <div class="card card-plain">
                <div class="card-header pb-0 text-left">
                    <h4 class="font-weight-bolder">Doctor Sign Up</h4>
                </div>
                <div class="card-body pb-3">
                    <form role="form" method="POST" action="{{ route('doctor-signup') }}">
                        @csrf
                        <label>Full Name</label>
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                placeholder="Full Name" aria-label="Name" value="{{ old('name') }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label>Email</label>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                placeholder="Email Address" aria-label="Email" value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label>Hospital</label>
                        <div class="mb-3">
                            <input type="text" name="hospital"
                                class="form-control @error('hospital') is-invalid @enderror"
                                placeholder="Hospital Name" aria-label="Text" value="{{ old('hospital') }}">
                            @error('hospital')
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
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary w-100 mt-4 mb-0">Sign
                                up</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center pt-0 px-sm-4 px-1">
                    <p class="mb-4 mx-auto">
                        Already have an account?
                        <a href="{{ route('login') }}" class="text-primary font-weight-bold">Sign in</a>
                    </p>
                </div>
            </div>
        </div>
        <div
            class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                style="background-image: url('{{ asset('assets/img/paramed.jpeg') }}');
                    background-size: cover;">
                <span class="mask bg-primary opacity-4"></span>
                <h4 class="mt-5 text-white font-weight-bolder position-relative">Your journey starts
                    here</h4>
                <p class="text-white position-relative">Just as it takes a company to sustain a product,
                    it takes a community to sustain a protocol.</p>
            </div>
        </div>
    </div>
@endsection
