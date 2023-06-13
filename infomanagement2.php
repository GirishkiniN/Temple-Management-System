<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: "Lato", sans-serif;
}

/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
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
<body bgcolor="ff8000"></body>

</style>
</head>
<body>

<div class="sidenav">
  <a href="#about">HOME</a>
  <a href="devotte.php">Devotee</a>
  <a href="staff.php">Staff</a>
  <a href="committee.php">Comitee</a>
  <a href="donation.php">Donations</a>
  <a href="sevasavailable.php">Sevas available</a>
  <a href="festival.php">Festivals</a>

</div>
<center><h1><font color="green"><b>INFORMATION MANAGEMENT</b></font></h2></center>
<div class="bg-img">


<div class="main">
  <h2>about temple management</h2>
  <p>Temple Management Package is a highly scalable product for Hindu Temples.</p>
  <p>Temple Management solution is bundled with an excellent accounting package which enables easy operation and efficient reporting. It's available with internet support to allow devotees to make online offerings, pooja bookings, and many more useful features.</p>
  <p>It offers a complete automation in billing and accounts, inventory, staff management and administration sections .</p>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
   <p><center>Follow Us On</center></p>
  <a href="#"><i class="fa fa-facebook-official"></i></a>
  <a href="#"><i class="fa fa-pinterest-p"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-flickr"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <p class="w3-medium">
 <a href="https://www.w3schools.com/w3css/default.asp" target="_blank"></a>
 
 <font color="red">CONTACT US</font><br><br>ALL TEMPLE MANAGEMENT ASSOCIATION®,<br>near Shri Venkatramana Temple,<br>Mangaluru,D.K. District<br>Karnataka,INDIA-575003<br><br>Phone:0824-2223049<br>fax:0824-2525232<br>Email:alltemple@gmail.com
      <br><br><p> powered by All temple association®<br><br>
    <p class="w3-opacity"><small>©2019 ATA|all rights reserved|Design By gk</small><i></i></p>    
</footer>


<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

</body>
</html> 
