@extends('layouts.user')
@section('content')
    <div class="row align-items-center">
        <div class="col-lg-8 offset-lg-2 col-sm-12">
            <div class="card mt-4" id="password">
                <div class="card-header">
                    <h5>Change Password</h5>
                </div>
                <form method="POST" action="">
                    @csrf
                    <div class="text-center">
                        @if (session()->has('success'))
                            <div class="notification-success mb-3">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                    </div>
                    <div class="card-body pt-0">
                        <label class="form-label">Current password</label>
                        <div class="form-group">
                            <input class="form-control" type="password" name="current_password"
                                placeholder="Current password">
                            @error('current_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label class="form-label">New password</label>
                        <div class="form-group">
                            <input class="form-control" type="password" name="new_password" placeholder="New password">
                            @error('new_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label class="form-label">Confirm new password</label>
                        <div class="form-group">
                            <input class="form-control" name="confirm_new_password" type="password"
                                placeholder="Confirm password">
                            @error('confirm_new_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <h5 class="mt-5">Password requirements</h5>
                        <p class="text-muted mb-2">
                            Please follow this guide for a strong password:
                        </p>
                        <ul class="text-muted ps-4 mb-0 float-start">
                            <li>
                                <span class="text-sm">One special characters</span>
                            </li>
                            <li>
                                <span class="text-sm">Min 6 characters</span>
                            </li>
                            <li>
                                <span class="text-sm">One number (2 are recommended)</span>
                            </li>
                            <li>
                                <span class="text-sm">Change it often</span>
                            </li>
                        </ul>
                        <button class="btn bg-gradient-dark btn-sm float-end mt-6 mb-5">Update
                            password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
