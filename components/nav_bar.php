<?php include('./server/server.php') ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Joy Life</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/half-slider.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Joy Life</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <?php 
              if (isset($_SESSION['loggedIn'])) {
                ?>
                  <li class="nav-item">
                    <a class="nav-link" href="events.php">Events</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="bookings.php">Bookings</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="logout.php">Log Out</a>
                    </li>
               <?php   
              }
            ?>
            
             <?php 
              if (!isset($_SESSION['loggedIn'])) {
                ?>
                    <li class="nav-item">
                <a class="nav-link" href="auth.php">Sign In</a>
              </li>
               <?php   
              }
            ?>
           
            
          </ul>
        </div>
      </div>
    </nav>
