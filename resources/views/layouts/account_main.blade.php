<!DOCTYPE html>
<html lang="en">
<head>

	@include('partials._head')

	@yield('stylesheets')

	{!! Html::style('css/styleAcc.css') !!}

</head>

<body>

	<header>

		@include('partials._aNav')

	</header>

	
	<main>

		<div class="row">
			
			<div class="col m4 l3" id="side-nav">

				@include('partials._sidenav')

			</div>

			<div class="col m8 l9" id="content">
			
				@yield('content')
				@include('partials._messages')

			</div>

		</div>


	</main>

	
	{{-- @include('partials._aFooter') --}}

	
	
	@include('partials._javascript')

	@yield('scripts') 

</body>
</html>