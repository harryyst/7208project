<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tutorial 03 - CodeIgniter</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <nav class="px-4 py-3 bg-white border-bottom">
        <div class=row>
            <div class="col">
                <a class="btn btn-outline-dark" href="<?php echo base_url();?>">Homepage</a>
            </div>
            <div class="col text-right">
                <?php 
                    if (isset($_SESSION["email"])) {
                        echo '<a class="btn btn-outline-primary" href="' . base_url() .'users/logout">Sign out</a>';
                    } else {
                        echo '<a class="btn btn-outline-primary" href="'. base_url(). 'users/">Sign in</a>';
                    }
                ?>               
            </div>
        </div>
    </nav>

    <header class="my-5 text-center">
        <h1 class="mx-3">Web Information Systems</h1>
        <p>I hope you enjoy this course!</p>
    </header>