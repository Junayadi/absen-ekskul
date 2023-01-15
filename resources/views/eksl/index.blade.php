@extends('template')
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
            <h2>Daftar Data Ekskul</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-success" href="{{ route('eksl.create') }}">Tambah Data </a>
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
        <th>KODE EKSKUL</th>
        <th width="20%" class="text-center">NAMA EKSKUL</th>
        <th width="280px" class="text-center">JUMLAH ANGGOTA</th>
        <th width="280px" class="text-center">NAMA PELATIH</th>
        <th width="20%" class="text-center">ACTION</th>
    </tr>
@foreach ($eksl as $ekskul)        
    <tr>
        <td class="text-center">{{ ++$i }}</td>
        <td>{{ $ekskul->kodeEkskul }}</td>
        <td>{{ $ekskul->namaEkskul }}</td>
        <td>{{ $ekskul->jumlahAnggota }}</td>
        <td>{{ $ekskul->namaPelatih }}</td>
        <td class=text-center>
            <form action="{{ route('eksl.destroy',$ekskul->id) }}" method="POST">

            <a class="btn btn-info btn-sm" href="{{route('eksl.show',$ekskul->id)}}">Show</a>

            <a class="btn btn-primary btn-sm" href="{{route('eksl.edit',$ekskul->id)}}">Edit</a>

            @csrf
            @method('DELETE')

        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')">Delete</button>
            </form>
        </td>     
    </tr>
@endforeach
</table>
{!! $eksl->links() !!}
@endsection