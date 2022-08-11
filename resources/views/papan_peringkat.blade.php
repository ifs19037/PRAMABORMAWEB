@extends('layout/main_papan_peringkat')

@section('title', 'Papan Peringkat')

@section('container')


<div class="mdk-drawer-layout__content page ">
    <div class="container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Dashboard</a></li><li class="breadcrumb-item active">Papan Peringkat</li>
        </ol>
        <div class="d-flex flex-column flex-sm-row flex-wrap mb-headings align-items-start align-items-sm-center">
            <div class="flex mb-2 mb-sm-0">
                <h1 class="h2">Papan Peringkat</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid page__container">
        <div class="card">
            <div class="card-body">
                <form method="GET">
                    <!-- <div class="search-form search-form--light mb-3">
                        <div class="custom-file">
                            <select name="cari_nama_divisi" id="cari_nama_divisi" class="custom-select form-control search" onclick="cari_id_divisi()" required>
                                @if($cari_nama_divisi=="")
                                    <option selected disabled value="">Pilih Divisi</option>
                                @elseif($cari_nama_divisi!="")
                                    <option selected value="{{$cari_nama_divisi}}">{{$cari_nama_divisi}}</option>
                                @endif
                                @foreach($divisi as $divisi)
                                    <option value="{{$divisi->nama_divisi}}">{{$divisi->nama_divisi}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div> -->
                    <div class="search-form search-form--light mb-3">
                        <div class="custom-file">
                            <select name="cari_id_kuis" class="custom-select form-control search" required>
                                @if($cari_id_kuis=="")
                                    <option selected disabled value="">Pilih Kuis</option>
                                @elseif($cari_id_kuis!="")
                                    @foreach($kuis_cari as $kuis_cari)
                                        <option selected value="{{$kuis_cari->id_kuis}}">{{$kuis_cari->judul_kuis}} | {{$kuis_cari->divisi}}</option>
                                    @endforeach
                                @endif
                                @foreach($kuis as $kuis)
                                    <option value="{{$kuis->id_kuis}}">{{$kuis->judul_kuis}} | {{$kuis->divisi}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="search-form search-form--light mb-3">
                        <div class="custom-file">
                            <select name="cari_nama_lokasi" class="custom-select form-control search">
                                @if($cari_nama_lokasi=="")
                                    <option selected disabled value="">Pilih Lokasi</option>
                                @elseif($cari_nama_lokasi!="")
                                    <option selected value="">Semua</option>
                                    <option selected value="{{$cari_nama_lokasi}}">{{$cari_nama_lokasi}}</option>
                                @endif
                                @foreach($lokasi as $lokasi)
                                    <option value="{{$lokasi->nama_lokasi}}">{{$lokasi->nama_lokasi}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                        <button class="btn btn-info form-control" type="submit" role="button"><i class="material-icons">search</i></button>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive border-bottom" data-toggle="lists" data-lists-values='["js-lists-values-nama-karyawan",
                        "js-lists-values-nik", "js-lists-values-jabatan", "js-lists-values-divisi", "js-lists-values-lokasi", "js-lists-values-nilai"]'>
                            <form action="#" method="GET">
                                <div class="search-form search-form--light mb-3">
                                    <input type="text" class="form-control search" placeholder="Search">
                                    <!-- <button class="btn" type="button" role="button"><i class="material-icons">search</i></button> -->
                                </div>
                            </form>

                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th style="text-transform: uppercase; font-size:16px">NO</th>
                                        <th>
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-nama-karyawan" style="text-transform: uppercase; font-size:16px">NAMA KARYAWAN</a>
                                        </th>
                                        <th style="width: 25px;">
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-nik" style="text-transform: uppercase; font-size:16px">NIP</a>
                                        </th>
                                        <th>
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-divisi" style="text-transform: uppercase; font-size:16px">DIVISI</a>
                                        </th>
                                        <th>
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-lokasi" style="text-transform: uppercase; font-size:16px">LOKASI</a>
                                        </th>
                                        <th style="width: 15px;">
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-nilai" style="text-transform: uppercase; font-size:16px">NILAI</a>
                                        </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                
                                <tbody class="list" id="search">

                                
                                @if($cari_nama_lokasi=="")
                                    @if($cari_nama_divisi!="" || $cari_id_kuis!="")
                                        @foreach($hasil_kuis as $hasil_kuis)
                                            <tr style="text-transform: uppercase; font-size:14px">
                                                <td>{{$loop->iteration}}</td>
                                                <td>
                                                    <span class="js-lists-values-nama-karyawan">{{$hasil_kuis->nama_karyawan}}</span>
                                                </td>
                                                <td style="width: 25px;">
                                                    <span class="js-lists-values-nik">{{$hasil_kuis->nik_karyawan}}</span>
                                                </td>
                                                <td>
                                                    <span class="js-lists-values-divisi">{{$hasil_kuis->divisi}}</span>
                                                </td>
                                                <td>
                                                    <span class="js-lists-values-lokasi">{{$hasil_kuis->lokasi}}</span>
                                                </td>
                                                <td style="width: 15px;">
                                                    <span class="js-lists-values-nilai">{{$hasil_kuis->nilai}}</span>
                                                </td>
                                                <td style="width: 10px;">
                                                    <a href="#" class="dropdown-toggle text-muted" data-caret="false" data-toggle="dropdown">
                                                        <i class="material-icons">more_vert</i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="../review_pengerjaan_kuis/{{$kuis->id_kuis}}/{{$hasil_kuis->nik_akun}}">Review Pengerjaan</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        
                                    @elseif($cari_nama_divisi=="" || $cari_id_kuis=="")

                                    @endif
                                @elseif($cari_nama_lokasi!="")
                                    @if($cari_nama_divisi!="" || $cari_id_kuis!="" && $cari_nama_lokasi!="")
                                        @foreach($hasil_kuis as $hasil_kuis)
                                            <tr style="text-transform: uppercase; font-size:14px">
                                                <td>{{$loop->iteration}}</td>
                                                <td>
                                                    <span class="js-lists-values-nama-karyawan">{{$hasil_kuis->nama_karyawan}}</span>
                                                </td>
                                                <td style="width: 25px;">
                                                    <span class="js-lists-values-nik">{{$hasil_kuis->nik_karyawan}}</span>
                                                </td>
                                                <td>
                                                    <span class="js-lists-values-divisi">{{$hasil_kuis->divisi}}</span>
                                                </td>
                                                <td>
                                                    <span class="js-lists-values-lokasi">{{$hasil_kuis->lokasi}}</span>
                                                </td>
                                                <td style="width: 15px;">
                                                    <span class="js-lists-values-nilai">{{$hasil_kuis->nilai}}</span>
                                                </td>
                                                <td style="width: 10px;">
                                                    <a href="#" class="dropdown-toggle text-muted" data-caret="false" data-toggle="dropdown">
                                                        <i class="material-icons">more_vert</i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="../review_pengerjaan_kuis/{{$kuis->id_kuis}}/{{$hasil_kuis->nik_akun}}">Review Pengerjaan</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        
                                    @elseif($cari_nama_divisi=="" || $cari_id_kuis=="" && $cari_nama_lokasi=="")

                                    @endif

                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection