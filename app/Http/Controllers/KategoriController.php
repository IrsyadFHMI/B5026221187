<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KategoriController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get();
        $kategori = DB::table('kategori')
                    ->orderBy('ID', 'asc')
                    ->paginate(10);
    	// mengirim data pegawai ke view index
		return view('index4',['kategori' => $kategori]);
	}

    public function cari(Request $request)
	{
		$cari = $request->cari;

		$kategori = DB::table('kategori')
		    ->where('Nama','like',"%".$cari."%")
		    ->paginate();

		return view('kode',['kategori' => $kategori, 'cari' => $cari]);
	}
}
