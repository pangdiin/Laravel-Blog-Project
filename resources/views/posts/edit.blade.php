@extends('main')

@section('title', '| Edit Blog Post')

@section('content')

	<div class="row">
		{{-- <form method="POST" action="{{ route('posts.update',$post->id) }}"> --}}
		{!! Form::model($post, ['route'=>['posts.update', $post->id],"method"=>'PUT']) !!}
		<div class="col-md-8">	

			<div class="form-group">
				{{ Form::label('title','Title')}}	
				{{ Form::text('title', null, ['class'=>'form-control input-lg']) }}
				{{-- <label name="title">Title:</label> --}}
				{{-- <input id="title" name="title" class="form-control">  --}}
			</div>

			<div class="form-group">
				{{ Form::label('slug','Slug')}}
				{{ Form::text('slug', null, ['class'=>'form-control'])}}
			</div>
			
			<div class="form-group">
				{{ Form::label('body','Body')}}
				{{ Form::textarea('body',null, ['class'=> 'form-control'])}}	
			</div>
				
		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Created At:</dt>
					<dd>{{ date('M j, Y h:i a',strtotime($post->created_at)) }}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{ date('M j, Y h:i a',strtotime($post->updated_at)) }}</dd>
				</dl>
				<hr>

				<div class="row">
					<div class="col-sm-6">
						
						{{-- {!! Html::linkRoute('posts.edit','Edit', array($post->id),array('class'=>'btn btn-primary btn-block')) !!} --}}

						<a href="{{ route('posts.show',$post->id) }}" class="btn btn-danger btn-block">Cancel</a>

					</div>
					<div class="col-sm-6">
						
						{{-- {!! Html::linkRoute('posts.destroy','Delete', array($post->id),array('class'=>'btn btn-danger btn-block')) !!} --}}
				
						{{ Form::submit('Save Changes',['class'=> 'btn btn-success btn-block'])}}
						{{-- <a href="{{ route('posts.update',$post->id) }}" class="btn btn-success btn-block" type="submit">Save Changes</a> --}}

					</div>
				</div>

			</div>
		</div>
		</form>
		{{-- {!! Form::close() !!} --}}
	</div> <!--end of .row (form) -->


@stop