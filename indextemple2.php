<?php
include("auth.php");
?>



<!DOCTYPE html>
<html>
<head>
   
<meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="css/style3.css" type="text/css">
     <link rel="stylesheet" href="css/style2.css" type="text/css">
      <link rel="stylesheet" href="css/styleslide.css" type="text/css">
    <style>
    .bg-img {
  /* The image used */
  background-image: url("images/back1.jpg");

  min-height: 475px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
    </style>
</head>
<body bgcolor="#FBFBFD">

    <div class="topnav">
    <a href="devotte.php">Devotee</a>
    <a href="staff.php">Staff</a>
    <a href="committee.php">Comitee</a>
  <a href="donation.php">Donations</a>
        <a href="sevasavailable.php">Sevas available</a>
		  <p align="right"> Welcome <?php echo $_SESSION['userid']; ?>    .</p>
		  <a class ="active" href="logout.php">logout</a>
  <a class="active" href="festival.php"->Festivals</a>
</div>
    
    <center><h2><font color="green">INFORMATION MANAGEMENT</font></h2></center>
<div class="bg-img">
  
    

    </div>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>






<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="images/back11.jpg" style="width:100%">
  <img class="mySlides" src="images/back3.jpg" style="width:100%">
  <img class="mySlides" src="images/back4.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>