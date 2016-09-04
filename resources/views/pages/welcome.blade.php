@extends('main')

@section('title','| Homepage')

@section('content')
    <div class="row">
      <div class="col-md-12">
        <div class="jumbotron">
          <h1>Welcome to my blog</h1>
          <p class="lead">Thank you so much for visiting . This is my test website  built with Laravel</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular post</a></p>
        </div>
      </div>
    </div> <!-- end of header .row -->
    
    <div class="row">
      <div class="col-md-8">
          
          <div class="post">
            <h3>Post Title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam nisi dolorem quibusdam, illo ab deserunt. Cupiditate labore ab aliquam, maiores hic nulla explicabo, ratione, corporis error suscipit et commodi velit.</p>
            <a href="#" class="btn btn-primary">Read more</a>
          </div>
            <hr>
          <div class="post">
            <h3>Post Title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam nisi dolorem quibusdam, illo ab deserunt. Cupiditate labore ab aliquam, maiores hic nulla explicabo, ratione, corporis error suscipit et commodi velit.</p>
            <a href="#" class="btn btn-primary">Read more</a>
          </div>
            <hr>
          <div class="post">
            <h3>Post Title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam nisi dolorem quibusdam, illo ab deserunt. Cupiditate labore ab aliquam, maiores hic nulla explicabo, ratione, corporis error suscipit et commodi velit.</p>
            <a href="#" class="btn btn-primary">Read more</a>
          </div>
            <hr>
          <div class="post">
            <h3>Post Title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam nisi dolorem quibusdam, illo ab deserunt. Cupiditate labore ab aliquam, maiores hic nulla explicabo, ratione, corporis error suscipit et commodi velit.</p>
            <a href="#" class="btn btn-primary">Read more</a>
          </div>

      </div>
      <div class="col-md-3 col-md-offset-1">
        <h2>Sidebar</h2>        
      </div>
    </div>
@endsection

