@extends('layout/main_review_pengerjaan_kuis')

@section('title', 'Review Pengerjaan Kuis')

@section('container')

@foreach($kuis as $kuis)
    @if($kuis->tipe_kuis=="isian")
        <div class="mdk-drawer-layout__content page ">
            <div class="container-fluid page__container">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../../">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Manajemen Pelatihan</a></li><li class="breadcrumb-item"><a href="../../manajemen_kuis">Manajemen Kuis</a></li>
                <li class="breadcrumb-item active"><a href="../../review_kuis/{{$kuis->id_kuis}}">Review Kuis</a></li>
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
                @if($hasil_kuis->nilai=="-")
                <form action="../../nilai_kuis_isian/{{$kuis->id_kuis}}/{{$nik_akun}}" method="post" enctype="multipart/form-data">
                @csrf
                @elseif($hasil_kuis->nilai=="-")

                @endif
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
                                <b>Jawaban : </b><br>
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
                                        @if($jawaban->poin=="-")
                                            <input type="text" name="id_jawaban_kuis_isian" value="{{$jawaban->id_jawaban_kuis_isian}}" hidden></input>
                                            <input name="poin[{{$jawaban->id_jawaban_kuis_isian}}]" class="form-control" type="text" maxlength="3" onkeypress="return hanyaAngka(event)" onkeyup="return checkInput(event, this)" required>
                                        @elseif($jawaban->poin!="-")
                                            <label class="col-form-label">{{$jawaban->poin}}</label>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <script>
                                    function hanyaAngka(event) {
                                        var angka = (event.which) ? event.which : event.keyCode
                                        if ((angka < 48 || angka > 57) )
                                            return false;
                                        return true;
                                    }

                                    function checkInput(event, field) {
                                        if (field.value > 100){
                                            let nilaiOke = [100];
                                                                                    
                                            field.value = nilaiOke.join("");
                                        }

                                        if (field.value < 0){
                                            let nilaiOke = [0];
                                                                                    
                                            field.value = nilaiOke.join("");
                                        }
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @if($hasil_kuis->nilai=="-")
                        <div class="card">
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success float-right">Beri Nilai</button>
                            </div>
                        </div>
                        
                    @elseif($hasil_kuis->nilai=="-")

                    @endif
                    
                @if($hasil_kuis->nilai=="-")
                </form>
                @elseif($hasil_kuis->nilai=="-")

                @endif
            </div>
        </div>
        
    @elseif($kuis->tipe_kuis=="pilihan berganda")
        <div class="mdk-drawer-layout__content page ">
            <div class="container-fluid page__container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../../">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Manajemen Pelatihan</a></li><li class="breadcrumb-item"><a href="../../manajemen_kuis">Manajemen Kuis</a></li>
                    <li class="breadcrumb-item active"><a href="../../review_kuis/{{$kuis->id_kuis}}">Review Kuis</a></li>
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
                                <input type="radio" id="pilihan_a" value="A" onclick="jawab()" disabled>
                                <label for="pilihan_a">{{$soal->pilihan_a}}</label><br>

                                <input type="radio" id="pilihan_b" value="B" onclick="jawab()" disabled>
                                <label for="pilihan_b">{{$soal->pilihan_b}}</label><br>

                                <input type="radio" id="pilihan_c" value="C" onclick="jawab()" disabled>
                                <label for="pilihan_c">{{$soal->pilihan_c}}</label><br>

                                <input type="radio" id="pilihan_d" value="D" onclick="jawab()" disabled>
                                <label for="pilihan_d">{{$soal->pilihan_d}}</label><br>

                                <input type="radio" id="pilihan_e" value="E" onclick="jawab()" disabled>
                                <label for="pilihan_e">{{$soal->pilihan_e}}</label>

                                <br><br>
                                
                                <b>
                                    Jawaban : 
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
                                    

                                    Jawaban yang benar : 
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
                                    </h5>
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



