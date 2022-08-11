@extends('layout/main_lihat_sop')

@section('title', 'Lihat SOP')

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
            <li class="breadcrumb-item"><a href="../sop">SOP</a></li>
            <li class="breadcrumb-item active">Lihat SOP</li>
        </ol>
        
        @foreach($sop as $sop)
        <h1 class="h2">{{$sop->judul_sop}}</h1>
        
        <div class="card">
            <div class="card-body">
                    <iframe src="../asset/u_file/file_sop/{{$sop->file_sop}}#toolbar=0" width="100%" height="550px"></iframe>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection