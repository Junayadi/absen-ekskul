@extends('template')
@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>SHOW DATA ANGGOTA EKSKUL</h2>
        </div>
        <div class="float-left">
            <a class="btn btn-secondary" href="{{ route('angt.index') }}">Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>NIS : </strong>
            {{ $angt->nis }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama Siswa : </strong>
            {{ $angt->nama }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Ekskul yang diikuti : </strong>
            {{ $angt->kodeEkskul }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Kelas : </strong>
            {{ $angt->kelas }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jenis kelamin :</strong>
            {{ $angt->jenis_kelamin }}
        </div>
    </div>
</div>
@endsection