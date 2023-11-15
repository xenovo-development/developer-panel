@extends('layouts.vertical', ['page_title' => 'File Manager', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">File Manager</a></li>
                        <li class="breadcrumb-item active">Informations</li>
                    </ol>
                </div>
                <h4 class="page-title">File Manager</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->


</div> <!-- container -->
@endsection
