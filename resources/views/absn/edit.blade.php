@extends('template')
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit Data Absen Ekskul</h2>
            </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('absn.index') }}">Back</a>
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

<form action="{{ route('absn.update',$absn->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <br>
                <input type="text" name="nis" class="form-control" placeholder="NIS" value="{{ $absn->nis}}" readonly>
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
        <input type="date" class="form-control" name="tglAbsen" placeholder="Tanggal Absen" value="{{ $absn->tglAbsen}}">
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
    <button type="submit" class="btn btn-primary">Update</button>
    <a class="btn btn-danger" href="{{ route('absn.index') }}">Batal</a>
</div>
</div>

</form>
@endsection