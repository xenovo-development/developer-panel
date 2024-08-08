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
                                               id="checklist2" value="db.xenovo.com.tr"
                                            {{in_array('db.xenovo.com.tr',$checkData['websites'] ?? []) ? 'checked':''}}
                                        />
                                        <label class="form-check-label strikethrough" for="checklist2">
                                            db.xenovo.com.tr <a href="https://db.xenovo.com.tr" target="_blank"><i
                                                    class="ri-links-line"></i> Link</a>
                                        </label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input type="checkbox" name="websites[]" class="form-check-input"
                                               id="checklist3"
                                               value="bluepalm.group"
                                            {{in_array('bluepalm.group',$checkData['websites'] ?? []) ? 'checked':''}}/>
                                        <label class="form-check-label strikethrough" for="checklist3">
                                            bluepalm.group <a href="https://bluepalm.group" target="_blank"><i
                                                    class="ri-links-line"></i> Link</a>
                                        </label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input type="checkbox" name="websites[]" class="form-check-input"
                                               id="checklist4"
                                               value="account.bluepalm.group"
                                            {{in_array('account.bluepalm.group',$checkData['websites'] ?? []) ? 'checked':''}}/>
                                        <label class="form-check-label strikethrough" for="checklist4">
                                            account.bluepalm.group <a href="https://account.bluepalm.group" target="_blank"><i
                                                    class="ri-links-line"></i> Link</a>
                                        </label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input type="checkbox" name="websites[]" class="form-check-input"
                                               id="checklist5"
                                               value="bluepalm.rentals"
                                            {{in_array('bluepalm.rentals',$checkData['websites'] ?? []) ? 'checked':''}}/>
                                        <label class="form-check-label strikethrough" for="checklist5">
                                            bluepalm.rentals<a href="https://bluepalm.rentals" target="_blank"><i
                                                    class="ri-links-line"></i> Link</a>
                                        </label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input type="checkbox" name="websites[]" class="form-check-input"
                                               id="checklist6"
                                               value="info.bluepalm.rentals"
                                            {{in_array('info.bluepalm.rentals',$checkData['websites'] ?? []) ? 'checked':''}}/>
                                        <label class="form-check-label strikethrough" for="checklist6">
                                            info.bluepalm.rentals<a href="https://info.bluepalm.rentals" target="_blank"><i
                                                    class="ri-links-line"></i> Link</a>
                                        </label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input type="checkbox" name="websites[]" class="form-check-input"
                                               id="checklist24" value="dashboard.bluepalm.rentals"
                                            {{in_array('dashboard.bluepalm.rentals',$checkData['websites'] ?? []) ? 'checked':''}}
                                        />
                                        <label class="form-check-label strikethrough" for="checklist24">
                                            dashboard.bluepalm.rentals <a href="https://dashboard.bluepalm.rentals" target="_blank"><i
                                                    class="ri-links-line"></i> Link</a>
                                        </label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input type="checkbox" name="websites[]" class="form-check-input"
                                               id="checklist7"
                                               value="stephanwestermayer.com"
                                            {{in_array('stephanwestermayer.com',$checkData['websites'] ?? []) ? 'checked':''}}/>
                                        <label class="form-check-label strikethrough" for="checklist7">
                                            stephanwestermayer.com<a href="https://stephanwestermayer.com" target="_blank"><i
                                                    class="ri-links-line"></i> Link</a>
                                        </label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input type="checkbox" name="websites[]" class="form-check-input"
                                               id="checklist8"
                                               value="hostingeurope.group"
                                            {{in_array('hostingeurope.group',$checkData['websites'] ?? []) ? 'checked':''}}/>
                                        <label class="form-check-label strikethrough" for="checklist8">
                                            hostingeurope.group <a href="https://hostingeurope.group"
                                                                        target="_blank"><i class="ri-links-line"></i>
                                                Link</a>
                                        </label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input type="checkbox" name="websites[]" class="form-check-input"
                                               id="checklist9"
                                               value="info.hostingeurope.group"
                                            {{in_array('info.hostingeurope.group',$checkData['websites'] ?? []) ? 'checked':''}}/>
                                        <label class="form-check-label strikethrough" for="checklist9">
                                            info.hostingeurope.group <a href="https://info.hostingeurope.group"
                                                                        target="_blank"><i class="ri-links-line"></i>
                                                Link</a>
                                        </label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input type="checkbox" name="websites[]" class="form-check-input"
                                               id="checklist10"
                                               value="dashboard.hostingeurope.group"
                                            {{in_array('dashboard.hostingeurope.group',$checkData['websites'] ?? []) ? 'checked':''}}
                                        />
                                        <label class="form-check-label strikethrough" for="checklist10">
                                            dashboard.hostingeurope.group <a
                                                href="https://dashboard.hostingeurope.group" target="_blank"><i
                                                    class="ri-links-line"></i> Link</a>
                                        </label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input type="checkbox" name="websites[]" class="form-check-input"
                                               id="checklist11" value="frezyahotel.com"
                                            {{in_array('frezyahotel.com',$checkData['websites'] ?? []) ? 'checked':''}}
                                        />
                                        <label class="form-check-label strikethrough" for="checklist11">
                                            frezyahotel.com <a href="https://frezyahotel.com" target="_blank"><i
                                                    class="ri-links-line"></i> Link</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col col-md-6">
                                    <div class="form-check mt-1">
                                        <input type="checkbox" name="websites[]" class="form-check-input"
                                               id="checklist23" value="motokitchen.com.tr"
                                            {{in_array('motokitchen.com.tr',$checkData['websites'] ?? []) ? 'checked':''}}
                                        />
                                        <label class="form-check-label strikethrough" for="checklist23">
                                            motokitchen.com.tr <a href="https://motokitchen.com.tr" target="_blank"><i
                                                    class="ri-links-line"></i> Link</a>
                                        </label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input type="checkbox" name="websites[]" class="form-check-input"
                                               id="checklist12" value="rainer.com.tr"
                                            {{in_array('rainer.com.tr',$checkData['websites'] ?? []) ? 'checked':''}}
                                        />
                                        <label class="form-check-label strikethrough" for="checklist12">
                                            rainer.com.tr <a href="https://rainer.com.tr" target="_blank"><i
                                                    class="ri-links-line"></i> Link</a>
                                        </label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input type="checkbox" name="websites[]" class="form-check-input"
                                               id="checklist13" value="guest24.services"
                                            {{in_array('guest24.services',$checkData['websites'] ?? []) ? 'checked':''}}
                                        />
                                        <label class="form-check-label strikethrough" for="checklist13">
                                            guest24.services <a href="https://guest24.services" target="_blank"><i
                                                    class="ri-links-line"></i> Link</a>
                                        </label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input type="checkbox" name="websites[]" class="form-check-input"
                                               id="checklist14" value="tectamundi.at"
                                            {{in_array('tectamundi.at',$checkData['websites'] ?? []) ? 'checked':''}}
                                        />
                                        <label class="form-check-label strikethrough" for="checklist14">
                                            tectamundi.at <a href="https://tectamundi.at" target="_blank"><i
                                                    class="ri-links-line"></i> Link</a>
                                        </label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input type="checkbox" name="websites[]" class="form-check-input"
                                               id="checklist15" value="tectamundiasset.com"
                                            {{in_array('tectamundiasset.com',$checkData['websites'] ?? []) ? 'checked':''}}
                                        />
                                        <label class="form-check-label strikethrough" for="checklist15">
                                            tectamundiasset.com <a href="https://tectamundiasset.com" target="_blank"><i
                                                    class="ri-links-line"></i> Link</a>
                                        </label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input type="checkbox" name="websites[]" class="form-check-input"
                                               id="checklist16" value="cwgrup.com"
                                            {{in_array('cwgrup.com',$checkData['websites'] ?? []) ? 'checked':''}}
                                        />
                                        <label class="form-check-label strikethrough" for="checklist16">
                                            cwgrup.com <a href="https://cwgrup.com" target="_blank"><i
                                                    class="ri-links-line"></i> Link</a>
                                        </label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input type="checkbox" name="websites[]" class="form-check-input"
                                               id="checklist17" value="amazonriverfund.com"
                                            {{in_array('amazonriverfund.com',$checkData['websites'] ?? []) ? 'checked':''}}
                                        />
                                        <label class="form-check-label strikethrough" for="checklist17">
                                            amazonriverfund.com <a href="https://amazonriverfund.com" target="_blank"><i
                                                    class="ri-links-line"></i> Link</a>
                                        </label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input type="checkbox" name="websites[]" class="form-check-input"
                                               id="checklist18" value="rerent.biz"
                                            {{in_array('rerent.biz',$checkData['websites'] ?? []) ? 'checked':''}}
                                        />
                                        <label class="form-check-label strikethrough" for="checklist18">
                                            rerent.biz <a href="https://rerent.biz" target="_blank"><i
                                                    class="ri-links-line"></i> Link</a>
                                        </label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input type="checkbox" name="websites[]" class="form-check-input"
                                               id="checklist19" value="salesexperts.info"
                                            {{in_array('salesexperts.info',$checkData['websites'] ?? []) ? 'checked':''}}
                                        />
                                        <label class="form-check-label strikethrough" for="checklist19">
                                            salesexperts.info <a href="https://salesexperts.info" target="_blank"><i
                                                    class="ri-links-line"></i> Link</a>
                                        </label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input type="checkbox" name="websites[]" class="form-check-input"
                                               id="checklist20" value="sabturizm.com.tr"
                                            {{in_array('sabturizm.com.tr',$checkData['websites'] ?? []) ? 'checked':''}}
                                        />
                                        <label class="form-check-label strikethrough" for="checklist20">
                                            sabturizm.com.tr <a href="https://sabturizm.com.tr" target="_blank"><i
                                                    class="ri-links-line"></i> Link</a>
                                        </label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input type="checkbox" name="websites[]" class="form-check-input"
                                               id="checklist21" value="dynamicworks.group"
                                            {{in_array('dynamicworks.group',$checkData['websites'] ?? []) ? 'checked':''}}
                                        />
                                        <label class="form-check-label strikethrough" for="checklist21">
                                            dynamicworks.group <a href="https://dynamicworks.group" target="_blank"><i
                                                    class="ri-links-line"></i> Link</a>
                                        </label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input type="checkbox" name="websites[]" class="form-check-input"
                                               id="checklist22" value="reloxx.co.uk"
                                            {{in_array('reloxx.co.uk',$checkData['websites'] ?? []) ? 'checked':''}}
                                        />
                                        <label class="form-check-label strikethrough" for="checklist22">
                                            reloxx.co.uk <a href="https://reloxx.co.uk" target="_blank"><i
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
