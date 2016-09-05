@extends('main')

@section('title', '| Create New Post')

@section('stylesheets')

	{!! Html::style('css/parsley.css')!!}
	
@endsection

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create New Post</h1>
			<hr>
		
			{{-- {!! Form::open(['route' => 'posts.store','data-parsley-validate'=>'']) !!}
				
				{{ Form::label('title','Title:')}}
    			{{ Form::text('title', null, array('class'=>'form-control','required'=>'','maxlength'=>"255"))}}

				{{ Form::label('slug','Slug:')}}
    			{{ Form::text('slug', null, array('class'=>'form-control','required'=>'','maxlength'=>'255','minlength'=>'5'))}}

				{{ Form::label('body', "Post Body:")}}
				{{ Form::textarea('body', null, array('class'=>'form-control','required'=>''))}}


				{{ Form::submit('Create Post', array('class'=>'btn btn-success btn-lg btn-block', 'style'=>'margin-top:20px'))}}

			{!! Form::close() !!} --}}
	
			<form method="POST" action="{{ route('posts.store')}}" data-parsley-validate>
				<div class="form-group">
					
					<label name="title">Title:</label>
					<input id="title" name="title" class="form-control" required maxlength="255">
	
					<label name="slug">Slug:</label>
					<input id="slug" name="slug" class="form-control" required maxlength="255" minlength="5">

					<label name="body">Post Body:</label>
					<textarea name="body" id="body" rows="10" class="form-control" required></textarea>
					
					<input type="submit" value="Create Post" class="btn btn-success btn-lg btn-block" style="margin-top: 20px">
					<input type="hidden" name="_token" value="{{ Session::token() }}">

				</div>
			</form>
		</div>
	</div>

@endsection

@section('scripts')

	{!! Html::script('js/parsley.min.js')!!}

@endsection