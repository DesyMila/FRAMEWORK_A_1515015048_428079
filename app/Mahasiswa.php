<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable=['nama','nim','alamat','pengguna_id'];
    public function pengguna(){
    return $this->belongTo(Pengguna::class,'pengguna_id');
}
    public function jadwal_matakuliah()
    {
    	return $this->hasMany(Jadwal_Matakuliah::class,'jadwal_matakuliah_id');
    }
    public function getUsernameAttribute()
    {
        return $this->pengguna->username;
    }
 }
