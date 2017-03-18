<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwal_Matakuliah;

class Jadwal_MatakuliahController extends Controller
{
    public function awal()
    {
   	return "Hello dari Jadwal_MatakuliahController";
    }
public function tambah()
    {
    	return $this->simpan();
    }


public function simpan(){
   $jadwal = new jadwal_matakuliah();
   $jadwal->mahasiswa_id = '1';
   $jadwal->ruangan_id = '1';
   $jadwal->dosen_matakuliah_id = '3';
   $jadwal->save();
    return "Jadwal Matakuliah di ruangan {$jadwal->ruangan_id} telah disimpan";
}
}
