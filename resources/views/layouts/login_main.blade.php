<!DOCTYPE html>
<html lang="en">
<head>

	@include('partials._head')

	@yield('stylesheets')

</head>

<body>

	<header>

		{{-- @include('partials._nav') --}}

	</header>
	
	<main>

		<div class="row">
			
			<div class="col s12 m4 l3" id="side-nav">

				{{-- @include('partials._sidenav') --}}

			</div>

			<div class="col s12 m8 l9" id="content">
			
				@yield('content')

			</div>

			@include('partials._messages')

		</div>


	</main>

	
	{{-- @include('partials._footer') --}}

	
	
	@include('partials._javascript')

	@yield('scripts') 

</body>
</html>