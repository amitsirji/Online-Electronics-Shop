<?php
	session_start();
	if(!isset($_SESSION['admin_name']) && !isset($_SESSION['admin_pass']))
	{
		echo "<script>window.location='login.php';</script>";
	}
?>
<html>
<head>
<title>www.webtronic.com - Administrator Order User Information</title>
<style>
th
{
	background:#baf07f;
}
.back
{
	text-decoration:none; font-size:18px; color:#006600;
}
</style>
<script language="javascript">
	function check_all()
	{
		//alert("");
		var loop=0;
		loop= parseInt(frm1.hide_loop.value);
		loop=loop-1;
		for(i=1; i<=loop; i++)
		{
			document.getElementById(i).checked="checked";
		}
	}
</script>
</head>
<body>
<?php
	$order_user=$_GET['order_user'];
	
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("webtronic");
	
	if(isset ($_POST['a1']))
	{
		$delete_row=$_POST['a1'];
		while(list($key,$value)=each($delete_row))
		{
			mysql_query("delete from admin_user_order where no=$value");
		}
	}
	
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
	$user_detail_arr=mysql_query("select * from signup where user='$order_user'");
	
		echo "<table border='0' width='1330px' style='border:1px solid #9aca3a'>";
	
		while($user_detail=mysql_fetch_array($user_detail_arr))
		{	
			if($user_detail[5]=="m")
			{	$gender="male";		}
			else
			{	$gender="female";	}
	
			echo "<tr style='background:#9aca3a;'>
						<td style='background:#3d5709; color:ffffff;'>
							<center><b>User</b></center>
						</td>
						<td><b>
							<center>$user_detail[0]</center>
							</b>
						</td>
						
					<td><center>$user_detail[1]</center></td>
					<td><center>$user_detail[2]</center></td>
					<td><center>$user_detail[3]</center></td>
					<td><center>$user_detail[4]</center></td>
					<td><center>$gender</center></td>
					<td><center>$user_detail[6]</center></td>
					<td><center>$user_detail[7]</center></td>
					<td><center>$user_detail[8]</center></td>
					<td><center>$user_detail[9]</center></td>
					<td><center>$user_detail[10]</center></td>
				</tr>";
		}
		echo "</table><br><br>";

	
	$order_item_arr=mysql_query("select * from admin_user_order where user='$order_user'");
	$color="style='background:#f2f5bf'";
	if(mysql_affected_rows()!=0)
	{
		echo "<table border='0' width='1330px'>";
		echo "<th>Remove</th>
			  <th>Order No.</th>
			  <th>User Name</th>
			  <th>Item ID</th>
			  <th>Item Name</th>
			  <th>Prize</th>
			  <th>Item Quentity</th>
			  <th>Totle Prize</th>
			  <th>Address</th>
			  <th>Country</th>
			  <th>state</th>
			  <th>City</th>
			  <th>Payment Mode</th>
			  <th>Card Name</th>
			  <th>Card Number</th>
			  <th>Card Ver. Coad</th>
			  <th>Bank Name</th>";
		
		$id_=1;
		echo "<form name='frm1' action='admin_order_user.php ? order_user=$order_user' method='POST'>";
					while($order_item=mysql_fetch_array($order_item_arr))
					{
						$item_name_arr=mysql_query("select name from $order_item[2] where id='$order_item[3]'");
						$item_name =mysql_fetch_array($item_name_arr);
			
						$item_mrp_arr=mysql_query("select main_mrp from $order_item[2] where id='$order_item[3]'");
						$item_mrp =mysql_fetch_array($item_mrp_arr);
			
						echo "<tr $color>
								<td>
									<input type='checkbox' id=".$id_." value='$order_item[0]' name=a1[]>
								</td>
								<td>$order_item[0]</td>
								<td>$order_item[1]</td>
								<td>$order_item[3]</td>
								<td>$item_name[0]</td>
								<td>$item_mrp[0]</td>
								<td><center>$order_item[4]</center></td>
								<td>".$item_mrp[0] * $order_item[4]."</td>
								<td>$order_item[5]</td>	
								<td>$order_item[6]</td>
								<td>$order_item[7]</td>
								<td>$order_item[8]</td>
								<td>$order_item[9]</td>
								<td>$order_item[10]</td>
								<td>$order_item[11]</td>
								<td>$order_item[12]</td>
								<td>$order_item[13]</td>
							</tr>";
						$id_=$id_+1;
						if($color=="style='background:#f2f5bf'")
						{
							$color="style='background:#dbf5bf'";
						}
						else
						{
							$color="style='background:#f2f5bf'";
						}
					}
					echo "</table><br><br>";
					echo "<table border='0'>
							<tr>
								<td>
									<input type='submit' value='Delete'>
								</td>
								<td>
									<input type='hidden' name='hide_loop' value='$id_'>
									<input type='button' value='Check All' onClick='check_all()'>
									<input type='reset' value='Uncheck All'> 
				</form>
								</td>
							</tr>
						</table><br>";
	}
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
		</table>";

?>
</body>
</html>
