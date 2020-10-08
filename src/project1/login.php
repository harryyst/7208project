<?php  
        session_start();

        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        if($username=="qq@qq"&&$password=="123"){
            $_SESSION['username'] = "qq@qq";
            $_SESSION['password'] = "123";
            header( "Location:test.php");
        }else{
            header ("Location:signin.php");
        }
  
  ?>