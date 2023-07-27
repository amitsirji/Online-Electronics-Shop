<?php
	session_start();
	if(!isset($_SESSION['admin_name']) && !isset($_SESSION['admin_pass']))
	{
		echo "<script>window.location='login.php';</script>";
	}
?>
<html>
<head>
<title>www.webtronic.com - Administrator</title>
<style>
.admin_list a
{
	text-decoration:none; font-size:20px; color:#45610d;
}
.admin_list
{
	border:1px solid #9aca3a;
}

</style>
<script language="javascript">
function pass_show()
{
	document.getElementById("change_pass").style.visibility="visible";
}
function validate()
{

	if(document.getElementById("new_user_name").value=="")
	{
		alert("New User Name is Required");	
		return false;	
	}
	if(document.getElementById("old_pass").value !=  document.getElementById("hidden_pass").value)
	{
		alert("Old Password is Wrong");	
		return false;	
	}
	if(document.getElementById("old_pass").value=="")
	{
		alert("Old Password is Required");	
		return false;	
	}
	if(document.getElementById("naw_pass").value=="")
	{
		alert("New Password is Required");	
		return false;	
	}
	if(document.getElementById("confirm_pass").value != document.getElementById("naw_pass").value)
	{
		alert("Confirm Password");	
		return false;	
	}
	var retval=confirm("Your User Name and Password is Changed now ?");
	if (retval==true)
	{		
		return true;
	}
	else
	{
		return false;
	}

}
</script>
</head>
<body style="margin-top:0px">
<center>
	<?php
		include('heading.php');
	?>
	<table border="0" width="960px" bgcolor="#FFFFFF" style="margin-top:-2px;">
		<tr><td colspan="2"><br></td></tr>
		<tr>
			<td width="600px">
				<h1>Administrator</h1>
				<center>
					<table>
						<tr>
							<td class="admin_list"><center>
								<a href="admin_order_info.php">View Order List</a>
							</td>
						</tr>
						<tr><td><br></td></tr>
						<tr>
							<td class="admin_list"><center>
								<a href="add_product/admin_add_product.php">Insert Products</a>
							</td>
						</tr>
						<tr><td><br></td></tr>
						<tr>
							<td class="admin_list"><center>
								<a href="add_product/admin_delete_product.php">Delete Product</a>
							</td>
						</tr>
						<tr><td><br></td></tr>
					</table>
				</center>
			</td>
			<td>
				<center>
					<?php
						$conn=mysql_connect("localhost","root","");
						$db=mysql_select_db("webtronic");
						$result=mysql_query("select * from admin");
					
						$row=mysql_fetch_array($result);
						
						if(isset($_POST['new_pass']))
						{
							$user=$_POST['new_user'];
							$pass=$_POST['new_pass'];
							mysql_query("update admin set admin_user='$user',admin_pass='$pass' where admin_user='$row[0]'");
						}
							
						echo "<form action='admin.php' method='post' onSubmit='return validate()'>
								<input type='hidden' id='hidden_pass' value='".$row[1]."'>
								<input type='button' value='Change User Name & Password' onClick='pass_show()'>
									<br><br>
								<table border='0' id='change_pass' style='visibility:hidden;'>
									<tr>
										<td>New User Name</td><td><input type='text' id='new_user_name' name='new_user'></td>
									</tr>
									<tr>
										<td>Old Password</td><td><input type='password' id='old_pass' name='old_pass'></td>
									</tr>
									<tr>
										<td>New Password</td><td><input type='password' id='naw_pass' name='new_pass'></td>
									</tr>
									<tr>
										<td>Confirm Password</td><td><input type='password' id='confirm_pass' name='confirm_pass'></td>
									</tr>
									<tr>
										<td></td><td><input type='submit' name='s1' value='Change'></td>
									</tr>
								</table>
							  </form>";
					?>
				</center>
			</td>
		</tr>
	</table>
	<?php
		include('footer.php');
	?>
</center>
</body>
</html>
