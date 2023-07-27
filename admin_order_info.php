<?php
	session_start();
	if(!isset($_SESSION['admin_name']) && !isset($_SESSION['admin_pass']))
	{
		echo "<script>window.location='login.php';</script>";
	}
?>
<html>
<head>
<title>www.webtronic.com - Administrator Order Information</title>
<style>
.admin_order_info_user
{
	text-decoration:none; color:#006600;
}
a:hover
{
	text-decoration:underline;
}
th
{
	background:#b2e54d;
}
.back
{
	text-decoration:none; font-size:18px; color:#006600;
}
</style>
</head>
<body>
<?php
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("webtronic");
	
	echo "  <table border='0'>
				<tr>
					<td style='border:1px solid #9aca3a;'>
						<a href='admin.php' class='back'><< Main Admin Page</a>
					</td>
				</tr>
			</table><br>";
	
	$user_order_arr=mysql_query("select distinct user from admin_user_order");
	
	echo "<table border='0' width='1330px'>
			<th>User_Name</th> 
			<th>Password</th> 
			<th>Name</th> 
			<th>Last_Name</th> 
			<th>Email</th> 
			<th>Gender</th> 
			<th>Address</th> 
			<th>Country</th> 
			<th>State</th> 
			<th>City</th> 
			<th>Mobile_no</th>";

	$color="style='background:#e2f4be'";
	while($user_order=mysql_fetch_array($user_order_arr))
	{
		$user_detail_arr=mysql_query("select * from signup where user='$user_order[0]'")or die("er");
		
		while($user_detail=mysql_fetch_array($user_detail_arr))
		{	
			if($user_detail[5]=="m")
			{	$gender="male";		}
			else
			{	$gender="female";	}
			
			echo "<tr $color ><td><a href='admin_order_user.php ? order_user=$user_detail[0]' class='admin_order_info_user'><div><b>$user_detail[0]</b> <div></a></td>
					<td>$user_detail[1]</td>
					<td>$user_detail[2]</td>
					<td>$user_detail[3]</td>
					<td>$user_detail[4]</td>
					<td>$gender</td>
					<td>$user_detail[6]</td>
					<td>$user_detail[7]</td>
					<td>$user_detail[8]</td>
					<td>$user_detail[9]</td>
					<td>$user_detail[10]</td>
				</tr>";
		}
		if($color=="style='background:#e2f4be'")
		{
			$color="style='background:#cbf4be'";
		}
		else
		{
			$color="style='background:#e2f4be'";
		}

	}
	echo "</table><br>";
	echo "  <table border='0'>
				<tr>	
					<td style='border:1px solid #9aca3a;'>
						<a href='admin.php' class='back'><< Main Admin Page</a>
					</td>
				</tr>
			</table>";
	echo "<br><br><br><table border='0'>
						<tr>
							<td style='border:1px solid #9aca3a;'>
								<a href='admin_order_history.php' class='back'>&nbsp;Order History Page &nbsp;</a>
							</td>		
						</tr>
					</table>";
	
?>
<tr style="background:#9aca3a">
</body>
</html>
