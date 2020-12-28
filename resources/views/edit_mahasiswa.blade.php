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
        <h1 class="mt-3">Form Ubah Data Mahasiswa</h1>
        @foreach($student as $s)
        <form method="post" action="/mahasiswa/update">
        {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $s->id }}">
            <div class="form-group">
                <label for="nama">nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Masuakn Nama" name="nama" value="{{ $s->nama }}" required>
            </div>
            <div class="form-group">
                <label for="nrp">nrp</label>
                <input type="text" class="form-control" id="nrp" placeholder="Masuakn nrp" name="nrp" value="{{ $s->nrp }}" required>
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="text" class="form-control" id="email" placeholder="Masuakn email" name="email" value="{{ $s->email }}" required>
            </div>
            <div class="form-group">
                <label for="jurusan">jurusan</label>
                <input type="text" class="form-control" id="jurusan" placeholder="Masuakn jurusan" name="jurusan" value="{{ $s->jurusan }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        @endforeach
        </form>
    </body>