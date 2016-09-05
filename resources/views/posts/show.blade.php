@extends('main')

@section('title','| View Post')

@section('content')

	<div class="row">
		<div class="col-md-8">			
			<h1>{{ $post->title }}</h1>
			<p class="lead">{{ $post->body }}</p>		
		</div>
		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<label>Url:</label>
					<p><a href="{{ route('blog.single',$post->slug) }}">{{ route('blog.single',$post->slug) }}</a><p>
				</dl>

				<dl class="dl-horizontal">
					<label>Created At:</label>
					<p>{{ date('M j, Y h:i a',strtotime($post->created_at)) }}</p>
				</dl>

				<dl class="dl-horizontal">
					<label>Last Updated:</label>
					<p>{{ date('M j, Y h:i a',strtotime($post->updated_at)) }}</p>
				</dl>
				<hr>

				<div class="row">
					<div class="col-sm-6">
						
						{{-- {!! Html::linkRoute('posts.edit','Edit', array($post->id),array('class'=>'btn btn-primary btn-block')) !!} --}}

						<a href="{{ route('posts.edit',$post->id) }}" class="btn btn-primary btn-block">Edit</a>

					</div>
					<div class="col-sm-6">
						{!! Form::open(['route'=>['posts.destroy', $post->id], "method"=>'DELETE']) !!}

						{{-- <a href="{{ route('posts.destroy',$post->id) }}" class="btn btn-danger btn-block">Delete</a> --}}
						{!! Form::submit('Delete', ['class'=>'btn btn-danger btn-block'])!!}
						
						{!! Form::close() !!}
						
					</div>
				</div>

				<div class="row">
					<div class="com-md-12">
					<form class="form-group"></form>
						<a href="{{ route('posts.index') }}" class="btn btn-default btn-block form-control"><< See All Posts</a>
					</form>
					</div>
				</div>

			</div>
		</div>
	</div>

	

@endsection

