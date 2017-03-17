<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Matakuliah;

class MatakuliahController extends Controller
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
  	$matakuliah = new Matakuliah();
  	$matakuliah->title = 'FRAMEWORK';
  	$matakuliah->keterangan = 'semester 4';
  	$matakuliah->save();
  	return "Data dengan title {$matakuliah->title} telah di simpan";
  }
}
