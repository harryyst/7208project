<?php  
    require 'connectMySQL.php';
    require_once('SMTP.php');
    require_once('PHPMailer.php');
    require_once('Exception.php');
    require_once 'SessionManager.php';

    use \PHPMailer\PHPMailer\PHPMailer;
    use \PHPMailer\PHPMailer\Exception;
    new SessionManager();

$mail=new PHPMailer(true); // Passing `true` enables exceptions

// Create connection
$notice="";
$notice1="";
    if(isset($_POST["email"]) && isset($_POST["password"])){
        if($_POST["password"]!=$_POST["password2"]){
          $notice="Passwords Don't Match";
        }else{
        
        
        $db = new MySQLDatabase();
        $db->connect();
        $email1 = $_REQUEST["email"];
        $password = $_REQUEST["password"];
        $username = $_REQUEST["username"];
        $firstname = $_REQUEST["firstname"];
        $lastname = $_REQUEST["lastname"];
        $vkey = md5(time().$username);
        
        $query = "SELECT * FROM users WHERE email = '$email1'";
        $query1 = "SELECT * FROM users WHERE username = '$username'";
        $result = $db->query($query);
        $result1 = $db->query($query1);
        if($row = mysqli_fetch_array($result)){
          $notice1="emial has been created.";
        }else{
          $sql = "INSERT INTO users (email,password,username,firstname,lastname,vkey)
          VALUES ('$email1', '$password','$username','$firstname','$lastname','$vkey')";
          $result = $db->query($sql);
          // $mail->SMTPDebug=2; // Enable verbose debug output
          try {
          $mail->isSMTP(); // Set mailer to use SMTP
          $mail->Host='smtp.gmail.com';
          $mail->SMTPAuth=true; // Enable SMTP authentication
          $mail->Username='harryyst@gmail.com'; // SMTP username
          $mail->Password='Yst1997327'; // SMTP password
          $mail->SMTPSecure='ssl';
          $mail->Port=465;
          
          $mail->setFrom('harryyst@gmail.com', 'optional sender name');

          //recipient
          $mail->addAddress($email1, 'optional recipient name');     // Add a recipient

          //content
          // $mail->isHTML(true); // Set email format to HTML
          $mail->Subject='Email Verification';
          $mail->Body= "<a href=\"https://34.123.190.119:8080/project2/verify.php?vkey=$vkey\">Register me</a>";
          
          $mail->AltBody='This is the body in plain text for non-HTML mail clients';

          $mail->send();
          }
          catch(Exception $e) {
            header("Location:thankyou.php");
        }

          header("Location:thankyou.php");
          $db->disconnect();
        }
        // $notice="";
        // $notice1="";
      }
      //  $notice="";
     }
    

    
 ?>
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


    <link href="css/signup.css" rel="stylesheet">
  </head>

  <body class="text-center">
      <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <form class="form-signin sg" action="signup.php" method="POST"> 
    
      <h1 class="h3 mb-3 font-weight-normal">Sign up</h1>
      <span id='message'><?php echo $notice1 ?></span>
      <p class="ss">Username:</p>
      <label for="username" class="sr-only">Username</label>
      <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
      <span id="availability"></span>
      
      <p class="ss mt-3">Email address:</p>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
      <p class="ss mt-3">Password:</p>
      <label for="password" class="sr-only">Password</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Password" onkeyup="validatePassword1(this.value);" required><span id="msg"></span>
      <p class="ss mt-3">Re-enter password:</p>
      <label for="password2" class="sr-only">Re-enter password</label>
      <input type="password" id="password2" name="password2" class="form-control" placeholder="Password" required>
      <span id='message'><?php echo $notice ?></span>
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

    <script>  
 $(document).ready(function(){  
   $('#username').blur(function(){

     var username = $(this).val();

     $.ajax({
      url:'check.php',
      method:"POST",
      data:{user_name:username},
      success:function(data)
      {
       if(data != '0')
       {
        $('#availability').html('<span class="text-danger">Username not available</span>');
        $('#register').attr("disabled", true);
       }
       else
       {
        $('#availability').html('<span class="text-success">Username Available</span>');
        $('#register').attr("disabled", false);
       }
      }
     })

  });
 });  
</script>
      


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/signup.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  </body>

</html>



