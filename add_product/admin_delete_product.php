<?php
	session_start();
	if(!isset($_SESSION['admin_name']) && !isset($_SESSION['admin_pass']))
	{
		echo "<script>window.location='../login.php';</script>";
	}
?>
<html>
<head>
<title>www.webtronic.com - Administrator - Delete Products</title>
</head>
<body bgcolor="#CCFFFF">
<center>
	<?php
		include ('delete_product_head.php');
	?>
</center>
</body>
</html>
