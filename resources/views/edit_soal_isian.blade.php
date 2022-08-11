@extends('layout/main_edit_soal_isian')

@section('title', 'Edit Soal')

@section('container')
<div class="mdk-drawer-layout__content page ">
    <div class="container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="#">Manajemen Pelatihan</a></li><li class="breadcrumb-item"><a href="../manajemen_kuis">Manajemen Kuis</a></li>
        @foreach($kuis_isian as $kuis)
            @if($kuis->tipe_kuis=="isian")
                @foreach($id_kuis_isian as $id_kuis)
                <li class="breadcrumb-item active"><a href="../detail_kuis/{{$id_kuis->id_kuis}}">Detail Kuis</a></li>
                @endforeach
            @endif
        @endforeach
            <li class="breadcrumb-item active">Edit Soal</li>
        </ol>
        <h1 class="h2">Edit Soal</h1>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Soal</h4>
            </div>
        @foreach($kuis_isian as $kuis)
            @if($kuis->tipe_kuis=="isian")
                @foreach($soal_isian as $soal)
                <div class="card-body">
                    <form action="../edit_soal/PostEditSoalIsian" method="post">
                    @csrf
                        <div class="form-group row" hidden>
                            <div class="col-sm-9">
                                <input name="id_soal" type="text" class="form-control" value="{{$soal->id_soal_isian}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label form-label">Soal</label>
                            <div class="col-md-9">
                                <textarea name="soal_isian" placeholder="Soal Isian..." style="height: 150px; width:100%" required>{{$soal->soal_isian}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label form-label">Bobot Nilai</label>
                            <div class="col-sm-1">
                                <input name="bobot_nilai" type="text" class="form-control" maxlength="3" style="max-width:50px" value="{{$soal->bobot_nilai}}" onkeypress="return hanyaAngka(event)" onkeyup="return checkInput(event, this)" required> 
                            </div>
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
                        <div class="form-group row mb-0">
                            <div class="col-sm-9 offset-sm-3">
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
                @endforeach
            @endif
        @endforeach
        </div>
    </div>
</div>
@endsection