@extends('admin.layout.default')

@section('title')
{{ $title='Sửa Ban lãnh đạo' }}
@stop

@section('content')

<div class="row margin-bottom">
	<div class="col-xs-12">
		<a href="{{ action('AdminTeamController@index') }} " class="btn btn-success">Danh sách Ban lãnh đạo</a>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="box box-primary">
			<!-- form start -->
			{{ Form::open(array('action' => array('AdminTeamController@update', $team->id), 'method' => 'PUT', 'files' => true)) }}
			<div class="box-body">
				<div class="form-group">
					<label for="name">Name</label>
					<div class="row">
						<div class="col-sm-6">
							{{ Form::text('name', $team->name , textParentCategory('Name')) }}
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="name">Position</label>
					<div class="row">
						<div class="col-sm-6">
							{{ Form::text('position', $team->position, textParentCategory('Chức danh')) }}
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="name">Image</label>
					<p>Kích thước: 250x130 / Dung lượng < 1Mb</p>
					<div class="row">
						<div class="col-sm-6">
							{{ Form::file('image_url') }}
							<img src="{{ url(UPLOADIMG . UPLOAD_TEAM . '/' . $team->id . '/' . $team->image_url) }}" width="200px" height="auto"  />
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="name">Description</label>
					<div class="row">
						<div class="col-sm-12">
							{{ Form::textarea('description', $team->description , array('class' => 'form-control',"rows"=>6, 'id' => 'editor1')) }}
						</div>
					</div>
				</div>

			  <div class="box-footer">
				{{ Form::submit('Lưu lại', array('class' => 'btn btn-primary')) }}
			  </div>
			{{ Form::close() }}
		  </div>
		  <!-- /.box -->
	</div>
</div>
@stop
