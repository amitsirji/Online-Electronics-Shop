<?php
	session_start();
	if(!isset($_SESSION['admin_name']) && !isset($_SESSION['admin_pass']))
	{
		echo "<script>window.location='login.php';</script>";
	}
?>
<html>
<head>
<title>www.webtronic.com - Administrator Order History</title>
<style>
th
{
	background:#eade7c;
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
	$result=mysql_query("select * from admin_order_history");
	
	echo "<table border='0'>
			<tr>
				<td style='border:1px solid #9aca3a;'>
					<a href='admin.php' class='back'><< Main Admin Page</a>
				</td>
			</tr>
			<tr>
				<td style='border:1px solid #9aca3a;'>
					<a href='admin_order_info.php' class='back'><< Back User List</a>
				</td>
			</tr>
		</table><br>";
	
	$color="style='background:#e2f4be'";
	
	echo "<table border='0' width='1330px'> 
			<th>Order No.</th> 
			<th>User Name</th> 
			<th>Product Table Name</th> 
			<th>Product Id</th> 
			<th>Quentity</th> 
			<th>Delivery Address</th> 
			<th>Delivery Country</th> 
			<th>Delivery State</th> 
			<th>Delivery City</th> 
			<th>Payment Mode</th> 
			<th>Card Name</th> 
			<th>Card Number</th> 
			<th>Card Ver Code</th> 
			<th>Bank Name</th>";
	
			while($row=mysql_fetch_array($result))
			{
				echo "<tr $color>";
				echo "<td>".$row[0]."</td>";
				echo "<td>".$row[1]."</td>";
				echo "<td>".$row[2]."</td>";
				echo "<td>".$row[3]."</td>";
				echo "<td><center>".$row[4]."</center></td>";
				echo "<td>".$row[5]."</td>";
				echo "<td>".$row[6]."</td>";
				echo "<td>".$row[7]."</td>";
				echo "<td>".$row[8]."</td>";
				echo "<td>".$row[9]."</td>";
				echo "<td>".$row[10]."</td>";
				echo "<td>".$row[11]."</td>";
				echo "<td>".$row[12]."</td>";
				echo "<td>".$row[13]."</td>";
				echo "</tr>";
		
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
	
	echo "<table border='0'>.
			<tr>
				<td style='border:1px solid #9aca3a;'>
					<a href='admin.php' class='back'><< Main Admin Page</a>
				</td>
			</tr>
			<tr>
				<td style='border:1px solid #9aca3a;'>
					<a href='admin_order_info.php' class='back'><< Back User List</a>
				</td>
			</tr>
		</table><br>";
	
?>
</body>
</html>
