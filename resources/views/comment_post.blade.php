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
           <h1 class="h3 mb-3 font-weight-normal">{{$data['posts']->title}}</h1>
      <p>{{$data['posts']->body}}</a></p>
    </div>



<!---comment--->
<form  method="POST" action="comment/{{$data['posts']->id}}">
    @csrf
    <div class="form-label-group">
        <input name="comment" type="text" id="comment" class="form-control" placeholder="comment" required autofocus>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">comment</button>
    </form>
<!--last comment-->
    @foreach ($data['comments'] as $comment)
        <li>
            {{$comment->message }}
        </li>
    @endforeach
 </form>
  </body>
</html>