<?php
require 'connectMySQL.php';
session_start();
if(isset($_GET['vkey'])){
    $vkey=$_GET['vkey'];

    $db = new MySQLDatabase();
        $db->connect();
        
        $query = "SELECT * FROM users WHERE vkey = '$vkey'";
        $result = $db->query($query);
        if ($row = mysqli_fetch_array($result)){
            if($row['verified']==0){
            $sql = "UPDATE users SET verified = 1 WHERE vkey = '$vkey' LIMIT 1";
            $result = $db->query($sql);
            echo "Your accout has been verified.";
            }else{
                echo "This accout invalid or already verified";
            }
            
        }
        // $sql = "UPDATE users SET verified = 1 WHERE vkey = '$vkey' LIMIT 1";
        
    
    
}else{
    die("Something went wrong");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Verify</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/signup.css" rel="stylesheet">
  </head>
  <body>
    
  <a href="project1.php">Back</a>
  </body>
</html>