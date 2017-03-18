<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class DosenController extends Controller
{
    public function awal(){
    return "Hello dari DosenController";
}
public function tambah(){
	return $this->simpan();
}
public function simpan(){
	$dosen = new Dosen();
	$dosen->nama = 'Desy Mila Santi';
	$dosen->nip = '1738787873';
	$dosen->alamat = 'Jl. Juanda';
	$dosen->pengguna_id ='1';
	$dosen->save();
	return "Data Kepegawaian dengan nama {$dosen->nama} telah disimpan";
}
}
