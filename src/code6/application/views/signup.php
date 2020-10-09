
<!doctype html>
<html lang="en">
  <head>

  <html>  
 <head>  
  <title>Live Username Available or not By using PHP Ajax Jquery</title>  
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
 </head>  



    <title>SignIn</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <link href="http://localhost:8080/code/css/signup.css" rel="stylesheet">
  </head>

  <body class="text-center">
      <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <form class="form-signin sg" action="http://localhost:8080/code/users/registration" method="POST"> 
    
      <h1 class="h3 mb-3 font-weight-normal">Sign up</h1>
      <!-- <span id='message'><?php echo $notice1 ?></span> -->
      <?php if (strlen($message_display) > 0): echo '<div class="alert alert-danger">' . $message_display . '</div>'; endif?>
      <p class="ss">Username:</p>
      <label for="username" class="sr-only">Username</label>
      <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
      <span id="username_result"></span>      
      <p class="ss mt-3">Email address:</p>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
      <p class="ss mt-3">Password:</p>
      <label for="password" class="sr-only">Password</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Password" onkeyup="validatePassword1(this.value);" required><span id="msg"></span>
      <p class="ss mt-3">Re-enter password:</p>
      <label for="password2" class="sr-only">Re-enter password</label>
      <input type="password" id="password2" name="password2" class="form-control" placeholder="Password" required>
      <!-- <span id='message'><?php echo $notice ?></span> -->
      <p class="ss mt-3">First name:</p>
      <label for="firstname" class="sr-only">First name</label>
      <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First name" required autofocus>
      <p class="ss mt-3">Last name:</p>
      <label for="lastname" class="sr-only">Last name</label>
      <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last name" required autofocus>
      <!-- <p class="ss mt-3">Birthday:</p> -->
      <!-- <input type="date" class="form-control" name="bday" required> -->
      <button class="mt-3 btn btn-lg btn-primary btn-block" id="register" type="submit" value="Register" name="register">Sign up</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>  

    <script type="text/javascript">
 $(document).ready(function(){
  $('#username').change(function(){
   var username = $('#username').val();
   if(username != ''){
    $.ajax({
     url: "http://localhost:8080/code/users/checkUsername",
     method: "POST",
     data: {username:username},
     success: function(data){
      $('#username_result').html(data);
     }
    });
   }
  });
 });
</script>
      


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://localhost:8080/code/js/signup.js" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  </body>

</html>



