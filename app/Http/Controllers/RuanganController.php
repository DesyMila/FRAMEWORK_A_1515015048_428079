<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;

class RuanganController extends Controller
{
public function awal()
    {
   	return "Hello dari PenggunaController";
    }
public function tambah()
    {
    	return $this->simpan();
    }
public function simpan(){
   $ruangan = new Ruangan();
   $ruangan->title = 'Ruangan 404';
   $ruangan->save();
    return "data Ruangan dengan title {$ruangan->title} telah disimpan";
}
}