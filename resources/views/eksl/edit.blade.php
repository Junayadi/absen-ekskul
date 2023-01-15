@extends('template')
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit Data Ekskul</h2>
            </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('eksl.index') }}">Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong>Update Failed.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('eksl.update',$eksl->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <br>
                <input type="text" name="kodeEkskul" class="form-control" placeholder="KODE EKSKUL" value="{{ $eksl->kodeEkskul}}" readonly>
            </div>
        </div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <br>
        <input type="text" name="namaEkskul" class="form-control" placeholder="NAMA EKSKUL" value="{{ $eksl->namaEkskul}}">
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <br>
        <input type="text" name="jumlahAnggota" class="form-control" placeholder="JUMLAH ANGGOTA" value="{{ $eksl->jumlahAnggota}}">
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <br>
        <input type="text" class="form-control" name="namaPembina" placeholder="NAMA PEMBINA" value="{{ $eksl->namaPembina}}">
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <br>
        <input type="text" name="namaPelatih" class="form-control" placeholder="NAMA PELATIH" value="{{ $eksl->namaPelatih}}">
    </div>
</div>
<div class=" mb-3 mt-3">
    <button type="submit" class="btn btn-primary">Update</button>
    <a class="btn btn-danger" href="{{ route('eksl.index') }}">Batal</a>
</div>
</div>

</form>
@endsection