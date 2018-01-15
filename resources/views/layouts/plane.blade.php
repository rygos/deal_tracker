<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
	<meta charset="utf-8"/>
	<title>Deal Tracker | {{ config('app.page.version') }}</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>

	<link rel="stylesheet" href="{{ asset("assets/stylesheets/styles.css") }}" />
</head>
<body>
	@if(\App\Helpers\AuthHelper::user() == null)
		@if(!Request::is('*access_denied'))
			<script type="text/javascript"> window.location = "{{ url('/access_denied') }}"; //redirect </script>
		@endif
	@endif

	@yield('body')
	<script src="{{ asset("assets/scripts/frontend.js") }}" type="text/javascript"></script>

	@if(isset($charts['index_dpm']))
		ASDASDASD
	@endif
</body>
</html>