@extends('main')

@section('title', '| Login')

@section('content')

	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				{!! Form::open(['data-parsley-validate'=>'']) !!}
				
				<div class="form-group">
					{{ Form::label('email','Email:')}}
					{{ Form::email('email', null, ['class'=>'form-control','required'=>''])}}	
				</div>
					
				<div class="form-group">
					{{ Form::label('password','Password:')}}
					{{ Form::Password('password',['class'=>'form-control','required'=>''])}}
				</div>
				
				<div class="form-group">
					{{ Form::checkbox('remember')}}
					{{ Form::label('remember','Remember Me')}}	
				</div>
				

				{{ Form::submit('Login',['class'=>'btn btn-primary btn-block']) }}

				{!! Form::close() !!}
			</div>
	</div>	

@stop