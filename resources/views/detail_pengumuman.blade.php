@extends('layout/main_detail_pengumuman')

@section('title', 'Detail Pengumuman')

@section('container')
<div class="mdk-drawer-layout__content page ">
    <div class="container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="../manajemen_pengumuman">Manajemen Pengumuman</a></li>
            <li class="breadcrumb-item active">Detail Pengumuman</li>
        </ol>
        <h1 class="h2">Detail Pengumuman</h1>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Pengumuman</h4>
            </div>
            
            @foreach($pengumuman as $pengumuman)
            <div class="card-body">
                <form action="../PostEditPengumuman" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="form-group row" hidden>
                        <div class="col-sm-9">
                            <input name="id_pengumuman" type="text" class="form-control" value="{{$pengumuman->id_pengumuman}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label form-label">Judul Pengumuman</label>
                        <div class="col-sm-9">
                            <input name="judul_pengumuman" type="text" class="form-control" value="{{$pengumuman->judul_pengumuman}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label form-label">Keterangan Singkat</label>
                        <div class="col-sm-9">
                            <input name="keterangan_singkat" type="text" class="form-control" value="{{$pengumuman->keterangan_singkat}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label form-label">Foto Pengumuman</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <!--Foto Lama-->
                                <input type="text" name="foto_pengumuman_lama" class="form-control" value="{{$pengumuman->foto_pengumuman}}" required hidden>
                                <!--Foto Baru-->
                                <input name="foto_pengumuman" type="file" id="foto_pengumuman" class="custom-file-input" accept="image/*">
                                <label for="foto_pengumuman" class="custom-file-label">{{$pengumuman->foto_pengumuman}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label form-label">Isi Pengumuman</label>
                        <div class="col-sm-9">
                            <textarea name="isi_pengumuman" placeholder="Isi Pengumuman..." style="height:250px; width:100%" required>{{$pengumuman->isi_pengumuman}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-sm-9 offset-sm-3">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection