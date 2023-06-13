<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: #f2f2f2;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #040404;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
    font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
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
<body>

<div class="topnav">
  <a class="active" href="infomanagement3.php">HOME</a>
  <a href="devotte.php">DEVOTEE</a>
  <a href="staff.php">STAFF</a>
  <a href="committee.php">COMITEE</a>
  <a href="donation.php">DONATION</a>
 <div class="dropdown">
    <button class="dropbtn">SEVAS
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="sevasavailable.php">to insert seva</a>
      <a href="userseva.php">BOOK SEVAS</a>
    </div>
  </div>
 <div class="dropdown">
    <button class="dropbtn">FESTIVALS
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="festival.php">to insert festival info</a>
      <a href="userfestival.php">to view festival</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">TEMPLES
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="venkataramana.php">venktramana temple</a>
      <a href="halemariyammatemple.php">hale mariyamma temple</a>
      <a href="kalikambatemple.php">kalikamba temple</a>
	  <a href="laxmijanardhantemple.php">laxmi janardhana temple</a>
	</div>
  </div>


 <a  href="contactus.php">CONTACT US</a>
  <div class="dropdown">
    <button class="dropbtn">ADMIN PAGE
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="admin1.php">SEVA BOOKED DETAILS</a>
      <a href="admin3.php">COMITTEE DETAILS</a>
      <a href="admin2.php">DONATION DETAILS</a>
	  <a href="admin4.php">STAFF DETAILS</a>
	</div>
  </div>


  <a href="logout.php">LOGOUT</a>
</div>

<div style="padding-left:16px">
 <center><h2><font color="green">INFORMATION MANAGEMENT</font></h2></center>
 <div class="bg-img">
 
  
</div>
<br><br><p><font color="green"><center><h2>GALLERY:</h2></center></font><br><br>
<section class="w3-row-padding w3-center w3-light-grey">
  <article class="w3-third">
    <p>HALEMARIYAMMA TEMPLE</p>
    <img src="images/halemariyammatemple.jpeg" alt="Random Name" style="width:100%">
    <p>Udupi,Karnataka.</p>
  </article>
  <article class="w3-third">
    <p>LAXMI JANARDHAN TEMPLE</p>
    <img src="images/laxmijanardhantemple.jpeg" alt="Random Name" style="width:100%">
    <p>Kaup,karnataka.</p>
  </article>
  <article class="w3-third">
    <p>SHREE VENKATRAMANA TEMPLE</p>
    <img src="images/karkalatemple.jpeg" alt="Random Name" style="width:100%">
    <p>Karkala,Karnataka.</p>
  </article>
</section>
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
       
</footer>

