@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <h2 class="my-4 text-dark"><i class="fa fa-home"></i> Dashboard</h2>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="card text-white bg-primary">
                        <div class="card-body pb-0">
                            <div class="h1 float-right">
                                <i class="icon-people"></i>
                            </div>
                            <div class="text-value">{{ $clients }}</div>
                            <div>Client(s)</div>
                        </div>
                        <div class="chart-wrapper mt-3" style="height:70px;">
                            <canvas class="chart" id="card-chart3" height="70"></canvas>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-4">
                    <div class="card text-white bg-primary">
                        <div class="card-body pb-0">
                            <div class="h1 float-right">
                                <i class="fa fa-car"></i>
                            </div>
                            <div class="text-value">{{ $vehicles }}</div>
                            <div>Vehicle(s)</div>
                        </div>
                        <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                            <canvas class="chart" id="card-chart1" height="70"></canvas>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-4">
                    <div class="card text-white bg-primary">
                        <div class="card-body pb-0">
                            <div class="h1 float-right">
                                <i class="fa fa-warning"></i>
                            </div>
                            <div class="text-value">{{ $violations }}</div>
                            <div>Violation(s)</div>
                        </div>
                        <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                        <canvas class="chart" id="card-chart4" height="70"></canvas>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
            </div>
            <!-- /.row-->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-5">
                            <h4 class="card-title mb-0">Summary</h4>
                            <div class="small text-muted">November 2019</div>
                        </div>
                        <!-- /.col-->
                        <div class="col-sm-7 d-none d-md-block">
                            <button class="btn btn-primary float-right" type="button">
                                <i class="icon-cloud-download"></i>
                            </button>
                            <div class="btn-group btn-group-toggle float-right mr-3" data-toggle="buttons">
                                <label class="btn btn-outline-secondary">
                                    <input id="option1" type="radio" name="options" autocomplete="off"> Day
                                </label>
                                <label class="btn btn-outline-secondary active">
                                    <input id="option2" type="radio" name="options" autocomplete="off" checked=""> Month
                                </label>
                                <label class="btn btn-outline-secondary">
                                    <input id="option3" type="radio" name="options" autocomplete="off"> Year
                                </label>
                            </div>
                        </div>
                        <!-- /.col-->
                    </div>
                    <!-- /.row-->
                    <div class="chart-wrapper" style="height:300px;margin-top:40px;">
                        <canvas class="chart" id="main-chart" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection