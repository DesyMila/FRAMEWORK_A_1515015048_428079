<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwal_matakuliah;

class Jadwal_MatakuliahController extends Controller
{
    public function awal()
    {
    return view('jadwal_matakuliah.awal',['data'=>jadwal_matakuliah::all()]);
    }
public function tambah()
    {
      return view('jadwal_matakuliah.tambah');
    }


public function simpan(){
   $jadwal = new Jadwal_Jatakuliah();
   $jadwal->mahasiswa_id = $input->mahasiswa_id;
   $jadwal->ruangan_id =$input->ruangan_id;
   $jadwal->dosen_matakuliah_id =$input->dosen_matakuliah_id;
   $informasi=$jadwal->save()?'berhasil simpan data':'gagal simpan data';
  return redirect('jadwal_matakuliah')->with(['informasi'=>$informasi]);
}
public function edit($id){
$jadwal_matakuliah=Jadwal_Matakuliah::find($id);
return view('jadwal_matakuliah.edit')->with(array('jadwal'=>$jadwal));
}
public function lihat($id){
  $jadwal_matakuliah=Jadwal_Matakuliah::find($id);
  return view('jadwal_matakuliah.lihat')->with(array('jadwal'=>$jadwal));
}
public function update($id, Requests $input){
  $jadwal_matakuliah=Jadwal_Matakuliah::find($id);
  $jadwal_matakuliah->mahasiswa_id = $input->mahasiswa_id;
   $jadwal_matakuliah->ruangan_id =$input->ruangan_id;
   $jadwal_matakuliah->dosen_matakuliah_id =$input->dosen_matakuliah_id;
   $informasi=$jadwal_matakuliah->save()?'berhasil update data':'gagal update data';
  return redirect('jadwal_matakuliah')->with(['informasi'=>$informasi]);
}
public function hapus($id){
        $jadwal_matakuliah=Jadwal_Matakuliah::find($id);
        $informasi=$jadwal_matakuliah->delete()?'Berhasil hapus data':'Gagal hapus data';
        return redirect('jadwal_matakuliah')->with(['informasi'=>$informasi]);
    }
}
