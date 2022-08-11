@extends('layout/main_tambah_data')

@section('title', 'Tambah Data Karyawan')

@section('container')
<div class="mdk-drawer-layout__content page ">
    <div class="container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="#">Manajemen Karyawan</a></li><li class="breadcrumb-item"><a href="./manajemen_data">Manajemen Data</a></li>
            <li class="breadcrumb-item active">Tambah Data</li>
        </ol>
        <h1 class="h2">Tambah Data Karyawan</h1><div class="card">
            <div class="card-header">
                <h4 class="card-title">Karyawan</h4>
            </div>
            <div class="card-body">
                <form action="./PostTambahDataKaryawan" method="post">
                @csrf
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label form-label">Nama Karyawan</label>
                        <div class="col-sm-9">
                            <input  name="nama_karyawan" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label form-label">NIP</label>
                        <div class="col-sm-9">
                            <input name="nik_karyawan" type="text" class="form-control form-control-prepended" data-mask="###" data-mask-reverse="true" maxlength="10" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="course_title" class="col-sm-3 col-form-label form-label">Jenis Kelamin</label>
                        <div class="col-sm-9">
                            <select name="jenis_kelamin" class="custom-select form-control" required>
                                <option selected disabled value="">Pilih Jenis Kelamin</option>
                                <option value="laki laki">Laki Laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label form-label">Jabatan</label>
                        <div class="col-sm-9">
                            <select name="jabatan"class="custom-select form-control" required>
                                <option selected disabled value="">Pilih Jabatan</option>
                                @foreach($jabatan as $jabatan)
                                    <option value="{{$jabatan->nama_jabatan}}">{{$jabatan->nama_jabatan}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label form-label">Divisi</label>
                        <div class="col-sm-9">
                            <select  name="divisi"class="custom-select form-control" required>
                                <option selected disabled value="">Pilih Divisi</option>
                                @foreach($divisi as $divisi)
                                    <option value="{{$divisi->nama_divisi}}">{{$divisi->nama_divisi}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label form-label">Lokasi</label>
                        <div class="col-sm-9">
                            <select name="lokasi" class="custom-select form-control" required>
                                <option selected disabled value="">Pilih Lokasi</option>
                                @foreach($lokasi as $lokasi)
                                    <option value="{{$lokasi->nama_lokasi}}">{{$lokasi->nama_lokasi}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label form-label">Tanggal Lahir</label>
                        <div class="col-sm-9">
                            <!-- <input name="tanggal_lahir" type="date" class="form-control" max="<?php //echo date('Y-m-d')?>" required> -->
                            <input type="date" name="tanggal_lahir" id="flatpickrSample01" type="text" class="col-sm-3 col-form-label form-label" data-toggle="flatpickr" max="<?php echo date('Y-m-d')?>" placeholder="M D, Y"required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label form-label">Tanggal Masuk</label>
                        <div class="col-sm-9">
                            <!-- <input name="tanggal_masuk" type="date" class="form-control" required> -->
                            <input type="date" name="tanggal_masuk" id="flatpickrSample01" type="text" class="col-sm-3 col-form-label form-label" data-toggle="flatpickr" placeholder="M D, Y" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label form-label">Email</label>
                        <div class="col-sm-9">
                            <input name="email" type="email" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label form-label">No Telepon</label>
                        <div class="col-sm-9">
                            <input name="no_telepon" type="text" class="form-control form-control-prepended" data-mask="###" data-mask-reverse="true" maxlength="13" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label form-label">Alamat KTP</label>
                        <div class="col-sm-9">
                            <input  name="alamat_ktp" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-sm-9 offset-sm-3">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection