<?php
 include('include/header.php');
?>
 <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Profile</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">My Profile</h1>
          </div>
        </div>
      </div>
    </div>

 <div style="margin-left:25%; width: 50%; border: 1px solid grey; padding: 10px;">
   <form action="profile_add.php" method="POST" id="profile_form" name="profile_form" enctype="multipart/form-data">
     <div class="row" >
      <div class="col md-6">
        <img src="images/icon.png" class="img-thumbnail" alt="Cinque Terre">
      </div>
      <div class="col md-4">
        <input type="file" class="form-control" name="img" id="img">
      </div>
     </div>
     <div style="margin-left: 20%;">
     <div class="row">
       <div class="col md-6">
         <td>Enter Your Name</td>
       </div>
       <div class="col md-6">
         <td><input type="text" name="name" id="name" class="form-group" placeholder="Enter your name"></td>
       </div>
       </div>
     <div class="row">
       <div class="col md-6">
         <td>Enter Your Date of Birth</td>
       </div>
       <div class="col md-6">
         <td><input type="Date" name="dob" id="dob" class="form-group" placeholder="Enter your name"></td>
       </div>
       </div>
     <div class="row">
       <div class="col md-6">
         <td>Enter Your Mobile Number</td>
       </div>
       <div class="col md-6">
         <td><input type="Number" name="number" id="number" class="form-group" placeholder="Enter your Mobile Number"></td>
       </div>
       </div>
     <div class="row">
       <div class="col md-6">
         <td>Enter Your Email</td>
       </div>
       <div class="col md-6">
         <td><input type="text" name="new_email" id="new_email" class="form-group" placeholder="Enter your Email"></td>
       </div>
       
     </div>
   <div class="form-group">
         <input type="submit" name="submit" class="btn btn-success" id="submit" value="Update" >
       </div>
   </div>
   </form>

 </div>
<br>
<?php
 include('include/footer.php');
?>
<!-- <script>
  $(document).ready(function(){
     $("#submit").click(function(){
       var data=$("#profile_form").serialize();

           $.ajax({
                 type:"POST",
                 url:"profile_add.php",
                 data:data,
                success:function(data){
                  alert(data);
                }

          });
  });
  });
</script> -->