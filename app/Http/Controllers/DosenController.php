<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class DosenController extends Controller
{
public function awal()
    {
   	return view('dosen.awal',['data'=>Dosen::all()]);
    }
public function tambah(){
	return view('dosen.tambah');
}
public function simpan(){
	$dosen = new Dosen();
	$dosen->nama =$input->nama;
	$dosen->nip = $input->nip;
	$dosen->alamat =$input->alamat;
	$dosen->pengguna_id =$input->pengguna_id;
	$informasi=$dosen->save()?'berhasil simpan data':'gagal simpan data';
	return redirect('dosen')->with(['informasi'=>$informasi]);
}
public function edit($id){
$dosen=Dosen::find($id);
return view('dosen.edit')->with(array('dosen'=>$dosen));
}
public function lihat($id){
	$dosen=Dosen::find($id);
	return view('dosen.lihat')->with(array('dosen'=>$dosen));
}
public function update($id, Requests $input){
	$dosen=Dosen::find($id);
	$dosen->nama =$input->nama;
	$dosen->nip = $input->nip;
	$dosen->alamat =$input->alamat;
	$dosen->pengguna_id =$input->pengguna_id;
	$informasi=$dosen->save()?'berhasil update data':'gagal update data';
	return redirect('dosen')->with(['informasi'=>$informasi]);
}
public function hapus($id){
        $dosen=Dosen::find($id);
        $informasi=$dosen->delete()?'Berhasil hapus data':'Gagal hapus data';
        return redirect('dosen')->with(['informasi'=>$informasi]);
    }
}
