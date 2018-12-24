<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>Create</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/sign-in/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="POST" action="/create">

      
      @csrf

      
    <h1 class="h3 mb-3 font-weight-normal">{{__ ('create.create')}}</h1>
      <label for="inputEmail" class="sr-only">Title</label>
      <input  name="title" id="inputTitle" class="form-control" maxlength="255" placeholder="Title" required autofocus>
      <label for="inputbody" class="sr-only">Text comment here</label>
      <textarea  name="body" id="inputbody" class="form-control" placeholder="Text comment here" required></textarea> 
      <div class="checkbox mb-3">
        
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">{{__('create.submit')}}</button>
      <p class="mt-5 mb-3 text-muted">&copy; Member Comment</p>
    </form>

  </body>
</html>