<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//tambahkan disini untuk link praktikum 2
Route::get('praktikum_2', function ( ) {
    return view('praktikum2');

});

Route::get('tugas_4', function () {
    //yang disini tidak banyak proses atau meload form
    return view('tugas4');
});

//jika ternyata kasusnya butuh load banyak proses
Route::get('isiannama',"ViewController@showForm") ;
Route::post('greetings',"ViewController@resultGreetings");

//ets
Route::get('ETS', function ( ) {
    return view('A_5026201027');

});

//tugas 5
Route::get('tugas_5',"ViewControl@show");
Route::get('datang',"ViewControl@resultWelcome");

//route CRUD pegawai
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/view/{id}','PegawaiController@detail');


//CRUD Absen
//route CRUD
Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');


//route keyboard
Route::get('/keyboard','KeyboardController@index');
Route::get('/keyboard/tambah','KeyboardController@tambah');
Route::post('/keyboard/store','keyboardController@store');
Route::get('/keyboard/edit/{kodekeyboard}','keyboardController@edit');
Route::post('/keyboard/update','keyboardController@update');
Route::get('/keyboard/hapus/{kodekeyboard}','keyboardController@hapus');
Route::get('/keyboard/cari','keyboardController@cari');
Route::get('/keyboard/view/{kodekeyboard}','keyboardController@detail');


//EAD Keranjang belanja
Route::get('/keranjangbelanja','keranjangbelanjaController@index');
Route::get('/keranjangbelanja/tambah','KeranjangbelanjaController@tambah');
Route::post('/keranjangbelanja/store','keranjangbelanjaController@store');
Route::get('/keranjangbelanja/hapus/{ID}','keranjangbelanjaController@hapus');
