<?php
    session_start();
    if(!isset($_SESSION['usersession'])){
       header('location:Login.php');
    }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CareerKadam</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style media="screen">
      li.A:hover{
        background-color: grey;
        border-right:2px solid darkgray;
        border-left:2px solid darkgray;
        font-size:1.3vw;
      }

    #navbar-example2 li{
       padding:0;
       margin:0;
    }

    #navbar-example2 li a:hover{
       background-color: #263238 !important;
       color:white !important;
       font-weight: bold;
       border-bottom: 2px solid green;
    }
    </style>
  </head>
  <body>
    <nav id="navbar-example2" class="navbar navbar-light bg-light">
      <a class="navbar-brand text-uppercase font-weight-bold" style="font-size:3vw;" href="Homepage.php">CareerKadam</a>
      <ul class="nav nav-pills">
        <li class="nav-item dropdown bg-light">
          <a class="nav-link dropdown-toggle font-weight-bold" style="color:#2c3e50;margin-right:35px;font-size:20px;" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Welcome Krishna !</a>
          <div class="dropdown-menu p-0 bg-light">
            <a class="dropdown-item" href="#">View Profile</a>
            <a class="dropdown-item" href="#">Edit Profile</a>
            <a class="dropdown-item" href="#">Change Password</a>
            <a class="dropdown-item" href="#">Delete Account</a>
            <a class="dropdown-item" href="#">Notifications</a>
            <div class="dropdown-divider p-0 m-0"></div>
            <a class="dropdown-item" href="Logout.php">Logout</a>
          </div>
      </li>
      </ul>
    </nav>

    <h1>Welcome <?php $_SESSION['usersession']; ?></h1>
    <div class="navbar navbar-light text-center" style="background-color:#dfe4ea;">
      <h6 class="d-block w-100 mx-auto my-4 px-4">CopyRight &copy; CareerKadam.com 2019</h6>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
