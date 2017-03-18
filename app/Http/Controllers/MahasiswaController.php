<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
  public function awal(){
    return "Hello dari MahasiwaController";
}
public function tambah(){
	return $this->simpan();
}
public function simpan()
{
	$mahasiswa = new Mahasiswa();
	$mahasiswa->nama = 'Desy Mila Santi';
	$mahasiswa->nim = '1515015048';
	$mahasiswa->alamat = 'Jl. Sentosa';
	$mahasiswa->pengguna_id ='1';
	$mahasiswa->save();
	return "Data Mahasiswa dengan nama {$mahasiswa->nama} dan {$mahasiswa->nim} telah disimpan";
}  
}
