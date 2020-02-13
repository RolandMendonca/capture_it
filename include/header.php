<?php
session_start();
error_reporting(0);
 include('..database/dbconfig.php');
 $query=mysqli_query($con,"select * from admin");

?>

<!DOCTYPE html>
<html lang="en">

<head>
   
     <style>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </style>
    
</head>

<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid ">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="index1.html">
                                    <img src="img/logoo.png" alt="" height="130" width="230">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.php">home</a></li>
                                        <li><a href="#">Categories<i class="ti-angle-down"></i></a>
                                            <ul class="submenu">

                                                <li><a href="./Categories/Listings.html">Photography</a></li>
                                                <li><a href="./Categories/elements.html">Videography</a></li>
                                                <li><a href="./Categories/single_listings.html">Arial</a></li>
                                            </ul>
                                        </li>


                                        <li><a href="about.php">about</a></li>

                                        <li><a href="#">Gallery <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="./Gallery/blog.html">Photography</a></li>
                                                <li><a href="./Gallery/single-blog.html">Videography</a></li>
                                                <li><a href="./Gallery/single-blog.html">Arial view</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#Contact">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">

 <?php 
              if (isset($_SESSION['email'])==true) { ?>
                 <li class="nav-item cta mr-md-2"><a href="../loginRegister/login.php" class="nav-link"><?php echo $_SESSION['email']; ?></a></li>
                 <li class="nav-item">
                  <div class="dropdown">
                    <img src="images/icon.png" alt="Avatar" class="avatar" >
                    <ul class="dropdown-menu">
                     <li class="nav-item"><a href="my_profile.php">My Profile</a></li>                      
                     <li class="nav-item"><a href="logout.php">LogOut</a></li>               
                    </ul>
                  </div>
                 </li>
             <?php }else{ ?>
                 
                     <li class="nav-item cta mr-md-2"><a href="jobseeker_login.php" class="nav-link">Login</a></li>
             <?php 
             }
            ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- header-end -->

</html>
