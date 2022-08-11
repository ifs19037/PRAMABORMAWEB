@extends('layout/main_manajemen_divisi')

@section('title', 'Manajemen Divisi')

@section('container')

<div class="mdk-drawer-layout__content page ">
    <div class="container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
            <li class="breadcrumb-item active">Manajemen Informasi</li><li class="breadcrumb-item active">Manajemen Divisi</li>
        </ol>
        <div class="d-flex flex-column flex-sm-row flex-wrap mb-headings align-items-start align-items-sm-center">
            <div class="flex mb-2 mb-sm-0">
                <h1 class="h2">Manajemen Divisi</h1>
            </div>
            <div class="mb-2 mb-sm-0">
                <div class="flex mb-2 mb-sm-0">
                    <a class="btn btn-success" data-toggle="modal" data-target="#TambahDivisi" class="btn btn-outline-secondary">Tambah Divisi</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid page__container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="table-responsive border-bottom" data-toggle="lists" data-lists-values='["js-lists-values-divisi"]'>
                            <form action="#" method="GET">
                                <div class="search-form search-form--light mb-3">
                                    <input type="text" class="form-control search" placeholder="Search">
                                    <!-- <button class="btn" type="button" role="button"><i class="material-icons">search</i></button> -->
                                </div>
                            </form>

                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th style="text-transform: uppercase; font-size:16px">NO</th>
                                        <th>
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-divisi" style="text-transform: uppercase; font-size:16px">DIVISI</a>
                                        </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                
                                <tbody class="list" id="search">
                                @foreach($divisi as $divisi)
                                    <tr style="text-transform: uppercase; font-size:14px">
                                        <td>{{$loop->iteration }}</td>
                                        <td>
                                            <span class="js-lists-values-divisi">{{$divisi->nama_divisi}}</span>
                                        </td>
                                        <td style="width: 10px;">
                                            <div class="media-right text-right">
                                                <div style="width:30px">
                                                    <a href="./hapus_divisi/{{$divisi->id_divisi}}" class="btn btn-danger btn-sm"><i class="material-icons">delete</i></a>
                                                </div>
                                            </div>
                                            <!-- <a href="#" class="dropdown-toggle text-muted" data-caret="false" data-toggle="dropdown">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item text-danger" href="./hapus_divisi/{{$divisi->id_divisi}}">Hapus Divisi</a>
                                            </div> -->
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection