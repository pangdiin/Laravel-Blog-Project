@extends('main')

@section('title', '| Create New Post')

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

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h2>Create New Post</h2>
			<hr>
		
			{!! Form::open(array('route' => 'posts.store','data-parsley-validate'=>'','files'=> true)) !!}

				<div class="form-group">
					{{ Form::label('title','Title:')}}
    				{{ Form::text('title', null, array('class'=>'form-control','required'=>'','maxlength'=>"255"))}}
				</div>	
				
				<div class="form-group">
					{{ Form::label('slug','Slug:')}}
    				{{ Form::text('slug', null, array('class'=>'form-control','required'=>'','maxlength'=>'255','minlength'=>'5'))}}	
				</div>
				
				<div class="form-group">
					{{ Form::label('category_id', 'Category:')}}
					<select name="category_id" class="form-control">
						@foreach($categories as $category)
							<option value="{{ $category->id }}">{{ $category->name }}</option>
						@endforeach
					</select>	
				</div>
				
				<div class="form-group">
					{{ Form::label('tags', 'Tags')}}
					<select name="tags[]" class="form-control select2-multi" multiple="multiple">
						@foreach($tags as $tag)
							<option value="{{ $tag->id }}">{{ $tag->name }}</option>
						@endforeach
					</select>	
				</div>
				
				<div class="form-group">
					{{ Form::label('featured_image','Upload Featured Image:') }}
					{{ Form::file('featured_image')}}	
				</div>
				
				
				<div class="form-group">
					{{ Form::label('body', "Post Body:")}}
					{{ Form::textarea('body', null, array('class'=>'form-control'))}}
				</div>
				
				{{ Form::submit('Create Post', array('class'=>'btn btn-success btn-lg btn-block', 'style'=>'margin-top:20px'))}}

			{!! Form::close() !!}
	
			{{-- <form method="POST" action="{{ route('posts.store')}}" data-parsley-validate enctype="multipart/form-data">

				{{ csrf_field() }}

				<div class="form-group">
					<label name="title">Title:</label>
					<input id="title" name="title" class="form-control" required maxlength="255">
				</div>
					
				<div class="form-group">
					<label name="slug">Slug:</label>
					<input id="slug" name="slug" class="form-control" required maxlength="255" minlength="5">
				</div>
	
				<div class="form-group">
					<label for="category_id">Category</label>
					<select name="category_id" class="form-control">
						@foreach($categories as $category)
							<option value="{{ $category->id }}">{{ $category->name }}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<label for="tags">Tags</label>
					<select name="tags" class="form-control select2-multi" multiple="multiple">
						@foreach($tags as $tag)
							<option value="{{ $tag->id }}">{{ $tag->name }}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<label name="body">Post Body:</label>
					<textarea name="body" id="body" rows="5" class="form-control" required></textarea>
				</div>
						
				<input type="submit" value="Create Post" class="btn btn-success btn-lg btn-block" style="margin-top: 20px">
				<input type="hidden" name="_token" value="{{ Session::token() }}">

			</form> --}}
		</div>
	</div>

@endsection

@section('scripts')

	{!! Html::script('js/parsley.min.js')!!}
	{!! Html::script('js/select2.min.js')!!}

	<script type="text/javascript">
		$(".select2-multi").select2();
	</script>

@endsection