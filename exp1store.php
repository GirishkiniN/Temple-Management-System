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
              <th>C_id</th>
              <th>Name</th>
			  <th>AGE</th>
			  <th>Address</th>
			  <th>Phone_no</th>
			  <th>Designation</th>
			  <th>Temple_name</th>
          </tr>
		  
 <?php
 $connection = mysqli_connect("localhost","root","","templeexmp") or die("couldnt connect server");
$db= mysqli_select_db($connection,"templeexmp") or die("couldnt select database");
$query="insert into employee(C_id,Name,Age,Address,Phone_no,Designation,Temple_name) values('$_POST[C_id]','$_POST[Name]','$_POST[Age]',$A,'$_POST[Address]','$_POST[Phone_no]','$_POST[Designation]','$_POST[Temple_name]')";
mysqli_query($connection,$query);
echo "THANK YOU FOR THE DETAILS: ENTERED SUCCCESSFULLY";
$res="select * from employee";
$result=mysqli_query($connection,$res);
if (!$result)
{
  echo("Error description: " );
}
else
{
while(($row = mysqli_fetch_assoc($result)))
    {
		
        $C_id = $row['C_id'];
        $Name = $row['Name'];
		$Age=$row['Age'];
        $Address=$row['Address'];
		$Phone_no=$row['Phone_no'];
	    $Designation=$row['Designation'];
        $Temple_name=$row['Temple_name'];	
?>
		<tr>
        <td><?php echo $C_id;  ?> </td>
	    <td><?php echo $Name ; ?> </td>           
	    <td><?php echo $Age  ; ?> </td>
	    <td><?php echo $Address  ; ?> </td>
	    <td><?php echo $Phone_no ; ?> </td>
		<td><?php echo $Designation  ; ?> </td>
		<td><?php echo $Temple_name  ; ?> </td>
	   </tr>
<?php		
}}


?>
</table>
</div>
</body>
</html>