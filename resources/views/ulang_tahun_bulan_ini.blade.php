@extends('layout/main_ulang_tahun_bulan_ini')

@section('title', 'Ulang Tahun Bulan Ini')

@section('container')

@if(Session::get('level')=="1")
<div class="mdk-drawer-layout__content page ">
    <div class="container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Dashboard</a></li><li class="breadcrumb-item active">Ulang Tahun Bulan Ini</li>
        </ol>
        <div class="d-flex flex-column flex-sm-row flex-wrap mb-headings align-items-start align-items-sm-center">
            <div class="flex mb-2 mb-sm-0">
                <h1 class="h2">Ulang Tahun Bulan Ini &nbsp; ({{$jumlah_ulang_tahun_bulan_ini}})</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid page__container">
        <div class="card">
            <div class="card-body">
                <form method="GET">
                    <div class="search-form search-form--light mb-3">
                        <div class="custom-file">
                            <select name="cari_nama_lokasi" id="cari_nama_lokasi" class="custom-select form-control search" onclick="cari_id_divisi()">
                                @if($cari_nama_lokasi=="")
                                    <option selected disabled value="">Pilih Lokasi</option>
                                @elseif($cari_nama_lokasi!="")
                                    <option selected value="">Semua</option>
                                    <option selected disabled value="{{$cari_nama_lokasi}}">{{$cari_nama_lokasi}}</option>
                                @endif
                                @foreach($lokasi as $lokasi)
                                    <option value="{{$lokasi->nama_lokasi}}">{{$lokasi->nama_lokasi}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="search-form search-form--light mb-3">
                        <input type="text" name="cari_nama" class="form-control search" placeholder="Cari Nama" value="{{ old('cari_nama') }}">
                        <button class="btn" type="submit" role="button"><i class="material-icons">search</i></button>
                    </div>
                </form>
                <div class="row">
                    @foreach($ulang_tahun_bulan_ini as $ulang_tahun_bulan_ini)
                    <?php date_default_timezone_set('Asia/Jakarta');?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="d-flex flex-column">
                                    <div class="">
                                        <span class="w-64 h-64 icon-holder rounded-circle d-inline-flex mb-16pt">
                                        <img src="./asset/u_file/foto_profil/{{$ulang_tahun_bulan_ini->foto_karyawan}}" alt="Avatar" class="rounded-circle" width="75px">
                                        </span>
                                        <h4 class="mb-8pt">{{$ulang_tahun_bulan_ini->nama_karyawan}}</h4>
                                        <text class="text-black-70">{{$ulang_tahun_bulan_ini->lokasi}}</text>
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

    <div class="container-fluid page__container">
        <div class="d-flex flex-column flex-sm-row flex-wrap mb-headings align-items-start align-items-sm-center">
            <div class="flex mb-2 mb-sm-0">
                <h1 class="h2">Ulang Tahun Bulan Depan &nbsp; ({{$jumlah_ulang_tahun_bulan_depan}})</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid page__container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @foreach($ulang_tahun_bulan_depan as $ulang_tahun_bulan_depan)
                    <?php date_default_timezone_set('Asia/Jakarta');?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="d-flex flex-column">
                                    <div class="">
                                        <span class="w-64 h-64 icon-holder rounded-circle d-inline-flex mb-16pt">
                                        <img src="./asset/u_file/foto_profil/{{$ulang_tahun_bulan_depan->foto_karyawan}}" alt="Avatar" class="rounded-circle" width="75px">
                                        </span>
                                        <h4 class="mb-8pt">{{$ulang_tahun_bulan_depan->nama_karyawan}}</h4>
                                        <text class="text-black-70">{{$ulang_tahun_bulan_depan->lokasi}}</text>
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

@elseif(Session::get('level')=="2")

@endif

@endsection