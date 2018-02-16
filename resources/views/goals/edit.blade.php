@extends('layouts.account_main')

@section('title', 'Edit Goal')

@section('content')

	<div>
		
		<div class="card-panel">

			<div class="row">
				<div class="col s12">
					<h4>Edit {{ $goal->goal_title }} </h4>
				</div>
			</div>
			
			<div class="row">

				{!! Form::model($goal, ['route' => ['goals.update', $goal->id], 'method' => 'PUT']) !!}

				<div class="col s12">
					<div class="row">

						<div class="col s12">
							{{ Form::label('goal_title', 'Goal Title:') }}
							{{ Form::text('goal_title', null, ['class'=>'input-field']) }}
						</div>
						 
						<div class="col s12">
							{{ Form::label('description', 'Description:') }}
							{{ Form::textarea('description', null, ['class'=>'input-field']) }}
						</div>

						<div class="col s12">
							{{ Form::label('target_amount', 'Target Amount:') }}
							{{ Form::text('target_amount', null, ['class'=>'input-field']) }}
						</div>

						<div class="col s12">
							{{ Form::label('deposit', 'Deposit:') }}
							{{ Form::text('deposit', null, ['class'=>'input-field']) }}
						</div>

						<div class="col s12">
							{{ Form::label('target_date', 'Target Date:') }}
							{{Form::date('target_date', \Carbon\Carbon::now(), ['class'=>'datepicker'])}}
						</div>

					</div>		

					
				</div>

				<div class="col s12">
					
					<div class=" row">

						<div class="col s6">

	            			{{ form::submit('Save Changes', ['class'=>'btn waves-effect waves-light blue']) }}	
	            			
	            		</div> 

	            		<div class="col s6">

	            			{!! Html::linkRoute('goals.show', 'Cancel', array($goal->id), array('class'=>'waves-effect waves-light btn')) !!}
	            			
	            		</div>
	            		    
		            </div>

				</div>

				{!! Form::close() !!}
			</div>

		</div>

	</div>

	

@endsection

@section('scripts')

	{!! Html::script('js/parsley.min.js') !!}

	<script type="text/javascript">
		$('.datepicker').pickadate({
	    selectMonths: true, // Creates a dropdown to control month
	    selectYears: 15, // Creates a dropdown of 15 years to control year,
	    today: 'Today',
	    clear: 'Clear',
	    close: 'Ok',
	    closeOnSelect: false, // Close upon selecting a date,

	    //The format to show on the `input` element
	    format: 'yyyy/mm/dd',
	  });
	</script>


@endsection