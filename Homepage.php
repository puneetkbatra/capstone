
    <?php
    session_start();

       $con = mysqli_connect('localhost','root');
       	// if($con){
       	// 	echo"connection";
       	// }
       	mysqli_select_db($con,'quizdb');

        error_reporting(0);

    // echo    $_SESSION['usersession']['user_id'];

    if(!isset($_SESSION['usersession'])){
       header('location:Login.php');
    }
    else{
        $key = $_SESSION['usersession'];
        $name = $key['firstname'];
        $lname = $key['lastname'];
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
      li.A:hover{
        background-color: grey;
        border-right:2px solid darkgray;
        border-left:2px solid darkgray;
        font-size:1.3vw;
      }

    #navbar-example2 li{
       padding:0;
       margin:0;
    }

    #navbar-example2 li a:hover{
       background-color: #263238 !important;
       color:white !important;
       font-weight: bold;
       border-bottom: 2px solid green;
    }
    </style>
  </head>
  <body>
    <nav id="navbar-example2" class="navbar navbar-light bg-light">
      <a class="navbar-brand text-uppercase font-weight-bold" style="font-size:3vw;" href="Homepage.php">CareerKadam</a>
      <ul class="nav nav-pills">
        <li class="nav-item dropdown bg-light">
          <a class="nav-link dropdown-toggle font-weight-bold text-capitalize" style="color:#2c3e50;margin-right:35px;font-size:20px;font-family:verdana;" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Welcome <?php echo $name; ?>!</a>
          <div class="dropdown-menu p-0 bg-light">
            <a class="dropdown-item" href="#">Edit Profile</a>
            <a class="dropdown-item" href="Changepassword.php">Change Password</a>
            <a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter">Delete Account</a>
            <div class="dropdown-divider p-0 m-0"></div>
            <a class="dropdown-item" href="Logout.php">Logout</a>
          </div>
      </li>
      </ul>
    </nav>
    <!--- Modal Delete Account -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content bg-dark" style="color:white;font-family:verdana;">
          <div class="modal-header">
            <h5 class="modal-title font-weight-bold" id="exampleModalCenterTitle">Delete Account</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">This will Permanently Delete your Account. Are you sure?.</div>
          <div class="modal-footer">
            <a class="btn btn-secondary" data-dismiss="modal">Keep My Account</a>
            <a class="btn btn-primary" href="DeleteAccount.php">Delete Account</a>
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark m-0 p-0">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item A px-3  py-1 ">
            <a class="nav-link font-weight-bold" style="color:white;" href="Homepage.php">Dashboard</a>
          </li>
          <li class="nav-item A px-3  py-1 ">
            <a class="nav-link font-weight-bold" style="color:white;" href="quizworld\index.php" tabindex="-1" aria-disabled="true">  <?php
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
                     echo "Tests Pending";
                   }
                   else{
                     echo "Tests Attempted";
                   }
                   ?></a>
          </li>
          <li class="nav-item A px-3  py-1 ">
            <a class="nav-link font-weight-bold" style="color:white;" href="viewscore.php" tabindex="-1" aria-disabled="true">Score Report</a>
          </li>
          <li class="nav-item A px-3  py-1 ">
            <a class="nav-link font-weight-bold" style="color:white;" href="#">My Counsellor</a>
          </li>
          <li class="nav-item A px-3 py-1 ">
            <a class="nav-link font-weight-bold" style="color:white;" href="#" tabindex="-1" aria-disabled="true">My Jobs</a>
          </li>
          <li class="nav-item A px-3  py-1 ">
            <a class="nav-link font-weight-bold" style="color:white;" href="#" tabindex="-1" aria-disabled="true">Learnings</a>
          </li>
          <li class="nav-item A px-3  py-1 ">
            <a class="nav-link font-weight-bold" style="color:white;" href="#">Opportunities</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0 px-4">
          <input class="form-control mr-sm-2" type="search" placeholder="Search Here..." aria-label="Search">
          <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <div class="container-fluid bg-light" style="margin-top:0.5px;">
      <div class="row">
        <div class="col-3 bg-dark">
          <div class="py-4">
            <p class="font-weight-bold text-center" style="color:white;font-size:20px;text-decoration:underline;font-family:verdana;">User Profile</p>
            <div class="profile-wrapper">
              <div class="card" style="border:1px solid #2c3e50;">
                <div class="card-body ">
                  <h5 class="card-title user-name text-center font-weight-bold" style="font-size:20px;font-family:verdana;"> <?php echo $name; ?> </h5>
                  <h6 class="card-subtitle mb-2 text-center">Student</h6>
                  <p class="card-text text-center">Lovely Professional University</p>
                  <a href="#" class="btn btn-success card-link">View Profile</a>
                  <a href="#" class="btn btn-success card-link">See Report</a>
                </div>
              </div>
              <div class="card bg-dark" style="border:none !important;">
                <div class="card-body ">
                  <h5 class="card-title user-name text-center font-weight-bold" style="font-size:20px;font-family:verdana;"> <?php echo $name; ?> </h5>
                  <h6 class="card-subtitle mb-2 text-center">Student</h6>
                  <p class="card-text text-center">Lovely Professional University</p>
                  <ul class="card-link" style="list-style-type:none;">
                    <li class="py-1"><a href="#" class="btn btn-success btn-block card-link">Check Score</a></li>
                    <li class="py-1"><a href="#" class="btn btn-success btn-block card-link">Check Score</a></li>
                    <li class="py-1"><a href="#" class="btn btn-success btn-block card-link">Check Score</a></li>
                    <li class="py-1"><a href="#" class="btn btn-success btn-block card-link">Check Score</a></li>
                    <li class="py-1"><a href="#" class="btn btn-success btn-block card-link">Check Score</a></li>
                  </ul>
                </div>
              </div>
              <div class="card m-2" style="border:1px solid #2c3e50;">
                <div class="card-body ">
                  <h5 class="card-title user-name text-center font-weight-bold" style="font-size:20px;font-family:verdana;"> S.S.C. Result </h5>
                  <h6 class="card-subtitle mb-2 text-center">Percent/Cgpa</h6>
                  <p class="card-text text-center font-weight-bold" style="font-size:25px;">86.63%</p>
                </div>
              </div>
              <div class="card m-2" style="border:1px solid #2c3e50;">
                <div class="card-body ">
                  <h5 class="card-title user-name text-center font-weight-bold" style="font-size:20px;font-family:verdana;"> H.S.C. Result </h5>
                  <h6 class="card-subtitle mb-2 text-center">Percent/Cgpa</h6>
                  <p class="card-text text-center font-weight-bold" style="font-size:25px;">85.80%</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-9 bg-dark py-3">
          <p class="font-weight-bold py-1" style="font-size:20px;color:white;text-decoration:underline;font-family:verdana;">Recent Activities</p>
          <div class="card">
            <div class="card-title m-2 p-2 font-weight-bold" style="font-size:20px;text-decoration:underline;">Recent Jobs Eligibility</div>
            <div class="card-body">
                <p>These jobs are shown to you based on your assessment score.</p>
                <p>According to your numerical ability,grammatical and basics understanding we have given you some shortlisted jobs.</p>
                <button type="button" class="btn btn-success btn-block" name="button">View Jobs</button>
              </div>
          </div>
          <div class="card my-4">
            <div class="card-title m-2 p-2 font-weight-bold" style="font-size:20px;text-decoration:underline;">Career Score</div>
            <div class="card-body">
                <p>The career score is totaly based on your performance in assessment module.</p>
                <p>Scores will be published right after you will give the assessment and each question has some weightage which will be used to shortlist jobs profile that suits you.</p>
                <button type="button" class="btn btn-success btn-block" name="button">View Score</button>
            </div>
          </div>
          <div class="card my-4">
            <div class="card-title m-2 p-2 font-weight-bold" style="font-size:20px;text-decoration:underline;">College Directories</div>
            <div class="card-body">
                <p>We have narrowed down some colleges name as a list which are great in reputation,academics,placements and their co-curricular activities too. </p>
                <p>Select any college from the list and that will take you to their official websites where you can simply go through each and every detail.</p>
                <button type="button" class="btn btn-success btn-block" name="button">View Colleges</button>
            </div>
          </div>
          <div class="card my-4">
            <div class="card-title m-2 p-2 font-weight-bold" style="font-size:20px;text-decoration:underline;">Counsellor</div>
            <div class="card-body">
                <p>Counselor is a person who is specifically trained to provide advice, or a person you turn to for advice. An example of counselor is a professional who you go to in order to talk about your problems and to learn solutions for coping with your career issues.</p>
                <p>We have chosen some counsellors based on your area. You can select any one of them as your counsellor and visit them personally or chat with them.</p>
                <button type="button" class="btn btn-success btn-block" name="button">View Counsellor</button>
            </div>
          </div>
        </div>
        </div>
      </div>

    <div class="navbar navbar-light text-center" style="background-color:#dfe4ea;">
      <h6 class="d-block w-100 mx-auto my-4 px-4">CopyRight &copy; CareerKadam.com 2019</h6>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
