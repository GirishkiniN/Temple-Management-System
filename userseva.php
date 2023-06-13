<html>
<head>
<title>book sevas</title>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
//th, td {
 // padding: 5px;
 // text-align: left;
//}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body bgcolor="ff8000">
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
  color: black;
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
  background-image: url("images/venkatramana-temple-mangalore.jpeg");

  min-height: 475px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
    </style>
<body>
<body background="back6.jpg">

<div class="topnav">
  <a  href="infomanagement3.php">HOME</a>
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
      <a class="active" href="userseva.php">BOOK SEVAS</a>
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
      <a  href="venkataramana.php">venktramana temple</a>
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
<form method="POST" action="vstore.php">
<table><br>
			<tr>			
				<p><center><h1>ENTER THE SEVA DETAILS</h1></center></p><br> 
               <td>				
                   <font color="yellow">DEVOTEE NAME:</font> 				
               </td>			
                <td>				
                    <p><input type=”integer” name="dname"  placeholder="Enter name" required /></p>			
                </td>		
           </tr>
           
           <tr>
                 <td>				
                 <font color="yellow">PHONE_NO:</font>  			
                 </td>			
                 <td>				
                     <p><input type=”integer” name="dpho"  placeholder="Enter phone_no"required /></p>		
                 </td>		
           </tr>

           <tr>
                 <td>				
                 <font color="yellow">Quantity:</font>  			
                 </td>			
                 <td>				
                     <p><input type=”number” name="COLLEGE"  placeholder="Enter Quantity"required /></p>		
                 </td>		
           </tr>
		             
        	
         		   
     </table>

 			
			<p><font color="yellow">SELECT TEMPLE NAME</font> </p> 
			<SELECT NAME="TEMPLES" required / >
<option value="">....select temple name....</option>
  <option value="venkatramana temple">venkatramana temple</option>
  <option value="kalikamba temple">kalikamba temple</option>
  <option value="laxmi janardhana temple">laxmi janardhana temple</option>
  <option value="halemariyammatemple">halemariyammatemple</option></SELECT>

		
		 
  <br><br><input type="RESET" name="RESET" value="RESET">

<br><center>click here to generate a bill -> <p><br><input type="SUBMIT" name="SUBMIT" value="BOOK">
</form>
<br><br>
<p> <h2><font color="red"><b>quick links to respective temples</b></font> </h2></p>
<section class="w3-row-padding w3-center w3-light-grey">
  <article class="w3-third">
    <p>HALEMARIYAMMA TEMPLE</p>
    <img src="images/halemariyammatemple.jpeg" alt="Random Name" style="width:100%">
    <p><a href="halemariyammatemple.php">HALE MARIYAMMA TEMPLE</a></p>
	<br><p>since ancient times ...<p><a href="halemariyammatemple.php">more</a></p>
  </article>
  <article class="w3-third">
    <p>LAXMI JANARDHAN TEMPLE</p>
    <img src="images/laxmijanardhantemple.jpeg" alt="Random Name" style="width:100%">
    <p><a href="laxmijanardhantemple.php">LAXMI JANARDHAN TEMPLE</a></p>
	<br><p>The temple is mainly revered by ...<p><a href="laxmijanardhantemple.php">more</a></p>
 
  </article>
  <article class="w3-third">
    <p>SHREE VENKATRAMANA TEMPLE</p>
    <img src="images/karkalatemple.jpeg" alt="Random Name" style="width:100%">
    <p><a href="venkataramana.php">SHREE VENKATRAMANA TEMPLE</a></p>
	<br><p>The temple was...<p><a href="laxmijanardhantemple.php">more</a></p>

  </article>
</section>
