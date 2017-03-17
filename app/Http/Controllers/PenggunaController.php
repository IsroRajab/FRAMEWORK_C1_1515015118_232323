<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pengguna;

class PenggunaController extends Controller
{
  public function awal()
  {
  	return "Hello dari Isro Rajab";
  }
  public function tambah()
  {
  	return $this->simpan();
  }
  public function simpan()
  {
  	$pengguna = new Pengguna();
  	$pengguna->username = 'isro';
  	$pengguna->password = 'isro';
  	$pengguna->save();
  	return "Data dengan username {$pengguna->username} telah di simpan";
  }
}