<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">

    <!-- Brand Logo Light -->
    <a href="{{ route('any', 'index') }}" class="logo logo-light">
        <span class="logo-lg">
            <img src="/images/logos/xenovo_logo_dev.png" alt="logo">
        </span>
        <span class="logo-sm">
            <img src="/images/logos/favicon-dev.png" alt="small logo">
        </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="{{ route('any', 'index') }}" class="logo logo-dark">
        <span class="logo-lg">
        <img src="/images/logos/xenovo_logo_dev.png" alt="logo">
        </span>
        <span class="logo-sm">
        <img src="/images/logos/favicon-dev.png" alt="small logo">
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
        <i class="ri-checkbox-blank-circle-line align-middle"></i>
    </div>

    <!-- Full Sidebar Menu Close Button -->
    <div class="button-close-fullsidebar">
        <i class="ri-close-fill align-middle"></i>
    </div>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!-- Leftbar User -->
        <!-- <div class="leftbar-user">
            <a href="{{ route('second', ['pages', 'profile']) }}">
                <img src="/images/users/avatar-1.jpg" alt="user-image" height="42" class="rounded-circle shadow-sm">
                <span class="leftbar-user-name mt-2">Tosha Minner</span>
            </a>
        </div> -->
        <!--- Sidemenu -->
        <ul class="side-nav">
            <li class="side-nav-title">Home</li>
                <li class="side-nav-item">
                    <a href="{{ route('any', 'index') }}" class="side-nav-link">
                    <i class="ri-dashboard-line"></i>
                    <span> Dashboard </span>
                </a>
            </li>
            @if(Auth()->user()['role'] === 'Admin' || Auth()->user()['role'] === 'Developer')
            <li class="side-nav-title">Daily Tasks</li>
            <li class="side-nav-item">
                <a href="{{ route('second', ['task','check']) }}" class="side-nav-link">
                    <i class="ri-list-check-3"></i>
                    <span> Check Up </span>
                </a>
            </li>
            @endif
            <li class="side-nav-title">WEBSITES</li>
            <li class="side-nav-item">
                <a href="{{ route('second', ['apps', 'xenovo']) }}" class="side-nav-link">
                    <i class="ri-star-s-line"></i>
                    <span> Xenovo </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('second', ['apps', 'bluepalm']) }}" class="side-nav-link">
                    <i class="ri-star-s-line"></i>
                    <span> Bluepalm </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarBlue" aria-expanded="false" aria-controls="sidebarBlue" class="side-nav-link">
                    <i class="ri-star-s-line"></i>
                    <span> BP Hosting Services </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarBlue">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('second', ['apps', 'bluepalmhostingservices']) }}">BP Hosting Services</a>
                        </li>
                        <li>
                            <a href="{{ route('second', ['apps', 'bluepalmhostingservicesdashboard']) }}">BP Hosting Services <br> Dashboard</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                    <i class="ri-star-s-line"></i>
                    <span> Frezya </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarTasks">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('second', ['apps', 'frezyahotel']) }}">Frezya Hotel</a>
                        </li>
                        <li>
                            <a href="{{ route('second', ['apps', 'frezyakizyurdu']) }}">Frezya Female Dormitory</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('second', ['apps', 'dynamicworks']) }}" class="side-nav-link">
                    <i class="ri-star-s-line"></i>
                    <span> Dynamic Works </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('second', ['apps', 'guest24']) }}" class="side-nav-link">
                    <i class="ri-star-s-line"></i>
                    <span> Guest24 </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('second', ['apps', 'rainer']) }}" class="side-nav-link">
                    <i class="ri-star-s-line"></i>
                    <span> Rainer </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('second', ['apps', 'swwebsite']) }}" class="side-nav-link">
                    <i class="ri-star-s-line"></i>
                    <span> SW Website</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#tecta" aria-expanded="false" aria-controls="tecta" class="side-nav-link">
                    <i class="ri-star-s-line"></i>
                    <span> Tecta Mundi </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="tecta">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('second', ['apps', 'tectamundi']) }}">Tecta Mundi</a>
                        </li>
                        <li>
                            <a href="{{ route('second', ['apps', 'tectamundiasset']) }}">Tecta Mundi Asset</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('second', ['apps', 'moto-kitchen']) }}" class="side-nav-link">
                    <i class="ri-star-s-line"></i>
                    <span> Moto Kitchen </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
                    <i class="ri-star-s-line"></i>
                    <span> Hosting Europe </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEmail">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('second', ['apps', 'hostingeuropeinfo']) }}">Hosting Europe Info</a>
                        </li>
                        <li>
                            <a href="{{ route('second', ['apps', 'hostingeuropedashboard']) }}">Hosting Europe Dashboard</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('second', ['apps', 'cwgrup']) }}" class="side-nav-link">
                    <i class="ri-star-s-line"></i>
                    <span> CW Grup</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('second', ['apps', 'amazonriverfund']) }}" class="side-nav-link">
                    <i class="ri-star-s-line"></i>
                    <span>Amazon Riverfund</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('second', ['apps', 'dwms']) }}" class="side-nav-link">
                    <i class="ri-star-s-line"></i>
                    <span>DWMS</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('second', ['apps', 'rerent']) }}" class="side-nav-link">
                    <i class="ri-star-s-line"></i>
                    <span> Rerent</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('second', ['apps', 'reloxx']) }}" class="side-nav-link">
                    <i class="ri-star-s-line"></i>
                    <span> Reloxx </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('second', ['apps', 'salesexperts']) }}" class="side-nav-link">
                    <i class="ri-star-s-line"></i>
                    <span> Sales Experts</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarOdsol" aria-expanded="false" aria-controls="sidebarOdsol" class="side-nav-link">
                    <i class="ri-star-s-line"></i>
                    <span> Odsol </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarOdsol">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('second', ['apps', 'odsoldrive']) }}">Odsol Drive</a>
                        </li>
                        <li>
                            <a href="{{ route('second', ['apps', 'odsolmail']) }}">Odsol Mail</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('second', ['apps', 'sab']) }}" class="side-nav-link">
                    <i class="ri-star-s-line"></i>
                    <span> SAB Turizm İnşaat Gıda</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('second', ['apps', 'quand']) }}" class="side-nav-link">
                    <i class="ri-star-s-line"></i>
                    <span> Quand Business</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('second', ['apps', 'epris']) }}" class="side-nav-link">
                    <i class="ri-star-s-line"></i>
                    <span> Epris</span>
                </a>
            </li>
            <li class="side-nav-title">User</li>
            <li class="side-nav-item">
                <a href="{{ route('second', ['pages', 'profile']) }}" class="side-nav-link">
                <i class="ri-account-circle-line"></i>
                <span> My Account </span>
                </a>
            </li>
            <!-- <li class="side-nav-item">
                <a href="{{ route('second', ['auth', 'lock-screen']) }}" class="side-nav-link">
                <i class="ri-lock-password-line"></i>
                <span> Lock Screen </span>
                </a>
            </li> -->
            <li class="side-nav-item">
                <a href="{{ route('logout') }}" class="side-nav-link">
                <i class="ri-logout-box-line"></i>
                <span> Logout </span>
                </a>
            </li>
        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>
<!-- ========== Left Sidebar End ========== -->
