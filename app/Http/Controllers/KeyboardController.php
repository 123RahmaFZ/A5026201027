<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeyboardController extends Controller
{
    public function index()
    {
       // DB::table('')->get(); //hasil get() adalah Array of object [object][]
    	// mengambil data dari table keyboard
    	//$keyboard = DB::table('keyboard')->get();

        $keyboard = DB::table('keyboard')->paginate(5) ;
    	// mengirim data keyboard ke view index
    	return view('keyboard.indexKeyboard',['keyboard' => $keyboard]); //teknik komunikasi / passing value antara controller dan view

    }
    public function tambah()
    {

        // memanggil view tambah
        return view('keyboard.tambahKeyboard');

    }
    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('keyboard')->insert([
            'merkkeyboard' => $request->merkkeyboard,
            'stockkeyboard' => $request->stockkeyboard,
            'tersedia' => $request->tersedia,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/keyboard');  //tidak return view karena jadi tidak fleksiibel

    }
    public function edit($kodekeyboard)
{
	// mengambil data pegawai berdasarkan id yang dipilih
$keyboard = DB::table('keyboard')->where('kodekeyboard',$kodekeyboard)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('keyboard.editKeyboard',['keyboard' => $keyboard]);
}
// update data pegawai
public function update(Request $request)
{
	// update data pegawai
	DB::table('keyboard')->where('kodekeyboard',$request->kodekeyboard)->update([
		'merkkeyboard' => $request->merkkeyboard,
            'stockkeyboard' => $request->stockkeyboard,
            'tersedia' => $request->tersedia,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/keyboard');
}
public function hapus($kodekeyboard)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('keyboard')->where('kodekeyboard',$kodekeyboard)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/keyboard');
}
public function cari(Request $request)
{
    // menangkap data pencarian
    $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
    $keyboard = DB::table('keyboard')
    ->where('merkkeyboard','like',"%" . $cari . "%")
    ->paginate(5);

        // mengirim data pegawai ke view index
    return view('keyboard.indexKeyboard',['keyboard' => $keyboard]);

}
public function detail($kodekeyboard)
{
	// mengambil data pegawai berdasarkan id yang dipilih
$keyboard = DB::table('keyboard')->where('kodekeyboard',$kodekeyboard)->get();
	// passing data pegawai yang didapat ke view detail.blade.php
	return view('keyboard.detailKeyboard',['keyboard' => $keyboard]);
}
}
