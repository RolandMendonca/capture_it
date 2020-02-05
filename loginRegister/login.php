<?php

 session_start();

 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin for Job Seekers</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="scss/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
   
    <form class="form-signin" action="jobseeker_login.php" method="Post" >
      <img class="mb-4" src="admin/img/logo.png" alt="" width="200" height="100">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required>
      <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" placeholder="Sign-In">
      <a href="../signup/signup.php">Create an Account</a>
      <p class="mt-5 mb-3 text-muted">&copy; 2019-2020</p>
    </div>
    </form>
    
  </body>
</html>
 
<?php
include('../database/dbconfig.php');

if(isset($_POST['submit'])) {
  $email=$_POST['email'];
  $pass=$_POST['pass'];

  $query=mysqli_query($con, "select * from admin where a_email='$email' and a_pass='$pass' ");
  
  if($query)
   {
  if(mysqli_num_rows($query)>0) 
    {
   echo $_SESSION['email']=$email;
   header('../index.php');
    }
else{
   echo "<script>alert('Email or password is incorrect, Please try again')</script>"; 
}
} 
}

if(isset($_POST['submit'])) {
  $email=$_POST['email'];
  $pass=$_POST['pass'];

  $query=mysqli_query($con, "select * from client where c_email='$email' and c_pass='$pass' ");
  
  if($query)
   {
  if(mysqli_num_rows($query)>0) 
    {
   echo $_SESSION['email']=$email;
   header('../index.php');
    }
else{
   echo "<script>alert('Email or password is incorrect, Please try again')</script>"; 
}
} 
}
?>