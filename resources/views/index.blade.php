@extends('layouts.vertical', ['page_title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
    @vite(['node_modules/daterangepicker/daterangepicker.css', 'node_modules/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css'])
    <style>
        .fixed-height-card {
            min-height: 200px;
        }
    </style>
@endsection

@section('content')
         <!-- Start Content-->
         <div class="container-fluid">

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Dashboard</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
        <a href="{{ route('second', ['apps', 'xenovodev']) }}" class="card cta-box overflow-hidden fixed-height-card">
            <div class="card-body d-flex align-items-center justify-content-center">
                <div class="d-flex align-items-center justify-content-center">
                    <img class="ms-3" src="/images/logos/xenovo_logo.png" width="200" alt="Xenovo Logo">
                </div>
            </div>
            <!-- end card-body -->
        </a>
    </div> <!-- end col --> 
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
        <a href="{{ route('second', ['apps', 'bluepalmdev']) }}" class="card cta-box overflow-hidden fixed-height-card">
            <div class="card-body d-flex align-items-center justify-content-center">
                <div class="d-flex align-items-center justify-content-center">
                    <img class="ms-3" src="/images/logos/bluepalm_logo.png" width="200" alt="Bluepalm Logo">
                </div>
            </div>
            <!-- end card-body -->
        </a>
    </div> <!-- end col -->
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
        <a href="{{ route('second', ['apps', 'hostinginfodev']) }}" class="card cta-box overflow-hidden fixed-height-card">
            <div class="card-body d-flex align-items-center justify-content-center">
                <div class="d-flex align-items-center justify-content-center">
                    <img class="ms-3" src="/images/logos/hostingeurope_logo.png" width="200" alt="Hosting Europe Logo">
                </div>
            </div>
            <!-- end card-body -->
        </a>
    </div> <!-- end col -->
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
        <a href="{{ route('second', ['apps', 'hostingeuropedashboarddev']) }}" class="card cta-box overflow-hidden fixed-height-card">
            <div class="card-body d-flex align-items-center justify-content-center">
                <div class="d-flex align-items-center justify-content-center">
                    <img class="ms-3" src="/images/logos/hostingeuropedashboard-logo.png" width="200" alt="Hosting Europe Logo">
                </div>
            </div>
            <!-- end card-body -->
        </a>
    </div> <!-- end col -->
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
        <a href="{{ route('second', ['apps', 'frezyahoteldev']) }}" class="card cta-box overflow-hidden fixed-height-card">
            <div class="card-body d-flex align-items-center justify-content-center">
                <div class="d-flex align-items-center justify-content-center">
                    <img class="ms-3" src="/images/logos/frezyahotel_logo.png" width="200" alt="Frezya Logo">
                </div>
            </div>
            <!-- end card-body -->
        </a>
    </div> <!-- end col -->
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
        <a href="{{ route('second', ['apps', 'frezyakizyurdudev']) }}" class="card cta-box overflow-hidden fixed-height-card">
            <div class="card-body d-flex align-items-center justify-content-center">
                <div class="d-flex align-items-center justify-content-center">
                    <img class="ms-3" src="/images/logos/frezya-logo.png" width="200" alt="Frezya Logo">
                </div>
            </div>
            <!-- end card-body -->
        </a>
    </div> <!-- end col -->
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
        <a href="{{ route('second', ['apps', 'dynamicworksdev']) }}" class="card cta-box overflow-hidden fixed-height-card">
            <div class="card-body d-flex align-items-center justify-content-center">
                <div class="d-flex align-items-center justify-content-center">
                    <img class="ms-3" src="/images/logos/dynamicworks_logo.png" width="200" alt="Dynamic Works Logo">
                </div>
            </div>
            <!-- end card-body -->
        </a>
    </div> <!-- end col -->
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
        <a href="{{ route('second', ['apps', 'rainerdev']) }}" class="card cta-box overflow-hidden fixed-height-card">
            <div class="card-body d-flex align-items-center justify-content-center">
                <div class="d-flex align-items-center justify-content-center">
                    <img class="ms-3" src="/images/logos/rainer_logo.png" width="200" alt="Rainer Logo">
                </div>
            </div>
            <!-- end card-body -->
        </a>
    </div> <!-- end col -->
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
        <a href="{{ route('second', ['apps', 'guest24dev']) }}" class="card cta-box overflow-hidden fixed-height-card">
            <div class="card-body d-flex align-items-center justify-content-center">
                <div class="d-flex align-items-center justify-content-center">
                    <img class="ms-3" src="/images/logos/g24_logo.png" width="200" alt="G24 Logo">
                </div>
            </div>
            <!-- end card-body -->
        </a>
    </div> <!-- end col -->
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
        <a href="{{ route('second', ['apps', 'reloxxdev']) }}" class="card cta-box overflow-hidden fixed-height-card">
            <div class="card-body d-flex align-items-center justify-content-center">
                <div class="d-flex align-items-center justify-content-center">
                    <img class="ms-3" src="/images/logos/reloxx_logo.png" width="200" alt="Reloxx Logo">
                </div>
            </div>
            <!-- end card-body -->
        </a>
    </div> <!-- end col -->
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
        <a href="{{ route('second', ['apps', 'motokitchendev']) }}" class="card cta-box overflow-hidden fixed-height-card">
            <div class="card-body d-flex align-items-center justify-content-center">
                <div class="d-flex align-items-center justify-content-center">
                    <img class="ms-3" src="/images/logos/moto_logo.png" width="200" alt="Moto Logo">
                </div>
            </div>
            <!-- end card-body -->
        </a>
    </div> <!-- end col -->
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
        <a href="{{ route('second', ['apps', 'quanddev']) }}" class="card cta-box overflow-hidden fixed-height-card">
            <div class="card-body d-flex align-items-center justify-content-center">
                <div class="d-flex align-items-center justify-content-center">
                    <img class="ms-3" src="/images/logos/quand-logo.png" width="200" alt="Quand Logo">
                </div>
            </div>
            <!-- end card-body -->
        </a>
    </div> <!-- end col -->
   
</div>

</div>
<!-- container -->
@endsection

@section('script')
    @vite(['resources/js/pages/demo.dashboard.js'])
@endsection
