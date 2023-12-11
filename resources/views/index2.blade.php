@extends('master')

@section('title', 'Data Sirup')

@section('konten')

    <h2>www.malasngoding.com</h2>
    <h3>Sirup</h3>

    <a href="/sirup/tambah2" class="btn btn-primary"> + Tambah Barang</a>

    <br/>
    <p>Cari Data Sirup :</p>
	<form action="/sirup/cari" method="GET">
		<input class="form form-control" type="text" name="cari" placeholder="Cari sirup Berdasarkan Nama..." value="{{ old('cari') }}">
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
    <br>
	<br/>

    <table class="table table-striped table-hover">
        <tr>
            <th>kodesirup</th>
            <th>merksirup</th>
            <th>stocksirup</th>
            <th style="text-align: center;">ketersediaan</th>
            <th></th>
        </tr>
        @foreach($sirup as $p)
            <tr>
                <td>{{ $p->kodesirup }}</td>
                <td>{{ $p->merksirup }}</td>
                <td>{{ $p->stocksirup }}</td>
                <td style="background-color: @if($p->stocksirup > 0) blue @else red @endif; color: white; text-align: center; width: 50px;">
                    {{ $p->stocksirup > 0 ? 'Y' : 'N' }}
                </td>
                <td style="text-align: center;">
                    <a href="/sirup/View2/{{ $p->kodesirup }}" class="btn btn-success">View</a>
                    <a href="/sirup/edit2/{{ $p->kodesirup }}" class="btn btn-warning">Edit</a>
                    <a href="/sirup/hapus/{{ $p->kodesirup }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
