@extends('master')

@section('title', 'Data Pegawai')

@section('konten')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai - Tutorial CRUD Laravel</title>
    <!-- Add your CSS stylesheets and other head elements here -->
</head>
<body>

<div class="container">
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Pegawai</h3>

    <a href="/pegawai">Kembali</a>

    <br/>
    <br/>

    <form action="/pegawai/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="nama" class="col-sm-1 col-form-label text-right">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
        </div>

        <div class="form-group row">
            <label for="jabatan" class="col-sm-1 col-form-label text-right">Jabatan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="jabatan" name="jabatan">
            </div>
        </div>

        <div class="form-group row">
            <label for="umur" class="col-sm-1 col-form-label text-right">Umur</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="umur" name="umur">
            </div>
        </div>

        <div class="form-group row">
            <label for="alamat" class="col-sm-1 col-form-label text-right">Alamat</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="alamat" name="alamat"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10 offset-sm-1">
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </div>
        </div>
    </form>
</div>


@endsection
