@extends('layouts.user')
@section('content')
    <div class="row mb-5">
        <div class="col-lg-8 offset-lg-2 mt-lg-0 mt-4">
            <div class="row container">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body pb-3">
                            <div class="text-center">
                                <h5>Check User</h5>
                            </div>
                            <form role="form" method="POST" action="">
                                <div class="text-center">
                                    @if (session()->has('success'))
                                        <div class="notification-success mb-3">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif
                                    @if (session()->has('error'))
                                        <div class="notification-error mb-3">
                                            {{ session()->get('error') }}
                                        </div>
                                    @endif
                                </div>
                                @csrf
                                @if (session()->has('user_data_id'))
                                    <label>User's Unique Identification Number</label>
                                    <div class="mb-3">
                                        <input type="text" name="unique_id"
                                            class="form-control @error('unique_id') is-invalid @enderror" disabled
                                            placeholder="Unique Identification Number" aria-label="Email"
                                            value="{{ session()->get('user_data_unique_id') }}">
                                    </div>
                                    <label>User's Email</label>
                                    <div class="mb-3">
                                        <input type="text" name="unique_id" class="form-control" disabled
                                            placeholder="Unique Identification Number" aria-label="Email"
                                            value="{{ session()->get('user_data_email') }}">
                                    </div>
                                    <div class="text-right mb-3 mt-4">
                                        <a class="btn bg-gradient-dark ms-auto mb-0" href="{{ route('call-details') }}">
                                            Proceed
                                        </a>
                                    </div>
                                    {{-- <div class="text-left mb-3 mt-4">
                                        <a class="btn bg-gradient-dark ms-auto mb-0" href="{{ route('delete-session') }}">
                                            End Session
                                        </a>
                                    </div> --}}
                                @else
                                    <label>User's Unique Identification Number</label>
                                    <div class="mb-3">
                                        <input type="" name="unique_id"
                                            class="form-control @error('unique_id') is-invalid @enderror"
                                            placeholder="Unique Identification Number" value="{{ old('unique_id') }}">
                                        @error('unique_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <label>Doctor's Password</label>
                                    <div class="mb-3">
                                        <input type="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            placeholder="***********">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="text-right mb-3 mt-4">
                                        <button class="btn bg-gradient-dark ms-auto mb-0" type="submit" title="Send">
                                            Check
                                        </button>
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @if (session()->has('saved'))
        @if (session()->get('saved'))
            <script>
                window.localStorage.clear();
                // alert('Saved');
            </script>
        @endif
    @endif
@endsection
