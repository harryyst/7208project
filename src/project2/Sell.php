<?php 
    require 'connectMySQL.php';
    
    $db = new MySQLDatabase();
    $db->connect();
    if(isset($_POST["itemname"]) && isset($_POST["description"])&& isset($_POST["type"]) && isset($_POST["price"])){
    	$itemname = $_POST["itemname"];
    	$description = $_POST["description"];
    	$type = $_POST["type"];
    	$price = $_POST["price"];
    	$sql = "INSERT INTO item (itemname,description,type,price)
         	 VALUES ('$itemname', '$description','$type','$price')";
          	$result = $db->query($sql);
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
    
    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/profile.css" type="text/css" />
  </head>
  <body>
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
      <a class="btn btn-sm btn-outline-secondary" href="profile.php">Back</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="project1.php">Shop</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        
        <a class="btn btn-sm btn-outline-secondary nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">user</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="profile.php">Profile</a>
                        <a class="dropdown-item" href="Sell.php">Sell</a>
                        <a class="dropdown-item" href="signin.php?logout">Log out</a>
                      </div>
      </div>
      
    </div>
  </header>
    <h1 class="mt-3 ml-3">Sell Item:</h1>
    <hr>
  
    <div class="text-center">
        <form class="form-signin sg" action="Sell.php" method="POST"> 
    
    <p class="ss">Itemname:</p>
    <label for="itemname" class="sr-only">Itemname</label>
    <input type="text" id="itemname" name="itemname" class="form-control" placeholder="itemname" required autofocus>
    <span id="username_result"></span>      
    <p class="ss mt-3">Description:</p>
    <label for="description" class="sr-only">Desciption</label>
    <input type="text" id="description" name="description" class="form-control" placeholder="description" required autofocus>
    <label for="type"> Type:</label>
    <select class="form-control" id="type" name='type'>
      <option value="Home">Home</option>
      <option value="Fashion">Fashion</option>
      <option value="Electronics">Electronics</option>
      <option value="Games">Games</option>
      <option value="Movies">Movies</option>
      <option value="Book">Book</option>
    </select>
    <p class="ss mt-3">Price:</p>
    <label for="price" class="sr-only">price</label>
    <input type="text" id="price" name="price" class="form-control" placeholder="price" required autofocus>
   
        <!-- <p class="ss mt-3">Image:</p> -->
        <!-- <input type='file' name='userfile' size='20'/><br/><br/> -->
        <!-- <input type="submit" value="upload"/> -->
    <button class="mt-3 btn btn-lg btn-primary btn-block" id="sell" type="submit" value="sell" name="sell">Sell</button>
        </form>
        </div>
        <hr>
        
   <footer class="blog-footer">
                                    <p>© Copyright 2019 All rights reserved. Terms of Use, Privacy Notice & Cookies Policy</p>
                                    <p>
                                      <a href="#">Back to top</a>
                                    </p>
                              </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
  </body>
  </html>
