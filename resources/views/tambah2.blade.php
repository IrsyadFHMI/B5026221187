@extends('master')

@section('konten')
	<h3>Data Blueray</h3>

	<a href="/sirup">< Kembali</a>

	<br/>
	<br/>

<form action="/sirup/store" method="post">
    {{ csrf_field() }}
    {{-- MERK --}}
    <div class = "form-group row">
        <label for = "merk" class = "col-sm-2 control-label">Merk</label>
        <div class = "col-sm-8">
            <input name="merksirup" type = "text" class = "form-control" id = "merksirup"  placeholder = "Masukkan Merk sirup">
        </div>
    </div>
    {{-- STOCK --}}
    <div class = "form-group row">
        <label for = "stock" class = "col-sm-2 control-label">Stock</label>
        <div class = "col-sm-8">
            <input name="stocksirup" type = "number" class = "form-control" id = "stocksirup" placeholder = "Masukkan Stock sirup">
        </div>
    </div>

    <div class="col-sm-2 align-items-center mx-auto">
        <input type="submit" class="btn btn-primary" value="Simpan">
    </div>

</form>

@endsection
