<html>
 <head>
 <title>
 checkdate
 </title>
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

  <div class="topnav">
  <a href="infomanagement3.php">HOME</a>
  <a  href="devotte.php">DEVOTEE</a>
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
      <a href="venkataramana.php">venktramana temple</a>
      <a href="halemariyammatemple.php">hale mariyamma temple</a>
      <a href="kalikambatemple.php">kalikamba temple</a>
	  <a href="laxmijanardhantemple.php">laxmi janardhana temple</a>
	</div>
  </div>

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

  <a href="contactus.html">CONTACT US</a>
  <a href="logout.php">LOGOUT</a>
</div>

 </head>
 <body>
 <body bgcolor="808080"></body>
  <div class="box-body table-responsive padding">
     <table border="5" cellspacing="3" cellpadding="3">
          <tr>
              <th>Devotee name</th>
			<th>seva name</th>
			<th>Rate</th>
			<th>Qty</th>
			<th>temple name</th>
			<th>Amount</th>
          </tr>
<?php
$conn=mysqli_connect("localhost","root","","templedb");
$C=$_POST['COLLEGE'];
$D=$_POST['TEMPLES'];
echo $C;
echo "<p>THANK YOU FOR THE DETAILS: <p><h2> BOOKED SEVA DETAILS OF '$D'</h2>";
$res="select * from bill where devoteename = '$_POST[dname]' and templename='$D'";
$result=mysqli_query($conn,$res);
if (!$result)
{
  echo("Error description: " );
}
else
{
while(($row = mysqli_fetch_assoc($result)))
    {
		
        $DNAME = $row['devoteename'];
		$NAME = $row['sevaname'];
		$RATE=$row['rate'];
		$COLLEGE=$row['qty'];
		$TEMPLES=$row['templename'];
		$PHONE=$row['amount'];
		
?>
		<tr>
        <td><?php echo $DNAME ;  ?> </td>
		<td><?php echo $NAME ;  ?> </td>           
	    <td><?php echo $RATE  ; ?> </td>
		<td><?php echo $COLLEGE  ; ?> </td>
		
		<td><?php echo $TEMPLES  ; ?> </td>
		<td><?php echo $PHONE  ; ?> </td>
	</tr>
<?php		
}}
    echo "<p> SEVA BOOKED SUCCESFULLY!";
  echo " <p> THANKS FOR USING OUR SITE ";

?>
</div>
</body>
</html>