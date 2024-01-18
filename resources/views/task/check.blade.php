@extends('layouts.vertical', ['page_title' => 'Task List', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
    @vite(['node_modules/daterangepicker/daterangepicker.css', 'node_modules/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css'])
@endsection

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <div class="input-group">
                            <input type="text" class="form-control shadow border-0" id="dash-daterange" placeholder="{{\Request::query('date') ?? date('Y-m-d')}}">
                            <span class="input-group-text bg-success border-success text-white">
                                    <i class="ri-calendar-todo-fill fs-13"></i>
                                </span>
                        </div>
                    </div>
                    <h4 class="page-title">Websites</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <form action="{{route('check.submit')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="hiddenDate" name="date"/>
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <!-- project card -->
                    <div class="card d-block">
                        <div class="card-body">

                            <h4>Today's checklist</h4>


                            <h5 class="mt-3">Overview:</h5>

                            <p class="text-muted mb-4">
                                All websites should be clicked one by one, their SSLs should be checked, navigation
                                links should be visited, all forms must be submitted and anything that does not work should be noted.
                            </p>

                            <!-- start websites -->
                            <h5 class="mt-4 mb-2">Websites</h5>
                            @if (sizeof($errors) > 0)
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li class="text-danger">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            <div class="row">
                                <div class="col col-md-6">
                                    <div class="form-check mt-1">
                                        <input type="checkbox" name="websites[]" class="form-check-input"
                                               id="checklist1" value="xenovo.com.tr"
                                            {{in_array('xenovo.com.tr',$checkData['websites'] ?? []) ? 'checked':''}}/>
                                        <label class="form-check-label strikethrough" for="checklist1">
                                            xenovo.com.tr <a href="https://xenovo.com.tr" target="_blank"><i
                                                    class="ri-links-line"></i> Link</a>
                                        </label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input type="checkbox" name="websites[]" class="form-check-input"
                                               id="checklist2"
                                               value="bluepalmgroup.us"
                                            {{in_array('bluepalmgroup.us',$checkData['websites'] ?? []) ? 'checked':''}}/>
                                        <label class="form-check-label strikethrough" for="checklist2">
                                            bluepalmgroup.us <a href="https://bluepalmgroup.us" target="_blank"><i
                                                    class="ri-links-line"></i> Link</a>
                                        </label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input type="checkbox" name="websites[]" class="form-check-input"
                                               id="checklist3"
                                               value="info.hostingeurope.group"
                                            {{in_array('info.hostingeurope.group',$checkData['websites'] ?? []) ? 'checked':''}}/>
                                        <label class="form-check-label strikethrough" for="checklist3">
                                            info.hostingeurope.group <a href="https://info.hostingeurope.group"
                                                                        target="_blank"><i class="ri-links-line"></i>
                                                Link</a>
                                        </label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input type="checkbox" name="websites[]" class="form-check-input"
                                               id="checklist4"
                                               value="dashboard.hostingeurope.group"
                                            {{in_array('dashboard.hostingeurope.group',$checkData['websites'] ?? []) ? 'checked':''}}
                                        />
                                        <label class="form-check-label strikethrough" for="checklist4">
                                            dashboard.hostingeurope.group <a
                                                href="https://dashboard.hostingeurope.group" target="_blank"><i
                                                    class="ri-links-line"></i> Link</a>
                                        </label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input type="checkbox" name="websites[]" class="form-check-input"
                                               id="checklist5" value="frezyahotel.com"
                                            {{in_array('frezyahotel.com',$checkData['websites'] ?? []) ? 'checked':''}}
                                        />
                                        <label class="form-check-label strikethrough" for="checklist5">
                                            frezyahotel.com <a href="https://frezyahotel.com" target="_blank"><i
                                                    class="ri-links-line"></i> Link</a>
                                        </label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input type="checkbox" name="websites[]" class="form-check-input"
                                               id="checklist6" value="frezyakizyurdu.com"
                                            {{in_array('frezyakizyurdu.com',$checkData['websites'] ?? []) ? 'checked':''}}
                                        />
                                        <label class="form-check-label strikethrough" for="checklist6">
                                            frezyakizyurdu.com <a href="https://frezyakizyurdu.com" target="_blank"><i
                                                    class="ri-links-line"></i> Link</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col col-md-6">
                                    <div class="form-check mt-1">
                                        <input type="checkbox" name="websites[]" class="form-check-input"
                                               id="checklist7" value="dynamicworks.group"
                                            {{in_array('dynamicworks.group',$checkData['websites'] ?? []) ? 'checked':''}}
                                        />
                                        <label class="form-check-label strikethrough" for="checklist7">
                                            dynamicworks.group <a href="https://dynamicworks.group" target="_blank"><i
                                                    class="ri-links-line"></i> Link</a>
                                        </label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input type="checkbox" name="websites[]" class="form-check-input"
                                               id="checklist8" value="rainer.com.tr"
                                            {{in_array('rainer.com.tr',$checkData['websites'] ?? []) ? 'checked':''}}
                                        />
                                        <label class="form-check-label strikethrough" for="checklist8">
                                            rainer.com.tr <a href="https://rainer.com.tr" target="_blank"><i
                                                    class="ri-links-line"></i> Link</a>
                                        </label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input type="checkbox" name="websites[]" class="form-check-input"
                                               id="checklist9" value="guest24.services"
                                            {{in_array('guest24.services',$checkData['websites'] ?? []) ? 'checked':''}}
                                        />
                                        <label class="form-check-label strikethrough" for="checklist9">
                                            guest24.services <a href="https://guest24.services" target="_blank"><i
                                                    class="ri-links-line"></i> Link</a>
                                        </label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input type="checkbox" name="websites[]" class="form-check-input"
                                               id="checklist10" value="reloxx.co.uk"
                                            {{in_array('reloxx.co.uk',$checkData['websites'] ?? []) ? 'checked':''}}
                                        />
                                        <label class="form-check-label strikethrough" for="checklist10">
                                            reloxx.co.uk <a href="https://reloxx.co.uk" target="_blank"><i
                                                    class="ri-links-line"></i> Link</a>
                                        </label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input type="checkbox" name="websites[]" class="form-check-input"
                                               id="checklist11" value="motokitchen.com.tr"
                                            {{in_array('motokitchen.com.tr',$checkData['websites'] ?? []) ? 'checked':''}}
                                        />
                                        <label class="form-check-label strikethrough" for="checklist11">
                                            motokitchen.com.tr <a href="https://motokitchen.com.tr" target="_blank"><i
                                                    class="ri-links-line"></i> Link</a>
                                        </label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input type="checkbox" name="websites[]" class="form-check-input"
                                               id="checklist12" value="quandbusiness.com"
                                            {{in_array('quandbusiness.com',$checkData['websites'] ?? []) ? 'checked':''}}
                                        />
                                        <label class="form-check-label strikethrough" for="checklist12">
                                            quandbusiness.com <a href="https://quandbusiness.com" target="_blank"><i
                                                    class="ri-links-line"></i> Link</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- end websites -->
                        </div>
                        <!-- end card-body-->
                    </div>
                    <!-- end card-->

                    <div class="card">
                        <div class="card-body">

                            <h4 class="mb-4 mt-0 fs-16">Notes</h4>


                            <div class="d-flex align-items-start">
                                <img class="me-2 rounded-circle"
                                     src="{{'/images/users/' . ($checkData['attendant'] ?? 'user') . '.png'}}"
                                     alt="Generic placeholder image" height="32"/>
                                <div class="w-100">
                                    <h5 class="mt-0">{{$checkData['attendant'] ?? '-'}}</h5>
                                    {{$checkData['notes'] ?? '-'}}
                                    <br/>
                                </div>
                            </div>
                            <div class="border rounded mt-4">
                                <textarea rows="3" class="form-control border-0 resize-none"
                                          placeholder="Your comment..." name="notes"></textarea>
                                <div class="p-2 bg-light d-flex justify-content-between align-items-center">
                                    <div>

                                    </div>
                                    <button type="submit" class="btn btn-sm btn-success"><i
                                            class="ri-send-plane-2 me-1"></i>Submit
                                    </button>
                                </div>
                            </div>
                            <!-- end .border-->
                        </div>
                        <!-- end card-body-->
                    </div>
                    <!-- end card-->
                </div>
                <!-- end col -->

                <div class="col-xl-4 col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fs-16 mb-3">Attachments</h5>
                            <input class="form-control mb-3" name="files[]" type="file" multiple/>
                            @if(isset($checkData['file']))
                                @foreach(json_decode($checkData['file']) as $file)
                                    <div class="card mb-1 shadow-none border">
                                        <div class="p-2">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="avatar-sm">
                                                        <span
                                                            class="avatar-title bg-primary-subtle text-primary rounded">IMG</span>
                                                    </div>
                                                </div>
                                                <div class="col ps-0">
                                                    <a href="{{ asset('storage/' . $file) }}" class="text-muted fw-bold"
                                                       download="{{$file}}">{{$file}}</a>
                                                </div>
                                                <div class="col-auto">
                                                    <!-- Download Button -->
                                                    <a href="{{ asset('storage/' . $file) }}"
                                                       class="btn btn-link fs-16 text-muted" download="{{$file}}">
                                                        <i class="ri-download-line"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="card mb-1 shadow-none border">
                                    <p class="text-center mt-2">No file</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </form>
    </div> <!-- container -->
@endsection

@section('script')
    @vite(['resources/js/pages/component.fileupload.js'])
@endsection
