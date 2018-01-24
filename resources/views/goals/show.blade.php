@extends('layouts.main')

@section('title', 'View Goal')

@section('content')

	<div class="row">

		<div class="col s12 m6">
			<div class="row">

				<div class="col s12">
					<h1>{{ $goal->goal_title }}</h1>
				</div>
				 
				<div class="col s12">
					<p>{{ $goal->description }}</p>
				</div>

				<div class="col s12">
					<p>{{ $goal->target_amount }}</p>
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

	            			{!! Html::linkRoute('goals.edit', 'Edit', array($goal->id), array('class'=>'waves-effect waves-light btn blue')) !!}
	            			
	            		</div>
	            		<div class="col s12 m6">

	            			{!! Html::linkRoute('goals.destroy', 'Delete', array($goal->id), array('class'=>'waves-effect waves-light btn red')) !!}
	            			
	            		</div>
	            	</div>      
	            </div>
          	</div>

		</div>
	</div>

@endsection