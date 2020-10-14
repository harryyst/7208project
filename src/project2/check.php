<?php  
//check.php  
$connect = mysqli_connect("34.123.190.119:3306", "root", "root", "project"); 
if(isset($_POST["user_name"]))
{
 $username = mysqli_real_escape_string($connect, $_POST["user_name"]);
 $query = "SELECT * FROM users WHERE username = '".$username."'";
 $result = mysqli_query($connect, $query);
 echo mysqli_num_rows($result);
}
?>
