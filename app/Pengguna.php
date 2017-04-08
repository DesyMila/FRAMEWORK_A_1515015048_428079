<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
   protected $table = 'pengguna';
   protected $fillable=['username','password']; 
public function mahasiswa()
{
	return $this->hasOne(Mahasiswa::class,'mahasiswa_id');
}
public function dosen()
{
	return $this->hasOne(Dosen::class,'dosen_id');
}
public function peran()
{
	return $this->belongToMany(Peran::class);
}
}
