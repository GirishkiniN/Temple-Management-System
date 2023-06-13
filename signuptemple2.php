<!DOCTYPE html>
<html>
<head>
    <title> temple management </title>
    
<meta name="viewport" content="width=device-width, initial-scale=1">
   
    
<style>
body {
    
  font-family: Arial, Helvetica, sans-serif;
  background-color:;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>

<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['name'])){
        // removes backslashes
 $name = stripslashes($_REQUEST['name']);
        //escapes special characters in a string
 $name = mysqli_real_escape_string($con,$name); 
 $mobile = stripslashes($_REQUEST['mobile']);
 $mobile = mysqli_real_escape_string($con,$mobile);
 $userid = stripslashes($_REQUEST['userid']);
 $userid = mysqli_real_escape_string($con,$userid);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
        $query = "INSERT into `users` (name, mobile, userid, password)
VALUES ('$name', '$mobile', '$userid', '".md5($password)."')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='logintemple3.php'>Login</a></div>";
        }
    }else{
?>

    
    <center><h2><font color="blue">SIGN UP</font></h2></center>
<div class="bg-img">
  <form name="registration" action="" method="post" class="container">
    <h1>Welcome to temple management system</h1>
      <h2><font color="green">SIGN UP:</font></h2>

    <label for="name">Name</label>
    <input type="text" name="name" placeholder="Username" required />
      
      <label for="mobile">Phone number</label>
    <input type="number" id="pno" name="mobile" placeholder="Your phone number">

    <p><label for="userid">User-name</label>
    <input type="text" name="userid" placeholder="Userid" required />
      
      
      <label for="password">Password</label>
    <input type="password" name="password" placeholder="Password" required />

    <button type="submit" class="btn"  value="justcabs" />SIGN UP</button>
      <center><h3><font color="green"><a href="logintemple3.php" >Already a member/Log in</a></font></h3></center>
      
  </form>
</div>
</form>
<?php } ?>
</body>
</html>