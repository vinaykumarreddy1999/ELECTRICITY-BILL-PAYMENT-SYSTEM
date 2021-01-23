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
Electricity Bill Payment
</title>
<style>
#txt
{
	width:250px;
	border-style:groove;
	height:30px;
	border-radius:4px;
}

#btn
{
	background-color:#1e5799;
	border-style:none;
	width:100px;
	height:30px;
	border-radius:4px;
	color:white;
}
#btn:hover{
background-color:#1e5700;
color:#000;
}
.header
{
		position:fixed;
		top:0px;
		background-color:#000;
		width:100%;
		left:0px;
		color:#fff;	
		opacity:.8;
		text-align:center;
}
		.footer
		{
		position:fixed;
		bottom:0px;
		background-color:#000;
		width:100%;
		left:0px;
		color:#fff;
		
		}
		.footer a
		{
color:#fff;
		}
		.container
		{
			padding-top:140px;
		}
</style>
</head>
<body>
<center>
<?php
include("includes/header.php");
?>
<div class="container">
<i>Note: Hover Over the Bank or Services Icon</i><br>
<img src="image/apex.jpg" width="80" title="Apex Bank">&nbsp;&nbsp;&nbsp;
<img src="image/Axis.png" width="90" title="Axis Bank">&nbsp;&nbsp;&nbsp;
<img src="image/Canara.png" width="100" title="Canara Bank">&nbsp;&nbsp;&nbsp;
<img src="image/Citibank.png" width="90" title="Citi Bank">&nbsp;&nbsp;&nbsp;
<img src="image/HDFC.png" width="80" title="HDFC Bank">&nbsp;&nbsp;&nbsp;
<img src="image/ICICI.png" width="80" title="ICICI Bank">&nbsp;&nbsp;&nbsp;
<img src="image/Federal.png" width="80" title="Federal Bank">&nbsp;&nbsp;&nbsp;
<img src="image/sbi.png" width="80" title="State Bank Of India Bank">&nbsp;&nbsp;&nbsp;
<img src="image/union.png" width="80" title="Union Bank">&nbsp;&nbsp;&nbsp;
<img src="image/Yes.png" width="80" title="Yes Bank">
<hr>
<p>Onlien Payment Services Supported</p>
<a href="https://www.paypal.com"><img src="image/paypal.png" width="80" title="Paypal Service"></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://www.paytm.com"><img src="image/Paytm.png" width="80" title="Paytm Service"></a>
<br>
<hr>
<h4>Choose Your Payment Method</h4>
<form action="payment.php" method="post">
<select name="bank" id="txt">
<option value="">Select Your bank</option>
 <?php
 $sql = "SELECT * FROM bank";
					$result = mysqli_query($con, $sql);
					while($rows=mysqli_fetch_array($result))
{ 
          ?>
              <option value="<?php echo $rows['bnk_name']?>"><?php echo $rows['bnk_name']?></option>
			  
    <?php
	}
?>
</select>
<input type="submit" name="ok" id="btn" value="Proceed">
</form>
<a href="cancel.php"><input type="submit"id="btn" value="Cancel"></a>
</div>
<center>
<?php
include("includes/footer.php");
?>
</center>
</body>
</html>
<?php
}
?>