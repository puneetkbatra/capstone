<?php
    session_start();
    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,'quizdb');
    $email = $_POST['useremail'];
    $pass = $_POST['userpass'];
    $s = " select * from userlogs where useremail = '$email' && userpass = '$pass'";
    $result = mysqli_query($con,$s);
    $num = mysqli_num_rows($result);
    $result = mysqli_fetch_assoc($result);
    if($num == 1){
       $_SESSION['usersession'] = $result;
       $_SESSION['username']=$_SESSION['usersession']['firstname'];
       header('location:Homepage.php');
    }
    else{
       header('location:Login.php');
    }
?>
