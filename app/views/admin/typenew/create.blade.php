@extends('admin.layout.default')

@section('title')
{{ $title='Thêm mới thể loại tin' }}
@stop

@section('content')

@include('admin.typenew.common')

<div class="row">
	<div class="col-xs-12">
		<div class="box box-primary">
			<!-- form start -->
			{{ Form::open(array('action' => array('NewsTypeController@store', 'files'=> true))) }}
			<div class="box-body">
				<div class="form-group">
					<label for="name">Tên thể loại Vietnamese</label>
					<div class="row">
						<div class="col-sm-6">
						   {{ Form::text('name', null , textParentCategory('Tên thể loại Vietnamese')) }}
						</div>
					</div>
					<label for="name">Tên thể loại English</label>
					<div class="row">
						<div class="col-sm-6">
						   {{ Form::text('en_name', null , textParentCategory('Tên thể loại English')) }}
						</div>
					</div>
					<label for="name">Vị trí sắp xếp</label>
					<div class="row">
						<div class="col-sm-6">
						   {{ Form::text('position', null , textParentCategory('Vị trí sắp xếp(số nguyên dương)')) }}
						</div>
					</div>
					<label for="name">Vị trí hiển thị</label>
					<div class="row">
						<div class="col-sm-6">
						   {{ Form::select('status', [ 1=> 'Không xuất hiện ở content', 2=> 'Xuất hiện ở content'], null, array('class' => 'form-control')) }}
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
