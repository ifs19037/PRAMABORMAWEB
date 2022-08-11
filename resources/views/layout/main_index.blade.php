@if(Session::get('level'))
<!DOCTYPE html>
<html lang="en"
      dir="ltr">
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

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/css/morris.html') }}">
        
        <!-- Search Select Option -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">
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

                                <!-- User dropdown -->
                                <li class="nav-item dropdown ml-1 ml-md-3">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                                        <img src="{{ URL::asset('asset/u_file/foto_profil/user.png') }}" alt="Avatar" class="rounded-circle" width="40px" height="40px">
                                    </a>
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
                                        <li class="sidebar-menu-item active">
                                            <a class="sidebar-menu-button" href="#">
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
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="./ulang_tahun_bulan_ini">
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




                                <!-- User dropdown -->
                                <li class="nav-item dropdown ml-1 ml-md-3">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                                        <img src="./asset/u_file/foto_profil/{{Session::get('foto_karyawan')}}" alt="Avatar" class="rounded-circle" width="40px" height="40px">
                                    </a>
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
                                        <li class="sidebar-menu-item active">
                                            <a class="sidebar-menu-button" href="#">
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
                                        <!-- <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="./ulang_tahun_bulan_ini">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person_outline</i> Ulang Tahun Bulan Ini
                                            </a>
                                        </li> -->
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
        <script src="assets/js/touchspin.js"></script>

        <!-- Flatpickr -->
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/vendor/flatpickr/flatpickr.min.js') }}"></script>
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/js/flatpickr.js') }}"></script>

        <!-- jQuery Mask Plugin -->
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/vendor/jquery.mask.min.js') }}"></script>

        <!-- Quill -->
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/vendor/quill.min.js') }}"></script>
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/js/quill.js') }}"></script>



        <!-- Global Settings -->
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/js/settings.js') }}"></script>

        <!-- Chart.js -->
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/vendor/Chart.min.js') }}"></script>

        <!-- UI Charts Page JS -->
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/js/chartjs-rounded-bar.js') }}"></script>
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/js/chartjs.js') }}"></script>

        <!-- Chart.js Samples -->
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/js/page.ui-charts.js') }}"></script>
        
        <!-- Moment.js -->
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/vendor/moment.min.js') }}"></script>
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/vendor/moment-range.js') }}"></script>

        <!-- Chart.js -->
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/vendor/Chart.min.js') }}"></script>
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/js/chartjs-rounded-bar.js') }}"></script>
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/js/chartjs.js') }}"></script>

        <!-- Instructor Earnings Charts -->
        <!-- <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/js/page.instructor-earnings.js') }}"></script> -->

        <!-- Instructor Dashboard Page JS -->
        <!-- <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/js/page.instructor-dashboard.js') }}"></script> -->

        <!-- List.js -->
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/vendor/list.min.js') }}"></script>
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/js/list.js') }}"></script>
        
        <!-- Search Select Option -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.full.min.js"></script>
        <script>
            $(function () {
                $("select").select2();
            });
        </script>
        
        <!-- <script src="{{ URL::asset('asset/js/bagan_kuis.js') }}"> -->
        <script>
            !function (e) {
                var t = {};
                function r(n){
                    if (t[n]) return t[n].exports; var o = t[n] = {
                        i: n, l: !1, exports: {}
                    };
                    return e[n].call(o.exports, o, o.exports, r), o.l = !0, o.exports
                }
                r.m = e, r.c = t, r.d = function (e, t, n) {
                    r.o(e, t) || Object.defineProperty(e, t, {
                        enumerable: !0, get: n
                    })
                },
                    r.r = function (e) {
                        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
                            value: "Module"
                        }),
                        Object.defineProperty(e, "__esModule", {
                            value: !0
                        })
                    },
                    r.t = function (e, t) {
                        if (1 & t && (e = r(e)), 8 & t) return e; if (4 & t && "object" == typeof e && e && e.__esModule) return e;
                        var n = Object.create(null);
                        if (r.r(n), Object.defineProperty(n, "default", { enumerable: !0, value: e }), 2 & t && "string" != typeof e) for (var o in e) r.d(n, o, function (t) {
                            return e[t]
                        }.bind(null, o));
                        return n
                    },
                    r.n = function (e) {
                        var t = e && e.__esModule ? function () {
                            return e.default
                        } : function () {
                            return e
                        };
                        return r.d(t, "a", t), t
                    },
                    r.o = function (e, t) {
                        return Object.prototype.hasOwnProperty.call(e, t)
                    },
                    r.p = "/", r(r.s = 240)
            }({
                240: function (e, t, r) {
                    e.exports = r(241) }, 241: function (e, t) {
                    !function () {
                        "use strict";
                        !function (e) {
                            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "roundedBar", r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
                            r = Chart.helpers.merge({
                                title: {
                                    display: !0, fontSize: 12, fontColor: "rgba(54, 76, 102, 0.54)", position: "top", text: "RATA-RATA NILAI"
                                }
                            },
                            r);
                            var n = {

                                labels: [

                                    <?php foreach ($rata_rata_nilai_berdasarkan_lokasi as $lokasi): ?>    
                                        "<?php echo $lokasi->lokasi ?>",
                                    <?php endforeach; ?>

                                    <?php //foreach ($rata_rata_nilai_berdasarkan_lokasi as $lokasi): ?>    
                                        "<?php //$lokasi->lokasi ?>",
                                    <?php //endforeach; ?>
                                    // "-",

                                ],
                                
                                datasets: [{
                                    data: [

                                        <?php foreach ($rata_rata_nilai_berdasarkan_lokasi as $rata_rata_nilai): ?>    
                                            <?php echo $rata_rata_nilai->rata_rata_nilai_berdasarkan_lokasi ?>,
                                        <?php endforeach; ?>

                                        <?php //foreach ($rata_rata_nilai_berdasarkan_lokasi as $rata_rata_nilai): ?>    
                                            <?php //$rata_rata_nilai->rata_rata_nilai_berdasarkan_lokasi ?>,
                                        <?php //endforeach; ?>
                                        // 0,

                                    ], barPercentage: .5, barThickness: 20
                                }]
                            }; Charts.create(e, t, r, n)
                        }("#earningsChart")
                    }()
                }
            });
        </script>
    </body>
</html>
   
@else
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <style>
            body{
                background-image: url("{{ URL::asset('asset/image/gambar/gambar_prama_1.png') }}");
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-color: transparent;
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
        <link type="text/css" rel="stylesheet" href="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/vendor/perfect-scrollbar.css') }}?<?php echo time(); ?>">

        <!-- Material Design Icons -->
        <link type="text/css" rel="stylesheet" href="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/css/material-icons.css') }}?<?php echo time(); ?>">

        <!-- Font Awesome Icons -->
        <link type="text/css" rel="stylesheet" href="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/css/fontawesome.css') }}?<?php echo time(); ?>">

        <!-- Preloader -->
        <link type="text/css" rel="stylesheet" href="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/vendor/spinkit.css') }}?<?php echo time(); ?>">

        <!-- App CSS -->
        <link type="text/css" rel="stylesheet" href="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/css/app.css') }}?<?php echo time(); ?>">

        <!-- Flatpickr -->
        <link type="text/css" href="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/css/flatpickr.css') }}?<?php echo time(); ?>" rel="stylesheet">
        <link type="text/css" href="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/css/flatpickr-airbnb.css') }}?<?php echo time(); ?>" rel="stylesheet">

        <!-- Quill Theme -->
        <link type="text/css" href="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/css/quill.css') }}?<?php echo time(); ?>" rel="stylesheet">

        <!-- Touchspin -->
        <link type="text/css" href="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/css/bootstrap-touchspin.css') }}?<?php echo time(); ?>" rel="stylesheet">
    </head>

    <body>
    <div class="d-flex align-items-center" style="min-height: 100vh; background-color:rgba(255, 255, 255, 0.5)">
            <div class="col-sm-8 col-md-6 col-lg-4 mx-auto" style="min-width: 300px;">
            @if(Session::has('alert'))
                <!-- <div class="alert alert-danger" role="alert">
                    <strong>!!!</strong> {{Session::get('alert')}}
                    
                </div> -->
                <div class="alert alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    {{Session::get('alert')}} <strong>!!!</strong>
                </div>
            @endif
                <div class="card navbar-shadow" style="background-color:rgba(255, 255, 255, 0.5)">
                    <div class="card-header text-center" style="background-color:rgba(255, 255, 255, 0.5)">
                        <a href="./"><img src="{{ URL::asset('asset/image/logo/logo_prama.png') }}" width="80%"></a>
                    </div>
                    <div class="card-body" style="background-color:rgba(255, 255, 255, 0.5)">
                        <form action="./PostLogin" method="post">
                        @csrf
                            <div class="form-group">
                                <label class="form-label">NIP</label>
                                <div class="input-group input-group-merge">
                                    <input name="nik_akun" id="nik_akun" type="text" required class="form-control form-control-prepended" data-mask="###" maxlength="10" data-mask-reverse="true">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="far fa-key"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Password</label>
                                <div class="input-group input-group-merge">
                                    <input name="password" id="password" type="password" required class="form-control form-control-prepended">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="far fa-key"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <button type="submit" class="btn btn-primary btn-block">MASUK</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>        

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


        
        <!-- Global Settings -->
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/js/settings.js') }}"></script>

        <!-- Moment.js -->
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/vendor/moment.min.js') }}"></script>
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/vendor/moment-range.js') }}"></script>

        <!-- Chart.js -->
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/vendor/Chart.min.js') }}"></script>
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/js/chartjs-rounded-bar.js') }}"></script>
        <script src="{{ URL::asset('asset/LearnPlus/learnplus.demo.frontendmatter.com/assets/js/chartjs.js') }}"></script>
    </body>
</html>
@endif