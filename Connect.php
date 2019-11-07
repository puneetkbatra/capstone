<?php
    session_start();
    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,'careerkadam');
    $first = $_POST['firstName'];
    $second = $_POST['lastName'];
    $email = $_POST['userEmail'];
    $pass = $_POST['pass2'];
    $s = " select * from userlogs where useremail = '$email' ";
    $result = mysqli_query($con,$s);
    $num = mysqli_num_rows($result);
    $result = mysqli_fetch_assoc($result);
    if($num == 1){
      echo "Email Already Registered.";
      header('location:Login.php');
    }
    else{
       $reg = "insert into userlogs (firstname,lastname,useremail,userpass) values('$first', '$second' , '$email' , '$pass')";
       mysqli_query($con,$reg);
       echo "Registration Successful.";
       $s = " select * from userlogs where useremail = '$email' ";
       $result = mysqli_query($con,$s);
       $result = mysqli_fetch_assoc($result);
       $_SESSION['usersession'] = $result;
       header('location:Midpage.php');
    }
?>
