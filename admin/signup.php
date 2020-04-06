<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
<form action="admin_signup.php" method="POST">
  <div class="form-group">
  <?php  if(isset($_SESSION['message'])) {echo $_SESSION['message'];} 
          unset($_SESSION['message']);

    ?>
  <h5>admin signup</h5>
    <label for="email">Email address</label>
    <input type="email" class="form-control"   name="email" id="email" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
    
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>   
</body>
</html>