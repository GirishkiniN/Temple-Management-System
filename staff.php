<!DOCTYPE html>
<html>
<head>
<title>admin page</title>
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
  <a  href="infomanagement3.php">HOME</a>
  <a href="devotte.php">DEVOTEE</a>
  <a class="active" href="staff.php">STAFF</a>
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

     <h1> <center>STAFF DETAILS</center></h1>
  </head>  
<body>
    <body background="back5.jpg">
<form name="frm" action="" method="POST">	
     <table><br>
         <tr>			
               <td>				
                    <font color="red">STAFF_ID:</font> 				
               </td>			
                <td>				
                    <p><input type=”integer” name="stid"  placeholder="Enter staff_id"></p>			
                </td>		
           </tr>
           <tr>
                 <td>				
                    <font color="red">NAME:</font>  				
                 </td>			
                 <td>				
                     <p><input type=”text” name="stname"  placeholder="Enter name"></p>			
                 </td>
            
         </tr>
               
          <tr>
                 <td>				
                 <font color="red">AGE:</font>  				
                 </td>			
                 <td>				
                     <p><input type=”integer” name="stage"  placeholder="Enter age"></p>			
                 </td>		
              </tr>
          <tr>
                 <td>				
                     <font color="red">ADDRESS:</font>  				
                 </td>			
                 <td>				
                     <p><input type="text"  name="stadd" placeholder="Enter address"></p>			
                 </td>		
           </tr>
           <tr>
                 <td>				
                 <font color="red">WORKS_AS:</font>  			
                 </td>			
                 <td>				
                     <p><input type=”text” name="stwo"   placeholder="Enter works_as"></p>		
                 </td>		
           </tr>
          <tr>
                 <td>				
                    <font color="red">SALARY:</font>  				
                 </td>			
                 <td>				
                     <p><input type=”integer” name="stsal"  placeholder="Enter salary"></p>			
                 </td>		
           </tr>
         <tr>
                 <td>				
                    <font color="red">TEMPLE_NAME:</font>  				
                 </td>			
                 <td>				
                     <p><input type=”text” name="sttname"  placeholder="Enter temple_name"></p>			
                 </td>		
           </tr>			
     </table>

          <div class="w3-container">
   <p><input type="submit" name="sub3" value="   INSERT   ">press to insert</p>
   <p> <input type="submit" name="sub2" value="   DELETE  ">press to delete</p>
   <p><input type="RESET" name="RESET" value="   RESET  ">press to reset</p>
</div></form>	



<?php
$conn=mysqli_connect("localhost","root","","temple");
if(isset($_POST['sub3']))
{
  $pstid=$_POST['stid'];
  $pstname=mysqli_real_escape_string($conn,$_POST['stname']);
  $pstage=$_POST['stage'];
  $pstadd=$_POST['stadd'];
  $pstwo=$_POST['stwo'];
  $pstsal=$_POST['stsal'];
  $psttname=$_POST['sttname'];
  $querystring="INSERT INTO staffdetails(staffid,name,age,address,worksas,salary,templename) VALUES('$pstid','$pstname','$pstage','$pstadd','$pstwo','$pstsal','$psttname')";	
  mysqli_query($conn,$querystring);	
  echo "Value inserted";
}

?>

<?php
if(isset($_POST['sub2']))
{
  $pstid=$_POST['stid'];
  $pstname=mysqli_real_escape_string($conn,$_POST['stname']);
  $pstage=$_POST['stage'];
  $pstadd=$_POST['stadd'];
  $pstwo=$_POST['stwo'];
  $pstsal=$_POST['stsal'];
  $psttname=$_POST['sttname'];	
  $sql="DELETE FROM staffdetails WHERE staffid='$pstid'"; 
  mysqli_query($conn,$sql);
  echo "Value deleted";
}

?>	
	
	
	

    </body>    
</html>
