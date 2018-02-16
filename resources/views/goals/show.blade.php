@extends('layouts.account_main')

@section('title', 'View Goal')

{{-- @section('stylesheets')

	

@endsection --}}

@section('content')

	<div>

		<div>
			<h2>{{ $goal->goal_title }}</h2>
		</div>

		<div class="row">

			<div class="col s7">
				<div class="card">
					<div class="card-image">
						<div class="chart-container">
						    <canvas id="myChart"></canvas>
						</div>
						<a class="btn-floating halfway-fab waves-effect waves-light purple" href="{{ route('goals.edit', $goal->id) }}"><i class="material-icons">mode_edit</i></a>
					</div>
					<div class="card-content light-blue accent-4">
						<span class="card-title">{{ $goal->goal_title }} Savings Progress</span>
						
					</div>
				</div>			
				
			</div>

			<div class="col s5">
				<div class="card-panel">

					<div class="section">
						<a class="btn-floating btn-medium waves-effect waves-light purple right" href="{{ route('goals.edit', $goal->id) }}"><i class="material-icons">mode_edit</i></a>

						<h5>Description</h5>

						<p>{{ $goal->description }}</p>

						<div class="divider"></div>

						<h5>Target Amount:</h5>
						<h5>{{ $goal->target_amount }}</h5>

					</div>

					<div class="divider"></div>

					<div class="section">
						
						<h5>Make Deposit</h5>


						{!! Form::model($goal, ['route' => ['goals.update', $goal->id], 'method' => 'PUT']) !!}

							{{ Form::label('deposit', 'Enter Deposit Amount:') }}
							{{ Form::text('deposit', null, ['class'=>'input-field']) }}

							{{ form::submit('Deposit', ['class'=>'btn waves-effect waves-light blue']) }}

						{!! Form::close() !!}

					</div>

				</div>

				<div class="card-panel">

					<div class="row">
						<div class="col s12">
							<p><b>Target Date:</b> {{ date( 'M j, Y h:ia', strtotime($goal->target_date)) }}</p>
			            	<p><b>Created at:</b> {{ date( 'M j, Y h:ia', strtotime($goal->updated_at)) }}</p>
			            	<p><b>Updated at:</b> {{ date( 'M j, Y h:ia', strtotime($goal->created_at)) }}</p>
						</div>
						
		            	<div class="col s12">
							{!! Form::open(['route' => ['goals.destroy', $goal->id], 'method' => 'DELETE']) !!}

	            				{!! Form::submit('Delete', ['class '=> 'waves-effect waves-light btn red']) !!}

	            			{!! Form::close() !!}
						</div>
					</div>

				</div>
			</div>

		</div>

	</div>

@endsection


@section('scripts')

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

	<script>
		
		var ctx = document.getElementById("myChart").getContext("2d");
		var myChart = new Chart(ctx, {
		    type: 'doughnut',
		    data: {
		        labels: ["Saved", "Outstanding"],
		        datasets: [{
		            label: 'Amount in ksh.',
		            data: [{{ $goal->balance }}, {{ $goal->target_amount-$goal->balance }}],
		            backgroundColor: [
		            	'rgb(43, 57, 212)',
		                'rgb(255, 87, 34)'			                
		            ],

		            borderWidth: 1
		        }]
		    },

		    options: {
	            responsive: true,
	            legend: {
	                position: 'bottom',
	            },
	            title: {
	                display: true,
	                text: ''
	            },
	        }
		});


		var ctx = document.getElementById("chart").getContext("2d");
		var chart = new Chart(ctx, {
		    type: 'line',
		    data: {
		        labels: ["Saved", "Outstanding"],
		        datasets: [{
		            label: 'Amount in ksh.',
		            data: [{{ $goal->balance }}, {{ $goal->target_amount-$goal->balance }}],
		            backgroundColor: [
		            	'rgb(43, 57, 212)',
		                'rgb(255, 87, 34)'			                
		            ],

		            borderWidth: 1
		        }]
		    },

		    options: {
	            responsive: true,
	            legend: {
	                position: 'bottom',
	            },
	            title: {
	                display: true,
	                text: ''
	            },
	        }
		});

	</script>

@endsection