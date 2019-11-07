<?php
    session_start();
    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,'careerkadam');
    $username = $_POST['adName'];
    $password = $_POST['adPass'];
    $s = "select * from adminlogs where a_name = '$username' && a_pass = '$password'";
    $result = mysqli_query($con,$s);
    $num = mysqli_num_rows($result);
    $result = mysqli_fetch_assoc($result);
    if($num == 1){
       $_SESSION['adminsession'] = $result;
       header('location:Admin.php');
    }
    else{
       header('location:Adminlogin.php');
    }
?>
