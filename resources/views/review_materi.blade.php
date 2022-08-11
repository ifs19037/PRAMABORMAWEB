@extends('layout/main_review_materi')

@section('title', 'Review Akses Materi')

@section('container')
<div class="mdk-drawer-layout__content page ">
    <div class="container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="#">Manajemen Pelatihan</a></li><li class="breadcrumb-item"><a href="../manajemen_kuis">Manajemen Materi</a></li>
            <li class="breadcrumb-item active">Review Akses Materi</li>
        </ol>
        <h1 class="h2">Review Akses Materi</h1>
        <div class="card">
            @foreach($materi as $materi)
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive border-bottom" data-toggle="lists" data-lists-values='["js-lists-values-nama-karyawan",
                        "js-lists-values-nik", "js-lists-values-lokasi", "js-lists-values-akses-awal", "js-lists-values-akses-terakhir"]'>
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
                                        <th>
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-akses-awal" style="text-transform: uppercase; font-size:16px">AKSES AWAL</a>
                                        </th>
                                        <th>
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-akses-terakhir" style="text-transform: uppercase; font-size:16px">AKSES TERAKHIR</a>
                                        </th>
                                    </tr>
                                </thead>
                                
                                <tbody class="list" id="search">
                                @foreach($akses_materi as $akses_materi)
                                    <tr style="text-transform: uppercase; font-size:14px">
                                        <td>{{$loop->iteration}}</td>
                                        <td>
                                            <span class="js-lists-values-nama-karyawan">{{$akses_materi->nama_karyawan}}</span>
                                        </td>
                                        <td style="width: 25px;">
                                            <span class="js-lists-values-nik">{{$akses_materi->nik_karyawan}}</span>
                                        </td>
                                        <td>
                                            <span class="js-lists-values-lokasi">{{$akses_materi->lokasi}}</span>
                                        </td>
                                        <td>
                                            <span class="js-lists-values-akses-awal">{{$akses_materi->created_at}}</span>
                                        </td>
                                        <td>
                                            <span class="js-lists-values-akses-terakhir">{{$akses_materi->updated_at}}</span>
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