@if(Session::get('level'))
<html>
    <head>
        <style>
            .bg-navbar-admin-color{
                background-color: #5EB5F9 !important;
                color: #ffffff !important;
            }
            .bg-navbar-karyawan-color{
                background-color: #F3DB00 !important;
                color: #ffffff !important;
            }
        </style>
        <link rel="icon" href="{{ URL::asset('asset/image/logo/logo_prama2.png') }}">
        <title>@yield('title')</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
        <meta name="robots" content="noindex">

        <!-- Custom Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500%7CRoboto:400,500&amp;display=swap" rel="stylesheet">

        <!-- Perfect Scrollbar -->
        <link type="text/css" rel="stylesheet" href="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/vendor/perfect-scrollbar.css') }}">

        <!-- Material Design Icons -->
        <link type="text/css" rel="stylesheet" href="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/css/material-icons.css') }}">

        <!-- Font Awesome Icons -->
        <link type="text/css" rel="stylesheet" href="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/css/fontawesome.css') }}">

        <!-- Preloader -->
        <link type="text/css" rel="stylesheet" href="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/vendor/spinkit.css') }}">

        <!-- App CSS -->
        <link type="text/css" rel="stylesheet" href="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/css/app.css') }}">

        <!-- Flatpickr -->
        <link type="text/css" href="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/css/flatpickr.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/css/flatpickr-airbnb.css') }}" rel="stylesheet">

        <!-- Quill Theme -->
        <link type="text/css" href="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/css/quill.css') }}" rel="stylesheet">

        <!-- Touchspin -->
        <link type="text/css" href="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/css/bootstrap-touchspin.css') }}" rel="stylesheet">
    </head>

    <body class=" layout-fluid"> 
        @if(Session::get('level')=="1")
        <div class="preloader">
            <div class="sk-chase">
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
            </div>
            
        </div>

        <!-- Header Layout -->
        <div class="mdk-header-layout js-mdk-header-layout">

            <!-- Header -->

            <div id="header"
                data-fixed
                class="mdk-header js-mdk-header mb-0">
                <div class="mdk-header__content">

                    <!-- Navbar -->
                    <nav
                        class="navbar navbar-expand navbar-dark bg-navbar-admin-color m-0">
                        <div class="container-fluid">
                            <!-- Toggle sidebar -->
                            <button class="navbar-toggler d-block"
                                    data-toggle="sidebar"
                                    type="button">
                                <span class="material-icons">menu</span>
                            </button>

                            <!-- Brand -->
                            <a href="./" >
                                <img src="{{ URL::asset('asset/image/logo/logo_prama.png') }}" height="60px" style="padding:10px;"/>
                            </a>

                            <div class="flex"></div>

                            <!-- Menu -->
                            <ul class="nav navbar-nav flex-nowrap">

                                <!-- Notifications dropdown -->
                                <!-- <li class="nav-item dropdown dropdown-notifications dropdown-menu-sm-full">
                                    <button class="nav-link btn-flush dropdown-toggle"
                                            type="button"
                                            data-toggle="dropdown"
                                            data-dropdown-disable-document-scroll
                                            data-caret="false">
                                        <i class="material-icons">notifications</i>
                                        <span class="badge badge-notifications badge-danger">2</span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div data-perfect-scrollbar
                                            class="position-relative">
                                            <div class="dropdown-header"><strong>Messages</strong></div>
                                            <div class="list-group list-group-flush mb-0">

                                                <a href="instructor-messages.html"
                                                class="list-group-item list-group-item-action unread">
                                                    <span class="d-flex align-items-center mb-1">
                                                        <small class="text-muted">5 minutes ago</small>

                                                        <span class="ml-auto unread-indicator bg-primary"></span>

                                                    </span>
                                                    <span class="d-flex">
                                                        <span class="avatar avatar-xs mr-2">
                                                            <img src="assets/images/people/110/woman-5.jpg"
                                                                alt="people"
                                                                class="avatar-img rounded-circle">
                                                        </span>
                                                        <span class="flex d-flex flex-column">
                                                            <strong>Michelle</strong>
                                                            <span class="text-black-70">Clients loved the new design.</span>
                                                        </span>
                                                    </span>
                                                </a>

                                                <a href="instructor-messages.html"
                                                class="list-group-item list-group-item-action unread">
                                                    <span class="d-flex align-items-center mb-1">
                                                        <small class="text-muted">5 minutes ago</small>

                                                        <span class="ml-auto unread-indicator bg-primary"></span>

                                                    </span>
                                                    <span class="d-flex">
                                                        <span class="avatar avatar-xs mr-2">
                                                            <img src="assets/images/people/110/woman-5.jpg"
                                                                alt="people"
                                                                class="avatar-img rounded-circle">
                                                        </span>
                                                        <span class="flex d-flex flex-column">
                                                            <strong>Michelle</strong>
                                                            <span class="text-black-70">🔥 Superb job..</span>
                                                        </span>
                                                    </span>
                                                </a>

                                            </div>

                                            <div class="dropdown-header"><strong>System notifications</strong></div>
                                            <div class="list-group list-group-flush mb-0">

                                                <a href="instructor-messages.html"
                                                class="list-group-item list-group-item-action border-left-3 border-left-danger">
                                                    <span class="d-flex align-items-center mb-1">
                                                        <small class="text-muted">3 minutes ago</small>

                                                    </span>
                                                    <span class="d-flex">
                                                        <span class="avatar avatar-xs mr-2">
                                                            <span class="avatar-title rounded-circle bg-light">
                                                                <i class="material-icons font-size-16pt text-danger">account_circle</i>
                                                            </span>
                                                        </span>
                                                        <span class="flex d-flex flex-column">

                                                            <span class="text-black-70">Your profile information has not been synced correctly.</span>
                                                        </span>
                                                    </span>
                                                </a>

                                                <a href="instructor-messages.html"
                                                class="list-group-item list-group-item-action">
                                                    <span class="d-flex align-items-center mb-1">
                                                        <small class="text-muted">5 hours ago</small>

                                                    </span>
                                                    <span class="d-flex">
                                                        <span class="avatar avatar-xs mr-2">
                                                            <span class="avatar-title rounded-circle bg-light">
                                                                <i class="material-icons font-size-16pt text-success">group_add</i>
                                                            </span>
                                                        </span>
                                                        <span class="flex d-flex flex-column">
                                                            <strong>Adrian. D</strong>
                                                            <span class="text-black-70">Wants to join your private group.</span>
                                                        </span>
                                                    </span>
                                                </a>

                                                <a href="instructor-messages.html"
                                                class="list-group-item list-group-item-action">
                                                    <span class="d-flex align-items-center mb-1">
                                                        <small class="text-muted">1 day ago</small>

                                                    </span>
                                                    <span class="d-flex">
                                                        <span class="avatar avatar-xs mr-2">
                                                            <span class="avatar-title rounded-circle bg-light">
                                                                <i class="material-icons font-size-16pt text-warning">storage</i>
                                                            </span>
                                                        </span>
                                                        <span class="flex d-flex flex-column">

                                                            <span class="text-black-70">Your deploy was successful.</span>
                                                        </span>
                                                    </span>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </li> -->
                                <!-- // END Notifications dropdown -->
                                <!-- User dropdown -->
                                <li class="nav-item dropdown ml-1 ml-md-3">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                                        <img src="{{ URL::asset('asset/u_file/foto_profil/user.png') }}" alt="Avatar" class="rounded-circle" width="40px" height="40px"></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="./keluar">
                                            <i class="material-icons">lock</i> Keluar
                                        </a>
                                    </div>
                                </li>
                                <!-- // END User dropdown -->
                            </ul>
                        </div>
                    </nav>
                    <!-- // END Navbar -->

                </div>
            </div>

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content">
                <div data-push data-responsive-width="992px" class="mdk-drawer-layout js-mdk-drawer-layout">
                @yield('container')
                    <div class="mdk-drawer js-mdk-drawer"
                        id="default-drawer">
                        <div class="mdk-drawer__content ">
                            <div class="sidebar sidebar-left sidebar-dark bg-dark o-hidden" data-perfect-scrollbar>
                                <div class="sidebar-p-y">
                                    <div class="sidebar-heading">MENU</div>
                                    <ul class="sidebar-menu sm-active-button-bg">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="./">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">account_box</i> Dashboard
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button sidebar-js-collapse" data-toggle="collapse" href="#manajemen_pelatihan">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">import_contacts</i> Manajemen Pelatihan
                                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                            </a>
                                            <ul class="sidebar-submenu sm-indent collapse" id="manajemen_pelatihan">
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="./manajemen_materi">
                                                        <span class="sidebar-menu-text">Manajemen Materi</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="./manajemen_kuis">
                                                        <span class="sidebar-menu-text">Manajemen Kuis</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="./manajemen_sop">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">import_contacts</i> Manajemen SOP
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="./papan_peringkat">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person_outline</i> Papan Peringkat
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button sidebar-js-collapse" data-toggle="collapse" href="#manajemen_karyawan">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person_outline</i> Manajemen Profil
                                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                            </a>
                                            <ul class="sidebar-submenu sm-indent collapse" id="manajemen_karyawan">
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="./manajemen_akun">
                                                        <span class="sidebar-menu-text">Manajemen Akun</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="./manajemen_data">
                                                        <span class="sidebar-menu-text">Manajemen Data</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sidebar-menu-item active">
                                            <a class="sidebar-menu-button" href="#">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person_outline</i> Ulang Tahun Bulan Ini
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button sidebar-js-collapse" data-toggle="collapse" href="#manajemen_informasi">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">tune</i> Manajemen Informasi
                                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                            </a>
                                            <ul class="sidebar-submenu sm-indent collapse" id="manajemen_informasi">
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="./manajemen_pengumuman">
                                                        <span class="sidebar-menu-text">Manajemen Pengumuman</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="./jabatan">
                                                        <span class="sidebar-menu-text">Jabatan</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="./divisi">
                                                        <span class="sidebar-menu-text">Divisi</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="./lokasi">
                                                        <span class="sidebar-menu-text">Lokasi</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- App Settings FAB -->
                <div id="app-settings" hidden>
                    <app-settings layout-active="default" :layout-location="{ 'fixed': '{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/instructor-dashboard.html') }}', 'default': '{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/student-dashboard.html') }}'  }" sidebar-variant="bg-transparent border-0"></app-settings>
                </div>
            </div>
        </div>

        @elseif(Session::get('level')=="2")
        
        <div class="preloader">
            <div class="sk-chase">
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
            </div>
            
        </div>

        <!-- Header Layout -->
        <div class="mdk-header-layout js-mdk-header-layout">

            <!-- Header -->

            <div id="header"
                data-fixed
                class="mdk-header js-mdk-header mb-0">
                <div class="mdk-header__content">

                    <!-- Navbar -->
                    <nav
                        class="navbar navbar-expand navbar-dark bg-navbar-karyawan-color m-0">
                        <div class="container-fluid">
                            <!-- Toggle sidebar -->
                            <button class="navbar-toggler d-block"
                                    data-toggle="sidebar"
                                    type="button">
                                <span class="material-icons">menu</span>
                            </button>

                            <!-- Brand -->
                            <a href="./" >
                                <img src="{{ URL::asset('asset/image/logo/logo_prama.png') }}" height="60px" style="padding:10px;"/>
                            </a>

                            <div class="flex"></div>

                            <!-- Menu -->
                            <ul class="nav navbar-nav flex-nowrap">

                                <!-- Notifications dropdown -->
                                <!-- <li class="nav-item dropdown dropdown-notifications dropdown-menu-sm-full">
                                    <button class="nav-link btn-flush dropdown-toggle"
                                            type="button"
                                            data-toggle="dropdown"
                                            data-dropdown-disable-document-scroll
                                            data-caret="false">
                                        <i class="material-icons">notifications</i>
                                        <span class="badge badge-notifications badge-danger">2</span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div data-perfect-scrollbar
                                            class="position-relative">
                                            <div class="dropdown-header"><strong>Messages</strong></div>
                                            <div class="list-group list-group-flush mb-0">

                                                <a href="instructor-messages.html"
                                                class="list-group-item list-group-item-action unread">
                                                    <span class="d-flex align-items-center mb-1">
                                                        <small class="text-muted">5 minutes ago</small>

                                                        <span class="ml-auto unread-indicator bg-primary"></span>

                                                    </span>
                                                    <span class="d-flex">
                                                        <span class="avatar avatar-xs mr-2">
                                                            <img src="assets/images/people/110/woman-5.jpg"
                                                                alt="people"
                                                                class="avatar-img rounded-circle">
                                                        </span>
                                                        <span class="flex d-flex flex-column">
                                                            <strong>Michelle</strong>
                                                            <span class="text-black-70">Clients loved the new design.</span>
                                                        </span>
                                                    </span>
                                                </a>

                                                <a href="instructor-messages.html"
                                                class="list-group-item list-group-item-action unread">
                                                    <span class="d-flex align-items-center mb-1">
                                                        <small class="text-muted">5 minutes ago</small>

                                                        <span class="ml-auto unread-indicator bg-primary"></span>

                                                    </span>
                                                    <span class="d-flex">
                                                        <span class="avatar avatar-xs mr-2">
                                                            <img src="assets/images/people/110/woman-5.jpg"
                                                                alt="people"
                                                                class="avatar-img rounded-circle">
                                                        </span>
                                                        <span class="flex d-flex flex-column">
                                                            <strong>Michelle</strong>
                                                            <span class="text-black-70">🔥 Superb job..</span>
                                                        </span>
                                                    </span>
                                                </a>

                                            </div>

                                            <div class="dropdown-header"><strong>System notifications</strong></div>
                                            <div class="list-group list-group-flush mb-0">

                                                <a href="instructor-messages.html"
                                                class="list-group-item list-group-item-action border-left-3 border-left-danger">
                                                    <span class="d-flex align-items-center mb-1">
                                                        <small class="text-muted">3 minutes ago</small>

                                                    </span>
                                                    <span class="d-flex">
                                                        <span class="avatar avatar-xs mr-2">
                                                            <span class="avatar-title rounded-circle bg-light">
                                                                <i class="material-icons font-size-16pt text-danger">account_circle</i>
                                                            </span>
                                                        </span>
                                                        <span class="flex d-flex flex-column">

                                                            <span class="text-black-70">Your profile information has not been synced correctly.</span>
                                                        </span>
                                                    </span>
                                                </a>

                                                <a href="instructor-messages.html"
                                                class="list-group-item list-group-item-action">
                                                    <span class="d-flex align-items-center mb-1">
                                                        <small class="text-muted">5 hours ago</small>

                                                    </span>
                                                    <span class="d-flex">
                                                        <span class="avatar avatar-xs mr-2">
                                                            <span class="avatar-title rounded-circle bg-light">
                                                                <i class="material-icons font-size-16pt text-success">group_add</i>
                                                            </span>
                                                        </span>
                                                        <span class="flex d-flex flex-column">
                                                            <strong>Adrian. D</strong>
                                                            <span class="text-black-70">Wants to join your private group.</span>
                                                        </span>
                                                    </span>
                                                </a>

                                                <a href="instructor-messages.html"
                                                class="list-group-item list-group-item-action">
                                                    <span class="d-flex align-items-center mb-1">
                                                        <small class="text-muted">1 day ago</small>

                                                    </span>
                                                    <span class="d-flex">
                                                        <span class="avatar avatar-xs mr-2">
                                                            <span class="avatar-title rounded-circle bg-light">
                                                                <i class="material-icons font-size-16pt text-warning">storage</i>
                                                            </span>
                                                        </span>
                                                        <span class="flex d-flex flex-column">

                                                            <span class="text-black-70">Your deploy was successful.</span>
                                                        </span>
                                                    </span>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </li> -->
                                <!-- // END Notifications dropdown -->
                                <!-- User dropdown -->
                                <li class="nav-item dropdown ml-1 ml-md-3">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                                        <img src="./asset/u_file/foto_profil/{{Session::get('foto_karyawan')}}" alt="Avatar" class="rounded-circle" width="40px" height="40px"></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="./edit_profil">
                                            <i class="material-icons">edit</i> Edit Profil
                                        </a>
                                        <a class="dropdown-item" href="./keluar">
                                            <i class="material-icons">lock</i> Keluar
                                        </a>
                                    </div>
                                </li>
                                <!-- // END User dropdown -->
                            </ul>
                        </div>
                    </nav>
                    <!-- // END Navbar -->

                </div>
            </div>

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content">
                <div data-push data-responsive-width="992px" class="mdk-drawer-layout js-mdk-drawer-layout">
                    @yield('container')
                    <div class="mdk-drawer js-mdk-drawer"
                        id="default-drawer">
                        <div class="mdk-drawer__content ">
                            <div class="sidebar sidebar-left sidebar-dark bg-dark o-hidden" data-perfect-scrollbar>
                                <div class="sidebar-p-y">
                                    <div class="sidebar-heading">MENU</div>
                                    <ul class="sidebar-menu sm-active-button-bg">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="./">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">account_box</i> Dashboard
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button sidebar-js-collapse" data-toggle="collapse" href="#pelatihan">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">import_contacts</i> Pelatihan
                                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                            </a>
                                            <ul class="sidebar-submenu sm-indent collapse" id="pelatihan">
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="./materi">
                                                        <span class="sidebar-menu-text">Materi</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="./kuis">
                                                        <span class="sidebar-menu-text">Kuis</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="./sop">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">import_contacts</i> SOP
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item active">
                                            <a class="sidebar-menu-button" href="#">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person_outline</i> Ulang Tahun Bulan Ini
                                            </a>
                                        </li>
                                    </ul>                                        
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>

                <!-- App Settings FAB -->
                <div id="app-settings" hidden>
                    <app-settings layout-active="default" :layout-location="{ 'fixed': '{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/instructor-dashboard.html') }}', 'default': '{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/student-dashboard.html') }}'  }" sidebar-variant="bg-transparent border-0"></app-settings>
                </div>
            </div>
        </div>

        @else
        <?php return redirect('./') ?>
        
        @endif
        

        <!-- jQuery -->
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/vendor/jquery.min.js') }}"></script>

        <!-- Bootstrap -->
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/vendor/popper.min.js') }}"></script>
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/vendor/bootstrap.min.js') }}"></script>

        <!-- Perfect Scrollbar -->
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/vendor/perfect-scrollbar.min.js') }}"></script>

        <!-- MDK -->
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/vendor/dom-factory.js') }}"></script>
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/vendor/material-design-kit.js') }}"></script>

        <!-- App JS -->
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/js/app.js') }}"></script>

        <!-- Highlight.js -->
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/js/hljs.js') }}"></script>

        <!-- App Settings (safe to remove) -->
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/js/app-settings.js') }}"></script>

        <!-- Touchspin -->
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/vendor/jquery.bootstrap-touchspin.js') }}"></script>
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/js/touchspin.js') }}"></script>

        <!-- Flatpickr -->
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/vendor/flatpickr/flatpickr.min.js') }}"></script>
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/js/flatpickr.js') }}"></script>

        <!-- jQuery Mask Plugin -->
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/vendor/jquery.mask.min.js') }}"></script>

        <!-- Quill -->
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/vendor/quill.min.js') }}"></script>
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/js/quill.js') }}"></script>
        
        <!-- List.js -->
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/vendor/list.min.js') }}"></script>
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/js/list.js') }}"></script>

        <!-- Tables -->
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/js/toggle-check-all.js') }}"></script>
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/js/check-selected-row.js') }}"></script>

    </body>
</html>
   
@else
    <?php
        return redirect('./')
    ?>
@endif