@extends('layouts.user')
@section('content')
    <div class="row align-items-center">
        <div class="col-lg-8 offset-lg-2 col-sm-12">

            <div class="card mt-4" id="basic-info">
                <div class="card-header">
                    <h5>Profile</h5>
                </div>
                <form method="POST" action="">
                    <div class="text-center">
                        @if (session()->has('success'))
                            <div class="notification-success mb-3">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                    </div>
                    @csrf
                    <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-12 mb-4">
                                <label class="form-label">
                                    @if (Auth::user()->role == 'paramedic')
                                        Vehincle Number
                                    @endif
                                    @if (Auth::user()->role == 'user')
                                        Unique Identification Number
                                    @endif
                                </label>
                                <div class="input-group">
                                    <input class="form-control" value="{{ Auth::user()->unique_id }}" type="text"
                                        readonly>
                                </div>
                            </div>
                        </div>
                        @if (Auth::user()->role == 'paramedic')
                        <div class="row">
                            <div class="col-12 mb-4">
                                <label class="form-label">Name</label>
                                <div class="input-group">
                                    <input id="name" name="name" class="form-control" type="text"
                                        placeholder="Alec" value="{{ Auth::user()->name }}">
                                </div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-12">
                                <label class="form-label mt-4">Email</label>
                                <div class="input-group">
                                    <input id="email" name="email" class="form-control" type="email"
                                        placeholder="example@email.com" value="{{ Auth::user()->email }}">
                                </div>
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button class="btn bg-gradient-dark btn-sm float-end mt-6 mb-4">Update
                            Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
