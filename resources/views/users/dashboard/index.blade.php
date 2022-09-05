@extends('layouts.user')
@section('content')
<style>
    h4{
        letter-spacing: 2px;
    }
    </style>
    <div class="row mb-5">
        <div class="col-lg-12 mt-lg-0 mt-4">
            <div class="row container">
                <div class="col-12">
                    <div class="multisteps-form">
                        <div class="row">
                            <div class="col-12 col-md-12 m-auto">
                                <div class="card p-5">
                                    <div class="card-body py-5">
                                       <h4><b>Welcome!</b></h4>
                                       <h4>Email: {{Auth::user()->email}}</h4>
                                       <h4>Unique ID: <b style=" text-transform: uppercase">{{Auth::user()->unique_id}}</b></h4>
                                       <h4>Date Reg: {{Auth::user()->created_at}}</h4>
                                       <h4>Report Status: </h4>
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
