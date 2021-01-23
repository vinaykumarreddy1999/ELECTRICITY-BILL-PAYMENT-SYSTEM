<?php
session_start();
include("connect.php");
if(!(isset($_SESSION['log_user'])))
{
	header("location:check.php");
}
else
{	
	$user_name=$_SESSION['log_user'];
?>
<html>
<head>
<title>
Meghalaya Power Payment
</title>
</head>
<body>
<center>
<h1>Meghalaya Electricity Bill Payment</h1>
<hr>
<p>
Your Payment Is Received
</p>
<a href="home.php">Click Here</a> To Go Home
</center>
</body>
</html>
<?php
}
?>