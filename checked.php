<?php
session_start();

   $con = mysqli_connect('localhost','root');
   	// if($con){
   	// 	echo"connection";
   	// }
   	mysqli_select_db($con,'quizdb');

    error_reporting(0);
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>
function nextpage(){
  window.location.href="../Homepage.php";
}
</script>
<style type="text/css">
	.animateuse{
			animation: leelaanimate 0.5s infinite;
		}

@keyframes leelaanimate{
			0% { color: red },
			10% { color: yellow },
			20%{ color: blue }
			40% {color: green },
			50% { color: pink }
			60% { color: orange },
			80% {  color: black },
			100% {  color: brown }
		}
</style>

   </head>
   <body>
     <div class="container text-center" >
     	<br><br>
    	<h1 class="text-center text-success text-uppercase animateuse" > CAREERKADAM QUIZ</h1>
    	<br><br><br><br>
      <table class="table text-center table-bordered table-hover">
      	<tr>
      		<th colspan="2" class="bg-dark"> <h1 class="text-white"> Results </h1></th>

      	</tr>
      	<tr>
		      	<td>
		      		Questions Attempted
		      	</td>

	         <?php
         $counter = 0;
         $Resultans = 0;
            if(isset($_POST['submit'])){
            if(!empty($_POST['quizcheck'])) {
            // Counting number of checked checkboxes.
            $checked_count = count($_POST['quizcheck']);
            // print_r($_POST);
            ?>

        	<td>
            <?php
            $sql1 = "SELECT count(*) as re  FROM `questions` where test_tag=1 ";
              $result1 = mysqli_query($con, $sql1);
              $no=5;
              while($row12=mysqli_fetch_assoc($result1)){
                $no=$row12['re'];
              //  echo $row12['re'];
              }
            echo "Out of ".$no.", You have attempt ".$checked_count." option."; ?>
            </td>


            <?php
            // Loop to store and display values of individual checked checkbox.
            $selected = $_POST['quizcheck'];
          //  print_r ($_POST['quizcheck']);

            $q1= " select ans from questions ";
            $ansresults = mysqli_query($con,$q1);
            $i = 1;
            while($rows = mysqli_fetch_array($ansresults)) {
              // print_r($rows);
              // echo "hello";
              // echo $rows['ans'];
              // echo $selected[$i];
            	$flag = $rows['ans'] == $selected[$i];
              // echo $flag;
            			if($flag){
            				// echo "correct ans is ".$rows['ans']."<br>";
            				$counter++;
            				$Resultans++;
            				// echo "Well Done! your ". $counter ." answer is correct <br><br>";
            			}else{
            				$counter++;
            				// echo "Sorry! your ". $counter ." answer is innncorrect <br><br>";
            			}
            		$i++;
            	}
            	?>


    		<tr>
    			<td>
    				Your Total score
    			</td>
    			<td colspan="2">
	    	<?php
	            echo " Your score is ". $Resultans.".";
                $qwert=$_SESSION['usersession']['user_id'];
              $sql1 = "update userlogs set total_question=".$no.",attempt=".$checked_count.",score=".$Resultans." where user_id=".$qwert." ";
              echo $sql1;
              //,attempt='".$checked_count."',score='".$Resultans."'
                $result1 = mysqli_query($con, $sql1);

                while($row12=mysqli_fetch_assoc($result1)){
                  $no=$row12['re'];
                //  echo $row12['re'];
                }

	            }
	            else{
	            echo "<b>Please Select Atleast One Option.</b>";
	            }
	            }
          //    header("Location: popup.php");
	          ?>
	          </td>
            </tr>

            <?php

            $name = $_SESSION['username'];
            $finalresult = " insert into usersession(name,u_q_id, u_a_id) values ('$name','5','$Resultans') ";
            $queryresult= mysqli_query($con,$finalresult);
            // if($queryresult){
            // 	echo "successssss";
            // }
            ?>


      </table>

      	<!-- <a href="\Homepage.php" class="btn btn-success"> HOME </a> -->
        <!-- <button class="btn btn-success" name='submit' id='submit' onclick="nextpage()"> HOME </button> -->
        <?php
         header("Location:popup.php");


         ?>
      </div>
   </body>
</html>












<!--

<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}

 $con = mysqli_connect('localhost','root');
    if($con){
      echo"connection";
    }

    mysqli_select_db($con,'quizdatabases');


    if(isset($_POST['submit'])){

      if(!empty($_POST['quizcheck'])){

        $count = count($_POST['quizcheck']);
          echo "you count is". $count;

          $selected = $_POST['quizcheck'];
          print_r($selected);

          $q = " select * from question ";
          $query = mysqli_query($con,$q);

          $result = 0;
          $i = 1;
          while ( $rows = mysqli_fetch_array($query)) {

              print_r($rows['ans_id']);

              $stored  = $rows['ans_id'] == $selected[$i];

              if($stored){

                $result++;

              }

              $i++;

          }

          echo $result;

      }

    }


?> -->
