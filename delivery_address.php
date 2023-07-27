<?php
	session_start();
	if(isset($_SESSION['user_name']))
	{
		if($_SESSION['user_name']=="")
		{
			echo "<script>window.location='login.php';</script>";
		}
	}
	if(!isset($_SESSION['user_name']))
	{
		echo "<script>window.location='login.php';</script>";
	}

?>
<html>
<head>
<title>www.webtronic.com - Delivery Address</title>
<style>
.del_cont_shop a
{
	text-decoration:none; font-family:Arial; font-size:14px; color:#006600; 
}
.del_cont_shop td
{
	text-decoration:none; font-family:Arial; font-size:14px; 
}
.del_cont_shop a:hover
{
	text-decoration:underline;
}
.del_cont_shop
{
	background:url(image/cont_shop_table_bg_1.jpg);
}
.d_a_y_a_td_1
{
	font-family:Arial; font-size:13px; height:25; color:#415e07; 
}
.d_a_y_a_td_2
{
	font-family:Arial; font-size:13px; color:#5f8414; border-bottom:#9aca3e solid 1px;
}
.d_a_h_td
{
	font-size:20; font-family:Arial; color:#415e07; background:url(image/single_product_title_bg_1.jpg); background-repeat:repeat-x; 
}
.d_a_text_box
{
	border:#9aca3a solid 1px; font-family:Arial; font-size:13px; color:5f8414; width:299px;
}
</style>
</head>
<body style="margin-top:0px">
<center>
	<?php
		include('heading.php');
	?>
	<table border="0" width="960px" bgcolor="#FFFFFF" style="margin-top:-2px;">
		<tr><td><div style="float:right; height:30px; font-size:14px; font-family:Arial; color:#9aca3a"><b>
		<?php 
			if($_SESSION['user_name']!="" )
			{   echo "welcome &nbsp;". $_SESSION['user_name']." &nbsp; | &nbsp; <a href='logout.php' style='text-decoration:none;color:#6A9513;'> logout &nbsp; </a> &nbsp; | &nbsp; <a href='user_account.php' style='text-decoration:none;color:#6A9513;'> my account </a> &nbsp; | &nbsp; <a href='view_cart.php' style='text-decoration:none;color:#6A9513;'> view cart &nbsp;<img height='30px' border='none' src='image/cart.png'></a> &nbsp;";
			} 
			else
			{   echo "<br>welcome guest &nbsp;|&nbsp; <a href='login.php' style='text-decoration:none;color:#6A9513;'>login</a> &nbsp;|&nbsp; <a href='signup.php' 
						style='text-decoration:none;color:#6A9513;'>new user ?</a>";
			} 
		?></b></div></td></tr>
		<tr style="">
			<td bgcolor="#FFFFFF" ><br><br>
		<?php
		$conn=mysql_connect("localhost","root","");
		
		$db=mysql_select_db("webtronic");		
		$user=$_SESSION['user_name'];
		
		$result=mysql_query("select * from signup where user='$user'");
		
		$row=mysql_fetch_array($result);
		
			echo"<table border='0'>
					<tr>
						<td class='d_a_h_td'>
							<center><div style='padding:7px 0 8px 0'>Your Address</div> </center>
						</td>
						<td class='d_a_h_td'>
							<center><div style='padding:7px 0 8px 0'>Your Billing & Delivery Address</div> </center>
						</td>
					</tr>
					<tr>
						<td width='465px'>
							<table border='0' width='420px'>
								<tr>
									<td class='d_a_y_a_td_1' width='100px'>First Name</td><td class='d_a_y_a_td_1'>: </td>
									<td width='300px' class='d_a_y_a_td_2'>$row[2]</td>
								</tr>
								<tr>
									<td class='d_a_y_a_td_1'>Last Name</td><td class='d_a_y_a_td_1'>: </td>
									<td class='d_a_y_a_td_2'>$row[3]</td>
								</tr>
								<tr>
									<td class='d_a_y_a_td_1'>Address</td><td class='d_a_y_a_td_1'>: </td>
									<td class='d_a_y_a_td_2' height='60px'>$row[6]</td>
								</tr>
								<tr>
									<td class='d_a_y_a_td_1'>Country</td><td class='d_a_y_a_td_1'>: </td>
									<td class='d_a_y_a_td_2'>$row[7]</td>
								</tr>
								<tr>
									<td class='d_a_y_a_td_1'>State</td><td class='d_a_y_a_td_1'>: </td>
									<td class='d_a_y_a_td_2'>$row[8]</td>
								</tr>
								<tr>
									<td class='d_a_y_a_td_1'>City</td><td class='d_a_y_a_td_1'>: </td>
									<td class='d_a_y_a_td_2'>$row[9]</td>
								</tr>
								<tr>
									<td class='d_a_y_a_td_1'>Mobile Number</td><td class='d_a_y_a_td_1'>: </td>
									<td class='d_a_y_a_td_2'>$row[10]</td>
								</tr>
								<tr>
									<td class='d_a_y_a_td_1'>E-mail</td><td class='d_a_y_a_td_1'>: </td>
									<td class='d_a_y_a_td_2'>$row[4]</td>
								</tr>
								<tr>
									<td><br></td><td><br></td>
								</tr>
							</table>
						</td>
						<td width='465px'>
							<table border='0' width='420px' style='float:right;'>
								<tr>
									<td><br></td><td class='d_a_y_a_td_1' ></td>
									<td width='300px'></td>
								<tr>
								<tr>
									<td><br></td><td class='d_a_y_a_td_1'></td>
									<td><form action='payment_option.php' method='post'></td>
								<tr>
								<tr>
									<td class='d_a_y_a_td_1'>Address</td><td class='d_a_y_a_td_1'>: </td>
									<td><textarea name='del_add_text' style='width:299px;' class='d_a_text_box'>$row[11]</textarea></td>
								</tr>
								<tr>
									<td class='d_a_y_a_td_1'>Country</td><td class='d_a_y_a_td_1'>: </td>
									<td><input type='text' name='del_country_text' value='$row[12]' class='d_a_text_box'></td>
								</tr>
								<tr>
									<td class='d_a_y_a_td_1'>State</td><td class='d_a_y_a_td_1'>: </td>
									<td><input type='text' name='del_state_text' value='$row[13]' class='d_a_text_box'></td>
								</tr>
								<tr>
									<td class='d_a_y_a_td_1'>City</td><td class='d_a_y_a_td_1'>: </td>
									<td><input type='text' name='del_city_text' value='$row[14]' class='d_a_text_box'></td>
								</tr>
								<tr>
									<td><br></td><td class='d_a_y_a_td_1'></td>
									<td rowspan=2 class='d_a_y_a_td_1'><center><i> you may chang your delivery address here </i></center></td>
								</tr>
								<tr>
									<td><br></td><td class='d_a_y_a_td_1'></td>
									
								<tr>
							</table>
							
						</td>
					</tr>";
		?>
					<tr>
						<td colspan="2"><br>
							<table border="0" width="950px">
								<tr><td colspan="2" height="40" style="border-top:2px #000000 solid; border-bottom:2px #000000 solid; background:#E7F6CA;">
									<table border="0" style="float:right;" >
										<tr>
											<td><b>Cart Total : </b></td>
											<td width="175px"></td>
											<td><b>
												<?php echo $_SESSION['cart_total']; ?>.00 Rs.</b>
											</td>
											<td width="50px"></td>
										</tr>
									</table>
								</td></tr>
								<tr><td colspan="2" height="40"></td></tr>
								<tr>
									<td>
										<table border="0" width="175px" height="50px" class="del_cont_shop">	
											<tr>
												<td colspan=3>Continue Shopping</td>
											</tr>
											<tr>
												<td><a href="home.php">Home</a> &nbsp; | &nbsp; </td>
												<td><a href="view_cart.php">Previous Page</a></td>
											</tr>
										</table>
									</td>
									<td>
										<table border="0" style="float:right;">
											<tr>
												<td style='border:1px solid #9aca3a;'>
													<input type="submit" name="delivery_deatil_submit" value="Pay Now" style='height:43px; width:175px; background:url(image/add_to_cart_button_bg_1.jpg);font-size:20px; color:#3F5B07;'>
												</td><td></form></td>
											</td>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<?php
		include('footer.php');
	?>
</center>
</body>
</html>
