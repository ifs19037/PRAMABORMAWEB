@extends('layout/main_manajemen_akun')

@section('title', 'Manajemen Akun')

@section('container')

<div class="mdk-drawer-layout__content page ">
    <div class="container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
            <li class="breadcrumb-item active">Manajemen Profil</li><li class="breadcrumb-item active">Manajemen Akun</li>
        </ol>
        <div class="d-flex flex-column flex-sm-row flex-wrap mb-headings align-items-start align-items-sm-center">
            <div class="flex mb-2 mb-sm-0">
                <h1 class="h2">Manajemen Akun</h1>
            </div>
            <div class="mb-2 mb-sm-0">
                <div class="flex mb-2 mb-sm-0">
                    <!-- <a href="./manajemen_akun/export_excel" target="_blank" class="btn btn-success" data-target="">Export Data</a>s -->
                    <a class="btn btn-success" data-toggle="modal" data-target="#ImportExcel" class="btn btn-outline-secondary">Import Akun</a> 
                    <a style="color:white">|</a>
                    <a class="btn btn-success" data-toggle="modal" data-target="#TambahAkun" class="btn btn-outline-secondary">Tambah Akun</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid page__container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="table-responsive border-bottom" data-toggle="lists" data-lists-values='["js-lists-values-nik", "js-lists-values-id-karyawan"]'>
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
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-nik" style="text-transform: uppercase; font-size:16px">NIP</a>
                                        </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                
                                <tbody class="list" id="search">
                                @foreach($akun as $akun)
                                    <tr style="text-transform: uppercase; font-size:14px">
                                        <td>{{$loop->iteration }}</td>
                                        <td>
                                            <span class="js-lists-values-nik">{{$akun->nik_karyawan}}</span>
                                        </td>
                                        <td style="width: 10px;">
                                            <a href="#" class="dropdown-toggle text-muted" data-caret="false" data-toggle="dropdown">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="./detail_karyawan/{{$akun->nik_karyawan}}">Detail</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" href="./hapus_akun/{{$akun->nik_akun}}">Hapus Akun</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
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