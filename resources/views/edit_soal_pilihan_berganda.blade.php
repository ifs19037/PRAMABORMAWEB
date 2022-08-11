@extends('layout/main_edit_soal_pilihan_berganda')

@section('title', 'Edit Soal')

@section('container')
<div class="mdk-drawer-layout__content page ">
    <div class="container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="#">Manajemen Pelatihan</a></li><li class="breadcrumb-item"><a href="../manajemen_kuis">Manajemen Kuis</a></li>
        @foreach($kuis_pilihan_berganda as $kuis)
            @if($kuis->tipe_kuis=="pilihan berganda")
                @foreach($id_kuis_pilihan_berganda as $id_kuis)
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
        @foreach($kuis_pilihan_berganda as $kuis)
            @if($kuis->tipe_kuis=="pilihan berganda")
                @foreach($soal_pilihan_berganda as $soal)
                <div class="card-body">
                    <form action="../edit_soal/PostEditSoalPilihanBerganda" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group row" hidden>
                            <div class="col-md-9">
                                <input name="id_soal" type="text" class="form-control" value="{{$soal->id_soal_pilihan_berganda}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="qtitle" class="col-form-label form-label col-md-3">Soal</label>
                            <div class="col-md-9">
                                <textarea name="soal_pilihan_berganda" placeholder="Soal Pilihan Berganda..." style="height: 150px; width:100%" required>{{$soal->soal_pilihan_berganda}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="qtitle" class="col-form-label form-label col-md-3">Pilihan A</label>
                            <div class="col-md-9">
                                <div class="custom-file">
                                    <input name="pilihan_a" type="text" class="form-control" value="{{$soal->pilihan_a}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="qtitle" class="col-form-label form-label col-md-3">Pilihan B</label>
                            <div class="col-md-9">
                                <div class="custom-file">
                                    <input name="pilihan_b" type="text" class="form-control" value="{{$soal->pilihan_b}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="qtitle" class="col-form-label form-label col-md-3">Pilihan C</label>
                            <div class="col-md-9">
                                <div class="custom-file">
                                    <input name="pilihan_c" type="text" class="form-control" value="{{$soal->pilihan_c}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="qtitle" class="col-form-label form-label col-md-3">Pilihan D</label>
                            <div class="col-md-9">
                                <div class="custom-file">
                                    <input name="pilihan_d" type="text" class="form-control" value="{{$soal->pilihan_d}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="qtitle" class="col-form-label form-label col-md-3">Pilihan E</label>
                            <div class="col-md-9">
                                <div class="custom-file">
                                    <input name="pilihan_e" type="text" class="form-control" value="{{$soal->pilihan_e}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="qtitle" class="col-form-label form-label col-md-3">Jawaban</label>
                            <div class="col-md-9">
                                <div class="custom-file">
                                    <select name="jawaban_soal_pilihan_berganda"class="custom-select form-control" required>
                                        <option selected value="{{$soal->jawaban_soal_pilihan_berganda}}" hidden>{{$soal->jawaban_soal_pilihan_berganda}}</option>
                                        <option value="a">A</option>
                                        <option value="b">B</option>
                                        <option value="c">C</option>
                                        <option value="d">D</option>
                                        <option value="e">E</option>
                                    </select>
                                </div>
                            </div>
                        </div>
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