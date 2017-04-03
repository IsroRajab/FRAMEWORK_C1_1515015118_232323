<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matakuliah extends Model
{
    protected $table = 'jadwal_matakuliah';
	protected $filelable = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];

	public function dosen_matakuliah(){
    	return $this->belongsTo(Dosen_matakuliah::class);
}
public function ruangan(){
    	return $this->belongsTo(Ruangan::class);
    	}
    	public function mahasiswa(){
    	return $this->belongsTo(Mahasiswa::class);
    }
}
