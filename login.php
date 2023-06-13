<!DOCTYPE html>
<html>
<head>
   <a href="index.php">  <img src="images/logo2.jpg"  alt="Smiley face" width="250" height="50" align="left"></a>
<meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="css/style.css" type="text/css">
     <link rel="stylesheet" href="css/style2.css" type="text/css">
    <style>
    .bg-img {
  /* The image used */
  background-image: url("images/back-outstation.jpg");

  min-height: 550px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
        
a {
  color: green;
  text-decoration:blink;
}

a:hover
{
	color:blue;
}
    </style>
</head>
<body bgcolor="#FBFBFD">

<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['userid'])){
        // removes backslashes
 $userid = stripslashes($_REQUEST['userid']);
        //escapes special characters in a string
 $userid = mysqli_real_escape_string($con,$userid);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE userid='$userid'
and password='".md5($password)."'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['userid'] = $userid;
            // Redirect user to index.php
     header("Location: index.php");
         }else{
 echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
 }
    }else{
?>

    <div class="topnav">
    <a href="rental.php">Rental</a>
    <a href="outstation.php">Outstation</a>
    <a href="citytaxi.php">City Ride</a>
  <a class="active" href="index.php">Home</a>
  
</div>
    
    <center><h2><font color="green">LOG IN to just cabs</font></h2></center>
<div class="bg-img">
  <form action="" method="post" name="login" class="container">
    <h1>Welcome back just cab</h1>
      <h2><font color="green">LOG IN:</font></h2>

 
    <label for="userid">User-Id</label>
    <input type="text" name="userid" placeholder="Userid" required />
      
      
      <label for="password">Password</label>
    <input type="password" name="password" placeholder="Password" required />

    <button type="submit" class="btn" value="Login" />LOG IN</button>
      <center><h3><font color="green"><a href="signup.php" >New to just cabs-Sign up</a></font></h3></center>
      
  </form>
</div>
<div class="topnav">
 <a class="active" href="adminlogin.php">Admin login.</a>
 
</div>
    
<?php } ?>
</body>
</html>