@extends('layout/main_lihat_materi')

@section('title', 'Lihat Materi')

@section('container')

<div class="mdk-drawer-layout__content page ">
    <div class="container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="../materi">Materi</a></li>
            <li class="breadcrumb-item active">Lihat Materi</li>
        </ol>
        
        @foreach($materi as $materi)
        <h1 class="h2">{{$materi->judul_materi}}</h1>
        
        <div class="card">
            <div class="card-body">
                @if($materi->kode_link_video=="-")

                @else
                <iframe width="100%" height="500px" src="https://www.youtube.com/embed/{{$materi->kode_link_video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                @endif
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <p><?php echo $materi->isi_materi;?></p>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection