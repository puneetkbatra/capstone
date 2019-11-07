<?php
     if(isset($_POST['Submit'])){
           $email = $_POST['e_mail'];
           $newpassword = $_POST['newPassword2'];
           $con = mysqli_connect('localhost','root','');
           mysqli_select_db($con,'careerkadam');
           $s = " select user_id from userlogs where useremail = '$email'";
           $result = mysqli_query($con,$s);
           $num = mysqli_num_rows($result);
           $result = mysqli_fetch_assoc($result);
           $userid = $result['user_id'];
           if($num == 1){
             $s = "update userlogs set userpass = '$newpassword' where user_id = '$userid'";
             $result = mysqli_query($con,$s);
             echo "Password Change SuccessFully";
             header('location:Login.php');
           }
           else{
              echo "Wrong Credentails";
              header('location:Forget.php');
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
  </head>
  <body style="background-color:#130f40;">
    <div class="py-2 mx-3" style="position:relative;">
      <h2 class="d-block px-4 py-4"><legend style="position:absolute;left:30px;top:10px;font-size:50px;color:darkgrey;text-decoration: underline;">CareerKadam</legend></h2>
    </div>
    <div class="container justify-content-center align-items-center w-50 py-4 px-4 mx-auto my-4" style="border-radius:16px;background-color:#30336b;">
       <form action="#" method="post" oninput='newPassword2.setCustomValidity(newPassword2.value != newPassword1.value ? "Passwords do not match." : "")'>
         <fieldset class="border p-4" style="border-radius:16px;">
         <legend class="w-auto mx-4 font-weight-bold px-2" style="color:white;font-family:verdana;">Forgot Password</legend>
         <div class="form-group">
           <label for="Email">Email</label>
           <input type="email" class="form-control" id="Email" name="e_mail" placeholder="abc@xyz.com" required>
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
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
