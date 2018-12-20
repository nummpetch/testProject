<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>Sign up</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/sign-in/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="POST" action="/register">

      
      @csrf
       
      <img class="mb-4" src="https://getbootstrap.com/docs/4.1/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
      
      <label for="inputEmail" class="sr-only">username</label>
    <input type="name" name="username" id="inputEmail" class="form-control " minlength="3" maxlength="20" placeholder="Username" value="{{old('username')}}"required autofocus>
      
      <label for="inputPassword1" class="sr-only">Password</label>
      <input type="Password" name="password" id="inputPassword1" class="form-control" placeholder="Password" minlength="6" maxlength="255" required>
      
      <label for="password_confirmation " class="sr-only">confirm Password</label>
      <input type="Password" name="password_confirmation" id="password_confirmation " class="form-control" placeholder="Confirm Password" required>
      
      <button id="submit" class="btn btn-lg btn-primary btn-block" type="submit" >Sign up</button>
      <a href="/login">login</a>

      @if($errors ->any())
        <div class="notificaation is-danger">
            <ul>
    
                @foreach ($errors->All() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
      @endif

      <p class="mt-5 mb-3 text-muted">&copy; Member Comment</p>

     
    </form>

    

  </body>
  <script type="text/javascript">
	
  
</script>
</html>
