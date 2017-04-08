@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('dosen')}}"><i style="#8a6b3b" class="fa text=default fa-chevron-left"></i></a>Detail Data Dosen</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{$dosen->nama}}</td>
		</tr>
		<tr>
			<td>NIP</td>
			<td>:</td>
			<td>{{$dosen->nip}}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{$dosen->alamat}}</td>
		</tr>
		<tr>
			<td> Username</td>
			<td>:</td>
			<td>{{$dosen->username}}</td>
		</tr>
		<tr>
			<td> Password</td>
			<td>:</td>
			<td>{{$dosen->password}}</td>
		</tr>
		
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$dosen->create_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$dosen->update_at}}</td>
		</tr>
	</table>
</div>
@stop