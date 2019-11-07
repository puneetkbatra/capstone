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
      div.container{
          position: absolute;
          margin: auto;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
          width:auto;
          height:250px;
      }
      div.box:hover{
         opacity:0.8;
         border-radius: 16px;
         border:none;
      }
    </style>
  </head>
  <body style="background-color:#130f40;">
    <div class="m-4" style="position:relative;">
      <h2 class="d-block px-4 font-weight-bold"><legend style="position:absolute;left:125px;top:70px;font-size:4vw;text-decoration: underline;color:white;">Hello, I'm a</legend></h2>
    </div>
      <div class="container" style="border:2px solid white;padding:20px;border-radius:25px; border-top:none;">
        <div class="row">
          <div class="box col-sm bg-primary p-4 m-2" style="">
            <a  href="Studentdetails.php" class="text-center d-block m-2 p-4" style="text-decoration:none;">
              <div class="box-content">
                 <pre class="text  font-weight-bold" style="font-size:2.2vw;font-family:verdana;color:white;">  Student   </pre>
                 <small  class="font-weight-bold" style="color:white;font-family:verdana;">Currently Studying.</small>
              </div>
            </a>
          </div>
          <div class="box col-sm bg-primary p-4 m-2">
            <a  href="Professionaldetails.php" class="text-center d-block m-2 p-4"style="text-decoration:none;">
              <div class="box-content">
                 <pre class="text font-weight-bold" style="font-size:2.2vw;font-family:verdana;color:white;">Professional</pre>
                 <small  class="font-weight-bold" style="color:white;font-family:verdana;">Working Professional.</small>
              </div>
            </a>
          </div>
          <div class="box col-sm bg-primary p-4 m-2">
            <a  href="Counsellordetails.php" class="text-center d-block m-2 p-4"style="text-decoration:none;">
              <div class="box-content">
                 <pre class="text font-weight-bold" style="font-size:2.2vw;font-family:verdana;color:white;"> Counsellor </pre>
                 <small   class="font-weight-bold" style="color:white;font-family:verdana;">Join us as a Counsellor.</small>
              </div>
            </a>
          </div>
        </div>
      </div>
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
