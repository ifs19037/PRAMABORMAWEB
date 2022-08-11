@extends('layout/main_edit_profil')

@section('title', 'Edit Profil')

@section('container')
<div class="mdk-drawer-layout__content page ">
    <div class="container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit Profil</li>
        </ol>
        <h1 class="h2">Edit Profil</h1><div class="card">
            <!-- <div class="card-header">
                <h4 class="card-title">Profil</h4>
            </div> -->
            @foreach($profil as $profil)
            <div class="card">
                <ul class="nav nav-tabs nav-tabs-card">
                    <li class="nav-item">
                        <a class="nav-link active" href="#first" data-toggle="tab">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#second" data-toggle="tab">Kata Sandi</a>
                    </li>
                </ul>
                <div class="tab-content card-body">
                    <div class="tab-pane active" id="first">
                        <form action="../PostEditFotoProfil" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group row">
                                <label for="avatar" class="col-sm-3 col-form-label form-label">Foto</label>
                                <div class="col-sm-9">
                                    <div class="media align-items-center">
                                        <div class="media-left rounded">
                                            <div class="icon-block rounded-circle">
                                                <img src="../asset/u_file/foto_profil/{{$profil->foto_karyawan}}" alt="Avatar" class="rounded-circle" width="100%" height="100%">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="custom-file" style="width: auto;">
                                                <!--Foto Lama-->
                                                <input type="text" name="foto_karyawan_lama" class="form-control" value="{{$profil->foto_karyawan}}" required hidden>
                                                <!--Foto Baru-->
                                                <input type="file" name="foto_karyawan" id="foto_karyawan" class="custom-file-input" accept="image/*">
                                                <label for="foto_karyawan" class="custom-file-label">{{$profil->foto_karyawan}}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">Nama Karyawan</label>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="col-form-label">{{$profil->nama_karyawan}}</label>
                                            <!-- <input class="form-control" value="{{$profil->nama_karyawan}}" disabled> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">NIP</label>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="col-form-label">{{$profil->nik_karyawan}}</label>
                                            <!-- <input class="form-control" value="{{$profil->nik_karyawan}}" disabled> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">Jenis Kelamin</label>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="col-form-label">{{$profil->jenis_kelamin}}</label>
                                            <!-- <select class="custom-select form-control" required disabled>
                                                <option selected value="{{$profil->jenis_kelamin}}" hidden>{{$profil->jenis_kelamin}}</option>
                                            </select> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">Jabatan</label>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="col-form-label">{{$profil->jabatan}}</label>
                                            <!-- <select class="custom-select form-control" required disabled>
                                                <option selected value="{{$profil->jabatan}}" hidden>{{$profil->jabatan}}</option>
                                            </select> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">Divisi</label>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="col-form-label">{{$profil->divisi}}</label>
                                            <!-- <select class="custom-select form-control" required disabled>
                                                <option selected value="{{$profil->divisi}}" hidden>{{$profil->divisi}}</option>
                                            </select> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">Lokasi</label>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="col-form-label">{{$profil->lokasi}}</label>
                                            <!-- <select class="custom-select form-control" required disabled>
                                                <option selected value="{{$profil->lokasi}}" hidden>{{$profil->lokasi}}</option>
                                            </select> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">Tanggal Lahir</label>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="col-form-label">{{$profil->tanggal_lahir}}</label>
                                            <!-- <input type="date" class="form-control" value="{{$profil->tanggal_lahir}}" disabled> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">Tanggal Masuk</label>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="col-form-label">{{$profil->tanggal_masuk}}</label>
                                            <!-- <input type="date" class="form-control" value="{{$profil->tanggal_masuk}}" disabled> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-3 col-form-label form-label">Email</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="material-icons md-18 text-muted">mail</i>
                                            </div>
                                        </div>
                                        <label class="col-form-label">{{$profil->email}}</label>
                                        <!-- <input type="text" id="email" class="form-control" placeholder="Email Address" value="{{$profil->email}}" disabled> -->
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">No Telepon</label>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="col-form-label">{{$profil->no_telepon}}</label>
                                            <!-- <input class="form-control" value="0{{$profil->no_telepon}}" disabled> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">Alamat KTP</label>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="col-form-label">{{$profil->alamat_ktp}}</label>
                                            <!-- <input class="form-control" value="{{$profil->alamat_ktp}}" disabled> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-8 offset-sm-3">
                                    <div class="media align-items-center">
                                        <div class="media-left">
                                            <button type="submit"class="btn btn-success">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    @if(Session::has('alert_1'))
                    <div class="alert alert-dismissible bg-success text-white border-0 fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <strong>!!!</strong> {{Session::get('alert_1')}}
                    </div>

                    @elseif(Session::has('alert_2'))
                    <div class="alert alert-dismissible bg-warning text-white border-0 fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <strong>!!!</strong> {{Session::get('alert_2')}}
                    </div>
                    
                    @elseif(Session::has('alert_3'))
                    <div class="alert alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <strong>!!!</strong> {{Session::get('alert_3')}}
                    </div>
                    @endif

                    <div class="tab-pane" id="second">
                        <form action="../PostEditKataSandi" class="form-horizontal" method="post">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">Kata Sandi Lama</label>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="password" name="kata_sandi_lama" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">Kata Sandi Baru</label>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="password" name="kata_sandi_baru" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-label">Konfirmasi Kata Sandi Baru</label>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="password" name="konfirmasi_kata_sandi_baru" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-8 offset-sm-3">
                                    <div class="media align-items-center">
                                        <div class="media-left">
                                            <button type="submit"class="btn btn-success">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection