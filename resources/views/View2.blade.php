
@extends('master')

    @section('konten')
	<h3>Data Sirup</h3>

	<br/>

    @foreach($sirup as $p)
    <form action="">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-4 border">
            </div>
            <div class="col-8">
                {{-- KODE --}}
                <div class="form-group row">
                    <label for="kode" class="col-sm-2 control-label">Kode:</label>
                    <div class="col-sm-8">
                        {{ $p->kodesirup }}
                    </div>
                </div>
                {{-- MERK --}}
                <div class="form-group row">
                    <label for="merk" class="col-sm-2 control-label">Merk:</label>
                    <div class="col-sm-8">
                        {{ $p->merksirup }}
                    </div>
                </div>
                {{-- STOCK --}}
                <div class="form-group row">
                    <label for="stock" class="col-sm-2 control-label">Stock:</label>
                    <div class="col-sm-8">
                        {{ $p->stocksirup }}
                    </div>
                </div>
                {{-- KETERSEDIAAN --}}
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 control-label">Ketersediaan (Y/N):</label>
                    <div class="col-sm-8">
                        {{ $p->tersedia }}
                    </div>
                </div>

                <div class="col-sm-2 align-items-center mx-auto">
                    <a href="/sirup" class="btn btn-primary col-sm-8">OK</a>
                </div>
            </div>
        </div>
    </form>
    @endforeach

    @endsection
