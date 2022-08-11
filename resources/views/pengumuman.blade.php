@extends('layout/main_pengumuman')

@section('title', 'Pengumuman')

@section('container')


<div class="mdk-drawer-layout__content page ">
    <div class="container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
            <li class="breadcrumb-item active">Informasi</li><li class="breadcrumb-item active">Pengumuman</li>
        </ol>
        <div class="d-flex flex-column flex-sm-row flex-wrap mb-headings align-items-start align-items-sm-center">
            <div class="flex mb-2 mb-sm-0">
                <h1 class="h2">Pengumuman</h1>
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
                                    <a href="./lihat_pengumuman/{{$pengumuman->id_pengumuman}}" class="avatar avatar-lg avatar-4by3 mb-3 w-xs-plus-down-100 mr-sm-3">
                                        <img src="./asset/u_file/foto_pengumuman/{{$pengumuman->foto_pengumuman}}" alt="Card image cap" class="avatar-img rounded">
                                    </a>
                                    <div class="flex" style="min-width: 200px;">
                                        <h4 class="card-title mb-1"><a href="./lihat_pengumuman/{{$pengumuman->id_pengumuman}}">{{$pengumuman->judul_pengumuman}}</a></h4>
                                        <p class="text-black-70">{{$pengumuman->keterangan_singkat}}</p>
                                        <div class="d-flex align-items-end">
                                            <div class="d-flex flex flex-column mr-3">
                                                <div class="d-flex align-items-center py-1 border-bottom">
                                                    <small class="text-black-70 mr-2">{{$pengumuman->updated_at}}</small>
                                                </div>
                                                
                                                <div class="d-flex align-items-center py-1">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
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