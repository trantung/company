<!DOCTYPE html>
<html>
	@include('site.common.header')
	<body>
		@include('site.common.top')
		@include('site.common.slide')

		<div id="main" class="container">
			<div class="row">
				<div class="col-sm-9">
					@yield('content')
				</div>
				<div class="col-sm-3">
					@include('site.common.sidebar')
				</div>
			</div>
		</div>

		@include('site.common.footer')
	</body>
</html>