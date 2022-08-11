@extends('layout/main_manajemen_materi')

@section('title', 'Manajemen Materi')

@section('container')


<div class="mdk-drawer-layout__content page ">
    <div class="container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
            <li class="breadcrumb-item active">Manajemen Pelatihan</li><li class="breadcrumb-item active">Manajemen Materi</li>
        </ol>
        <div class="d-flex flex-column flex-sm-row flex-wrap mb-headings align-items-start align-items-sm-center">
            <div class="flex mb-2 mb-sm-0">
                <h1 class="h2">Manajemen Materi</h1>
            </div>
            <div class="mb-2 mb-sm-0">
                <div class="flex mb-2 mb-sm-0">
                    <a href="./tambah_materi" class="btn btn-success" class="btn btn-outline-secondary">Tambah Materi</a>
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
                    @foreach($materi as $materi)
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column flex-sm-row">
                                    <a href="./detail_materi/{{$materi->id_materi}}" class="avatar avatar-lg avatar-4by3 mb-3 w-xs-plus-down-100 mr-sm-3">
                                        <img src="./asset/u_file/foto_materi/{{$materi->foto_materi}}" alt="Card image cap" class="avatar-img rounded">
                                    </a>
                                    <div class="flex" style="min-width: 200px;">
                                        <h4 class="card-title mb-1"><a href="./detail_materi/{{$materi->id_materi}}">{{$materi->judul_materi}}</a> &nbsp 
                                            @if($materi->status=="tampil")
                                                <svg style="width:20px" data-v-134867f8="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-eye fa-w-18"><path data-v-134867f8="" fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z" class=""></path></svg>
                                            @elseif($materi->status=="sembunyi")
                                                <svg style="width:20px" data-v-134867f8="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="eye-slash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-eye-slash fa-w-20"><path data-v-134867f8="" fill="currentColor" d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z" class=""></path></svg>
                                            @else
                                            @endif
                                        </h4>
                                        <p class="text-black-70">{{$materi->keterangan_singkat}}</p>
                                        <div class="d-flex align-items-center py-1">
                                            <span class="badge badge-dark ml-2">{{$materi->divisi}}</span>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="card__options dropdown right-0 pr-2">
                                <a href="#" class="dropdown-toggle text-muted" data-caret="false" data-toggle="dropdown">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- <a class="dropdown-item" href="./detail_materi/{{$materi->id_materi}}">Edit course</a>
                                    <div class="dropdown-divider"></div> -->
                                    <a class="dropdown-item" href="./review_materi/{{$materi->id_materi}}">Review</a>
                                    <a class="dropdown-item text-danger" href="./hapus_materi/{{$materi->id_materi}}">Hapus Materi</a>
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