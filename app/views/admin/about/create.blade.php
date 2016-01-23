@extends('admin.layout.default')

@section('title')
{{ $title='Thêm mới about' }}
@stop

@section('content')

@include('admin.about.common')

<div class="row">
	<div class="col-xs-12">
		<div class="box box-primary">
			<!-- form start -->
			{{ Form::open(array('action' => array('AdminTypeAboutController@store', 'files'=> true))) }}
			<div class="box-body">
				<div class="form-group">
					<label for="name">Tên Vietnamese</label>
					<div class="row">
						<div class="col-sm-6">
						   {{ Form::text('name', null , textParentCategory('Tên Vietnamese')) }}
						</div>
					</div>
					<label for="name">Tên English</label>
					<div class="row">
						<div class="col-sm-6">
						   {{ Form::text('en_name', null , textParentCategory('Tên English')) }}
						</div>
					</div>
					<label for="name">Vị trí sắp xếp</label>
					<div class="row">
						<div class="col-sm-6">
						   {{ Form::text('position', null , textParentCategory('Vị trí sắp xếp(số nguyên dương)')) }}
						</div>
					</div>
				</div>
			  <!-- /.box-body -->

			  <div class="box-footer">
				{{ Form::submit('Lưu lại', array('class' => 'btn btn-primary')) }}
			  </div>
			{{ Form::close() }}
		  </div>
		  <!-- /.box -->
	</div>
</div>
@stop