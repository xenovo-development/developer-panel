@extends('layouts.vertical', ['page_title' => 'Bluepalm', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
@endsection

@section('content')
     <!-- Start Content-->
     <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Bluepalm</a></li>
                            <li class="breadcrumb-item active">Informations</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Bluepalm</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <!-- project card -->
                <div class="card d-block">
                    <div class="card-body">
                        <div class="clearfix"></div>

                        <h4 class="mt-2">Bluepalm Website</h4>

                        <div class="row">
                            <div class="col-md-4">
                                <!-- assignee -->
                                <p class="mt-2 mb-1 text-muted">Assigned To</p>
                                <div class="mt-lg-0 mt-3">
                                    <div class="avatar-group">
                                        <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Damla">
                                            <img src="/images/users/damla.png" alt="" class="rounded-circle avatar-sm">
                                        </a>
                                        <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Emin">
                                            <img src="/images/users/emin.png" alt="" class="rounded-circle avatar-sm">
                                        </a>
                                    </div>
                                </div>
                                <!-- end assignee -->
                            </div>
                            <!-- end col -->

                            <div class="col-md-4">
                                <!-- start due date -->
                                <p class="mt-2 mb-1 text-muted">Project Name</p>
                                <div class="d-flex align-items-start">
                                    <i class="ri-award-line fs-18 text-success me-1"></i>
                                    <div class="w-100">
                                        <h5 class="mt-1">
                                            Bluepalm Website
                                        </h5>
                                    </div>
                                </div>
                                <!-- end due date -->
                            </div>

                            <div class="col-md-4">
                                <!-- start due date -->
                                <p class="mt-2 mb-1 text-muted">Technology</p>
                                <div class="d-flex align-items-start">
                                    <i class="ri-code-s-slash-fill fs-18 text-success me-1"></i>
                                    <div class="w-100">
                                        <h5 class="mt-1">
                                            Wordpress
                                        </h5>
                                    </div>
                                </div>
                                <!-- end due date -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <h5 class="mt-3">Overview:</h5>

                        <p class="text-muted">
                        bluepalmgroup.us is built on a robust and reliable technological infrastructure. Powered by WordPress, known for its flexibility and user-friendly interface, the site's foundation is strong. Additionally, it is integrated with the latest technologies to enhance security and performance.
                        </p>
                        <p class="text-muted">
                        With the 'Stock Offer' you can gain exclusive access to stocks and financial data.
                        </p>
                        <p class="text-muted mb-4">
                        Another option is 'Shareholder'; this choice provides access to exclusive content for company shareholders.
                        </p>
                        <h5 class="mb-3 d-inline-block">Live Link:</h5>
                        <a href="https://bluepalmgroup.us/" target="_blank" class="text-muted d-inline-block">
                            bluepalmgroup.us
                        </a>
                        <div class="row">
                            <div class="col-md-4">
                                <p class="mt-2 mb-1 text-muted">Colors</p>
                                <div class="d-flex align-items-start">
                                    <i class="ri-palette-line fs-18 text-success me-1"></i>
                                    <div class="w-100 color-box d-flex flex-wrap" style="gap: 10px;">
                                        <div class="d-flex flex-column align-items-center">
                                            <div class="color" style="background-color: #181b31; width: 30px; height: 30px;"></div>
                                            <span class="mt-2">#181b31</span>
                                        </div>
                                        <div class="d-flex flex-column align-items-center">
                                            <div class="color" style="background-color: #356a99; width: 30px; height: 30px;"></div>
                                            <span class="mt-2">#356a99</span>
                                        </div>
                                        <div class="d-flex flex-column align-items-center">
                                            <div class="color" style="background-color: #5d6371; width: 30px; height: 30px;"></div>
                                            <span class="mt-2">#5d6371</span>
                                        </div>
                                        <div class="d-flex flex-column align-items-center">
                                            <div class="color" style="background-color: #191919; width: 30px; height: 30px;"></div>
                                            <span class="mt-2">#191919</span>
                                        </div>
                                        <div class="d-flex flex-column align-items-center">
                                            <div class="color" style="background-color: #dedfe0; width: 30px; height: 30px;"></div>
                                            <span class="mt-2">#dedfe0</span>
                                        </div>
                                        <div class="d-flex flex-column align-items-center">
                                            <div class="color" style="background-color: #888888; width: 30px; height: 30px;"></div>
                                            <span class="mt-2">#888888</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <p class="mt-2 mb-1 text-muted">Fonts</p>
                                <div class="d-flex align-items-start">
                                    <i class="ri-font-size fs-18 text-success me-1"></i>
                                    <div class="w-100">
                                        <h5 class="mt-1">
                                            GT Walsheim, sans-serif
                                        </h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <p class="mt-2 mb-1 text-muted">Theme</p>
                                <div class="d-flex align-items-start">
                                    <i class="ri-brush-3-line fs-18 text-success me-1"></i>
                                    <div class="w-100">
                                        <h5 class="mt-1">
                                            Hub Child
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end card-body-->
                </div>
                <!-- end card-->
            </div>
            <!-- end col-12 -->
            <div class="col-xl-4 col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fs-16 mb-3">Attachments</h5>
                        <!-- Preview -->
                        <div class="dropzone-previews mt-3" id="file-previews"></div>

                        <!-- file preview template -->
                        <div class="d-none" id="uploadPreviewTemplate">
                            <div class="card mb-1 mb-0 shadow-none border">
                                <div class="p-2">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="" />
                                        </div>
                                        <div class="col ps-0">
                                            <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                                            <p class="mb-0" data-dz-size></p>
                                        </div>
                                        <div class="col-auto">
                                            <!-- Button -->
                                            <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                                <i class="ri-close-line"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end file preview template -->

                        <div class="card mb-1 shadow-none border">
                            <div class="p-2">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="avatar-sm">
                                            <span class="avatar-title bg-primary-subtle text-primary rounded">
                                                <img src="/images/logos/bluepalm_logo.png" alt="logo" width="40">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col ps-0">
                                        <a href="javascript:void(0);" class="text-muted fw-bold">Logo</a>
                                    </div>
                                    <div class="col-auto">
                                        <!-- Button -->
                                        <a href="{{env('APP_URL')}}/images/logos/bluepalm_logo.png" class="btn btn-link fs-16 text-muted" download="bluepalm_logo">
                                            <i class="ri-download-line"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-1 shadow-none border">
                            <div class="p-2">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="avatar-sm">
                                            <span class="avatar-title bg-primary-subtle text-primary rounded">
                                                <img src="/images/logos/favicon-bp.png" alt="logo" width="18">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col ps-0">
                                        <a href="javascript:void(0);" class="text-muted fw-bold">Favicon</a>
                                    </div>
                                    <div class="col-auto">
                                        <!-- Button -->
                                        <a href="{{env('APP_URL')}}/images/logos/favicon-bp.png" class="btn btn-link fs-16 text-muted" download="favicon">
                                            <i class="ri-download-line"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
{{--                        <div class="card mb-0 shadow-none border">--}}
{{--                            <div class="p-2">--}}
{{--                                <div class="row align-items-center">--}}
{{--                                    <div class="col-auto">--}}
{{--                                        <div class="avatar-sm">--}}
{{--                                            <span class="avatar-title bg-secondary rounded">--}}
{{--                                                ZIP--}}
{{--                                            </span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col ps-0">--}}
{{--                                        <a href="javascript:void(0);" class="text-muted fw-bold">Code</a>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-auto">--}}
{{--                                        <!-- Button -->--}}
{{--                                        <a href="javascript:void(0);" class="btn btn-link fs-16 text-muted">--}}
{{--                                            <i class="ri-download-line"></i>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                    </div>
                </div>
                <div class="card-body card cta-box text-bg-info">
                    <div class="text-center">
                        <h3 class="m-0 fw-normal cta-box-title">Go to <b>Bluepalm's</b> Developer Website.</h3>
                        <img class="my-3" src="/images/svg/startman.svg" width="138" alt="Generic placeholder image">
                        <br />
                        <a href="{{ route('second', ['apps', 'bluepalmdev']) }}" class="btn btn-sm btn-light rounded-pill">
                            <i class="ri-arrow-right-line"></i> Developer Website
                        </a>
                    </div>
                </div>
            </div>
        </div> <!-- end row -->

    </div> <!-- container -->
@endsection
