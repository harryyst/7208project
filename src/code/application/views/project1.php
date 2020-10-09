
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
    <link rel="stylesheet" href="https://infs3202-4d8d4229.uqcloud.net/code/css/style.css" type="text/css" />
</head>

<body>
    <header class="blog-header py-3">

        <div class="row flex-nowrap justify-content-between align-items-center ml-3">

            <div class="col">
                <a class="blog-header-logo text-dark float-left" href="#">Shopping</a>
            </div>


            <form class="form-inline my-2 my-md-0 hide-submit" method="POST" action="https://infs3202-4d8d4229.uqcloud.net/code/home/search">
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
                        <a class="dropdown-item" href="https://34.72.198.84:8080/code/cart/index">Cart</a>
                        <a class="dropdown-item" href="https://infs3202-4d8d4229.uqcloud.net/code/users/profile_detail">Profile</a>
                        <a class="dropdown-item" href="https://infs3202-4d8d4229.uqcloud.net/code/sell/index">Sell</a>
                        <a class="dropdown-item" href="https://infs3202-4d8d4229.uqcloud.net/code/map/index">My location</a>
                        <a class="dropdown-item" href="https://infs3202-4d8d4229.uqcloud.net/code/users/logout">Log out</a>
                        </div>
                        ';
                } else {
                  echo '<a class="btn btn-sm btn-outline-secondary" href="https://infs3202-4d8d4229.uqcloud.net/code/users">Login/Register</a>';
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

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>Advertisement</h1>
                            <p>Advertisement</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">More detail</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Advertisement</h1>
                            <p>Advertisement</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">More detail</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>Advertisement</h1>
                            <p>Advertisement</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">More detail</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <header>
            <h1>Top deals</h1>
        </header>
        <main role="main">


            <div class="album py-5 bg-light">
                <div class="container">
                <?php if (isset($_SESSION["email"])): ?>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="goods">
                                <div class="card-body">
                                    <p class="card-text">The detail of goods</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                        </div>
                                        <small class="text-muted">price:$1000</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="goods">
                                <div class="card-body">
                                    <p class="card-text">The detail of goods</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                        </div>
                                        <small class="text-muted">price:$1000</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="goods">
                                <div class="card-body">
                                    <p class="card-text">The detail of goods</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                        </div>
                                        <small class="text-muted">price:$1000</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="goods">
                                <div class="card-body">
                                    <p class="card-text">The detail of goods</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                        </div>
                                        <small class="text-muted">price:$1000</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="goods">
                                <div class="card-body">
                                    <p class="card-text">The detail of goods</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                        </div>
                                        <small class="text-muted">price:$1000</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="goods">
                                <div class="card-body">
                                    <p class="card-text">The detail of goods</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                        </div>
                                        <small class="text-muted">price:$1000</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="goods">
                                <div class="card-body">
                                    <p class="card-text">The detail of goods</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                        </div>
                                        <small class="text-muted">price:$1000</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="goods">
                                <div class="card-body">
                                    <p class="card-text">The detail of goods</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                        </div>
                                        <small class="text-muted">price:$1000</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="goods">
                                <div class="card-body">
                                    <p class="card-text">The detail of goods</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                        </div>
                                        <small class="text-muted">price:$1000</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php else: ?>
            <p class="text-center">Please <a href="https://infs3202-4d8d4229.uqcloud.net/code/users/index">sign in</a> first!</p>
            <?php endif ?>
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
        <script>
            Holder.addTheme('thumb', {
                bg: '#55595c',
                fg: '#eceeef',
                text: 'Thumbnail'
            });
        </script>
</body>
