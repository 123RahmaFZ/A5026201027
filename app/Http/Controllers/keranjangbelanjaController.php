<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class keranjangbelanjaController extends Controller
{
        public function index()
        {

            $keranjangbelanja = DB::table('keranjangbelanja')->paginate(5) ;
            // mengirim data belanja ke view index
            return view('keranjangbelanja.indexBelanja',['keranjangbelanja' => $keranjangbelanja]); //teknik komunikasi / passing value antara controller dan view

        }

    // method untuk menampilkan view form tambah keranjangbelanja
    public function tambah()
{

	// memanggil view tambah
	return view('keranjangbelanja.tambahBelanja');

}
// method untuk insert data ke table keranjangbelanja
public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('keranjangbelanja')->insert([
		'KodeBarang' => $request->KodeBarang,
		'Jumlah' => $request->Jumlah,
		'Harga' => $request->Harga,

	]);
	// alihkan halaman ke halaman keranjangbelanja
	return redirect('/keranjangbelanja');  //tidak return view karena jadi tidak fleksiibel

}
public function hapus($ID)
{
	// menghapus data keranjang berdasarkan id yang dipilih
	DB::table('keranjangbelanja')->where('ID',$ID)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/keranjangbelanja');
}

}
