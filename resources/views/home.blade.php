@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')

 {{-- <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Sales Overview</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12 col-lg-8">
                                <div id="morris-bar-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-xxl-6 col-xl-4 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Product Sold</h4>
                        <div class="card-action">
                            <div class="dropdown custom-dropdown">
                                <div data-toggle="dropdown">
                                    <i class="ti-more-alt"></i>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Option 1</a>
                                    <a class="dropdown-item" href="#">Option 2</a>
                                    <a class="dropdown-item" href="#">Option 3</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart py-4">
                            <canvas id="sold-product"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
<div class="row">
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="stat-widget-two card-body">
                <div class="stat-content">
                    <div class="stat-text">Total Order </div>
                    <div class="stat-digit">{{$orders->count()}}</div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-primary w-{{$orders->count()}}0" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="stat-widget-two card-body">
                <div class="stat-content">
                    <div class="stat-text">Processing</div>
                    <div class="stat-digit">{{$processing->count()}}</div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-warning w-{{$processing->count()}}0" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="stat-widget-two card-body">
                <div class="stat-content">
                    <div class="stat-text">Delivered</div>
                    <div class="stat-digit"> {{$delivered->count()}}</div>
                </div>
                <div class="progress">
                    <div class="progress-bar  progress-bar-success w-{{$delivered->count()}}0" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="stat-widget-two card-body">
                <div class="stat-content">
                    <div class="stat-text">Canceled</div>
                    <div class="stat-digit">{{$canceled->count()}}</div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-danger w-{{$canceled->count()}}0" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->
</div>
@endsection
