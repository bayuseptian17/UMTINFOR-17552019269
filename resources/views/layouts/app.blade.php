<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="widht=device-widht, initial-scale=1.0">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<script type="{{asset('js/app.js')}}"></script>
</head>
</body>
	@include('layouts.navbar')
	<div class="container-fluid">
		<div class="row mt-4">
			<div class="col-md-2">
				@include('layouts.sidebar')
			</div>
			<div class="col-md-10">
				@include('layouts.breadcrumb')
				@yield('content')
			</div>
		</div>
	</div>
</body>
</html>