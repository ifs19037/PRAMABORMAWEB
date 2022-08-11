@extends('layout/main_materi')

@section('title', 'Materi')

@section('container')

<div class="mdk-drawer-layout__content page ">
    <div class="container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
            <li class="breadcrumb-item active">Pelatihan</li><li class="breadcrumb-item active">Materi</li>
        </ol>
        <div class="d-flex flex-column flex-sm-row flex-wrap mb-headings align-items-start align-items-sm-center">
            <div class="flex mb-2 mb-sm-0">
                <h1 class="h2">Materi</h1>
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
                    @foreach($materi as $materi)
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column flex-sm-row">
                                    <a href="./lihat_materi/{{$materi->id_materi}}" class="avatar avatar-lg avatar-4by3 mb-3 w-xs-plus-down-100 mr-sm-3">
                                        <img src="./asset/u_file/foto_materi/{{$materi->foto_materi}}" alt="Card image cap" class="avatar-img rounded">
                                    </a>
                                    <div class="flex" style="min-width: 200px;">
                                        <h4 class="card-title mb-1"><a href="./lihat_materi/{{$materi->id_materi}}">{{$materi->judul_materi}}</a></h4>
                                        <p class="text-black-70">{{$materi->keterangan_singkat}}</p>
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