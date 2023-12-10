<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiKuliahController extends Controller
{
    public function index()
{
    // mengambil data dari table pegawai
    $nilaikuliah = DB::table('nilaikuliah')->get();

    // mengirim data pegawai ke view index
    return view('index1', ['nilaikuliah' => $nilaikuliah]);
}


	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambah1');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawa
		DB::table('nilaikuliah')->insert([
			'NRP' => $request->NRP,
			'NilaiAngka' => $request->NilaiAngka,
			'SKS' => $request->SKS
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/nilaikuliah');

	}


}
