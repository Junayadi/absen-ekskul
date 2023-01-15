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
    <h2>Tambah Data Ekskul</h2>
</div>

<form action="{{ route('eksl.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <br>
                <input type="text" name="kodeEkskul" class="form-control" placeholder="Kode Ekskul">
            </div>
        </div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <br>
        <input type="text" name="namaEkskul" class="form-control" placeholder="Nama Ekskul">
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <br>
        <input type="text" name="jumlahAnggota" class="form-control" placeholder="Jumlah Anggota">
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <br>
        <input type="text" name="namaPembina" class="form-control" placeholder="Nama Pembina">
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <br>
        <input type="text" name="namaPelatih" class="form-control" placeholder="Nama Pelatih">
    </div>
</div>
<div class=" mb-3 mt-3">
    <button type="submit" class="btn btn-primary">Tambah</button>
    <a class="btn btn-danger" href="{{ route('eksl.index') }}">Batal</a>
</div>
</div>
</form>
@endsection