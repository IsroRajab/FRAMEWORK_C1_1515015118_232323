<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ruangan;

class Ruangancontroller extends Controller
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
  	$ruangan = new Ruangan();
  	$ruangan->title = 'ruang 405';
  	$ruangan->save();
  	return "Data dengan title {$ruangan->title} telah di simpan";
  }
}
