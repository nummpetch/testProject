<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>Signin</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/sign-in/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="POST" action="/re_password">

      
      @csrf

      <img class="mb-4" src="https://getbootstrap.com/docs/4.1/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">re-password</h1>
      
      <label for="oldPassword" class="sr-only">old password</label>
    <input  type="Password" name="oldPassword" id="oldPassword" class="form-control" placeholder="old password"  required autofocus>
      
    <label for="first_password" class="sr-only">Password</label>
      <input type="Password" name="first_password" id="first_password" class="form-control" placeholder="1-password" required>
      
    <label for="second_password" class="sr-only">Password</label>
      <input type="Password" name="password_confirmation" id="second_password" class="form-control" placeholder="2-password" required>
        
      </div> 
      <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
      <a href="/login">log in</a>
      <p class="mt-5 mb-3 text-muted">&copy; Member Comment</p>
      @if($errors ->any())
        <div class="notificaation is-danger">
            <ul>
    
                @foreach ($errors->All() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
      @endif
    </form>
  </body>
</html>