<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>Signin</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.1/examples/product/product.css" rel="stylesheet">
    
  </head>
  <!--localization-->
  @lang('home_page.message')
  
  


  <!-- Authentication Links -->
  
    
  @guest
  <br>
      <a class="navbar-brand" href="{{ route('login') }}">{{ __('Login') }}</a>

@else
  <div>
      <a >
          {{ Auth::user()->username }} <span class="caret"></span>
      </a>

     
      </div>
    
@endguest


<!----Button Comment--->
  <body class="text-center">
    <form action="/create">
        <input type="submit" value="{{__('home_page.post')}}" />
    </form>

    <!--comment-->
    <div class="container">
     
      <div class="row">
    @foreach ($posts as $post)
    <div class="col-md-4">
      <h2>{{$post->title}}</h2>
      <p>{{$post->body}}</p>
      <p><a class="btn btn-secondary" href="/post/{{$post->id}}" role="button">{{__('home_page.comment')}} &raquo;</a></p>
      
    </div>
      
    <br>
        
    @endforeach
  </body>
</html>