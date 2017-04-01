@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('matakuliah')}}"><i style="#8a6b3b" class="fa text=default fa-chevron-left"></i></a>Detail Data Dosen Matakuliah</strong>
	</div>
	<table class="table">
		<tr>
			<td>Title</td>
			<td>:</td>
			<td>{{$matakuliah->title}}</td>
		</tr>
		<tr>
			<td>Keterangan </td>
			<td>:</td>
			<td>{{$matakuliah->ketengan}}</td>
		</tr>		
		<tr>
			<td class="col-xs-4">Dibuat tanggal}}</td>
			<td class="col-xs-1">:</td>
			<td>{{$dosen_matakuliah->create_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$dosen->update_at}}</td>
		</tr>
	</table>
</div>
@stop