@extends('layout/main_review_kuis')

@section('title', 'Review Kuis')

@section('container')
<div class="mdk-drawer-layout__content page ">
    <div class="container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="#">Manajemen Pelatihan</a></li><li class="breadcrumb-item"><a href="../manajemen_kuis">Manajemen Kuis</a></li>
            <li class="breadcrumb-item active">Review Kuis</li>
        </ol>
        <h1 class="h2">Review Pengerjaan Kuis</h1>
        <div class="card">
            @foreach($kuis as $kuis)
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive border-bottom" data-toggle="lists" data-lists-values='["js-lists-values-nama-karyawan",
                        "js-lists-values-nik", "js-lists-values-lokasi", "js-lists-values-nilai"]'>
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
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-lokasi" style="text-transform: uppercase; font-size:16px">LOKASI</a>
                                        </th>
                                        <th style="width: 15px;">
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-nilai" style="text-transform: uppercase; font-size:16px">NILAI</a>
                                        </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                
                                <tbody class="list" id="search">
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection