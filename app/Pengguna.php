<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\user as Authenticable;
class Pengguna extends Authenticable
{
   protected $table = 'pengguna';
   protected $fillable=['username','password']; 
public function mahasiswa()
{
	return $this->hasOne(Mahasiswa::class);
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
