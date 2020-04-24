<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>E-commerce</title>
	@include('partials.styles')
</head>
<body>
	
	<div class="wrapper">
	{{--navbar start--}}
	@include('partials.nav')
	{{--navbar end--}}
	<section class="main-content">


		@if(count($errors)>0)
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
		@endif


	@if(Session::has('success'))

	<p>{{Session::get('success')}}</p>

	@endif


	@if(Session::has('danger'))

	<p>{{Session::get('danger')}}</p>

	@endif




	@yield('content')
	</section>
@include('partials.scripts')
<footer style="text-align:center">
	@include('partials.footer')
</footer>
</div>
</body>
</html>