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
                        <a class="nav-link text-body d-flex align-items-center" href="{{ route('call-details') }}">
                            <i class="ni ni-ui-04 me-2 text-dark opacity-6"></i>
                            <span class="text-sm">Call Details</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2 {{ request()->is('assessment') ? 'nav-item-active' : '' }}">
                        <a class="nav-link text-body d-flex align-items-center" href="{{ route('assessment') }}">
                            <i class="ni ni-paper-diploma me-2 text-dark opacity-6"></i>
                            <span class="text-sm">Assessment</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2 {{ request()->is('treatment') ? 'nav-item-active' : '' }}">
                        <a class="nav-link text-body d-flex align-items-center" href="{{ route('treatment') }}">
                            <i class="ni ni-spaceship me-2 text-dark opacity-6"></i>
                            <span class="text-sm">Treatment</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2 {{ request()->is('call-report') ? 'nav-item-active' : '' }}">
                        <a class="nav-link text-body d-flex align-items-center" href="{{ route('call-report') }}">
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
                    <div class="multisteps-form">
                        <div class="row">
                            <div class="col-12 col-lg-12 m-auto">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row text-start">
                                            <div class="col-12 col-md-12 ms-auto mt-3">
                                              <div class="row">
                                                <div class="col-md-6"> <label>PDF File</label><br>
                                                    <a href="" class="btn btn-sm btn-dark"
                                                        onclick="return confirm('Are you sure you want to download the JSON file?')">Download
                                                    </a></div>
                                                   <div class="col-md-6"> <label>Json File</label><br>
                                                    <a href="" class="btn btn-sm btn-dark"
                                                        onclick="return confirm('Are you sure you want to download the PDF file?')">Download
                                                    </a></div>
                                              </div>
                                                <div class="nav-wrapper position-relative end-0">
                                                    <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link mb-0 px-0 py-1 active" id=""
                                                                data-bs-toggle="tab" href="#call-details-tabs-simple"
                                                                role="tab" aria-controls="call-details"
                                                                aria-selected="true">
                                                                Call Details
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab"
                                                                href="#assessment-tabs-simple" role="tab"
                                                                aria-controls="assessment" aria-selected="false">
                                                                Assessment
                                                            </a>
                                                        <li class="nav-item">
                                                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab"
                                                                href="#treatment-tabs-simple" role="tab"
                                                                aria-controls="treatment" aria-selected="false">
                                                                Treatment
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tab-content" id="pills-tabContent">
                                                    <div class="tab-pane fade show active" id="call-details-tabs-simple"
                                                        role="tabpanel" aria-labelledby="call-details-tabs-simple-">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                @if (isset($call_details))
                                                                <table class="table bordered">
                                                                    @foreach ($call_details as $key => $item)
                                                                        <tr>
                                                                            <td class="text-capitalize font-weight-bold">
                                                                                {{ $key }}:</td>
                                                                            <td>{{ $item }} </td>
                                                                        </tr>
                                                                    @endforeach
                                                                </table>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="assessment-tabs-simple" role="tabpanel"
                                                        aria-labelledby="assessment-tabs-simple-">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                @if (isset($treatment))
                                                                <table class="table bordered">
                                                                    @foreach ($treatment as $key => $item)
                                                                        <tr>
                                                                            <td class="text-capitalize font-weight-bold">
                                                                                {{ $key }}:</td>
                                                                            <td>{{ $item }} </td>
                                                                        </tr>
                                                                    @endforeach
                                                                </table>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="treatment-tabs-simple" role="tabpanel"
                                                        aria-labelledby="treatment-tabs-simple-">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                @if (isset($assessment))
                                                                <table class="table bordered">
                                                                    @foreach ($assessment as $key => $item)
                                                                        <tr>
                                                                            <td class="text-capitalize font-weight-bold">
                                                                                {{ $key }}:</td>
                                                                            <td>{{ $item }} </td>
                                                                        </tr>
                                                                    @endforeach
                                                                </table>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
