@extends('layouts.vertical', ['page_title' => 'Profile', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

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
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Profile</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="/images/users/avatar-1.jpg" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">

                        <h4 class="mb-1 mt-2">{{auth()->user()->name}}</h4>
                        <p class="text-muted">{{auth()->user()->role}}</p>

                        <div class="text-start mt-3">
                            <h4 class="fs-13 text-uppercase mb-2">Contact</h4>
                            <p class="text-muted mb-2"><strong>Username :</strong> <span class="ms-2 ">{{auth()->user()->name}}</span></p>
                            <p class="text-muted mb-2"><strong>Email :</strong> <span class="ms-2 ">{{auth()->user()->email}}</span></p>
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card -->



            </div> <!-- end col-->

            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-2">Update Profile</h4>
                        <p class="text-muted fs-14 mb-4">You can update your e-mail address or password from the form below.</p>

                        <form class="form-horizontal">
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-3 col-form-label">Email</label>
                                <div class="col-9">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-3 col-form-label">Password</label>
                                <div class="col-9">
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword5" class="col-3 col-form-label">Re Password</label>
                                <div class="col-9">
                                    <input type="password" class="form-control" id="inputPassword5" placeholder="Retype Password">
                                </div>
                            </div>
                            <div class="justify-content-end row mb-3">
                                <div class="col-9">
                                    <button type="submit" class="btn btn-info">Update</button>
                                </div>
                            </div>
                        </form>
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->

        </div>
        <!-- end row-->

    </div>
    <!-- container -->
@endsection

@section('script')
    @vite(['resources/js/pages/demo.profile.js'])
@endsection
