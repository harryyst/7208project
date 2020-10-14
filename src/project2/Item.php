<?php
    require 'connectMySQL.php';
    require_once 'SessionManager.php';
    new SessionManager();
    $db = new MySQLDatabase();
    $db->connect();
    if (isset($_POST["search"])){
        $_SESSION["item"] = $_POST["search"];
        $item = $_REQUEST["search"];
        $query = "SELECT * FROM item WHERE itemname = '$item'";
        $result = $db->query($query);
        if ($row = mysqli_fetch_array($result)) {
            $_SESSION['description'] = $row['description'];
            $_SESSION['price'] = $row['price'];
            $_SESSION['type'] = $row['type'];
            header("Location: Item.php");
        }
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
    <link href="css/style1.css" rel="stylesheet">
</head>

<body>
    <header class="blog-header py-3">

        <div class="row flex-nowrap justify-content-between align-items-center ml-3">

            <div class="col">
                <a class="blog-header-logo text-dark float-left" href="project1.php">Shopping</a>
            </div>


            <form class="form-inline my-2 my-md-0 hide-submit" method="POST" action="Item.php">
            <input class="form-control" type="text" placeholder="Search" aria-label="Search" id="search" name="search">
                <label>
                <input type="submit" />
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3">
                    <circle cx="10.5" cy="10.5" r="7.5"></circle>
                    <line x1="21" y1="21" x2="15.8" y2="15.8"></line>
                </svg>
                </label>
            </form>
            


            <div class="col-3 d-flex align-items-center">
                <?php 
                if (isset($_SESSION["email"])) {
                  echo '<a class=" btn btn-sm btn-outline-secondary nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">user</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
			<a class="dropdown-item" href="profile.php">Profile</a>
                        <a class="dropdown-item" href="Sell.php">Sell</a>
                        <a class="dropdown-item" href="signin.php?logout">Log out</a>
                      </div>
                        ';
                } else {
                  echo '<a class="btn btn-sm btn-outline-secondary" href="signin.php">Login/Register</a>';
                }
                ?>
            </div>

        </div>
    </header>

    <div class="nav-scroller py-1 mb-2 ">
        <nav class="nav d-flex justify-content-between">
            <a class="p-2 text-muted ml-5" href="#">Homes</a>
            <a class="p-2 text-muted" href="#">Fashion</a>
            <a class="p-2 text-muted" href="#">Electronics</a>
            <a class="p-2 text-muted" href="#">Games</a>
            <a class="p-2 text-muted" href="#">Movies</a>
            <a class="p-2 text-muted mr-5" href="#">Books</a>
        </nav>
    </div>
       
        <main role="main">
                <?php if (isset($_SESSION["email"])): ?>
                <p class="ml-5">type/<?php echo $_SESSION['type'] ?></p>
                    <div class = "image1 ml-5 ">
                       
                    </div>
                    <div >
                <h1 class="text-center">Item name:</h1>
                <p class="text-center"><?php echo $_SESSION['item'] ?></p>
                <h1 class="text-center">Detail:</h1>
                <p class="text-center"><?php echo $_SESSION['description'] ?></p>
                <h1 class="text-center">Price:</h1>
                <p class="text-center"><?php echo $_SESSION['price'] ?></p>
                
                
           </div>
            <?php else: ?>
            <p class="text-center">Please <a href="http://localhost:8080/code/users/index">sign in</a> first!</p>
           
            <?php endif ?>
        </main>
        <footer class="blog-footer mt-3">
            <p>© Copyright 2019 All rights reserved. Terms of Use, Privacy Notice & Cookies Policy</p>
            <p>
                <a href="#">Back to top</a>
            </p>
        </footer>



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
            Holder.addTheme('thumb', {
                bg: '#55595c',
                fg: '#eceeef',
                text: 'Thumbnail'
            });
        </script>
</body>
