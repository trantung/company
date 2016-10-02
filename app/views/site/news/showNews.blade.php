@extends('site.layout.default')

@section('title')
	{{ $title = $data->title }}
@stop

@section('content')

<div class="post">
	<div class="detailTitle">
		<h1>{{ $data->name }}</h1>
	</div>
	<div class="detailImage">
		<img src="{{ url(UPLOADIMG . '/news'.'/'. Common::getIdVi($data->id, 'AdminNew') . '/' . $data->image_url) }}" />
	</div>
	<div class="detailContent">
		{{ $data->description }}
	</div>
	@if($related)
	<div class="related">
		<ul>
			@foreach($related as $value)
			<li>
				<a href="{{ action('SiteTypeController@showChildSlug', [$slug, $value->slug]) }}">{{ $value->name }}</a>
			</li>
			@endforeach
		</ul>
	</div>
	@endif
</div>

@stop