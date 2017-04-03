<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
protected $table = 'pengguna';
protected $filelable = ['username','password'];

	public function mahasiswa()
	{
		return $this->hasOne(Mahasiswa::class,'pengguna_id');
	}

	public function dosen()
	{
		return $this->hasOne(Dosen::class,'pengguna_id');
	}
}
