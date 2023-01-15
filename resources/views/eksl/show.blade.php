@extends('template')
@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>SHOW DATA EKSKUL</h2>
        </div>
        <div class="float-left">
            <a class="btn btn-secondary" href="{{ route('eksl.index') }}">Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Kode Ekskul : </strong>
            {{ $eksl->kodeEkskul }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama Ekskul : </strong>
            {{ $eksl->namaEkskul }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jumlah Anggota : </strong>
            {{ $eksl->jumlahAnggota }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama Pembina : </strong>
            {{ $eksl->namaPembina }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama Pelatih </strong>
            {{ $eksl->namaPelatih }}
        </div>
    </div>
</div>
@endsection