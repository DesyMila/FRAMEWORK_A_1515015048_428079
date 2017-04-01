@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('ruangan')}}"><i style="#8a6b3b" class="fa text=default fa-chevron-left"></i></a>Detail Data Ruangan</strong>
	</div>
	<table class="table">
		<tr>
			<td>title</td>
			<td>:</td>
			<td>{{$ruangan->title}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$ruangan->create_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$ruangan->update_at}}</td>
		</tr>
	</table>
</div>
@stop