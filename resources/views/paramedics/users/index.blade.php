@extends('layouts.user')
@section('content')
    <div class="row align-items-center">
        <div class="row">
            <div class="text-center mb-5">
                <h3 class="mt-5 text-white">All Users</h3>
                <h5 class="text-white font-weight-normal">
                </h5>
            </div>
            <div class="card">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder  opacity-7 ps-2">Surname
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Last
                                    Name
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Age
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Gneder</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    City</th>
                                <th class="text-secondary opacity-7 ps-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h6 class="mb-0 text-xs">John </h6>
                                </td>
                                <td>
                                    <h6 class="mb-0 text-xs">Michael </h6>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">29yrs</p>
                                </td>
                                <td>
                                    <span class="badge badge-sm badge-success">Male</span>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">Oxlade</span>
                                </td>
                                <td>
                                    <a href="javascript:;" class="btn btn-sm btn-dark font-weight-bold text-xs">
                                        View
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class="mb-0 text-xs">John </h6>
                                </td>
                                <td>
                                    <h6 class="mb-0 text-xs">Michael </h6>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">29yrs</p>
                                </td>
                                <td>
                                    <span class="badge badge-sm badge-success">Male</span>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">Oxlade</span>
                                </td>
                                <td>
                                    <a href="javascript:;" class="btn btn-sm btn-dark font-weight-bold text-xs">
                                        View
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class="mb-0 text-xs">John </h6>
                                </td>
                                <td>
                                    <h6 class="mb-0 text-xs">Michael </h6>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">29yrs</p>
                                </td>
                                <td>
                                    <span class="badge badge-sm badge-success">Male</span>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">Oxlade</span>
                                </td>
                                <td>
                                    <a href="javascript:;" class="btn btn-sm btn-dark font-weight-bold text-xs">
                                        View
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection
