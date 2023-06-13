<!DOCTYPE html>
<html>
<head>
<title>kalikamba temple</title>
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
  background-image: url("images/Mahalasa-Temple.jpeg");

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
  <a  href="userhometry.php">HOME</a>
<div class="dropdown">
    <button class="dropbtn">TEMPLES
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a  href="uvenkatramana.php">venktramana temple</a>
      <a  href="uhalemariyammatemple.php">hale mariyamma temple</a>
      <a class="active" href="ukalikambatemple.php">kalikamba temple</a>
	  <a  href="ulaxmijanardhantemple.php">laxmi janardhana temple</a>
	</div>
  </div>
  <a href="sevabill.php">BOOK SEVAS</a>
<a href="ufestival.php">FESTIVALS</a>

<a  href="ucontactus.php">CONTACT US</a>
<a href="logout.php">LOGOUT</a>
</div>
<div style="padding-left:16px">
 <center><h2><font color="white">KALIKAMBA TEMPLE,UDUPI</font></h2></center>
 <div class="bg-img">
 </div>
 <div>
 <br><br><p><h2><center>ABOUT TEMPLE</center></h2></p>
<p>The temple is mainly revered by the Vishwakarma Brahmana community (people involved in the goldsmith, blacksmith, carpentry and architecture businesses).

The temple underwent major renovation the year 2000. The Garbhagrihas of Lord Ganesh and Goddess Kalikamba were rebuilt with granite.Every 5 years, the temple also conducts Samoohika Upananyana (Mass thread ceremony) for poor vishwakarma Brahmins living in the Dakshina Kannada and Udupi districts.

A Sri Kalikamba Seva Samiti committee volunteers for many social service activities.

There is a Vishwakarma Sahakara Bank (previously known as S K Goldsmith cooperative society) which mainly caters to the needs of the Vishwakarma community apart from others.

There are several trusts associated with the temple which encourage education among Vishwakarma students by offering scholarships for brilliant students and monetary help for poor students, from primary school to higher education.</p></div>

<br><br>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


<br><br><p><h2><center>LIST OF SEVAS OF KALIKAMBA TEMPLE</center></h2></p>
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
  <option value="kalikamba temple">kalikamba temple</option>
</select></p>			
                 </td>		
           </tr>	
     </table></center>
	 <center><br><p>click here</p><input type="SUBMIT" name="SUBMIT" value="SUBMIT"> 
<input type="RESET" name="RESET" value="RESET"> </center>
    </BR></BR></center></form>
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
