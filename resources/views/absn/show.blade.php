@extends('template')
@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>SHOW DATA ANGGOTA EKSKUL</h2>
        </div>
        <div class="float-left">
            <a class="btn btn-secondary" href="{{ route('absn.index') }}">Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>NIS : </strong>
            {{ $absn->nis }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>kodeEkskul : </strong>
            {{ $absn->kodeEkskul }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tanggal prensensi : </strong>
            {{ $absn->tglAbsen }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Presensi : </strong>
            {{ $absn->presensi }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Foto Timestamp :</strong>
            <img src="{{asset('fotoTimestamp'.$absn->fotoTimestamp) }}" alt="fotoTimestamp">
        </div>
    </div>
</div>
@endsection