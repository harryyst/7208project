
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>SignIn</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://infs3202-4d8d4229.uqcloud.net/code/css/signin.css" rel="stylesheet">
  </head>


  
  <body class="text-center">
    <form class="form-signin sg" method="POST" action="https://infs3202-4d8d4229.uqcloud.net/code/users/login">
      <h1 class="h3 mb-3 font-weight-normal">Sign in</h1>
      
      <?php if (strlen($status) > 0): echo '<div class="alert alert-danger">' . $status . '</div>'; endif?>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address"  value="<?php if (isset($_COOKIE["email"])): echo $_COOKIE["email"]; endif ?>" required >
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
      <span id="message"></span>
      
      <input type="checkbox" id="remember" name="remember" 
                        <?php if (isset($_COOKIE["email"])): echo "checked"; endif ?>
                    class="mb-4">
                    <label for="remember">Remember my email</label>
      <button class="btn btn-lg btn-primary btn-block" id="login_btn" type="submit" value="Submit" name="submit">Sign in</button>
      <a href="https://infs3202-4d8d4229.uqcloud.net/code/re_password/index" class="btn btn-lg btn-primary btn-block" >
        Forgot password</a>
      <a href="https://infs3202-4d8d4229.uqcloud.net/code/users/registration_show" class="btn btn-lg btn-primary btn-block" >
        Create an account</a>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://infs3202-4d8d4229.uqcloud.net/code/js/signin.js" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  </body>
</html>