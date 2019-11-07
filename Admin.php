<?php
    session_start();
    if(!isset($_SESSION['adminsession'])){
       header('location:Adminlogin.php');
    }
    else{
        $key = $_SESSION['adminsession'];
        $name = $key['a_firstname'];
    }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CareerKadam Admin Dashboard</title>
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
      <a class="navbar-brand text-uppercase font-weight-bold" style="font-size:3vw;" href="Admin.php">CareerKadam</a>
      <ul class="nav nav-pills">
        <li class="nav-item dropdown bg-light">
          <a class="nav-link dropdown-toggle font-weight-bold text-capitalize" style="color:#2c3e50;margin-right:35px;font-size:20px;font-family:verdana;" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Admin <?php echo $name; ?>!</a>
          <div class="dropdown-menu p-0 bg-light">
            <a class="dropdown-item" href="#">View Profile</a>
            <a class="dropdown-item" href="#">Edit Profile</a>
            <a class="dropdown-item" href="Acp.php">Change Password</a>
            <a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter" >Delete Account</a>
            <div class="dropdown-divider p-0 m-0"></div>
            <a class="dropdown-item" href="Alogout.php">Logout</a>
          </div>
      </li>
      </ul>
    </nav>
    <!--- Modal Delete Account -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content bg-dark" style="color:white;font-family:verdana;">
          <div class="modal-header">
            <h5 class="modal-title font-weight-bold" id="exampleModalCenterTitle">Delete Account</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">This will Permanently Delete your Account. You aren't able to LogIn.</div>
          <div class="modal-footer">
            <a class="btn btn-secondary" data-dismiss="modal">Keep My Account</a>
            <a class="btn btn-primary" href="Ada.php">Delete Account</a>
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark m-0 p-0">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item A px-3  py-1 ">
            <a class="nav-link font-weight-bold" style="color:white;" href="Admin.php">Admin Dashboard</a>
          </li>
          <li class="nav-item A px-3  py-1 ">
            <a class="nav-link font-weight-bold" style="color:white;" href="#">Host Test</a>
          </li>
          <li class="nav-item A px-3  py-1 ">
            <a class="nav-link font-weight-bold" style="color:white;" href="#" tabindex="-1" aria-disabled="true">Permissions</a>
          </li>
          <li class="nav-item A px-3  py-1 ">
            <a class="nav-link font-weight-bold" style="color:white;" href="#" tabindex="-1" aria-disabled="true">Format API</a>
          </li>
          <li class="nav-item A px-3 py-1 ">
            <a class="nav-link font-weight-bold" style="color:white;" href="#" tabindex="-1" aria-disabled="true">My Jobs</a>
          </li>
          <li class="nav-item A px-3  py-1 ">
            <a class="nav-link font-weight-bold" style="color:white;" href="#" tabindex="-1" aria-disabled="true">Learnings</a>
          </li>
          <li class="nav-item A px-3  py-1 ">
            <a class="nav-link font-weight-bold" style="color:white;" href="#">Discussion Forum</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0 px-4">
          <input class="form-control mr-sm-2" type="search" placeholder="Search Here..." aria-label="Search">
          <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <h1>Welcome Admin</h1>
    <div class="navbar navbar-light text-center" style="background-color:#dfe4ea;">
      <h6 class="d-block w-100 mx-auto my-4 px-4">CopyRight &copy; CareerKadam.com 2019</h6>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
