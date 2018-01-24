@if(Session::has('success'))

	<div class="row">
      <div class="col s12 m5">
        <div class="card-panel teal">
          <span class="white-text">Success: {{ Session::get('success') }}
          </span>
        </div>
      </div>
    </div>

@endif

@if(count($errors)>0)

	<div class="row">
      <div class="col s12 m5">
        <div class="card-panel red">
          <span class="white-text">Errors: 
	          <ul>
	          	@foreach($errors->all() as $error)

					<li>{{ $error }}</li>

	          	@endforeach
	          </ul>
          </span>
        </div>
      </div>
    </div>

@endif