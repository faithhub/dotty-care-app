@extends('layouts.user')
@section('content')
    <div class="row mb-5">
        <div class="col-lg-3">
            @include('layouts.includes.user-nav')
        </div>
        <div class="col-lg-9 mt-lg-0 mt-4">
            <div class="row container">
                <div class="col-12">
                    <div class="multisteps-form">
                        <div class="row">
                            <div class="col-12 col-lg-12 m-auto">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <h6>Before submitting, examine the information because changes cannot be made.
                                            </h6>
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
                                        </div>
                                        <div class="row text-start">
                                            <div class="col-12 col-md-12 ms-auto mt-3">
                                                <div class="row pt-0 p-3 d-flex align-items-center">
                                                    {{-- <div class="col-md-4">
                                                        <a href="{{ asset('upload/json/' . $user_data->file) }}"
                                                            download="" class="btn btn-sm btn-dark"
                                                            onclick="return confirm('Are you sure you want to download the JSON file?')">Download
                                                            JSON
                                                        </a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="" class="btn btn-sm btn-dark"
                                                            onclick="return confirm('Are you sure you want to download the PDF file?')">Download
                                                            PDF
                                                        </a>
                                                    </div> --}}
                                                    <div class=" col-md-4">
                                                        <a href="{{ route('save-report') }}" class="btn btn-sm btn-success"
                                                            onclick="return confirm('Confirm that all the data has been filled correctly?')">Confirm
                                                            & Submit
                                                        </a>
                                                    </div>
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
                                                                                <td
                                                                                    class="text-capitalize font-weight-bold">
                                                                                    @php
                                                                                        $key = str_replace('_', ' ', $key);
                                                                                    @endphp
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
                                                                @if (isset($treatment))
                                                                    <table class="table bordered">
                                                                        @foreach ($treatment as $key => $item)
                                                                            <tr>
                                                                                <td
                                                                                    class="text-capitalize font-weight-bold">
                                                                                    @php
                                                                                        $key = str_replace('_', ' ', $key);
                                                                                    @endphp
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
                                                                @if (isset($assessment))
                                                                    <table class="table bordered">
                                                                        @foreach ($assessment as $key => $item)
                                                                            <tr>
                                                                                <td
                                                                                    class="text-capitalize font-weight-bold">
                                                                                    @php
                                                                                        $key = str_replace('_', ' ', $key);
                                                                                    @endphp
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
