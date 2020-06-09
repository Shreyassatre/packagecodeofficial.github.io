<html>
<head>
<title>
Sign Up
</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<center><body>
<h2>Registration Here!</h2>
<form action="new.php" method="post">
<table border="l" width="300" height="150">

<tr>     <td>Name:</td>
         <td><input type="text" name="name"></td>
</tr>		 
<tr>     <td>phone:</td>
         <td><input type="text" name="phone"></td>
</tr>
<tr>     <td>email:</td>
         <td><input type="text" name="email"></td>
</tr>
<tr>     <td colspan="5" align="center"><input type="submit" name="submit" value="submit">
</tr>
</table>
</form>
</body></center>
</html>

<?php
$db = mysqli_connect("localhost","root","","shreyas") or die (mysql_error());

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];

$sql="INSERT INTO `info`(`name`,`phone`,`email`) VALUES ('$name','$phone','$email')";
	 $q=$db->query($sql) or die("failed");
	 
	if($name)
	{
		echo("");
	}
	else
	{
		echo("warning : name is not entered");
	}

    if($phone)
	{
		echo("");
	}
	else
	{
		echo("warning : phone number is not entered");
	}
	
	if($email)
	{
		echo("");
	}
	else
	{
		echo("warning : email address is not entered");
	}
if($q)
{
	echo "<h3>you have registered successfully!!</h3>";
}
}

?>

