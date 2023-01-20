@extends('template')
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong>Input Failed.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
</ul>
</div>
@endif

<div>
    <br>
    <br>
    <h2>Tambah Data Absen Ekskul</h2>
</div>

<form action="{{ route('absn.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <br>
                <Select class="form-control" name="nis">
                    <option> -  Pilih siswa - </option>
                    @foreach($angt as $anggota)
                    <option value="{{$anggota -> nis }}"> {{$anggota -> nama }}</option>
                    @endforeach   
            </select>
            </div>
        </div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <br>
    <div class="form-group">
        <Select class="form-control" name="kodeEkskul">
            <option> -  Pilih Ekskul - </option>
            @foreach($eksl as $ekskul)
            <option value="{{$ekskul -> kodeEkskul }}"> {{$ekskul -> namaEkskul }}</option>
            @endforeach   
    </select>
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <br>
        <strong>Tanggal Absen</strong>
        <input type="date" name="tglAbsen" class="form-control">
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <br>
    <strong>Presensi:</strong>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="presensi" value="hadir">
        <label class="form-check-label">
          Hadir
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="presensi" value="sakit">
        <label class="form-check-label">
            Sakit
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="presensi" value="izin">
        <label class="form-check-label">
            Izin
        </label>
      </div>
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <br>
</div>
<div class=" mb-3 mt-3">
    <button type="submit" class="btn btn-primary">Tambah</button>
    <a class="btn btn-danger" href="{{ route('absn.index') }}">Batal</a>
</div>
</div>
</form>
@endsection