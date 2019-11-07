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
      body{
        background-image: url("images/adminbackground.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
      }
      input::placeholder{
        color:white !important;
        font-weight: bold;
        text-transform: capitalize;
        opacity: 1;
      }
    </style>
  </head>
  <body >
    <div class="container">
      <form action="Adminvalidation.php" method="post" style="height:600px;color:white;font-family:verdana;padding-top:200px;font-weight:bold;">
        <fieldset class="border p-4" style="width:35%;border-radius:16px;">
           <legend class="px-4">Admin Login</legend>
           <div class="form-group">
             <label for="adName"></label>
             <input type="text" class="form-control" name="adName" style="background-color:rgba(0,0,0,0);color:white;" id="adName" placeholder="Admin Name" required>
           </div>
          <div class="form-group">
            <input type="password" class="form-control" name="adPass" style="background-color:rgba(0,0,0,0);color:white;" id="passKey" placeholder="Admin PassKey" required>
          </div>
          <button type="submit" class="btn btn-primary btn-block btn-sm" style="font-weight:bold;">Access Account</button>
        </fieldset>
      </form>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
