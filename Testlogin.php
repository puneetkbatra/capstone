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
     *{
       box-sizing: border-box;
      }
      body,html{
        height: 100%;
        margin: 0;
        padding: 0;
      }
      .bg-image{
         margin:0;
         padding:0;
         background-image: url("images/back.jpg");
         height: 100%;
         background-position:center center;
         background-repeat: no-repeat;
         background-size: cover;
         background-attachment: fixed;
         filter: blur(3px);
      }
      .container-fluid{
        margin: 0;
        padding:0;
        position: absolute;
        top: 50%;
        left:50%;
        transform: translate(-50%,-50%);
        z-index: 5;
        background-color: rgba(38,50,56,0.2);
      }
      .container{
        background-color: rgba(38,50,56,0.7);
      }
    </style>
  </head>
  <body>
      <div class="bg-image"></div>
      <div class="container-fluid">
        <div class="py-3" style="position:relative;">
          <h2 class="d-block px-4 py-4"><legend style="position:absolute;left:30px;top:10px;font-size:50px;text-decoration: underline;color:white;">Test Login</legend></h2>
        </div>
        <div id="registration" class="container justify-content-center align-items-center w-50 py-4 px-4 mx-auto my-4" style="border-radius:16px;color:white;">
          <form class="d-block" action="Test.php" method="post">
            <fieldset class="border p-4" style="border-radius:16px;">
              <legend class="w-auto mx-4 px-2 font-weight-bold" style="font-family:verdana;">Test Login</legend>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="userEmail" class="form-control" id="exampleInputEmail1" value="" aria-describedby="emailHelp" placeholder=" abc@xyz.com" required>
                <span class="help-block"></span>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="userPass" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                <span class="help-block"></span>
              </div>
              <button type="submit" class="btn btn-primary" style="width:100px;">Login</button>
              <p style="padding:1px; margin:1.5px;font-size:12px;"><a href="Forget.php">Forgot Password</a></p>
              <p style="padding:1px; margin:1.5px;font-size:12px;"><a href="Signup.php">Create New Account</a></p>
            </fieldset>
          </form>
        </div>
      </div>
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
