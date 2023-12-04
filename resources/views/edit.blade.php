@extends('master')

@section('konten')

    <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Edit Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br/>
    <br/>

    @foreach($pegawai as $p)
    <form action="/pegawai/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" required="required" name="nama" value="{{ $p->pegawai_nama }}">
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" class="form-control" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
        </div>
        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="number" class="form-control" required="required" name="umur" value="{{ $p->pegawai_umur }}">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Simpan Data">
    </form>
    @endforeach
</div>


@endsection
