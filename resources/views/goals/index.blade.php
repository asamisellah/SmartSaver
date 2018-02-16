@extends('layouts.account_main')

@section('title', 'My goals')

@section('content')

	<div class="row">
		<div class="col m12">
			<h3>My Goals</h3>
		</div>
	</div>

	<div class="row">
		<div class="col m12">
				
				@foreach($goals as $goal)

					<div>
						<div class="card-panel hoverable">

							<div class="card-content">

								<div class="row">
									<div class="col s12 m6">
										
										<a href="{{ route('goals.show', $goal->id) }}" class="collection-item avatar">
											<h4 class="title">{{ $goal->goal_title }}</h4>
											<p>{{ substr($goal->description, 0, 30)}}{{ strlen($goal->description) > 30 ? "..." : ""}}</p>

											<div class="chip">Target amount: sh. {{ $goal->target_amount }}</div>
										</a>

										<p>Created: {{ date( 'M j, Y h:ia', strtotime($goal->created_at)) }}</p>

									</div>

									<div class="col s12 m6">
										
										<div class="row">
											<div class="col s12 m4 offset-m4">
												<a class="waves-effect waves-light btn blue btn-spacing2" href="{{ route('goals.edit', $goal->id) }}">Edit</a>
											</div>

											<div class="col s12 m4">
												{!! Form::open(['route' => ['goals.destroy', $goal->id], 'method' => 'DELETE']) !!}

						            				{!! Form::submit('Delete', ['class '=> 'waves-effect waves-light btn red btn-spacing2']) !!}

						            			{!! Form::close() !!}
																	
											</div>
										</div>

									</div>

								</div>
								
							</div>
							
						</div>
					</div>

				@endforeach

			</div>

		</div>
	</div>

	

	<div class="text-center">
		{!! $goals->links(); !!}

	</div>

@endsection


@section('scripts')

	

@endsection