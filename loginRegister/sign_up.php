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
    <form class="form-signin" action="sign_up.php" method="POST" >
      <img class="mb-4" src="admin/img/logo.png" alt="" width="200" height="100">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="email" name="email" class="form-control" placeholder="Email address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required autofocus>

      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>

      <label for="inputFirstName" class="sr-only">First Name</label>
      <input type="first_name" id="first_name" class="form-control" placeholder="Enter First Name" required autofocus name="first_name">

      <label for="inputLastName" class="sr-only">Last Name</label>
      <input type="last_name" id="last_name" class="form-control" placeholder="Enter Last Name" required autofocus name="last_name">

      <label for="inputMobileNumber" class="sr-only">Mobile Number</label>
      <input type="Number" id="mobile_number" class="form-control" name="mobile_number" placeholder="Enter Mobile Number" required autofocus>

      <label for="inputDOB" class="sr-only">Date of Birth</label>
      <input type="Date" id="dob" class="form-control" name="dob" placeholder="Enter Date of Birth" required autofocus>
      <br>
      </div>
      <input type="submit" class="btn btn-lg btn-primary btn-block" name="Submit" value="Sign Up">
      <a href="jobseeker_login.php">Already have an account</a>
      <p class="mt-5 mb-3 text-muted">&copy; 2019-2020</p>
    </form>
  </body>
</html>

<?php

 include('connection/db.php');
 if(isset($_POST['Submit'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   $first_name=$_POST['first_name'];
   $last_name=$_POST['last_name'];
   $dob=$_POST['dob'];
   $mobile_number=$_POST['mobile_number'];
   

   $query=mysqli_query($con,"insert into jobseeker(email,password,first_name,last_name,dob,mobile_number)values('$email','$password','$first_name','$last_name','$dob','$mobile_number')");
   if ($query) {
      echo '<script language="javascript">';
      echo 'alert("Now You can Login")';
      echo '</script>';
      header('location:jobseeker_login.php');
}else{
      echo '<script language="javascript">';
      echo 'alert("Sorry!! Try Again")';
      echo '</script>';
 }
}

?>