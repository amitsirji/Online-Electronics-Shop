<?php
	session_start();
?>
<html>
<head>
<title>www.webtronic.com - Update Account</title>
</head>
<body>
<?php
	echo $_GET['update'];
	$user=$_SESSION['user_name'];
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("webtronic");

	if($_GET['update']=="detail")
	{
		$ch_first_name=$_POST['ch_first_name'];
		$ch_last_name=$_POST['ch_last_name'];
		$ch_email=$_POST['ch_email'];
		$ch_address=$_POST['ch_address'];
		$ch_country=$_POST['ch_country'];
		$ch_state=$_POST['ch_state'];
		$ch_city=$_POST['ch_city'];
		$ch_mo_no=$_POST['ch_mo_no'];
		
		
		$result=mysql_query("update signup set name='$ch_first_name',last_name='$ch_last_name',email='$ch_email',address='$ch_address',country='$ch_country',state='$ch_state',city='$ch_city',mobile_no='$ch_mo_no',delivery_address='$ch_address',delivery_country='$ch_country',delivery_state='$ch_state',delivery_city='$ch_city' where user='$user'");
		
		echo "<script>window.location='user_account.php'</script>";
	}
	else
	{
		$new_pass=$_POST['ch_pass_name'];
		
		$result=mysql_query("update signup set pass='$new_pass' where user='$user'");
		echo "<script>window.location='user_account.php'</script>";
	}
?>
</body>
</html>
