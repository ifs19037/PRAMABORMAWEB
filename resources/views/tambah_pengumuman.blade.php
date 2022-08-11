@extends('layout/main_tambah_pengumuman')

@section('title', 'Tambah Pengumuman')

@section('container')
<div class="mdk-drawer-layout__content page ">
    <div class="container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="#">Manajemen Pengumuman</a></li><li class="breadcrumb-item"><a href="./manajemen_pengumuman">Manajemen Pengumuman</a></li>
            <li class="breadcrumb-item active">Tambah Pengumuman</li>
        </ol>
        <h1 class="h2">Tambah Pengumuman</h1><div class="card">
            <div class="card-header">
                <h4 class="card-title">Pengumuman</h4>
            </div>
            <div class="card-body">
                <form action="./PostTambahPengumuman" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label form-label">Judul Pengumuman</label>
                        <div class="col-sm-9">
                            <input  name="judul_pengumuman" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label form-label">Keterangan Singkat</label>
                        <div class="col-sm-9">
                            <input  name="keterangan_singkat" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="course_title" class="col-sm-3 col-form-label form-label">Foto Pengumuman</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <!--Jika Tidak Ada Foto-->
                                <input type="text" name="foto_kosong" class="form-control" value="empty.png" required hidden>
                                <!--Jika Ada Foto-->
                                <input name="foto_pengumuman" type="file" id="foto_pengumuman" class="custom-file-input" accept="image/*">
                                <label for="foto_pengumuman" class="custom-file-label">Pilih Foto</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label form-label">Isi Pengumuman</label>
                        <div class="col-sm-9"> 
                            <textarea name="isi_pengumuman" placeholder="Isi Pengumuman..." style="height: 250px; width:100%" required><a></a></textarea>
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