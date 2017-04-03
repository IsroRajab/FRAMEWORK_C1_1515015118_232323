<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';
	protected $filelable = ['nama','alamat','pengguna_id'];
	protected $guarded = ['id'];

    public function pengguna(){
    return $this->belongsTo(Pengguna::class);
	}

	public function dosen_matakuliah(){
		return $this->hasMany(Dosen_matakuliah::class,'dosen_id');
	}
}
