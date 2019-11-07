
<?php
session_start();
$con = mysqli_connect('localhost','root');
 // if($con){
 // 	echo"connection";
 // }
 mysqli_select_db($con,'quizdb');

 error_reporting(0);
    if(isset($_POST['Submit'])){

      //   header("Location:home.php");
    //   header("location:quizworld/home.php");
   printf("<script>location.href='home.php'</script>");
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
  <body>

    <div class="container-fluid" style="font-family:verdana;">

      <div class="py-3" style="position:relative;">
        <?php
             $qwert=$_SESSION['usersession']['user_id'];

           $sql1 = "select * from userlogs  where user_id=".$qwert." ";
           //echo $sql1;
           //,attempt='".$checked_count."',score='".$Resultans."'
             $result1 = mysqli_query($con, $sql1);

             while($row12=mysqli_fetch_assoc($result1)){
               $no=$row12['total_question'];

                  $checked_count=$row12['attempt'];
               $Resultans=$row12['score'];

             //  echo $row12['re'];
             }
             if($no==-1){


             ?>
        <h2 class="d-block px-4 py-4 text-uppercase font-weight-bold"><legend style="position:absolute;left:25px;top:10px;font-size:50px;text-decoration: underline;">CareerTest Instructions</legend></h2>
      </div>
    </div>

    <div class="container font-weight-bold" style="font-family:verdana;">
      <div class="container-content">
        <h4 class="font-weight-bold">Please Read All The Instructions Carefully Before Attempting The Test.</h4>
        <div class="py-2">
          <span style="font-size:22px;">About The Exam</span>
          <ul>
            <li>The Time Period for Test is 20 Minutes.</li>
            <li>The exams consist of 15 General Questions.</li>
            <li>Each Question Carries 4 Marks.</li>
            <li>There is Negative Marking in the Test.</li>
            <li>For Each Wrong Answer 1 Marks will be Deducted.</li>
            <li>There is only one chance to Attempt The Test.</li>
            <li>No queries regarding test will be entertained later.</li>
          </ul>
        </div>
        <div class="py-2">
          <span style="font-size:22px;">General Instructions</span>
          <ul>
            <li>Please Make Sure To Allow Your Camera and Microphone on the device.</li>
            <li>Please donot bring any cheating stuff with you.</li>
            <li>In case if you caught then no another test will be entertained and student will mark 0.</li>
            <li>Make sure all the tabs will be closed before Attempting The Test.</li>
            <li>Donot Try to Open any Tab</li>
            <li>Attempt The Test in Full Screen Mode.</li>
          </ul>
        </div>
        <div class="py-2">
          <span style="font-size:22px;">Minimum Browser Requirements</span>
          <li>Internet Explorer 9, Firefox 1, or Google Chrome are required to log into the exam</li>
        </div>
        <div class="py-2">
          <span style="font-size:22px;">Support</span>
          <li>If you have any questions, please contact </li>
          <li>CareerKadam Education Department at: 888-263-7265</li>
          <li>Email us at: Education@KareerKadam.edu.</li>
        </div>
      </div>
      <div class="py-2">
        <form class="" action="" method="post">
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" name="checkbox" id="exampleCheck1" required>
            <label class="form-check-label" for="exampleCheck1">I have read all the instructions properly.</label>
          </div>
          <button type="submit" name="Submit" class="btn btn-block btn-primary m-0">Attempt Test</button>
        </form>
      </div>
    </div>
  <?php }
    else{
  ?>
  <br>
  <br>
  <br>
<center>   <h1> You have already attempted the exam</h1>  </center>
  <?php
}
   ?>
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
