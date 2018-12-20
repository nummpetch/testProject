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
      <label for="inputEmail" class="sr-only">Title</label>
      <input  name="title" id="inputTitle" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Text comment here</label>
      <textarea  name="password" id="inputPassword" class="form-control" placeholder="Password" required></textarea> 
      <div class="checkbox mb-3">
        
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Comment</button>
      <p class="mt-5 mb-3 text-muted">&copy; Member Comment</p>
    </form>
  </body>
</html>