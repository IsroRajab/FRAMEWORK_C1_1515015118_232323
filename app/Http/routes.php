<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/',function(){
	return view ('master');
});

Route::get('pengguna','PenggunaController@awal');
Route::get('ruangan/tambah','RuanganController@tambah');
Route::get('pengguna/tambah','PenggunaController@tambah');
Route::get('dosen/tambah','DosenController@tambah');
Route::get('mahasiswa/tambah','MahasiswaController@tambah');
Route::get('matakuliah/tambah','MatakuliahController@tambah');
Route::get('dosen_matakuliah/tambah','Dosen_matakuliahController@tambah');
Route::get('jadwal_matakuliah/tambah','Jadwal_matakuliahController@tambah');


Route::get('pengguna/lihat/{pengguna}','PenggunaController@lihat');
Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');

Route::get('matakuliah','MatakuliahController@awal');
Route::get('matakuliah/lihat/{matakuliah}','MatakuliahController@lihat');
Route::post('matakuliah/simpan','MatakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}','MatakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}','MatakuliahController@update');
Route::get('matakuliah/hapus/{matakuliah}','MatakuliahController@hapus');

Route::get('ruangan','RuanganController@awal');
Route::get('ruangan/lihat/{ruangan}','RuanganController@lihat');
Route::post('ruangan/simpan','RuanganController@simpan');
Route::get('ruangan/edit/{ruangan}','RuanganController@edit');
Route::post('ruangan/edit/{ruangan}','RuanganController@update');
Route::get('ruangan/hapus/{ruangan}','RuanganController@hapus');

// Route::get('pengguna/isro', function(){	
//   	$pengguna = new App\pengguna();
//   	$pengguna->username = 'rajab';
//   	$pengguna->password = 'rajab';
//   	$pengguna->save();
//   	return "Data dengan username {$pengguna->username} telah di simpan";
//   });
// //
//
//
//
//
// Route::get('/', function () {
//     return view ('welcome');
// });
// //
// //
// //
// Route::get('pengguna/{pengguna}', function ($pengguna) {
//     return "Hello yo $pengguna";
// });
// Route::get('berita/{berita?}', function ($berita = "laravel 5") {
//     return "berita $berita pasti belum di baca";
// });
// Route::auth();

// Route::get('/home', 'HomeController@index');
