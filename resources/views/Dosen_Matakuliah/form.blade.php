<div class="form-group">
	<label class="col-sm-2 control-label" id="matakuliah_id">ID Matakuliah</label>
	<div class="col-sm-10">
		{!! Form::select('matakuliah_id',$matakuliah->lists('title','id'),null,['class'=>'form-control','id'=>'matakuliah_id','placeholder'=>"ID Matakuliah"])!!}
	</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="dosen_id">ID Dosen</label>
	<div class="col-sm-10">{!! Form::select('dosen_id',$dosen->lists('nama','id'),null,['class'=>'form-control','id'=>'dosen_id','placeholder'=>"ID Dosen"])!!}</div>
</div>
