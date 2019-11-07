<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CareerKadam</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="lp.css">
  </head>
  <body style="background-color:#130f40;">
    <div class="" style="position:relative;">
     <h2 class="d-block px-4 py-4 "><legend style="position:absolute;left:30px;top:10px;font-size:50px;color:darkgrey;text-decoration: underline;">CareerKadam</legend></h2>
    </div>
    <div id="registration" class="container justify-content-center align-items-center w-50  py-4 px-4 mx-auto my-4" style="border-radius:16px;background-color:#30336b;">
      <form class="d-block" action="connect.php" method="post"  oninput='pass2.setCustomValidity(pass2.value != pass1.value ? "Passwords do not match." : "")'>
        <fieldset class="border p-4" style="border-radius:16px;">
          <legend class="w-auto mx-4 font-weight-bold px-2" style="color:white;font-family:verdana;">Hello User..!</legend>
          <div class="form-group">
            <label for="firstname">FirstName</label>
            <input type="text" name = "firstName" class="form-control text-capitalize" id="firstname" aria-describedby="firstname" placeholder="Ex:- Robert" required>
          </div>
          <div class="form-group">
            <label for="lastname">LastName</label>
            <input type="text" name = "lastName" class="form-control text-capitalize" id="lastname" aria-describedby="firstname" placeholder="Ex:- Drowney Jr." required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name = "userEmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" abc@xyz.com" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name = "pass1" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword2">Confirm Password</label>
            <input type="password" name="pass2" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
          </div>
          <button type="submit" class="btn btn-primary">Create Account</button>
          <p style="padding:1px; margin:1.5px;font-size:12px;"><a href="Login.php">Alreay have Account. Please Login here..</a></p>
        </fieldset>
      </form>
    </div>
  </body>
</html>
