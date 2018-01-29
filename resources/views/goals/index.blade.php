@extends('layouts.login_main')

@section('title', 'All goals')

@section('content')

	<div class="row">
		<div class="col m10">
			<h1>All Goals</h1>
		</div>
		<div class="col m2">
			<a href="{{ route('goals.create') }}" class="waves-effect waves-light btn blue btn-h1-spacing ">Create</a>
		</div>
		<div class="col m12">
			<hr>
		</div>
	</div>

	<div class="row">
		<div class="col m12">
			<table>
		        <thead>
		          <tr>
		              <th>#</th>
		              <th>Title</th>
		              <th>Description</th>
		              {{-- <th>Savings</th> --}}
		              <th>Target Amount</th>
		              <th>Target Date</th>
		          </tr>
		        </thead>

		        <tbody>
		          
					@foreach($goals as $goal)

						<tr>
							<th>{{ $goal->id }}</th>
							<td>{{ $goal->goal_title }}</td>
							<td>{{ substr($goal->description, 0, 30)}}{{ strlen($goal->description) > 30 ? "..." : ""}}</td>
							<td>{{ $goal->target_amount }}</td>
							<td>{{ date( 'M j, Y h:ia', strtotime($goal->created_at)) }}</td>
							<td><a href="{{ route('goals.show', $goal->id) }}" class="waves-effect waves-light btn blue">View</a> <a href="{{ route('goals.edit', $goal->id) }}" class="waves-effect waves-light btn blue">Edit</a></td>
						</tr>

					@endforeach

		        </tbody>
		      </table>

		      <div class="text-center">
		      	{!! $goals->links(); !!}

		      </div>
		</div>
	</div>


@endsection