@extends('layout/main_tambah_materi')

@section('title', 'Tambah Materi')

@section('container')
<div class="mdk-drawer-layout__content page ">
    <div class="container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="#">Manajemen Pelatihan</a></li><li class="breadcrumb-item"><a href="./manajemen_materi">Manajemen Materi</a></li>
            <li class="breadcrumb-item active">Tambah Materi</li>
        </ol>
        <h1 class="h2">Tambah Materi</h1><div class="card">
            <div class="card-header">
                <h4 class="card-title">Materi</h4>
            </div>
            <div class="card-body">
                <form action="./PostTambahMateri" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label form-label">Judul Materi</label>
                        <div class="col-sm-9">
                            <input  name="judul_materi" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label form-label">Keterangan Singkat</label>
                        <div class="col-sm-9">
                            <input  name="keterangan_singkat" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="course_title" class="col-sm-3 col-form-label form-label">Foto Materi</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <!--Jika Tidak Ada Foto-->
                                <input type="text" name="foto_kosong" class="form-control" value="empty.png" required hidden>
                                <!--Jika Ada Foto-->
                                <input name="foto_materi" type="file" id="foto_materi" class="custom-file-input" accept="image/*">
                                <label for="foto_materi" class="custom-file-label fileName">Pilih Foto</label>
                                <script>
                                    $('input[type=file]').change(function(e) {
                                    $in = $(this);
                                    $in.next().html($in.val());
                                    
                                });

                                $('.uploadButton').click(function() {
                                    var fileName = $("#fileUpload").val();
                                    if (fileName) {
                                        alert(fileName + " can be uploaded.");
                                    }
                                    else {
                                        alert("Please select a file to upload");
                                    }
                                });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label form-label">Divisi</label>
                        <div class="col-sm-9">
                            <div style="width: 100%; height: 100px; overflow: auto; margin-top: 5px">
                            @foreach($divisi as $divisi)
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="divisi[]" id="divisi[{{$divisi->nama_divisi}}]" value="{{$divisi->nama_divisi}}" class="custom-control-input">
                                    <label for="divisi[{{$divisi->nama_divisi}}]" class="custom-control-label">{{$divisi->nama_divisi}}</label>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label form-label">Kode Link Video</label>
                        <div class="col-sm-9">
                            <input name="kode_link_video" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label form-label">Isi Materi</label>
                        <div class="col-sm-9">
                            <textarea name="isi_materi" placeholder="Isi Materi..." style="height: 250px; width:100%" required><a></a></textarea>
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