<!DOCTYPE html>
<html>

<head>

<link rel = "stylesheet" type="text/css" href="Login.css">
    
<title> temple management </title>
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


</head>

<body background="images/back1.jpg" >

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
     header("Location: infomanagement3.php");
         }else{
 echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
 }
    }else{
?>



<div class = "border">
    <h1><center> LOGIN PAGE </center></h1>

    <p><center>	WELCOME TO THE ALL TEMPLE ASSOCIATION</center></p>
<br>
<br>
<br>
<center><form name ="loginform" method="post" action="logintemple3.php">
<table width ="20%" bgcolor="0099cc" align="center">

  <br><br><label for="userid">USER-NAME</label>
    <input type="text" name="userid" placeholder="Userid" required />
      
      
      <p><label for="password">PASSWORD</label>
    <input type="password" name="password" placeholder="Password" required />

    <p><button type="submit" class="btn" value="Login" />LOG IN</button>
      <center><h3><font color="green"><a href="signuptemple2.php" >create account/Sign up</a></font></h3></center>
    

    </table>
    </table></form></center>
    </div>
</body>
<?php } ?>
</html>