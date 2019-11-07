
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
       if($no!=-1){


       ?>
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
           	<td>
                  Out of <?php echo $no ?>, You have attempt <?php echo $checked_count ?> option
                </td>
                <tr>
                  <td>
                    Your Total score
                  </td>
                  <td colspan="2">
                    Your score is <?php echo  $Resultans ?>;
                  </td>
                  </tr>
                  </table>
                </div>
              <?php }
                else{
              ?>
              <br>
              <br>
              <br>
            <center>   <h1> You have not attempted any exam</h1>  </center>
              <?php
            }
               ?>
             </body>
          </html>
