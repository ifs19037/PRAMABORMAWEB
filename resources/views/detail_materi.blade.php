@extends('layout/main_detail_materi')

@section('title', 'Detail Materi')

@section('container')
<div class="mdk-drawer-layout__content page ">
    <div class="container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="../manajemen_materi">Manajemen Materi</a></li>
            <li class="breadcrumb-item active">Detail Materi</li>
        </ol>
        <h1 class="h2">Detail Materi</h1>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Materi</h4>
            </div>
            
            @foreach($materi as $materi)
            <div class="card-body">
                <form action="../PostEditMateri" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="form-group row" hidden>
                        <div class="col-sm-9">
                            <input name="id_materi" type="text" class="form-control" value="{{$materi->id_materi}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label form-label">Judul Materi</label>
                        <div class="col-sm-9">
                            <input name="judul_materi" type="text" class="form-control" value="{{$materi->judul_materi}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label form-label">Keterangan Singkat</label>
                        <div class="col-sm-9">
                            <input name="keterangan_singkat" type="text" class="form-control" value="{{$materi->keterangan_singkat}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label form-label">Foto Materi</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <!--Foto Lama-->
                                <input type="text" name="foto_materi_lama" class="form-control" value="{{$materi->foto_materi}}" required hidden>
                                <!--Foto Baru-->
                                <input name="foto_materi" type="file" id="foto_materi" class="custom-file-input" accept="image/*">
                                <label for="foto_materi" class="custom-file-label">{{$materi->foto_materi}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label form-label">Divisi</label>
                        <div class="col-sm-9">
                            <input name="divisi_lama" type="text" class="form-control" value="{{$materi->divisi}}" required hidden>
                            <input type="text" class="form-control" value="{{$materi->divisi}}" disabled>
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
                            <input name="kode_link_video" type="text" class="form-control" value="{{$materi->kode_link_video}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="course_title" class="col-sm-3 col-form-label form-label">Status</label>
                        <div class="col-sm-9">
                            <select name="status" class="custom-select form-control" required>
                                <option selected value="{{$materi->status}}" hidden>{{$materi->status}}</option>
                                <option value="tampil">Tampilkan</option>
                                <option value="sembunyi">Sembunyikan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label form-label">Isi Materi</label>
                        <div class="col-sm-9">
                            <textarea name="isi_materi" placeholder="Isi Materi..." style="height:250px; width:100%" required>{{$materi->isi_materi}}</textarea>
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

        <div class="card">
            <div class="card-body">
            @if($materi->kode_link_video=="-")

            @else
                <iframe width="100%" height="500px" src="https://www.youtube.com/embed/{{$materi->kode_link_video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            @endif
            </div>
        </div>

    </div>
</div>
@endsection