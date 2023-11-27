@extends('layouts.vertical', ['page_title' => 'Frezya Kız Yurdu Dev', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
<style>
    .iframe-loader {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 50px;
        height: 50px;
        border: 5px solid #f3f3f3;
        border-top: 5px solid #3498db;
        border-radius: 50%;
        animation: spin 1s linear infinite;
        z-index: 9999;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>
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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Frezya Kız Yurdu</a></li>
                            <li class="breadcrumb-item active">Frezya Kız Yurdu Developer</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Frezya Kız Yurdu</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-12 col-lg-7">
                <!-- project card -->
                <div class="card d-block">
                    <div class="card-body">
                        <div class="clearfix"></div>
                        <h4 class="mt-2 mb-2">Frezya Kız Yurdu Website</h4>
                        <p class="text-muted">
                        Below you can see an image of the test site of the Frezya Kız Yurdu website.
                       </p>
                       <h5 class="mb-3 d-inline-block">Developer Website Link:</h5>
                        <a href="https://dev.frezyakizyurdu.com/" target="_blank" class="text-muted d-inline-block">
                        dev.frezyakizyurdu.com
                        </a>
                        <!-- İframe ekleyelim -->
                        <!-- end row -->
                    </div>
                    <!-- end card-body-->
                </div>
                <iframe src="https://dev.frezyakizyurdu.com/?iframe=true" width="100%" height="800px" style="border: none;"></iframe>
                <!-- end card-->
            </div>
            <!-- end col-12 -->
        </div> <!-- end row -->

    </div> <!-- container -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var iframe = document.querySelector('iframe');
            var loader = document.createElement('div');
            loader.className = 'iframe-loader';
            document.body.appendChild(loader);

            iframe.addEventListener('load', function () {
                loader.style.display = 'none';
            });
        });
    </script>
@endsection
