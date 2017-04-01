@extends ('master')
@section ('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Pengguna</strong>
		<a href="{{url('jadwal_matakuliah/tambah')}}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>Dosen Matkuliah
		</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
		<tr>
			<th>NO.</th>
			<th>ID Mahasiswa</th>
			<th>ID Ruangan</th>
			<th>ID Dosen Matakuliah</th>
			<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($data as $jadwal_matakuliah)
			<tr>
				<td>{{$x++}}</td>
				<td>{{$jadwal_matakuliah->mahasiswa_id or 'Mahasiswa id kosong'}}</td>
				<td>{{$jadwal_matakuliah->dosen_id or 'dosen id kosong'}}</td>
				<td>{{$jadwal_matakuliah->Matakuliah_id or 'matakuliah id Kosong'}}</td>
				<td><div class="btn-group" role="group">
					<a href="{{url('jadwal_matakuliah/edit/'.$jadwal_matakuliah->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-palement="top" title="ubah"><i class="fa fa-pencil"></i></a>
					<a href="{{url(jadwal_matakuliah/lihat/'.$jadwal_matakuliah->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class fa fa-eye></i></a>
					<a href="{{url(jadwal_matakuliah/hapus/'.$jadwal_matakuliah->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class fa fa-remote></i></a>
				</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop