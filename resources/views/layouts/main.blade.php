<!DOCTYPE html>
<html lang="en">
<head>

	@include('partials._head')

	@yield('stylesheets')

	{!! Html::style('css/style.css') !!}

</head>

<body>

	{{-- Nav-bar --}}

	<header>
		
		@include('partials._nav')

	</header>

	{{-- Main content --}}
	
	<main>

			
		@yield('content')


	</main>

	{{-- Footer --}}

	@include('partials._footer')

	
	
	@include('partials._javascript')

	@yield('scripts') 

</body>
</html>