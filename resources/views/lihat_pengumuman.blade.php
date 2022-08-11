@extends('layout/main_lihat_pengumuman')

@section('title', 'Lihat Pengumuman')

@section('container')

<div class="mdk-drawer-layout__content page ">
    <div class="container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="#">Informasi</a></li><li class="breadcrumb-item"><a href="../pengumuman">Pengumuman</a></li>
            <li class="breadcrumb-item active">Lihat Pengumuman</li>
        </ol>
        
        @foreach($pengumuman as $pengumuman)
        <h1 class="h2">{{$pengumuman->judul_pengumuman}}</h1>
        
        <div class="card">
            <div class="card-body">
                    <img src="../asset/u_file/foto_pengumuman/{{$pengumuman->foto_pengumuman}}" alt="Card image cap" class="avatar-img rounded">
             
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <p><?php echo $pengumuman->isi_pengumuman;?></p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection