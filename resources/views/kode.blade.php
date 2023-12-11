@extends('master')
@section('title', 'Data Kategori')

@section('konten')
    <h4>Anda telah memilih kategori</h4>

    @foreach($kategori as $k)
        <h4>dengan kode : {{$k->ID}}</h4>
        <br> <br>
    @endforeach

@endsection
