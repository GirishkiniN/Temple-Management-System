<!DOCTYPE html>
<html>
<head>
<title>venkatramana temple</title>
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
      <a  class="active" href="venkataramana.php">venktramana temple</a>
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
 <center><h2><font color="white">VENKATARAMANA TEMPLE,MANGALURU</font></h2></center>
 <div class="bg-img">
 </div>
 <div>
 <br><br><p><h2><center>ABOUT TEMPLE</center></h2></p>
<p>The Sri Venkatramana temple has a rich history. The Vaishyas were the main residents of this place and when the Portuguese invaded the place, the Vaishyas had to move southwards. This is how many of them settled in Mangalore. Sri Venkatramana was the chief deity of the Vaishyas and the temple was built by members of their community.

The chief deity has other deities along the side like Sridevi and Bhoodevi. These deities are made of panchaloha – that is, five metals were used to make the statues. Lord Venkatramana holds the chakra in his right hand and the shankh on the left hand.

The goddess Sridevi is symbolic of prosperity and wealth and Bhoodevi is an embodiment of sanctity, prakriti and success. The temple was built during the seventeenth century and the main idol was erected at the primary sanctum of the temple.

The temple also houses other deities like Veera Vittala, Garuda Vahana Shri Gopalakrishna, and Shri Mula Venkatramana. The statue of Naga Devata is present in the temple’s outer circle.</p></div>

<br><br>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

<br><br><p><h2><center>LIST OF SEVAS OF VENKATARAMANA TEMPLE</center></h2></p>
<br><center><h2> Select Temple Name.</h2></center>

<form name="frm" action="" method="POST">
       <center>  <table><br>
         
          
		<tr>
                 <td>				
                    <font color="black">TEMPLE_NAME:</font>  				
                 </td>			
                 <td>				
                     <p><select name="tname" required />
  <option value="">....select temple name....</option>
  <option value="venkatramana temple">venkatramana temple</option>
</select></p>			
                 </td>		
           </tr>	
     </table></center>
	 <center><br><p>click here</p><input type="SUBMIT" name="SUBMIT" value="SUBMIT"> 
<input type="RESET" name="RESET" value="RESET"> </center>
    </BR></BR></center></form>
	 <html>
<html>
<head>
 <title>
 checkdate
 </title>
 </head>
 <body>
  <div class="box-body table-responsive padding">
     <table border="5" cellspacing="3" cellpadding="3">
          <center><tr>
              <th>SevaName</th>
              <th>RATE(RS)</th>
			  <th>TEMPLE_NAME</th>
		  </tr></center>

<br>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
<?php
$conn=mysqli_connect("localhost","root","","temple");
if(isset($_POST['SUBMIT']))
{
	$ptname = stripslashes($_POST['tname']);
 $ptname = mysqli_real_escape_string($conn,$ptname);
	
	echo "<br>SEVA DETAILS of $ptname :<br><br>" ;
	$sql="select * from sevasavailable WHERE templename='$ptname' ";
	$result=mysqli_query($conn,$sql);
}
	if(isset($_POST['SUBMIT']))
	{	
		while(($row = mysqli_fetch_assoc($result)))
		 {
				 $SNAME = $row['sevaname'];
				$RATE = $row['rate'];
				$TEMPLE_NAME=$row['templename'];
		?>
				<center><tr>
				<td><?php echo $SNAME ;  ?> </td>
				<td><?php echo $RATE ; ?> </td>           
				<td><?php echo $TEMPLE_NAME  ; ?> </td>
				</tr></center>
		<?php		
}}
?>
</table>
</div>
</body>
</html>
	 