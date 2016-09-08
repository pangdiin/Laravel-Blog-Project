@extends('main')

@section('title', '| Edit Blog Post')

@section('content')

@section('stylesheets')

	{!! Html::style('css/parsley.css')!!}
	{!! Html::style('css/select2.min.css')!!}

	<script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
  <script>
  tinymce.init({
    selector: 'textarea',
    plugins:'link',
    menubar:false
  });
  </script>
	
@endsection


	<div class="row">
		
		{!! Form::model($post, ['route'=>['posts.update', $post->id],"method"=>'PUT','files'=> true]) !!}
		<div class="col-md-8">	

			<div class="form-group">
				{{ Form::label('title','Title')}}	
				{{ Form::text('title', null, ['class'=>'form-control input-lg']) }}
			</div>

			<div class="form-group">
				{{ Form::label('slug','Slug')}}
				{{ Form::text('slug', null, ['class'=>'form-control'])}}
			</div>

			<div class="form-group">
				{{ Form::label('category_id','Category:')}}
				{{ Form::select('category_id', $categories,null , ['class'=>'form-control'])}}
			</div>

			<div class="form-group">
				{{ Form::label('tags','Tags:')}}
				{{ Form::select('tags[]', $tags, null , ['class'=>'form-control select2-multi','multiple'=>'multiple'])}}
			</div>

			<div class="form-group">
					{{ Form::label('featured_image','Upload Featured Image:') }}
					{{ Form::file('featured_image')}}	
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
		{!! Form::close() !!}
	</div> <!--end of .row (form) -->


@stop

@section('scripts')

	{{-- {!! Html::script('js/parsley.min.js')!!} --}}
	{!! Html::script('js/select2.min.js')!!}
	<script type="text/javascript">
		$('.select2-multi').select2();
		$('.select2-multi').select2().val({!! json_encode($post->tags()->getRelatedIds()) !!}).trigger('change');
	</script>

@endsection