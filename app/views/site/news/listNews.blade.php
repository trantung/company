@extends('site.layout.default')

@section('title')
{{ $title = $typeName }}
@stop

@section('content')
<div class="grid-wr">
	@foreach($data as $value)
		<div class="media">
			<div class="media-left">
				<a href="{{ action('SiteTypeController@showChildSlug', [$slug, $value->slug]) }}">
					<img class="media-object" src="{{ url(UPLOADIMG . '/news'.'/'. Common::getIdVi($value->id, 'AdminNew') . '/' . $value->image_url) }}" />
				</a>
			</div>
			<div class="media-body">
				<div class="grid-text">
					<h4>
						<a href="{{ action('SiteTypeController@showChildSlug', [$slug, $value->slug]) }}">
							{{ $value->name }}
						</a>
					</h4>
					<p>{{ limit_text(strip_tags($value->description), TEXTLENGH_DESCRIPTION) }}</p>
				</div>
				<div class="grid-seemore">
					<a href="{{ action('SiteTypeController@showChildSlug', [$slug, $value->slug]) }}">{{ trans('captions.seemore') }}</a>
				</div>
			</div>
		</div>
	@endforeach
</div>
@stop