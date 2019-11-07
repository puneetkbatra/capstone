 <?php
    session_start();
    if(!isset($_SESSION['usersession'])){
       header('location:Login.php');
    }
    else{
      if(isset($_POST['Submit'])){
            $oldpassword = $_POST['oldPassword'];
            $newpassword = $_POST['newPassword2'];
            $con = mysqli_connect('localhost','root','');
            mysqli_select_db($con,'careerkadam');
            $temp = $_SESSION['usersession'];
            $userid = $temp['user_id'];
            $s = " select userpass from userlogs where user_id = '$userid'";
            $result = mysqli_query($con,$s);
            $result = mysqli_fetch_assoc($result);
            if($result['userpass'] == $oldpassword){
               $s = "update userlogs set userpass = '$newpassword' where user_id = '$userid'";
               $result = mysqli_query($con,$s);
               echo "Password Change SuccessFully";
               session_destroy();
               header('location:Landingpage.php');
            }
            else{
               echo "Wrong Password";
            }
         }
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
       <div class="py-2 mx-3" style="position:relative;">
         <a class="d-block px-4 py-4 h2" href="Homepage.php"><legend style="position:absolute;left:30px;top:10px;font-size:50px;color:darkgrey;text-decoration: underline;color:white;">CareerKadam</legend></a>
       </div>
       <div class="container justify-content-center align-items-center w-50 py-4 px-4 mx-auto my-4 font-weight-bold" style="border-radius:16px;color:white;">
          <form action="#" method="post" oninput='newPassword2.setCustomValidity(newPassword2.value != newPassword1.value ? "Passwords do not match." : "")'>
            <fieldset class="border p-4" style="border-radius:16px;">
            <legend class="w-auto mx-4 font-weight-bold px-2" style="color:white;font-family:verdana;">Change Password</legend>
            <div class="form-group">
              <label for="exampleInputPassword1">Old Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="oldPassword" placeholder="Password" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword2">New Password</label>
              <input type="password" class="form-control" id="exampleInputPassword2" name="newPassword1" placeholder="Password" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword3">Confirm New Password</label>
              <input type="password" class="form-control" id="exampleInputPassword3" name="newPassword2" placeholder="Password" required>
            </div>
            <button type="submit" name="Submit" class="btn btn-primary">Change Password</button>
            </fieldset>
          </form>
       </div>
     </div>
     <script src="js/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </body>
 </html>
