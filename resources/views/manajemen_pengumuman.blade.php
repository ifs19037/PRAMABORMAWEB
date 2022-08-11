@extends('layout/main_manajemen_pengumuman')

@section('title', 'Manajemen Pengumuman')

@section('container')


<div class="mdk-drawer-layout__content page ">
    <div class="container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
            <li class="breadcrumb-item active">Manajemen Informasi</li><li class="breadcrumb-item active">Manajemen Pengumuman</li>
        </ol>
        <div class="d-flex flex-column flex-sm-row flex-wrap mb-headings align-items-start align-items-sm-center">
            <div class="flex mb-2 mb-sm-0">
                <h1 class="h2">Manajemen Pengumuman</h1>
            </div>
            <div class="mb-2 mb-sm-0">
                <div class="flex mb-2 mb-sm-0">
                    <a href="./tambah_pengumuman" class="btn btn-success" class="btn btn-outline-secondary">Tambah Pengumuman</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid page__container">
        <div class="card">
            <div class="card-body">
                <form method="GET">
                    <div class="search-form search-form--light mb-3">
                        <input type="text" name="cari" class="form-control search" placeholder="Cari..." value="{{ old('cari') }}">
                        <button class="btn" type="submit" role="button"><i class="material-icons">search</i></button>
                    </div>
                </form>
                <div class="row">
                    @foreach($pengumuman as $pengumuman)
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column flex-sm-row">
                                    <a href="./detail_pengumuman/{{$pengumuman->id_pengumuman}}" class="avatar avatar-lg avatar-4by3 mb-3 w-xs-plus-down-100 mr-sm-3">
                                        <img src="./asset/u_file/foto_pengumuman/{{$pengumuman->foto_pengumuman}}" alt="Card image cap" class="avatar-img rounded">
                                    </a>
                                    <div class="flex" style="min-width: 200px;">
                                        <h4 class="card-title mb-1"><a href="./detail_pengumuman/{{$pengumuman->id_pengumuman}}">{{$pengumuman->judul_pengumuman}}</a></h4>
                                        <p class="text-black-70">{{$pengumuman->keterangan_singkat}}</p>
                                    </div>
                                </div>

                            </div>
                            <div class="card__options dropdown right-0 pr-2">
                                <a href="#" class="dropdown-toggle text-muted" data-caret="false" data-toggle="dropdown">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item text-danger" href="./hapus_pengumuman/{{$pengumuman->id_pengumuman}}">Hapus Pengumuman</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection