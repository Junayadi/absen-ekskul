@extends('template')
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
            <h2>Daftar Data Absen Ekskul</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-success" href="{{ route('absn.create') }}">Tambah Data </a>
            <a class="btn btn-success" href="/">Home</a>
        </div>
    </div>
</div>

@if ($message = Session::get('succes'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th width="20px" class="text-center">#</th>
        <th>NIS</th>
        <th width="20%" class="text-center">Ekskul</th>
        <th width="280px" class="text-center">Tanggal Absen</th>
        <th width="280px" class="text-center">Presensi</th>
        <th width="20%" class="text-center">ACTION</th>
    </tr>
@foreach ($absn as $absen)        
    <tr>
        <td class="text-center">{{ ++$i }}</td>
        <td>{{ $absen->nis }}</td>
        <td>{{ $absen->kodeEkskul }}</td>
        <td>{{ $absen->tglAbsen }}</td>
        <td>{{ $absen->presensi }}</td>
        <td class=text-center>
            <form action="{{ route('absn.destroy',$absen->id) }}" method="POST">

            <a class="btn btn-info btn-sm" href="{{route('absn.show',$absen->id)}}">Show</a>

            <a class="btn btn-primary btn-sm" href="{{route('absn.edit',$absen->id)}}">Edit</a>

            @csrf
            @method('DELETE')

        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')">Delete</button>
            </form>
        </td>     
    </tr>
@endforeach
</table>
{!! $absn->links() !!}
@endsection