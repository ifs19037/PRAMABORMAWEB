@extends('layout/main_review')

@section('title', 'Review Kuis')

@section('container')

@foreach($kuis as $kuis)
    @if($kuis->tipe_kuis=="isian")
        <div class="mdk-drawer-layout__content page ">
            <div class="container-fluid page__container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="../kuis">Kuis</a></li>
                    <li class="breadcrumb-item active"><a href="../lihat_kuis/{{$kuis->id_kuis}}">Lihat Kuis</a></li>
                    <li class="breadcrumb-item active">{{$kuis->judul_kuis}}</li>
                </ol>
                <div class="card-group">
                    <div class="card">
                        <div class="card-body text-center">
                            <h4 class="mb-0">
                                @foreach($hasil_kuis as $hasil_kuis)
                                    {{$hasil_kuis->nilai}}
                                @endforeach
                            </h4>
                            <small class="text-muted-light">NILAI</small>
                        </div>
                    </div>
                </div>

                @foreach($soal_isian as $soal)
                <div class="card">
                    <div class="card-header">
                            <div class="media align-items-center">
                                <div class="media-left">
                                    <h5 class="mb-0"><strong>Bobot Nilai :</strong></h5>
                                </div>
                                <div class="media-body">
                                    <h5 class="card-title">
                                        {{$soal->bobot_nilai}}
                                    </h5>
                                </div>
                            </div>
                        </div>
                    <div class="card-header">
                        <div class="media align-items-center">
                            <div class="media-left">
                                <h4 class="mb-0"><strong>{{$loop->iteration}}.</strong></h4>
                            </div>
                            <div class="media-body">
                                <h4 class="card-title">
                                    <?php echo $soal->soal_isian?>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @foreach($jawaban_kuis_isian as $jawaban)
                            @if($jawaban->id_soal_isian==$soal->id_soal_isian)
                            <b>Jawaban anda : </b><br>
                                <table border="2" width="100%" style="margin-top: 5px">
                                    <tr>
                                        <td style="padding: 15px">
                                            <?php echo $jawaban->jawaban?>
                                        </td>
                                    </tr>
                                </table>
                            @endif
                        @endforeach
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-1 col-form-label form-label">Poin</label>
                            <div class="col-sm-1">
                            @foreach($jawaban_kuis_isian as $jawaban)
                                @if($jawaban->id_soal_isian==$soal->id_soal_isian)
                                    <label class="col-form-label">{{$jawaban->poin}}</label>
                                @endif
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
    @elseif($kuis->tipe_kuis=="pilihan berganda")
        <div class="mdk-drawer-layout__content page ">
            <div class="container-fluid page__container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="../kuis">Kuis</a></li>
                    <li class="breadcrumb-item active"><a href="../lihat_kuis/{{$kuis->id_kuis}}">Lihat Kuis</a></li>
                    <li class="breadcrumb-item active">{{$kuis->judul_kuis}}</li>
                </ol>
                <div class="card-group">
                    <div class="card">
                        <div class="card-body text-center">
                            <h4 class="mb-0">
                                @foreach($hasil_kuis as $hasil_kuis)
                                    {{$hasil_kuis->nilai}}
                                @endforeach
                            </h4>
                            <small class="text-muted-light">NILAI</small>
                        </div>
                    </div>
                </div>

                @foreach($soal_pilihan_berganda as $soal)
                <div class="card">
                    <div class="card-header">
                        <div class="media align-items-center">
                            <div class="media-left">
                                <h4 class="mb-0"><strong>{{$loop->iteration}}.</strong></h4>
                            </div>
                            <div class="media-body">
                                <h4 class="card-title">
                                    <?php echo $soal->soal_pilihan_berganda?>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @foreach($jawaban_kuis_pilihan_berganda as $jawaban)
                        @if($jawaban->id_soal_pilihan_berganda==$soal->id_soal_pilihan_berganda)
                            <input type="radio" id="pilihan_a" value="A" disabled>
                            <label for="pilihan_a">{{$soal->pilihan_a}}</label><br>

                            <input type="radio" id="pilihan_b" value="B" disabled>
                            <label for="pilihan_b">{{$soal->pilihan_b}}</label><br>

                            <input type="radio" id="pilihan_c" value="C" disabled>
                            <label for="pilihan_c">{{$soal->pilihan_c}}</label><br>

                            <input type="radio" id="pilihan_d" value="D" disabled>
                            <label for="pilihan_d">{{$soal->pilihan_d}}</label><br>

                            <input type="radio" id="pilihan_e" value="E" disabled>
                            <label for="pilihan_e">{{$soal->pilihan_e}}</label>

                            <br><br>
                            
                            <b>
                                Jawaban anda : 
                                @if($jawaban->jawaban=="A" && $soal->jawaban_soal_pilihan_berganda=="A")
                                    <h5>{{$jawaban->pilihan_a}} <a style="color:green">(benar)</a></h5>
                                @elseif($jawaban->jawaban=="A" && $soal->jawaban_soal_pilihan_berganda!="A")
                                    <h5>{{$jawaban->pilihan_a}} <a style="color:red">(salah)</a></h5>
                                @endif
                                @if($jawaban->jawaban=="B" && $soal->jawaban_soal_pilihan_berganda=="B")
                                    <h5>{{$jawaban->pilihan_b}} <a style="color:green">(benar)</a></h5>
                                @elseif($jawaban->jawaban=="B" && $soal->jawaban_soal_pilihan_berganda!="B")
                                    <h5>{{$jawaban->pilihan_b}} <a style="color:red">(salah)</a></h5>
                                @endif
                                @if($jawaban->jawaban=="C" && $soal->jawaban_soal_pilihan_berganda=="C")
                                    <h5>{{$jawaban->pilihan_c}} <a style="color:green">(benar)</a></h5>
                                @elseif($jawaban->jawaban=="C" && $soal->jawaban_soal_pilihan_berganda!="C")
                                    <h5>{{$jawaban->pilihan_c}} <a style="color:red">(salah)</a></h5>
                                @endif
                                @if($jawaban->jawaban=="D" && $soal->jawaban_soal_pilihan_berganda=="D")
                                    <h5>{{$jawaban->pilihan_d}} <a style="color:green">(benar)</a></h5>
                                @elseif($jawaban->jawaban=="D" && $soal->jawaban_soal_pilihan_berganda!="D")
                                    <h5>{{$jawaban->pilihan_d}} <a style="color:red">(salah)</a></h5>
                                @endif
                                @if($jawaban->jawaban=="E" && $soal->jawaban_soal_pilihan_berganda=="E")
                                    <h5>{{$jawaban->pilihan_e}} <a style="color:green">(benar)</a></h5>
                                @elseif($jawaban->jawaban=="E" && $soal->jawaban_soal_pilihan_berganda!="E")
                                    <h5>{{$jawaban->pilihan_e}} <a style="color:red">(salah)</a></h5>
                                @endif
                                

                                <!-- Jawaban yang benar : 
                                <h5>
                                @if($soal->jawaban_soal_pilihan_berganda=="A")
                                    {{$jawaban->pilihan_a}}
                                @endif
                                @if($soal->jawaban_soal_pilihan_berganda=="B")
                                    {{$jawaban->pilihan_b}}
                                @endif
                                @if($soal->jawaban_soal_pilihan_berganda=="C")
                                    {{$jawaban->pilihan_c}}
                                @endif
                                @if($soal->jawaban_soal_pilihan_berganda=="D")
                                    {{$jawaban->pilihan_d}}
                                @endif
                                @if($soal->jawaban_soal_pilihan_berganda=="E")
                                    {{$jawaban->pilihan_e}}
                                @endif
                                </h5> -->
                            </b>
                        @endif
                        @endforeach

                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
    @endif
@endforeach

@endsection



