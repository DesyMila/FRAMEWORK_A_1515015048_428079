<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table = 'dosen';
    protected $fillable= ['nama','nip','alamat','pengguna_id'];
public function pengguna(){
	return $this->belongTo(Pengguna::class,'pengguna_id');
}
public function dosen_matakuliah()
{
	return $this->hasMany(Dosen_matakuliah::class,'dosen_id');
}
public function getUsernameAttribute()
{
	return $this->pengguna->username;
}
}
