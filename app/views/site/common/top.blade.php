<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li {{ checkActive() }}><a href="{{ action('SiteIndexController@index') }}">{{ trans('captions.home') }}</a></li>
						{{--<li {{ checkActive(LaravelLocalization::transRoute('routes.about')) }}><a href="{{ action('AboutController@index') }}">{{ trans('captions.aboutus') }}</a></li>--}}
						@foreach(getTypeLanguage($viTypes, $enTypes) as $type)
							<li {{ checkActive($type->slug) }}>
								<a href="{{ action('SiteTypeController@showSlug', $type->slug) }}">{{$type->name}}</a>
							</li>
						@endforeach
						<li {{ checkActive(LaravelLocalization::transRoute('routes.contact')) }}><a href="{{ action('ContactController@index') }}">{{ trans('captions.contact') }}</a></li>
					</ul>
				</div>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
		</div>
	</div>
</nav>