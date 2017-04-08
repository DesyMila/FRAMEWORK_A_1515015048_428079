<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Dosen_Matakuliah;
use App\Dosen;
use App\Matakuliah;
class Dosen_MatakuliahController extends Controller
{

  protected $informasi="Gagal Melakukan Aksi";
    public function awal()
    {
        $semuaDosen_Matakuliah=Dosen_Matakuliah::all();
   	return view('dosen_matakuliah.awal',compact('semuaDosen_Matakuliah'));
    }
public function tambah()
    {
        $matakuliah= new Matakuliah;
        $dosen= new Dosen;
    	return view('dosen_matakuliah.tambah',compact('matakuliah','dosen'));
    }
  public function simpan(){
    $dosen_matakuliah = new Dosen_Matakuliah($input->only('dosen_id','matakuliah_id'));
    if($dosen_matakuliah->save())$this->informasi="Jadwal Matakuliah Telah Berhasil Disimpan";
	$informasi=$dosen_matakuliah->save()?'berhasil simpan data':'gagal simpan data';
	return redirect('dosen_matakuliah')->with(['informasi'=>$this->informasi]);
}
public function edit($id){
$dosen_matakuliah=Dosen_Matakuliah::find($id);
return view('dosen_matakuliah.edit')->with(array('dosen_matakuliah'=>$dosen_matakuliah));
}
public function lihat($id){
	$dosen_matakuliah=Dosen_Matakuliah::find($id);
	return view('dosen_matakuliah.lihat')->with(array('dosen_matakuliah'=>$dosen_matakuliah));
}
public function update($id, Requests $input){
	$dosen_matakuliah=Dosen_Matakuliah::find($id);
    $dosen_matakuliah->dosen_id=$input->dosen_id;
    $dosen_matakuliah->matakuliah_id="1";
    $informasi=$dosen_matakuliah->save()?'berhasil update data':'gagal simpan data';
    return redirect('dosen_matakuliah')->with(['informasi'=>$informasi]);
}
public function hapus($id){
        $dosen_matakuliah=Dosen_Matakuliah::find($id);
        $informasi=$dosen_matakuliah->delete()?'Berhasil hapus data':'Gagal hapus data';
        return redirect('dosen_matakuliah')->with(['informasi'=>$informasi]);
    }
}
