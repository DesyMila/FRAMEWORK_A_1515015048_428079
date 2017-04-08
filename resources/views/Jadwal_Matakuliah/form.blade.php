<div class="form-group">
	<label class="col-sm-2 control-label" id="mahasiswa_id">Mahasiswa</label>
	<div class="col-sm-10">
		{!! Form::select('mahasiswa_id',$mahasiswa->listMahasiswadanNim,null,['class'=>'form-control','id'=>'mahasiswa_id','placeholder'=>"Mahasiswa"])!!}
	</div>
	</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="ruangan_id">ID Ruangan</label>
	<div class="col-sm-10">{!! Form::select('ruangan_id',$ruangan->list('title','id'),null,['class'=>'form-control','id'=>'ruangan_id',placeholder'=>"ID Ruangan"])!!}</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="dosen_matakuliah_id">Dosen Matakuliah</label>
	<div class="col-sm-10">{!! Form::text('dosen_matakuliah_id',['class'=>'form-control','placeholder'=>"ID Dosen Matakuliah"])!!}</div>
</div>
