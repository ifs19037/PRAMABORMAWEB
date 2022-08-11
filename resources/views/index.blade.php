@extends('layout/main_index')

@section('title', 'Training Prama')

@section('container')

@if(Session::get('level')=="1")
<div class="mdk-drawer-layout__content page ">
    <div class="container-fluid page__container">
        
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <h1 class="h2">Dashboard</h1>

        
        <div class="row">
            <div class="col-lg-7">
                <div class="card">
                    <div class="card-header">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <h4 class="card-title">Bagan Rata-Rata Nilai</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex form-inline">
                            <form method="GET">
                                <div class="form-group mr-12pt">
                                    <select name="cari_id_kuis" class="custom-select form-control search" required>
                                        @if($cari_id_kuis=="")
                                            <option selected disabled value="">Pilih Kuis</option>
                                        @elseif($cari_id_kuis!="")
                                            @foreach($kuis_cari as $kuis_cari)
                                                <option selected value="{{$kuis_cari->id_kuis}}">{{$kuis_cari->judul_kuis}} | {{$kuis_cari->divisi}}</option>
                                            @endforeach
                                        @endif
                                        @foreach($kuis_search as $kuis_search)
                                            <option value="{{$kuis_search->id_kuis}}">{{$kuis_search->judul_kuis}} | {{$kuis_search->divisi}}</option>
                                        @endforeach
                                    </select>
                                    <button class="btn btn-info" type="submit" role="button" style="padding:2px 10px 2px 10px; margin-left:10px"><i class="material-icons">search</i></button>
                                </div>
                            </form>
                            <!-- <div class="form-group">
                                <div class="chart-legend m-0 justify-content-start" id="earningsChartLegend"></div>
                            </div> -->
                        </div><br>
                        <div class="chart">
                            @if($cari_id_kuis!="")
                                <canvas id="earningsChart" class="chart-canvas js-update-chart-bar" -chart-legend="#earningsChartLegend"
                                        data-chart-line-background-color="primary">
                                </canvas>
                            @elseif($cari_id_kuis=="")

                            @endif
                            <!-- <canvas id="earningsChart" class="chart-canvas js-update-chart-bar" -chart-legend="#earningsChartLegend"
                                    data-chart-prefix="$"
                                    data-chart-suffix="k"
                                    data-chart-line-background-color="primary">
                            </canvas> -->
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <h4 class="card-title">Pengumuman</h4>
                                <!-- <p class="card-subtitle">Latest forum topics &amp; replies</p> -->
                            </div>
                            <div class="media-right">
                                <a class="btn btn-sm btn-primary" href="./manajemen_pengumuman">Lainnya <i class="material-icons">keyboard_arrow_right</i></a>
                            </div>
                        </div>
                    </div>

                    <ul class="list-group list-group-fit">
                    @foreach($pengumuman as $pengumuman)
                        <li class="list-group-item forum-thread">
                            <div class="media align-items-center">
                                <div class="media-left">
                                    <div class="forum-icon-wrapper">
                                        <!-- <a href="student-forum-thread.html" class="forum-thread-icon">
                                            <i class="material-icons">description</i>
                                        </a>
                                        <a href="student-profile.html" class="forum-thread-user">
                                            <img src="assets/images/people/50/guy-1.jpg" alt="" width="20"class="rounded-circle">
                                        </a> -->
                                        <a href="./detail_pengumuman/{{$pengumuman->id_pengumuman}}" class="avatar avatar-4by3 avatar-sm mr-3">
                                            <img src="./asset/u_file/foto_pengumuman/{{$pengumuman->foto_pengumuman}}"
                                            alt="course" class="avatar-img rounded">
                                        </a>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="d-flex align-items-center">
                                        <a href="./detail_pengumuman/{{$pengumuman->id_pengumuman}}" class="text-body"><strong>{{$pengumuman->judul_pengumuman}}</strong></a>
                                        <!-- <small class="ml-auto text-muted">5 min ago</small> -->
                                    </div>
                                    <text class="text-black-70">{{$pengumuman->keterangan_singkat}}</text>
                                </div>
                            </div>
                        </li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@elseif(Session::get('level')=="2")
<div class="mdk-drawer-layout__content page ">
    <div class="container-fluid page__container">
        
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <h1 class="h2">Dashboard</h1>

        
        <div class="row">
            <div class="col-lg-7">
                <div class="card">
                    <div class="card-header">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <h4 class="card-title">Kuis</h4>
                            </div>
                            <div class="media-right">
                                <a class="btn btn-sm btn-primary" href="./kuis">Lainnya <i class="material-icons">keyboard_arrow_right</i></a>
                            </div>
                        </div>
                    </div>

                    <ul class="list-group list-group-fit">
                    @foreach($kuis as $kuis)
                        <li class="list-group-item forum-thread">
                            <div class="media align-items-center">
                                <div class="media-left">
                                    <div class="forum-icon-wrapper">
                                        <a href="./lihat_kuis/{{$kuis->id_kuis}}" class="avatar avatar-4by3 avatar-sm mr-3">
                                            <img src="./asset/u_file/foto_kuis/{{$kuis->foto_kuis}}"
                                            alt="course" class="avatar-img rounded">
                                        </a>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="d-flex align-items-center">
                                        <a href="./lihat_kuis/{{$kuis->id_kuis}}" class="text-body"><strong>{{$kuis->judul_kuis}}</strong></a>
                                    </div>
                                    <text class="text-black-70">{{$kuis->keterangan_singkat}}</text>
                                </div>
                            </div>
                        </li>
                    @endforeach
                    </ul>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <h4 class="card-title">Materi</h4>
                            </div>
                            <div class="media-right">
                                <a class="btn btn-sm btn-primary" href="./materi">Lainnya <i class="material-icons">keyboard_arrow_right</i></a>
                            </div>
                        </div>
                    </div>

                    <ul class="list-group list-group-fit">
                    @foreach($materi as $materi)
                        <li class="list-group-item forum-thread">
                            <div class="media align-items-center">
                                <div class="media-left">
                                    <div class="forum-icon-wrapper">
                                        <a href="./lihat_materi/{{$materi->id_materi}}" class="avatar avatar-4by3 avatar-sm mr-3">
                                            <img src="./asset/u_file/foto_materi/{{$materi->foto_materi}}"
                                            alt="course" class="avatar-img rounded">
                                        </a>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="d-flex align-items-center">
                                        <a href="./lihat_materi/{{$materi->id_materi}}" class="text-body"><strong>{{$materi->judul_materi}}</strong></a>
                                    </div>
                                    <text class="text-black-70">{{$materi->keterangan_singkat}}</text>
                                </div>
                            </div>
                        </li>
                    @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <h4 class="card-title">Pengumuman</h4>
                            </div>
                            <div class="media-right">
                                <a class="btn btn-sm btn-primary" href="./pengumuman">Lainnya <i class="material-icons">keyboard_arrow_right</i></a>
                            </div>
                        </div>
                    </div>

                    <ul class="list-group list-group-fit">
                    @foreach($pengumuman as $pengumuman)
                        <li class="list-group-item forum-thread">
                            <div class="media align-items-center">
                                <div class="media-left">
                                    <div class="forum-icon-wrapper">
                                        <a href="./lihat_pengumuman/{{$pengumuman->id_pengumuman}}" class="avatar avatar-4by3 avatar-sm mr-3">
                                            <img src="./asset/u_file/foto_pengumuman/{{$pengumuman->foto_pengumuman}}"
                                            alt="course" class="avatar-img rounded">
                                        </a>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="d-flex align-items-center">
                                        <a href="./lihat_pengumuman/{{$pengumuman->id_pengumuman}}" class="text-body"><strong>{{$pengumuman->judul_pengumuman}}</strong></a>
                                    </div>
                                    <text class="text-black-70">{{$pengumuman->keterangan_singkat}}</text>
                                </div>
                            </div>
                        </li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

            

@endsection