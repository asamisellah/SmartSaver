<div>
	<nav>
		<div class="nav-wrapper">
			<a href="#" class="brand-logo">SmartSaver</a>


			<ul id="nav-mobile" class="right hide-on-med-and-down">
		        <li><a href="#about">About</a></li>
				<li><a href="#features">Features</a></li>
				<li><a href="#testimonials">Testimonials</a></li>
				<li><a href="#contacts">Contacts</a></li>

				<!-- Authentication Links -->
				@guest
				  <li><a href="{{ route('login') }}">SignIn</a></li>
				  <li><a href="{{ route('register') }}">SignUp</a></li>
				@else
				  <li class="dropdown">
				      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
				          {{ Auth::user()->name }} <span class="caret"></span>
				      </a>

				      <ul class="dropdown-menu">
				          <li>
				              <a href="{{ route('logout') }}"
				                  onclick="event.preventDefault();
				                           document.getElementById('logout-form').submit();">
				                  Logout
				              </a>

				              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				                  {{ csrf_field() }}
				              </form>
				          </li>
				      </ul>
				  </li>
				@endguest
				{{-- <li><a href="{{ route('auth.register') }}">Sign Up</a></li>
				<li><a href="{{ route('auth.login') }}">Sign In</a></li> --}}
	      	</ul>
			
		</div>

	</nav>
</div>