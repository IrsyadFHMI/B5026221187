@extends('master')

@section('konten')

    <h3>Edit Data sirup</h3>

    <a href="/sirup"> Kembali</a>

    <br/>
    <br/>

    @foreach($sirup as $p)
        <form action="/sirup/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="kodesirup" value="{{ $p->kodesirup }}"> <br />

            {{-- MERK --}}
            <div class="form-group row">
                <label for="merk" class="col-sm-2 control-label">Merk</label>
                <div class="col-sm-8">
                    <input name="merksirup" type="text" required="required" class="form-control" id="merksirup" value="{{ $p->merksirup }}">
                </div>
            </div>

            {{-- STOCK --}}
            <div class="form-group row">
                <label for="stock" class="col-sm-2 control-label">Stock</label>
                <div class="col-sm-8">
                    <input name="stocksirup" type="number" class="form-control" id="stock" value="{{ $p->stocksirup }}">
                </div>
            </div>

            <div class="col-sm-2 align-items-center mx-auto">
                <input type="submit" class="btn btn-primary" value="Simpan">
            </div>

        </form>
    @endforeach

@endsection
