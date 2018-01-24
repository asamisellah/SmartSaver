@extends('layouts.main')

@section('title', 'Edit Goal')

@section('content')

	<div class="row">

		{!! Form::model($goal, ['route' => ['goals.update', $goal->id], 'method' => 'PUT']) !!}

		<div class="col s12 m6">
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
					{{ Form::label('target_date', 'Target Date:') }}
					{{Form::date('target_date', \Carbon\Carbon::now(), ['class'=>'datepicker'])}}
				</div>

			</div>		

			
		</div>

		<div class="col s12 m6">
			<div class="row card blue-grey darken-1">
	            <div class="card-content white-text">
	            	<p>Target Date: {{ date( 'M j, Y h:ia', strtotime($goal->target_date)) }}</p>
	            	<hr>
	            	<p>Created at: {{ date( 'M j, Y h:ia', strtotime($goal->updated_at)) }}</p>
	            	<hr>
	            	<p>Updated at: {{ date( 'M j, Y h:ia', strtotime($goal->created_at)) }}</p>
					
	            </div>
	            <div class=" row card-action">
	            	<div class="row">
	            		<div class="col s12 m6">

	            			{!! Html::linkRoute('goals.show', 'Cancel', array($goal->id), array('class'=>'waves-effect waves-light btn red')) !!}
	            			
	            		</div>
	            		<div class="col s12 m6">

	            			{{ form::submit('Save Changes', ['class'=>'btn waves-effect waves-light']) }}	
	            			
	            		</div>
	            	</div>      
	            </div>
          	</div>

		</div>

		{!! Form::close() !!}
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