@extends('layout/main_sop')

@section('title', 'SOP')

@section('container')


<div class="mdk-drawer-layout__content page ">
    <div class="container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Dashboard</a></li><li class="breadcrumb-item active">SOP</li>
        </ol>
        <div class="d-flex flex-column flex-sm-row flex-wrap mb-headings align-items-start align-items-sm-center">
            <div class="flex mb-2 mb-sm-0">
                <h1 class="h2">SOP</h1>
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
                    @foreach($sop as $sop)
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column flex-sm-row">
                                    <a href="./lihat_sop/{{$sop->id_sop}}" class="avatar avatar-lg avatar-4by3 mb-3 w-xs-plus-down-100 mr-sm-3">
                                        <img src="./asset/u_file/foto_sop/{{$sop->foto_sop}}" alt="Card image cap" class="avatar-img rounded">
                                    </a>
                                    <div class="flex" style="min-width: 200px;">
                                        <h4 class="card-title mb-1"><a href="./lihat_sop/{{$sop->id_sop}}">{{$sop->judul_sop}}</a></h4>
                                        <p class="text-black-70">{{$sop->keterangan_singkat}}</p>
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