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
Route::get('tugas_5',"ViewContol@show");
Route::get('datang',"ViewControl@resultWelcome");
