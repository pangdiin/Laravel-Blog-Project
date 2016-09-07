@extends('main')

@section('title','| All Tags')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1>Tags</h1>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
					</tr>
				</thead>

				<tbody>
					@foreach($tags as $tag)
					<tr>
						<th>{{ $tag->id }}</th>
						<td>{{ $tag->name }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div> <!-- end of col md -8 -->
		<div class="col-md-3 col-md-offset-1">
			<div class="well">
				
				{{-- <form action="{{ route('tags.store') }}" method="POST">
					
					{{ csrf_field() }}

					<h2>New Tag</h2>
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" id="name" name="name" class="form-control">
					</div>
					<input type="submit" value="Create New Tag" class="btn btn-primary btn-block">

				</form> --}}

				{!! Form::open(['route'=>'tags.store','method'=>"POST"]) !!}
					
					<h2>New Tag</h2>
					<div class="form-group">
					{{ Form::label('name','Name:')}}
					{{ Form::text('name',null,['class'=>'form-control'])}}	
					</div>
					
					{{ Form::submit('Create New Tag',['class'=>'btn btn-primary btn-block'])}}

				{!! Form::close() !!}


			</div>
		</div>
	</div>
@stop