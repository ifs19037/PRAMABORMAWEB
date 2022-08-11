@extends('layout/main_mulai_kuis')

@section('title', 'Mulai Kuis')

@section('container')

@foreach($mulai_kuis as $mulai_kuis)
    <?php
        $waktu_selesai = $mulai_kuis->waktu_selesai
        // $sisa_waktu = $mulai_kuis->waktu_selesai - date("Y-m-d H:i:s");
    ?>
@endforeach

@if(!$id_hasil_kuis)
@foreach($kuis as $kuis)
    @if($kuis->tipe_kuis=="isian")
        <div class="mdk-drawer-layout__content page ">
            <div class="container-fluid page__container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Dashboard</li>
                    <li class="breadcrumb-item active">Kuis</li>
                    <li class="breadcrumb-item active">Lihat Kuis</li>
                    <li class="breadcrumb-item active">{{$kuis->judul_kuis}}</li>
                </ol>
                <div class="card-group">
                    <script>
                        <?php date_default_timezone_set('Asia/Jakarta'); ?>
                        // Update the count down every 1 second
                        var x = setInterval(function() {
                            // Get today's date and time
                            var now = new Date().getTime();

                            var countDownDate = new Date(new Date("<?php echo $waktu_selesai ?>")).getTime();

                            // Find the distance between now and the count down date
                            var distance = countDownDate - now;

                            // Time calculations for days, hours, minutes and seconds
                            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                            // Display the result in the element with id="demo"
                            document.getElementById("durasi_pengerjaan").innerHTML = hours + " Jam &nbsp;&nbsp;"
                            + minutes + " Menit &nbsp;&nbsp;" + seconds + " Detik &nbsp;&nbsp;";

                            // If the count down is finished, write some text
                            if (distance <= 0) {
                                    clearInterval(x);
                                    // document.getElementById("durasi_pengerjaan").innerHTML = "EXPIRED";
                                    // window.location.href = "../jawab_isian/{{$kuis->id_kuis}}";
                                    document.getElementById("FormJawab").submit();
                                }
                        }, 1000);
                    </script>
                    <div class="card">
                        <div class="card-body text-center">
                            <h4 class="mb-0" id="durasi_pengerjaan"></h4>
                            <small class="text-muted-light">SISA WAKTU</small>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body text-center">
                            @foreach($jumlah_soal_isian as $jumlah_soal_isian)
                                <h4 class="mb-0"><strong>{{$jumlah_soal_isian->jumlah_soal}}</strong></h4>
                            @endforeach
                            <small class="text-muted-light">TOTAL SOAL</small>
                        </div>
                    </div>
                </div>

                <form id="FormJawab" action="../jawab_isian/{{$kuis->id_kuis}}" method="post" enctype="multipart/form-data">
                @csrf
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
                            <input type="text" name="id_mulai_kuis" value="{{$mulai_kuis->id_mulai_kuis}}" hidden></input>
                            <input type="text" name="id_soal_isian" value="{{$soal->id_soal_isian}}" hidden></input>

                            <textarea name="jawaban_soal_isian[{{$soal->id_soal_isian}}]" placeholder="Jawaban..." style="height: 250px; width:100%" required><a>...</a></textarea>
                        </div>
                        <div class="card-footer">
                            
                        </div>
                    </div>
                    @endforeach
                    <div class="card">
                        <div class="card-footer">
                            <!-- <a onclick="submit()" class="btn btn-success float-right">Selesai</a> -->
                            <button type="submit" class="btn btn-success float-right">Selesai</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    @elseif($kuis->tipe_kuis=="pilihan berganda")
        <div class="mdk-drawer-layout__content page ">
            <div class="container-fluid page__container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Dashboard</li>
                    <li class="breadcrumb-item active">Kuis</li>
                    <li class="breadcrumb-item active">Lihat Kuis</li>
                    <li class="breadcrumb-item active">{{$kuis->judul_kuis}}</li>
                </ol>
                <div class="card-group">
                    <script>
                        <?php date_default_timezone_set('Asia/Jakarta'); ?>
                        // Update the count down every 1 second
                        var x = setInterval(function() {
                            // Get today's date and time
                            var now = new Date().getTime();

                            var countDownDate = new Date(new Date("<?php echo $waktu_selesai ?>")).getTime();

                            // Find the distance between now and the count down date
                            var distance = countDownDate - now;

                            // Time calculations for days, hours, minutes and seconds
                            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                            // Display the result in the element with id="demo"
                            document.getElementById("durasi_pengerjaan").innerHTML = hours + " Jam &nbsp;&nbsp;"
                            + minutes + " Menit &nbsp;&nbsp;" + seconds + " Detik &nbsp;&nbsp;";

                            // If the count down is finished, write some text
                            if (distance <= 0) {
                                clearInterval(x);
                                document.getElementById("FormJawab").submit();
                            }
                        }, 1000);
                    </script>
                    <div class="card">
                        <div class="card-body text-center">
                            <h4 class="mb-0" id="durasi_pengerjaan"></h4>
                            <small class="text-muted-light">SISA WAKTU</small>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body text-center">
                            @foreach($jumlah_soal_pilihan_berganda as $jumlah_soal_pilihan_berganda)
                                <h4 class="mb-0"><strong>{{$jumlah_soal_pilihan_berganda->jumlah_soal}}</strong></h4>
                            @endforeach
                            <small class="text-muted-light">TOTAL SOAL</small>
                        </div>
                    </div>
                </div>

                <form id="FormJawab" action="../jawab_pilihan_berganda/{{$kuis->id_kuis}}" method="post" enctype="multipart/form-data">
                @csrf
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
                            <input type="text" name="id_mulai_kuis" value="{{$mulai_kuis->id_mulai_kuis}}" hidden></input>
                            <input type="text" name="id_soal_pilihan_berganda" value="{{$soal->id_soal_pilihan_berganda}}" hidden></input>
                            <input type="radio" name="pilihan[{{$soal->id_soal_pilihan_berganda}}]" value="" required hidden checked>

                            <input type="radio" id="pilihan_a[{{$soal->id_soal_pilihan_berganda}}]" name="pilihan[{{$soal->id_soal_pilihan_berganda}}]" value="A" required>
                            <label for="pilihan_a[{{$soal->id_soal_pilihan_berganda}}]">{{$soal->pilihan_a}}</label><br>
                            <input type="radio" id="pilihan_b[{{$soal->id_soal_pilihan_berganda}}]" name="pilihan[{{$soal->id_soal_pilihan_berganda}}]" value="B" required>
                            <label for="pilihan_b[{{$soal->id_soal_pilihan_berganda}}]">{{$soal->pilihan_b}}</label><br>
                            <input type="radio" id="pilihan_c[{{$soal->id_soal_pilihan_berganda}}]" name="pilihan[{{$soal->id_soal_pilihan_berganda}}]" value="C" required>
                            <label for="pilihan_c[{{$soal->id_soal_pilihan_berganda}}]">{{$soal->pilihan_c}}</label><br>
                            <input type="radio" id="pilihan_d[{{$soal->id_soal_pilihan_berganda}}]" name="pilihan[{{$soal->id_soal_pilihan_berganda}}]" value="D" required>
                            <label for="pilihan_d[{{$soal->id_soal_pilihan_berganda}}]">{{$soal->pilihan_d}}</label><br>
                            <input type="radio" id="pilihan_e[{{$soal->id_soal_pilihan_berganda}}]" name="pilihan[{{$soal->id_soal_pilihan_berganda}}]" value="E" required>
                            <label for="pilihan_e[{{$soal->id_soal_pilihan_berganda}}]">{{$soal->pilihan_e}}</label>
                        </div>
                    </div>
                    @endforeach
                    <div class="card">
                        <div class="card-footer">
                            <!-- <a onclick="submit()" class="btn btn-success float-right">Selesai</a> -->
                            <button type="submit" class="btn btn-success float-right">Selesai</button>
                        </div>
                    </div>
<!--                     
                    @if($waktu_selesai==date('Y-m-d'))
                    <script>
                        document.getElementById("FormJawab").submit();
                    </script>
                    @endif -->
                </form>
            </div>
        </div>
    @endif
@endforeach

@elseif($id_hasil_kuis)

@endif

@endsection



