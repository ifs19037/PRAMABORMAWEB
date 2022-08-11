@extends('layout/main_manajemen_data')

@section('title', 'Manajemen Data Karyawan')

@section('container')
<div class="mdk-drawer-layout__content page ">
    <div class="container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
            <li class="breadcrumb-item active">Manajemen Profil</li><li class="breadcrumb-item active">Manajemen Data</li>
        </ol>
        <div class="d-flex flex-column flex-sm-row flex-wrap mb-headings align-items-start align-items-sm-center">
            <div class="flex mb-2 mb-sm-0">
                <h1 class="h2">Manajemen Data</h1>
            </div>
            <div class="mb-2 mb-sm-0">
                <div class="flex mb-2 mb-sm-0">
                    <a href="./manajemen_data/export_excel" target="_blank" class="btn btn-success" data-target="">Export Data</a>
                    <a class="btn btn-success" data-toggle="modal" data-target="#ImportExcel" class="btn btn-outline-secondary">Import Data</a> 
                    <a style="color:white">|</a>
                    <a href="./tambah_data" class="btn btn-success">Tambah Data</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid page__container">
        <div class="card">
            <div class="tab-content card-body">
                <div class="tab-pane active" id="manajemen">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive border-bottom" data-toggle="lists" data-lists-values='["js-lists-values-nama-karyawan",
                            "js-lists-values-nik", "js-lists-values-jabatan", "js-lists-values-divisi", "js-lists-values-lokasi"]'>
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
                                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-jabatan" style="text-transform: uppercase; font-size:16px">JABATAN</a>
                                            </th>
                                            <th>
                                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-divisi" style="text-transform: uppercase; font-size:16px">DIVISI</a>
                                            </th>
                                            <th>
                                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-lokasi" style="text-transform: uppercase; font-size:16px">LOKASI</a>
                                            </th>
                                            <th>
                                                <ul class="nav nav-tabs nav-tabs-card">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#check" data-toggle="tab">Check</a>
                                                    </li>
                                                </ul>
                                            </th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody class="list" id="search">
                                    @foreach($data_karyawan as $karyawan)
                                        <tr style="text-transform: uppercase; font-size:14px">
                                            <td>{{$loop->iteration }}</td>
                                            <td>
                                                <span class="js-lists-values-nama-karyawan">{{$karyawan->nama_karyawan}}</span>
                                            </td>
                                            <td style="width: 25px;">
                                                <span class="js-lists-values-nik">{{$karyawan->nik_karyawan}}</span>
                                            </td>
                                            <td>
                                                <span class="js-lists-values-jabatan">{{$karyawan->jabatan}}</span>
                                            </td>
                                            <td>
                                                <span class="js-lists-values-divisi">{{$karyawan->divisi}}</span>
                                            </td>
                                            <td>
                                                <span class="js-lists-values-lokasi">{{$karyawan->lokasi}}</span>
                                            </td>
                                            <td style="width: 10px;" align="center">
                                                <a href="#" class="dropdown-toggle text-muted" data-caret="false" data-toggle="dropdown">
                                                    <i class="material-icons">more_vert</i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="./detail_karyawan/{{$karyawan->nik_karyawan}}">Detail</a>
                                                <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="./hapus_data_karyawan/{{$karyawan->nik_karyawan}}">Hapus Data</a>
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
                <div class="tab-pane" id="check">
                <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive border-bottom" data-toggle="lists" data-lists-values='["js-lists-values-nama-karyawan",
                            "js-lists-values-nik", "js-lists-values-jabatan", "js-lists-values-divisi", "js-lists-values-lokasi"]'>
                                <form action="#" method="GET">
                                    <div class="search-form search-form--light mb-3">
                                        <input type="text" class="form-control search" placeholder="Search">
                                        <!-- <button class="btn" type="button" role="button"><i class="material-icons">search</i></button> -->
                                    </div>
                                </form>

                                <form action="./check_hapus_data_karyawan" method="post" enctype="multipart/form-data">
                                @csrf
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
                                                    <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-jabatan" style="text-transform: uppercase; font-size:16px">JABATAN</a>
                                                </th>
                                                <th>
                                                    <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-divisi" style="text-transform: uppercase; font-size:16px">DIVISI</a>
                                                </th>
                                                <th>
                                                    <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-lokasi" style="text-transform: uppercase; font-size:16px">LOKASI</a>
                                                </th>
                                                <th>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" id="checkDeleteAll" class="custom-control-input" onClick="toggle(this)">
                                                        <label for="checkDeleteAll" class="custom-control-label">All?</label>
                                                    </div>
                                                </th>
                                                <th>
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="material-icons">delete</i></button>
                                                </th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody class="list" id="search">
                                        @foreach($data_karyawan as $karyawan)
                                            <tr style="text-transform: uppercase; font-size:14px">
                                                <td>{{$loop->iteration }}</td>
                                                <td>
                                                    <span class="js-lists-values-nama-karyawan">{{$karyawan->nama_karyawan}}</span>
                                                </td>
                                                <td style="width: 25px;">
                                                    <span class="js-lists-values-nik">{{$karyawan->nik_karyawan}}</span>
                                                </td>
                                                <td>
                                                    <span class="js-lists-values-jabatan">{{$karyawan->jabatan}}</span>
                                                </td>
                                                <td>
                                                    <span class="js-lists-values-divisi">{{$karyawan->divisi}}</span>
                                                </td>
                                                <td>
                                                    <span class="js-lists-values-lokasi">{{$karyawan->lokasi}}</span>
                                                </td>
                                                <td align="center">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" name="checkDelete[]" id="checkDelete[{{$karyawan->nik_karyawan}}]" value="{{$karyawan->nik_karyawan}}" class="custom-control-input">
                                                        <label for="checkDelete[{{$karyawan->nik_karyawan}}]" class="custom-control-label"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </form>
                                <script>
                                    function toggle(source) {
                                        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
                                        for (var i = 0; i < checkboxes.length; i++) {
                                            if (checkboxes[i] != source)
                                                checkboxes[i].checked = source.checked;
                                        }
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                
            </div>
        </div>
    </div>
</div>

@endsection