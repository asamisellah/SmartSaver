<div class="navbar-fixed">
  
  <nav>
    <div class="nav-wrapper blue">
      <ul>
        <li><a href="#" class="brand-logo">SmartSaver</a></li>
      </ul>

      <ul class="right">

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

        <li>
          <a class="btn-floating btn-medium red" href="{{ route('goals.create') }}"><i class="material-icons">add</i></a>
        </li>
      </ul>
  </nav>

</div>

