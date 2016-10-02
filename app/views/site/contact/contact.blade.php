@extends('site.layout.default')

@section('title')
	{{ $title = trans('captions.contact'); }}
@stop

@section('content')

<div class="contact">
	<div class="contact-desc">
		<h2>{{ trans('captions.address') }}</h2>
		<div class="contact-address">
			{{ $data->description }}
		</div>
	</div>
	<div class="map">
		<div id="mapview" style="height: 400px; width: 100%; max-width: 100%;">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.5020738762205!2d107.01271851548556!3d20.972502086028815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a5f4bb5efb675%3A0x306b2c55328afec5!2zQ8OhaSBMw6JuLCB0cC4gSOG6oSBMb25nLCBRdeG6o25nIE5pbmgsIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1475426982003" width="880" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
	<div class="contact-form-wr">
		<h2>{{ trans('captions.contactform') }}</h2>
		<div class="contact-form">
			@include('message')
			{{ Form::open(array('action' => 'ContactController@contact', 'method' => 'POST', 'class' => 'form-horizontal')) }}
				<div class="row">
					<div class="col-sm-6">
						{{ Form::text('name', '', array('placeholder' => trans('captions.name'), 'class' => 'contact-input', 'required' => 'required')) }}
					</div>
					<div class="col-sm-6">
						{{ Form::text('email', '', array('placeholder' => trans('captions.email'), 'class' => 'contact-input', 'required' => 'required')) }}
					</div>
					<div class="col-sm-12">
						{{ Form::text('phone', '', array('placeholder' => trans('captions.phone'), 'class' => 'contact-input', 'required' => 'required')) }}
					</div>
					<div class="col-sm-12">
						{{ Form::textarea('message', '', array('placeholder' => trans('captions.message'), 'class' => 'form-control',"rows"=>5, 'class' => 'contact-input')) }}
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						{{ Form::submit( trans('captions.submit') , array('class' => 'contact-submit')) }}
					</div>
				</div>
			{{ Form::close() }}
		</div>
	</div>
</div>
@stop