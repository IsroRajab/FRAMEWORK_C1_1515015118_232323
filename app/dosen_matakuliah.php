<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_matakuliah extends Model
{
    protected $table = 'dosen_matakuliah';
	protected $filelable = ['dosen_id','matakuliah_id'];
	public function dosen(){
    	return $this->belongsTo(Dosen::class);
    }

    public function matakuliah(){
    	return $this->belongsTo(Matakuliah::class);
    }
    public function jadwal_matakuliah(){
    	return $this->hasMany(Jadwal_matakuliah::class,'dosen_matakuliah_id');
}
}
