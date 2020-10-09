<?php
    require 'connectMySQL.php';
    session_start();

    $notice = "";
    $notice1 = "";
    if(isset($_SESSION['email'])){
      header('Location:project1.php');
    }
    if (isset($_POST["email"]) && isset($_POST["password"])){

      if (isset($_POST["remember"])) {
        setcookie("email", $_POST["email"], time() + 60*60*24, "/");
        $_COOKIE["email"] = $_POST["email"];
      } else {
        setcookie("email", null, -1, "/");
      } 
    $qwe=0;
    $db = new MySQLDatabase();
    $db->connect();
    $email = $_REQUEST["email"];
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = $db->query($query);
      if ($row = mysqli_fetch_array($result)) {
        if ($_POST['password'] === $row['password']) {
            $_SESSION["email"] = $_POST["email"];
            if($qwe!=$row['verified']){
              $_SESSION["verified"]=$row['verified'];
              $qwe=0;
              header("Location: project1.php");
            }else{
              $notice="Please verify your email";
            }
            
        } else {
            $notice1 = "Incorrect Password";
        } 
        
        
      } else {
        $notice="Incorrect Email or Password";
      }
    $db->disconnect(); 
    }

    if (isset($_GET["logout"])) {
      $_SESSION["verified"]=0;
      session_destroy();
      header("Location: project1.php");
  }
?>
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
    <link href="css/signin.css" rel="stylesheet">
  </head>


  
  <body class="text-center">
    <form class="form-signin sg" method="POST" action="signin.php">
      <h1 class="h3 mb-3 font-weight-normal">Sign in</h1>
      <p class="notice"><?php echo $notice?></p>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address"  value="<?php if (isset($_COOKIE["email"])): echo $_COOKIE["email"]; endif ?>" required >
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
      <span id="message"></span>
      <p class="notice"><?php echo $notice1?></p>
      <input type="checkbox" id="remember" name="remember" 
                        <?php if (isset($_COOKIE["email"])): echo "checked"; endif ?>
                    class="mb-4">
                    <label for="remember">Remember my email</label>
      <button class="btn btn-lg btn-primary btn-block" id="login_btn" type="submit" value="Submit" name="submit">Sign in</button>
      <a href="signup.php" class="btn btn-lg btn-primary btn-block" >
        Create an account</a>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/signin.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  </body>
</html>