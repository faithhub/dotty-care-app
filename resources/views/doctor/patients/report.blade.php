@extends('layouts.user')
@section('content')
    <div class="row mb-5">
        <div class="col-lg-12 mt-lg-0 mt-4">
            <div class="row container">
                <div class="col-12">
                    <div class="multisteps-form">
                        <div class="row">
                            @isset($user_data)
                                @if ($user_data->is_filled)
                                    <div class="col-md-12 col-lg-12 m-auto">
                                        <div class="card">
                                            <div class="card-body mb-5 pb-5">
                                                <div class="text-center">
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
                                                        <!-- Tabs navs -->
                                                        <ul class="nav nav-tabs nav-justified mb-3" id="ex1"
                                                            role="tablist">
                                                            <li class="nav-item" role="presentation">
                                                                <a class="nav-link active" data-bs-toggle="tab"
                                                                    href="#ex3-tab-1" role="tab" aria-controls="ex3-tab-1"
                                                                    aria-selected="true">User's Detail</a>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <a class="nav-link" data-bs-toggle="tab" href="#ex3-tab-2"
                                                                    role="tab" aria-controls="ex3-tab-2"
                                                                    aria-selected="false">Reports</a>
                                                            </li>
                                                        </ul>
                                                        <!-- Tabs navs -->

                                                        <!-- Tabs content -->
                                                        <div class="tab-content" id="pills-tabContent">
                                                            <div class="tab-pane fade show active" id="ex3-tab-1"
                                                                role="tabpanel" aria-labelledby="ex3-tab-1">
                                                                <div class="card">
                                                                    <div class="">
                                                                        <div class="nav-wrapper position-relative end-0">
                                                                            <ul class="nav nav-pills nav-fill p-1"
                                                                                role="tablist">
                                                                                <li class="nav-item">
                                                                                    <a class="nav-link mb-0 px-0 py-1 active"
                                                                                        id="" data-bs-toggle="tab"
                                                                                        href="#call-details-tabs-simple"
                                                                                        role="tab"
                                                                                        aria-controls="call-details"
                                                                                        aria-selected="true">
                                                                                        Call Details
                                                                                    </a>
                                                                                </li>
                                                                                <li class="nav-item">
                                                                                    <a class="nav-link mb-0 px-0 py-1"
                                                                                        data-bs-toggle="tab"
                                                                                        href="#assessment-tabs-simple"
                                                                                        role="tab"
                                                                                        aria-controls="assessment"
                                                                                        aria-selected="false">
                                                                                        Assessment
                                                                                    </a>
                                                                                <li class="nav-item">
                                                                                    <a class="nav-link mb-0 px-0 py-1"
                                                                                        data-bs-toggle="tab"
                                                                                        href="#treatment-tabs-simple"
                                                                                        role="tab" aria-controls="treatment"
                                                                                        aria-selected="false">
                                                                                        Treatment
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="tab-content" id="pills-tabContent">
                                                                            <div class="tab-pane fade show active"
                                                                                id="call-details-tabs-simple" role="tabpanel"
                                                                                aria-labelledby="call-details-tabs-simple-">
                                                                                <div class="card">
                                                                                    <div class="card-body">
                                                                                        @if (isset($call_details))
                                                                                            <table
                                                                                                class="table bordered table-responsive">
                                                                                                @foreach ($call_details as $key => $item)
                                                                                                    <tr>
                                                                                                        <td
                                                                                                            class="text-capitalize font-weight-bold">
                                                                                                            @php
                                                                                                                $key = str_replace('_', ' ', $key);
                                                                                                            @endphp
                                                                                                            {{ $key }}:
                                                                                                        </td>
                                                                                                        <td>{{ $item }}
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                @endforeach
                                                                                            </table>
                                                                                        @endif
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane fade"
                                                                                id="treatment-tabs-simple" role="tabpanel"
                                                                                aria-labelledby="treatment-tabs-simple-">
                                                                                <div class="card">
                                                                                    <div class="card-body">
                                                                                        @if (isset($treatment))
                                                                                            <table
                                                                                                class="table bordered table-responsive">
                                                                                                @foreach ($treatment as $key => $item)
                                                                                                    <tr>
                                                                                                        <td
                                                                                                            class="text-capitalize font-weight-bold">
                                                                                                            @php
                                                                                                                $key = str_replace('_', ' ', $key);
                                                                                                            @endphp
                                                                                                            {{ $key }}:
                                                                                                        </td>
                                                                                                        <td>{{ $item }}
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                @endforeach
                                                                                            </table>
                                                                                        @endif
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane fade"
                                                                                id="assessment-tabs-simple" role="tabpanel"
                                                                                aria-labelledby="assessment-tabs-simple-">
                                                                                <div class="card">
                                                                                    <div class="card-body">
                                                                                        @if (isset($assessment))
                                                                                            <table
                                                                                                class="table bordered table-responsive">
                                                                                                @foreach ($assessment as $key => $item)
                                                                                                    <tr>
                                                                                                        <td
                                                                                                            class="text-capitalize font-weight-bold">
                                                                                                            @php
                                                                                                                $key = str_replace('_', ' ', $key);
                                                                                                            @endphp
                                                                                                            {{ $key }}:
                                                                                                        </td>
                                                                                                        <td>{{ $item }}
                                                                                                        </td>
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
                                                            <div class="tab-pane fade" id="ex3-tab-2" role="tabpanel"
                                                                aria-labelledby="ex3-tab-2">

                                                                <div class="row mb-3">
                                                                    <div class="col-md-4">
                                                                        <button id="show-button" onclick="addReportButton()"
                                                                            class="btn btn-sm btn-dark">Add Report</button>
                                                                        <button id="hide-button" class="btn btn-sm btn-dark"
                                                                            style="display: none" onclick="HideReportForm()"
                                                                            type="button">Hide</button>
                                                                    </div>
                                                                    <div id="report-div" style="display: none">
                                                                        <form role="form" method="POST"
                                                                            action="{{ route('patient-report') }}">
                                                                            @csrf
                                                                            <input type="hidden" name="detail_id"
                                                                                value="{{ $user_data->id }}">
                                                                            <div class="mb-3">
                                                                                <textarea type="text" name="report" class="form-control" rows="5" placeholder="Write Record"
                                                                                    aria-label="text" value="">{{ old('report') }}</textarea>
                                                                            </div>
                                                                            <div class="text-end mb-3 mt-4">
                                                                                <button
                                                                                    class="btn bg-gradient-dark ms-auto mb-0"
                                                                                    type="submit">Add Report</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>

                                                            @if (isset($reports))
                                                                @foreach ($reports as $report)
                                                                <div class="card mb-4">
                                                                    <div class="card-body">
                                                                        <div class="chat-message">
                                                                            <p class="message-body mb-0">
                                                                                <ul><li>{{$report->report}}</li></ul>
                                                                            </p>
                                                                            <small class="d-block text-muted" style="letter-spacing: 2px">
                                                                                Update by <b> {{$report->doctor->name}}</b>
                                                                            </small>
                                                                            <small class="d-block text-muted" style="letter-spacing: 2px">
                                                                                On <b>{{$report->created_at->format('j F, Y g:i:s A')}}</b>
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @endforeach
                                                            @endif
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="card p-5">
                                        <div class="card-body py-5">
                                            <div class="text-center mt-4 mb-4">
                                                No data available yet, please check back later
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @else
                                <div class="card p-5">
                                    <div class="card-body py-5">
                                        <div class="text-center mt-4 mb-4">
                                            No data available yet, please check back later
                                        </div>
                                    </div>
                                </div>
                            @endisset
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        function addReportButton() {
            document.getElementById("report-div").style.display = "block"; //show
            document.getElementById("show-button").style.display = "none"; //show
            document.getElementById("hide-button").style.display = "block"; //show
        }

        function HideReportForm() {
            document.getElementById("report-div").style.display = "none"; //hide
            document.getElementById("show-button").style.display = "block"; //show
            document.getElementById("hide-button").style.display = "none"; //show
        }
    </script>
@endsection
