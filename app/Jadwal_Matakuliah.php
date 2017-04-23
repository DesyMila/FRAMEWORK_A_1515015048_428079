<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal_Matakuliah extends Model
{
    protected $table = 'jadwal_matakuliah';
 	protected $fillable = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];
 	public function dosen_matakuliah()
 	{
 		return $this->belongsTo(Dosen_Matakuliah::class,'dosen_matakuliah_id');
 	}
 	public function ruangan()
 	{
 		return $this->belongsTo(Ruangan::class,'ruangan_id');
 	}
 	public function mahasiswa()
 	{
 		return $this->belongsTo(Mahasiswa::class,'mahasiswa_id');
 	}

 	}


