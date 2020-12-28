<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>ZOE Company</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Info</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Galery</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{url('/mahasiswa')}}">Mahasiswa <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/jurusan')}}">Jurusan</a>
          </li>
        </ul>
      </div>
    </nav>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">NRP</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <a href="/mahasiswa/create" class="btn btn-primary my-3"> Tambah Data</a>
  @foreach( $student as $mhs)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $mhs->nama }}</td>
      <td>{{ $mhs->nrp }}</td>
      <td>{{ $mhs->email }}</td>
      <td>{{ $mhs->jurusan }}</td>
      <td>
            <a href="mahasiswa/edit/{{ $mhs->id }}" class="badge badge-success">Edit</a>
            <a href="/mahasiswa/delete/{{ $mhs->id }}" class="badge badge-danger">Delete</a>
      </td>
    </tr>
 @endforeach
  </tbody>
</table>
    </body>