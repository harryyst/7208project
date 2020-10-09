
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
    <link rel="stylesheet" href="https://infs3202-4d8d4229.uqcloud.net/code/css/profile.css" type="text/css" />
  </head>
  <body>
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
      <a class="btn btn-sm btn-outline-secondary" href="https://infs3202-4d8d4229.uqcloud.net/code/home/index">Back</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="https://infs3202-4d8d4229.uqcloud.net/code/home/index">Shop</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        
        <a class="btn btn-sm btn-outline-secondary nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">user</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="https://infs3202-4d8d4229.uqcloud.net/code/users/profile_detail">Profile</a>
                        <a class="dropdown-item" href="https://infs3202-4d8d4229.uqcloud.net/code/sell/index">Sell</a>
                        <a class="dropdown-item" href="https://infs3202-4d8d4229.uqcloud.net/code/users/logout">Log out</a>
                      </div>
      </div>
      
    </div>
  </header>
    
  <main role="main">
      <h1> Cart</h1>
        <div class="text-center">
            <?php
            foreach ($item as $i){
                $id         = $i->id;
                $itemname      = $i->itemname;
                $username    = $i->username;
            ?>
            <p class="align-items-center text-center"> <?php echo $itemname; ?></p>
            <a href="<?php echo base_url();?>cart/delete/<?php echo $itemname?>">Delete</a>
<hr>

<?php } ?>
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