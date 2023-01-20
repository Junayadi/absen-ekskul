@extends('template')
@section('content')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Absen Ekskul</title>
    
    <nav class="navbar navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Welcome, Admin.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="eksl">Daftar Ekskul</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="angt">Daftar Anggota Ekskul</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="absn">Daftar Presensi</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/">Logout</a>
            </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <link rel="stylesheet" type="text/css" href="..\css\table.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
    <div class="row pb-0 py-4 my-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
            <h2>Daftar Data Anggota</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-success" href="{{ route('angt.create') }}">Tambah Data </a>
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