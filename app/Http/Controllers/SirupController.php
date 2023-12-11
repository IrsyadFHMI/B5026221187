<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SirupController extends Controller
{
    public function index()
{
    // mengambil data dari table pegawai
    $sirup = DB::table('sirup')->get();

    // mengirim data pegawai ke view index
    return view('index2', ['sirup' => $sirup]);
}


	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambah2');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
{
    // Validate the incoming request data

    // Determine the value of 'tersedia' based on 'stocksirup'
    $tersedia = ($request->stocksirup > 0) ? 'Y' : 'N';

    // Insert data into the 'sirup' table
    DB::table('sirup')->insert([
        'kodesirup' => $request->kodesirup,
        'merksirup' => $request->merksirup,
        'stocksirup' => $request->stocksirup,
        'tersedia' => $tersedia
    ]);

    // Redirect to the sirup index page
    return redirect('/sirup');
}

public function edit($kodesirup)
{
    // mengambil data berdasarkan kode yang dipilih
    $sirup = DB::table('sirup')
        ->where('kodesirup',$kodesirup)
        ->get();
        // passing data yang didapat ke view edit.blade.php
    return view('edit2',['sirup' => $sirup]);

}

// update data
public function update(Request $request)
{
    $tersedia = ($request->stocksirup > 0) ? 'Y' : 'N';
    // update data
    DB::table('sirup')
        ->where('kodesirup',$request->kodesirup)
        ->update([

        'merksirup' => $request->merksirup,
        'stocksirup' => $request->stocksirup,
        'tersedia' => $tersedia
    ]);
    // alihkan halaman ke halaman
    return redirect('/sirup');
}

// method untuk hapus data
public function hapus($kodesirup)
{
    // menghapus data  berdasarkan kode yang dipilih
    DB::table('sirup')->where('kodesirup',$kodesirup)->delete();

    // alihkan halaman ke halaman
    return redirect('/sirup');
}

public function cari(Request $request)
{
    // menangkap data pencarian
    $cari = $request->cari;

    // mengambil data dari table sesuai pencarian data
    $sirup = DB::table('sirup')
        ->where('merksirup', 'like', "%".$cari."%")
        ->paginate();

        return view('index2', ['sirup' => $sirup]);
}

// method untuk view data
public function view($kodesirup)
{
    // mengambil data berdasarkan kode yang dipilih
    $sirup = DB::table('sirup')
        ->where('kodesirup', $kodesirup)
        ->get();
    // passing data yang didapat ke view edit.blade.php
    return view('View2',['sirup' => $sirup]);

}
}



