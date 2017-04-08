@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('jadwal_matakuliah')}}"><i style="#8a6b3b" class="fa text=default fa-chevron-left"></i></a>Detail Data Jadwal Matakuliah</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama Mahasiswa</td>
			<td>:</td>
			<td>{{$jadwal_matakuliah->mahasiswa->nama}}</td>
		</tr>
		<tr>
			<td>NIM Mahasiswa</td>
			<td>:</td>
			<td>{{$jadwal_matakuliah->mahasiswa->nim}}</td>
		</tr>
		<tr>
			<td>Nama Dosen </td>
			<td>:</td>
			<td>{{$adwal_matakuliah->dosen_matakuliah->dosen->nip}}</td>
		</tr>
		<tr>
			<td>Nama Matakuliah</td>
			<td>:</td>
			<td>{{$jadwal_matakuliah->dosen_matakuliah->matakuliah->title}}</td>
		</tr>		
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$adwal_matakuliah->create_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$adwal_matakuliah->update_at}}</td>
		</tr>
	</table>
</div>
@stop