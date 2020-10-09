
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
    <link rel="stylesheet" href="http://localhost:8080/code/css/profile.css" type="text/css" />
  </head>
  <body>
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
      <a class="btn btn-sm btn-outline-secondary" href="http://localhost:8080/code/home/index">Back</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="http://localhost:8080/code/home/index">Shop</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        
        <a class="btn btn-sm btn-outline-secondary nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">user</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="http://localhost:8080/code/users/profile_detail">Profile</a>
                        <a class="dropdown-item" href="http://localhost:8080/code/sell/index">Sell</a>
                        <a class="dropdown-item" href="http://localhost:8080/code/users/logout">Log out</a>
                      </div>
      </div>
      
    </div>
  </header>
    <h1 class="mt-3 ml-3"><?php echo $_SESSION['username'] ?></h1>
    
  <main role="main">
        <div class="text-center">
        <?php
        
        if(isset($_SESSION['img1'])){
          echo '<svg class="bd-placeholder-img rounded-circle mt-5" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><image xlink:href="http://localhost:8080/code/uploads/'.$_SESSION['img1'].'"  width="140" height="140" /></svg>';
        }else{
          echo '<svg class="bd-placeholder-img rounded-circle mt-5" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></svg>';
        }
        
       ?>
       <br>
        <a href="http://localhost:8080/code/upload/index">Edit photo</a>
        </div>
        <hr>
        <div class="ml-3">
            <p>Email:</p>
            <p><?php echo $_SESSION['email'] ?> </p>
            <P>Password:</p>
            <p><?php echo $_SESSION['password'] ?></p>
            <br>
        </div>
        <hr>
        <div class="ml-3 mb-3">
            <h2>Detail</h2>
            <p>First name:</p>
            <p><?php echo $_SESSION['firstname'] ?></p>
            <p>Last name:</p>
            <p><?php echo $_SESSION['lastname'] ?></p>
            <a class="float-right mr-3" href="http://localhost:8080/code/edit/index">Edit</a>            
            <br>
        </div>
   </main>
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