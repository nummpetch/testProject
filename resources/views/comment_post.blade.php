<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>Floating labels example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/floating-labels/floating-labels.css" rel="stylesheet">
  </head>


  <!-- Authentication Links -->
  @guest
  <br>
      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

@else
  <div>
      <a >
          {{ Auth::user()->username }} <span class="caret"></span>
      </a>

     
      </div>
    
@endguest
<!----post---->
<body>
 
    <div class="text-center mb-4">
      <img class="mb-4" src="https://getbootstrap.com/docs/4.1/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">{{$posts[0]->title}}</h1>
      <p>{{$posts[0]->body}}</a></p>
    </div>



<!---comment--->
<form class="comment">
    <div class="form-label-group">
        <input type="comment" id="comment" class="form-control" placeholder="comment" required autofocus>
        <label for="comment">Email address</label>
      </div>

      <button class="btn btn-lg btn-primary btn-block" type="submit">comment</button>
 </form>
  </body>
</html>