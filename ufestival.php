<!DOCTYPE html>
<html>
<head>
<title>festival</title>
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
<body bgcolor="00bfff">
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
  background-image: url("images/laxmijanardhantemple.jpeg");

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
      <a href="ukalikambatemple.php">kalikamba temple</a>
	  <a  href="ulaxmijanardhantemple.php">laxmi janardhana temple</a>
	</div>
  </div>
  <a href="sevabill.php">BOOK SEVAS</a>
<a class="active" href="ufestival.php">FESTIVALS</a>

<a  href="ucontactus.php">CONTACT US</a>
<a href="logout.php">LOGOUT</a>
</div>

    
<h1><center>FESTIVAL</center></h1>
    <br><br><br><center><h2>Enter festival Details.</h2></center>

<form name="frm" action="" method="POST">
       <center>  <table><br>
         
          <tr>
                 <p>SELECT FESTIVAL NAME </p>
				 <SELECT NAME="COLLEGE" required />
				<option value="">....select festival name....</option>
				  <option value="lakshadeepa">lakshadeepa</option>
				  <option value="carfestival">carfestival</option>
				  <option value="navarathri">navarathri</option>
				  <option value="ganesh chaturthi">ganesh chaturthi</option>
				  <option value="aathimaripooja">aathimaripooja</option></SELECT>            
		</tr>
		 <tr>
                <p>SELECT TEMPLE NAME`</p> 
			<SELECT NAME="TEMPLES" required />
<option value="">....select temple name....</option>
  <option value="venkatramana temple">venkatramana temple</option>
  <option value="kalikamba temple">kalikamba temple</option>
  <option value="laxmi janardhana temple">laxmi janardhana temple</option>
  <option value="halemariyammatemple">halemariyammatemple</option></SELECT>
	
           </tr>	
     </table></center>

    
<center><br><input type="SUBMIT" name="SUBMIT" value="SUBMIT"> 
<input type="RESET" name="RESET" value="RESET"> </center>
    </BR></BR></center></form>
</body>
</html> 

<html>
 <head>
 <title>
 checkdate
 </title>
 </head>
 <body>
  <div class="box-body table-responsive padding">
     <table border="5" cellspacing="3" cellpadding="3">
          <tr>
              <th>FESTIVALID</th>
              <th>FESTIVALNAME</th>
			  <th>FESTIVALDATE</th>
			  <th>SPECIALPOOJA</th>
			  <th>TEMPLENAME</th>
          </tr>																				  
		  
<?php
$conn=mysqli_connect("localhost","root","","temple");
if(isset($_POST['SUBMIT']))
{
    $pfname=mysqli_real_escape_string($conn,$_POST['COLLEGE']);
	$pftname=$_POST['TEMPLES'];
	echo "THANK YOU FOR THE DETAILS: <br><br>FESTIVAL DETAILS :<br><br>";
	$sql="select * from festival WHERE fname='$pfname' and templename='$pftname'";
	$result=mysqli_query($conn,$sql);
}
 
if(isset($_POST['SUBMIT']))
	{	
		while(($row = mysqli_fetch_assoc($result)))
		 {         $FID = $row['fid'];
        $FNAME = $row['fname'];
		$FDATE = $row['fdate'];
		$FSPECPOOJA = $row['specialpooja'];
		$TEMPLE_NAME=$row['templename'];
?>
<tr>
        <td><?php echo $FID ;  ?> </td>
	    <td><?php echo $FNAME ; ?> </td>  
		<td><?php echo $FDATE ; ?> </td>
		<td><?php echo $FSPECPOOJA ; ?> </td>
	    <td><?php echo $TEMPLE_NAME ; ?> </td>
		</tr>
<?php		
}}
?>
</table>
</div>
</body>
</html>		
