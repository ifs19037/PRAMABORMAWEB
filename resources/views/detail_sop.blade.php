@extends('layout/main_detail_sop')

@section('title', 'Detail SOP')

@section('container')
<!-- <style>
    .file_sop
    {
        display:block;
        -khtml-user-select:none;
        -webkit-user-select:none;
        -moz-user-select:none;
        -ms-user-select:none;
        -o-user-select:none;
        user-select:none;
        unselectable:on;
        }
</style> -->
<div class="mdk-drawer-layout__content page ">
    <div class="container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="../manajemen_sop">Manajemen SOP</a></li>
            <li class="breadcrumb-item active">Detail SOP</li>
        </ol>
        <h1 class="h2">Detail SOP</h1>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">SOP</h4>
            </div>
            
            @foreach($sop as $sop)
            <div class="card-body">
                <form action="../PostEditSOP" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="form-group row" hidden>
                        <div class="col-sm-9">
                            <input name="id_sop" type="text" class="form-control" value="{{$sop->id_sop}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label form-label">Judul SOP</label>
                        <div class="col-sm-9">
                            <input name="judul_sop" type="text" class="form-control" value="{{$sop->judul_sop}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label form-label">Keterangan Singkat</label>
                        <div class="col-sm-9">
                            <input name="keterangan_singkat" type="text" class="form-control" value="{{$sop->keterangan_singkat}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label form-label">Foto SOP</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <!--Foto Lama-->
                                <input type="text" name="foto_sop_lama" class="form-control" value="{{$sop->foto_sop}}" required hidden>
                                <!--Foto Baru-->
                                <input name="foto_sop" type="file" id="foto_sop" class="custom-file-input" accept="image/*">
                                <label for="foto_sop" class="custom-file-label">{{$sop->foto_sop}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="course_title" class="col-sm-3 col-form-label form-label">Status</label>
                        <div class="col-sm-9">
                            <select name="status" class="custom-select form-control" required>
                                <option selected value="{{$sop->status}}" hidden>{{$sop->status}}</option>
                                <option value="tampil">Tampilkan</option>
                                <option value="sembunyi">Sembunyikan</option>
                            </select>
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
                <iframe src="../asset/u_file/file_sop/{{$sop->file_sop}}#toolbar=0" width="100%" height="550px"></iframe>
            </div>
        </div>

    </div>
</div>
@endsection