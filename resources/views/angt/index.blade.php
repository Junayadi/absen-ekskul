@extends('template')
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
            <h2>Daftar Data Anggota Ekskul</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-success" href="{{ route('angt.create') }}">Tambah Data </a>
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
        <th width="20%" class="text-center">NAMA</th>
        <th width="280px" class="text-center">EKSKUL</th>
        <th width="280px" class="text-center">KELAS</th>
        <th width="20%" class="text-center">ACTION</th>
    </tr>
@foreach ($angt as $anggota)        
    <tr>
        <td class="text-center">{{ ++$i }}</td>
        <td>{{ $anggota->nis }}</td>
        <td>{{ $anggota->nama }}</td>
        <td>{{ $anggota->kodeEkskul }}</td>
        <td>{{ $anggota->kelas }}</td>
        <td class=text-center>
            <form action="{{ route('angt.destroy',$anggota->id) }}" method="POST">

            <a class="btn btn-info btn-sm" href="{{route('angt.show',$anggota->id)}}">Show</a>

            <a class="btn btn-primary btn-sm" href="{{route('angt.edit',$anggota->id)}}">Edit</a>

            @csrf
            @method('DELETE')

        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')">Delete</button>
            </form>
        </td>     
    </tr>
@endforeach
</table>
{!! $angt->links() !!}
@endsection