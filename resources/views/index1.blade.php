@extends('master')

@section('title', 'Data Nilai Kuliah')

@section('konten')
@php
function angkaToHuruf ($nilai){
    if ($nilai >= 81 && $nilai <= 100) {
        return 'A';
    } elseif ($nilai >= 61 && $nilai <= 80) {
        return 'B';
    } elseif ($nilai >= 41 && $nilai <= 60) {
        return 'C';
    } elseif ($nilai >= 0 && $nilai <= 40) {
        return 'D';
    } else {
        return 'Nilai tidak valid';}
}
@endphp
	<h2>www.malasngoding.com</h2>
	<h3>Nilai Kuliah</h3>

	<a href="/nilaikuliah/tambah1" class = "btn btn-primary"> + Tambah ID Mahasiswa Baru</a>


	<table class = "table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>NilaiAngka</th>
			<th>SKS</th>
			<th>NilaiHuruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $p)
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->NRP }}</td>
			<td>{{ $p->NilaiAngka }}</td>
			<td>{{ $p->SKS }}</td>
            <td>{{ angkaToHuruf($p->NilaiAngka) }}</td>
            <td>{{ $p->NilaiAngka *$p->SKS}}</td>
		</tr>
		@endforeach
	</table>

    @endsection



