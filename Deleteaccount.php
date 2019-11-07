<?php
   session_start();
   $con = mysqli_connect('localhost','root','');
   mysqli_select_db($con,'careerkadam');
   $temp = $_SESSION['usersession'];
   $userid = $temp['user_id'];
   echo $userid;
   $s = "delete from userlogs where user_id = '$userid'";
   $result = mysqli_query($con,$s);
   session_destroy();
   header('location:Landingpage.php');
 ?>
