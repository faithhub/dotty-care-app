@extends('layouts.user')
@section('content')
<style>
    h4{
        letter-spacing: 2px;
    }
    </style>
    <div class="row align-items-center">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card  mb-4">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Number Of Patient </p>
                                    <h5 class="font-weight-bolder">
                                        53,000
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card  mb-4">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Patients Treated</p>
                                    <h5 class="font-weight-bolder">
                                        2,300
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card  mb-4">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">BlaBlaBla</p>
                                    <h5 class="font-weight-bolder">
                                        +3,462
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-12 m-auto">
                <div class="card p-5">
                    <div class="card-body py-5">
                        <h4><b>Welcome!</b></h4>
                        <h4>Name: {{ Auth::user()->name }}</h4>
                        <h4>Email: {{ Auth::user()->email }}</h4>
                        <h4>Vehincle Number: <b style=" text-transform: uppercase">{{ Auth::user()->unique_id }}</b></h4>
                        <h4>Date Reg: {{ Auth::user()->created_at }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
