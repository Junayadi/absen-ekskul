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
    <h2>Tambah Data Anggota Ekskul</h2>
</div>

<form action="{{ route('angt.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <br>
                <input type="text" name="nis" class="form-control" placeholder="NIS">
            </div>
        </div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <br>
        <input type="text" name="nama" class="form-control" placeholder="Nama Siswa">
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
        <input type="text" name="kelas" class="form-control" placeholder="Kelas">
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <br>
    <strong>Jenis Kelamin:</strong>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki">
        <label class="form-check-label">
          Laki-laki
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
        <label class="form-check-label">
            Perempuan
        </label>
      </div>
    </div>
</div>
<div class=" mb-3 mt-3">
    <button type="submit" class="btn btn-primary">Tambah</button>
    <a class="btn btn-danger" href="{{ route('angt.index') }}">Batal</a>
</div>
</div>
</form>
@endsection