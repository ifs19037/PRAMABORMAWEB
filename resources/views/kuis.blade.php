@extends('layout/main_kuis')

@section('title', 'Kuis')

@section('container')

<div class="mdk-drawer-layout__content page ">
    <div class="container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
            <li class="breadcrumb-item active">Pelatihan</li><li class="breadcrumb-item active">Kuis</li>
        </ol>
        <div class="d-flex flex-column flex-sm-row flex-wrap mb-headings align-items-start align-items-sm-center">
            <div class="flex mb-2 mb-sm-0">
                <h1 class="h2">Kuis</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid page__container">
        <div class="card">
            <div class="card-body">
                <form method="GET">
                    <div class="search-form search-form--light mb-3">
                        <input type="text" name="cari" class="form-control search" placeholder="Cari..." value="{{ old('cari') }}">
                        <button class="btn" type="submit" role="button"><i class="material-icons">search</i></button>
                    </div>
                </form>
                <div class="row">
                    @foreach($kuis as $kuis)
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column flex-sm-row">
                                    @if($kuis->tanggal_kuis==date('Y-m-d'))
                                        <a href="./lihat_kuis/{{$kuis->id_kuis}}" class="avatar avatar-lg avatar-4by3 mb-3 w-xs-plus-down-100 mr-sm-3">
                                            <img src="../asset/u_file/foto_kuis/{{$kuis->foto_kuis}}" alt="Card image cap" class="avatar-img rounded">
                                        </a>
                                    @elseif($kuis->tanggal_kuis!=date('Y-m-d'))
                                        <a class="avatar avatar-lg avatar-4by3 mb-3 w-xs-plus-down-100 mr-sm-3">
                                            <img src="../asset/u_file/foto_kuis/{{$kuis->foto_kuis}}" alt="Card image cap" class="avatar-img rounded">
                                        </a>
                                    @endif
                                    <div class="flex" style="min-width: 200px;">
                                        <!-- <h5 class="card-title text-base m-0"><a href="instructor-course-edit.html"><strong>Learn Vue.js</strong></a></h5> -->
                                        <?php date_default_timezone_set('Asia/Jakarta');?>
                                        <h4 class="card-title mb-1"><a href="./lihat_kuis/{{$kuis->id_kuis}}">{{$kuis->judul_kuis}}</a></h4>
                                        <p class="text-black-70">{{$kuis->keterangan_singkat}}</p>
                                        <div class="d-flex align-items-end">
                                            <div class="d-flex flex flex-column mr-3">
                                                <div class="d-flex align-items-center py-1 border-bottom">
                                                    <small class="text-black-70 mr-2">{{$kuis->tanggal_kuis}}</small>
                                                    <small class="text-muted mr-2"> | </small>
                                                    <?php
                                                        $menit_durasi_pengerjaan = (60*$kuis->durasi_pengerjaan)%60;

                                                        $jam_durasi_pengerjaan = $kuis->durasi_pengerjaan-(((60*$kuis->durasi_pengerjaan)%60)/60);
                                                        
                                                        if($jam_durasi_pengerjaan<1){
                                                            $jam_durasi_pengerjaan=0;
                                                        }
                                                    ?>
                                                    <small class="text-black-50 mr-2"> {{$jam_durasi_pengerjaan}} JAM &nbsp;&nbsp; {{$menit_durasi_pengerjaan}} MENIT</small>
                                                    <small class="text-muted mr-2"> | </small>
                                                    <small class="text-black-50" style="text-transform: uppercase;"> {{$kuis->tipe_kuis}}</small>
                                                </div>
                                                
                                                <div class="d-flex align-items-center py-1">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection