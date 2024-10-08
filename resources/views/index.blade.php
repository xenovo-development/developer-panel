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
                <h5 class="">Developer Websites</h5>
              <p>* You can view only developer websites by clicking on the logos below. To visit the main websites, please use the menu on the left.</p>
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
            </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <a href="{{ route('second', ['apps', 'bluepalmdev']) }}" class="card cta-box overflow-hidden fixed-height-card">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="ms-3" src="/images/logos/bluepalm_logo.png" width="200" alt="Bluepalm Logo">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <a href="{{ route('second', ['apps', 'bluepalmhostingservicesdev']) }}" class="card cta-box overflow-hidden fixed-height-card">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="ms-3" src="/images/logos/bp-hs-logo-v2.png" width="200" alt="Hosting Europe Logo">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <a href="{{ route('second', ['apps', 'bluepalmhostingservicesdashboarddev']) }}" class="card cta-box overflow-hidden fixed-height-card">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="ms-3" src="/images/logos/BP-services-dashboard-logo.png" width="200" alt="Hosting Europe Logo">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <a href="{{ route('second', ['apps', 'frezyahoteldev']) }}" class="card cta-box overflow-hidden fixed-height-card">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="ms-3" src="/images/logos/frezyahotel_logo.png" width="300" alt="Frezya Logo">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <a href="{{ route('second', ['apps', 'frezyakizyurdudev']) }}" class="card cta-box overflow-hidden fixed-height-card">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="ms-3" src="/images/logos/frezya_logo.png" width="300" alt="Frezya Logo">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <a href="{{ route('second', ['apps', 'dynamicworksdev']) }}" class="card cta-box overflow-hidden fixed-height-card">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="ms-3" src="/images/logos/dynamicworks_logo.png" width="200" alt="Dynamic Works Logo">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <a href="{{ route('second', ['apps', 'guest24dev']) }}" class="card cta-box overflow-hidden fixed-height-card">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="ms-3" src="/images/logos/g24_logo.png" width="200" alt="G24 Logo">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <a href="{{ route('second', ['apps', 'rainerdev']) }}" class="card cta-box overflow-hidden fixed-height-card">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="ms-3" src="/images/logos/rainer_tesis_logo.png" width="200" alt="Rainer Logo">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <a href="{{ route('second', ['apps', 'swwebsitedev']) }}" class="card cta-box overflow-hidden fixed-height-card">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="ms-3" src="/images/logos/stephan.png" width="200" alt="Quand Logo">
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <a href="{{ route('second', ['apps', 'tectamundidev']) }}" class="card cta-box overflow-hidden fixed-height-card">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="ms-3" src="/images/logos/tectamundi-logo.png" width="200" alt="Quand Logo">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <a href="{{ route('second', ['apps', 'tectamundiassetdev']) }}" class="card cta-box overflow-hidden fixed-height-card">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="ms-3" src="/images/logos/tecta-mundi-asset-logo.png" width="200" alt="Quand Logo">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <a href="{{ route('second', ['apps', 'motokitchendev']) }}" class="card cta-box overflow-hidden fixed-height-card">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="ms-3" src="/images/logos/moto_logo.png" width="200" alt="Moto Logo">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <a href="{{ route('second', ['apps', 'hostinginfodev']) }}" class="card cta-box overflow-hidden fixed-height-card">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="ms-3" src="/images/logos/hostingeurope_logo.png" width="200" alt="Hosting Europe Logo">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <a href="{{ route('second', ['apps', 'hostingeuropedashboarddev']) }}" class="card cta-box overflow-hidden fixed-height-card">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="ms-3" src="/images/logos/hostingeuropedashboard-logo.png" width="200" alt="Hosting Europe Logo">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <a href="{{ route('second', ['apps', 'cwgrupdev']) }}" class="card cta-box overflow-hidden fixed-height-card">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="ms-3" src="/images/logos/cw-logo.png" width="150" alt="Quand Logo">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <a href="{{ route('second', ['apps', 'amazonriverfunddev']) }}" class="card cta-box overflow-hidden fixed-height-card">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="ms-3" src="/images/logos/amazon-logo-light.png" width="150" alt="Quand Logo">
                    </div>
                </div>
            </a>
        </div> 
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <a href="{{ route('second', ['apps', 'dwmsdev']) }}" class="card cta-box overflow-hidden fixed-height-card">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="ms-3" src="/images/logos/dw-media-services-logo.png" width="200" alt="Quand Logo">
                    </div>
                </div>
            </a>
        </div> 
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <a href="{{ route('second', ['apps', 'rerentdev']) }}" class="card cta-box overflow-hidden fixed-height-card">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="ms-3" src="/images/logos/rerent-logo.png" width="200" alt="Quand Logo">
                    </div>
                </div>
            </a>
        </div> 
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <a href="{{ route('second', ['apps', 'reloxxdev']) }}" class="card cta-box overflow-hidden fixed-height-card">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="ms-3" src="/images/logos/reloxx_logo.png" width="200" alt="Reloxx Logo">
                    </div>
                </div>
            </a>
        </div> 
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <a href="{{ route('second', ['apps', 'salesexpertsdev']) }}" class="card cta-box overflow-hidden fixed-height-card">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="ms-3" src="/images/logos/sales-logo.png" width="200" alt="Quand Logo">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <a href="{{ route('second', ['apps', 'odsoldrivedev']) }}" class="card cta-box overflow-hidden fixed-height-card">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="ms-3" src="/images/logos/odsol-drive-logo-version-3.png" width="160" alt="Quand Logo">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <a href="{{ route('second', ['apps', 'odsolmaildev']) }}" class="card cta-box overflow-hidden fixed-height-card">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="ms-3" src="/images/logos/odsol-mail-logo-version-3.png" width="130" alt="Quand Logo">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <a href="{{ route('second', ['apps', 'sabdev']) }}" class="card cta-box overflow-hidden fixed-height-card">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="ms-3" src="/images/logos/sab-logo-blue.png" width="150" alt="Quand Logo">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <a href="{{ route('second', ['apps', 'quanddev']) }}" class="card cta-box overflow-hidden fixed-height-card">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="ms-3" src="/images/logos/quand-logo.png" width="200" alt="Quand Logo">
                    </div>
                </div>
            </a>
        </div> 
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <a href="{{ route('second', ['apps', 'eprisdev']) }}" class="card cta-box overflow-hidden fixed-height-card">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="ms-3" src="/images/logos/epris-logo.png" width="200" alt="Quand Logo">
                    </div>
                </div>
            </a>
        </div> 
    </div>

</div>
<!-- container -->
@endsection

@section('script')
@vite(['resources/js/pages/demo.dashboard.js'])
@endsection