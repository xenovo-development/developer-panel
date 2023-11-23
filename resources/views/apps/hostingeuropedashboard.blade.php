@extends('layouts.vertical', ['page_title' => 'Hosting Europe Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
    @vite(['node_modules/quill/dist/quill.core.css', 'node_modules/quill/dist/quill.snow.css'])
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
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Hosting Europe Dashboard</a></li>
                    <li class="breadcrumb-item active">Informations</li>
                </ol>
            </div>
            <h4 class="page-title">Hosting Europe Dashboard</h4>
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

                <h4 class="mt-2">Hosting Europe Dashboard Website</h4>

                <div class="row">
                    <div class="col-md-4">
                        <!-- assignee -->
                        <p class="mt-2 mb-1 text-muted">Assigned To</p>
                        <div class="mt-lg-0 mt-3">
                            <div class="avatar-group">
                                <a href="javascript: void(0);" class="avatar-group-item bg-light border" data-bs-toggle="tooltip" data-bs-placement="top" title="Damla">
                                    <img src="/images/users/Emin.png" alt="" class="rounded-circle avatar-sm">
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
                                    Hosting Europe Dashboard Website
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
                                    Php - Laravel
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
                This website is under development. The domain address may change. 
                </p>

                <h5 class="mb-3 d-inline-block">Live Link:</h5>
                <a href="https://dashboard.hostingeurope.info/" target="_blank" class="text-muted d-inline-block">
                dashboard.hostingeurope.info
                </a>
                <div class="row">
                    <div class="col-md-4">
                        <p class="mt-2 mb-1 text-muted">Colors</p>
                        <div class="d-flex align-items-start">
                            <i class="ri-palette-line fs-18 text-success me-1"></i>
                            <div class="w-100 color-box d-flex flex-wrap" style="gap: 10px;">
                                <div class="d-flex flex-column align-items-center">
                                    <div class="color" style="background-color: #7d8dff; width: 30px; height: 30px;"></div>
                                    <span class="mt-2">#7d8dff</span>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div class="color" style="background-color: #f46f58; width: 30px; height: 30px;"></div>
                                    <span class="mt-2">#f46f58</span>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div class="color" style="background-color: #e9ecef; width: 30px; height: 30px;"></div>
                                    <span class="mt-2">#e9ecef</span>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div class="color" style="background-color: #f8c659; width: 30px; height: 30px;"></div>
                                    <span class="mt-2">#f8c659</span>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div class="color" style="background-color: #2a2c39; width: 30px; height: 30px;"></div>
                                    <span class="mt-2">#2a2c39</span>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div class="color" style="background-color: #f8f9fa; width: 30px; height: 30px;"></div>
                                    <span class="mt-2">#f8f9fa</span>
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
                                    Nunito, sans-serif
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
                                    Essentials Child
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
                                        <img src="/images/logos/hostingeuropedashboard-logo.png" alt="logo" width="40">
                                    </span>
                                </div>
                            </div>
                            <div class="col ps-0">
                                <a class="text-muted fw-bold">Logo</a>
                            </div>
                            <div class="col-auto">
                                <!-- Button -->
                                <a href="{{env('APP_URL')}}/images/logos/hostingeuropedashboard-logo.png" class="btn btn-link fs-16 text-muted" download="hostingeurope_logo">
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
                                        <img src="/images/logos/favicon-he.png" alt="logo" width="25">
                                    </span>
                                </div>
                            </div>
                            <div class="col ps-0">
                                <a class="text-muted fw-bold">Favicon</a>
                            </div>
                            <div class="col-auto">
                                <!-- Button -->
                                <a href="{{env('APP_URL')}}/images/logos/favicon-he.png" class="btn btn-link fs-16 text-muted" download="favicon">
                                    <i class="ri-download-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-0 shadow-none border">
                    <div class="p-2">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-primary-subtle rounded">
                                        <i class="ri-github-fill" style="font-size: 22px; color:#010409"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col ps-0">
                                <a class="text-muted fw-bold">Code</a>
                            </div>
                            <div class="col-auto">
                                <!-- Button -->
                                <a href="javascript:void(0);" class="btn btn-link fs-16 text-muted">
                                    <i class="ri-link"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-0 shadow-none border">
                            <div class="p-2">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="avatar-sm">
                                            <span class="avatar-title bg-primary-subtle rounded">
                                            <img src="/images/logos/drive-icon.png" alt="logo" width="22">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col ps-0">
                                        <a href="https://drive.google.com/drive/folders/1vBQe7NzC1tY76EMoQoEL_A7pWpqTCa4R?usp=drive_link" target="_blank" class="text-muted fw-bold">Drive</a>
                                    </div>
                                    <div class="col-auto">
                                        <!-- Button -->
                                        <a href="https://drive.google.com/drive/folders/1vBQe7NzC1tY76EMoQoEL_A7pWpqTCa4R?usp=drive_link" target="_blank" class="btn btn-link fs-16 text-muted">
                                            <i class="ri-link"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
            <div class="card-body card cta-box text-bg-info">
                <div class="text-center">
                    <h3 class="m-0 fw-normal cta-box-title">Go to <b>Hosting Europe Dashboard's</b> Developer Website.</h3>
                    <img class="my-3" src="/images/svg/startman.svg" width="138" alt="Generic placeholder image">
                    <br />
                    <a href="{{ route('second', ['apps', 'hostingeuropedashboarddev']) }}" class="btn btn-sm btn-light rounded-pill">
                        <i class="ri-arrow-right-line"></i> Developer Website
                    </a>
                </div>
            </div>
    </div>
</div> <!-- end row -->
</div> <!-- container -->
@endsection

@section('script')
    @vite(['resources/js/pages/demo.inbox.js'])
@endsection
