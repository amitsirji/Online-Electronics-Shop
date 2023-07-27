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
<title>www.webtronic.com - Payment Option</title>
<style>
.pay_cont_shop a
{
	text-decoration:none; font-family:Arial; font-size:14px; color:#006600; 
}
.pay_cont_shop td
{
	text-decoration:none; font-family:Arial; font-size:14px; 
}
.pay_cont_shop a:hover
{
	text-decoration:underline;
}
.pay_cont_shop
{
	background:url(image/cont_shop_table_bg_1.jpg); background-repeat:no-repeat;
}
.p_o_m_c
{
	width:200; font-size:13; border:#9aca3a solid 1px; color:#4f6f0d;
}
.p_m_table_font
{
	font-family:Arial; font-size:13; color:#4f6f0d;
}
</style>
<script language="javascript">
	function card_deatil()
	{
		
		if(document.getElementById("payment_mode_select").value=="credit_card")
		{
			document.getElementById("select_credit_detail").style.visibility="visible";
			document.getElementById("user_del_address").style.visibility="hidden";
		}
		else if(document.getElementById("payment_mode_select").value=="address_billing")
		{
			document.getElementById("select_credit_detail").style.visibility="hidden";
			document.getElementById("user_del_address").style.visibility="visible";
		}
		document.getElementById("card_num_error").style.visibility="hidden";
		document.getElementById("card_ver_error").style.visibility="hidden";
		document.getElementById("bank_name_error").style.visibility="hidden";
	}
	
	function validate()
	{
		if(document.getElementById("payment_mode_select").value=="credit_card")
		{
			var card_num_value=document.getElementById("card_num").value;
			var card_ver_value=document.getElementById("card_ver").value;
			var bank_name_value=document.getElementById("bank_name").value;

			if(document.getElementById("bank_name").value=="")
			{
				document.getElementById("bank_name_error").style.visibility="visible";
			}
			else
			{
				document.getElementById("bank_name_error").style.visibility="hidden";
			}
			
			if(isNaN(card_num_value) || card_num_value.length != 16 || card_num_value.indexOf(" ")!=-1)
			{
				document.getElementById("card_num_error").style.visibility="visible";
			}
			else
			{
				document.getElementById("card_num_error").style.visibility="hidden";
			}
			
			if(isNaN(card_ver_value) || card_ver_value.length != 3 || card_ver_value.indexOf(" ")!=-1)
			{
				document.getElementById("card_ver_error").style.visibility="visible";
			}
			else
			{
				document.getElementById("card_ver_error").style.visibility="hidden";
			}
			
			
			if(document.getElementById("card_num").value=="" || document.getElementById("card_ver").value=="" || document.getElementById("bank_name").value=="" || isNaN(card_num_value) || card_num_value.length != 16 || card_num_value.indexOf(" ")!=-1 || isNaN(card_ver_value) || card_ver_value.length != 3 || card_ver_value.indexOf(" ")!=-1)
			{
			 	return false;	
			}
			else
			{
				return true;
			}
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
		<tr><td><div style="float:right; height:30px; font-size:14px; font-family:Arial; color:#9aca3a"><b>
		<?php 
			if($_SESSION['user_name']!="" )
			{   
				echo "welcome &nbsp;". $_SESSION['user_name']." &nbsp; | &nbsp; 
				<a href='logout.php' style='text-decoration:none;color:#6A9513;'> logout &nbsp; </a> &nbsp; | &nbsp; 
				<a href='user_account.php' style='text-decoration:none;color:#6A9513;'> my account </a> &nbsp; | &nbsp; 
				<a href='view_cart.php' style='text-decoration:none;color:#6A9513;'> view cart &nbsp;
					<img height='30px' border='none' src='image/cart.png'></a> &nbsp;";
			} 
			else
			{ 
				echo "<br>welcome guest &nbsp;|&nbsp; 
				<a href='login.php' style='text-decoration:none;color:#6A9513;'>login</a> &nbsp;|&nbsp; 
				<a href='signup.php' style='text-decoration:none;color:#6A9513;'>new user ?</a>";
			} 
			
			$con=mysql_connect("localhost","root","");
			
			$db=mysql_select_db("webtronic");
			
			$delivery_address=$_POST['del_add_text'];
			$delivery_country=$_POST['del_country_text'];
			$delivery_state=$_POST['del_state_text'];
			$delivery_city=$_POST['del_city_text'];
			
			$user=$_SESSION['user_name'];
			
			$result=mysql_query("update signup set delivery_address='$delivery_address', delivery_country='$delivery_country' , delivery_state='$delivery_state' , delivery_city='$delivery_city' where user='$user'");
			
			

		?></b></div></td></tr>
		<tr>
			<td bgcolor="#FFFFFF"><br><br>
				<table border="0" width="950px">
					<tr>
						<td colspan="2">
							<table border="0">
								<tr>
									<td> <form action="order_now.php" method="post" onSubmit="return validate()">
										<table border="0" class="p_m_table_font">
											<tr>
												<td width="150px">
													 Select Payment Mode   
												</td>
												<td width="320px">
													<select id="payment_mode_select" name="payment_mode" class="p_o_m_c" onChange="card_deatil()">
														<option selected="selected" value="credit_card">Credit Cards</option>
														<option value="address_billing">Address Billing</option>
													</select>
												</td>
											</tr>
											<tr><td></td><td><br></td></tr>
										</table>
									</td>
								</tr>
								<tr>
									<td>
										<table border="0" id="select_credit_detail" style="visibility:visible; position:absolute; border:#9aca3a 1px solid;" class="p_m_table_font">
											<tr><td><br><br></td></tr>
											<tr>
												<td width="150px"> Select Credit Card</td>
												<td><select name="credit_card_type" class="p_o_m_c">
														<option selected="selected" value="master_card">Master Cards</option>
														<option value="visa_card">Visa</option>
													</select>
												</td>
												<td width="106px"></td>
											</tr>
											<tr>
												<td> Credit Card Number</td>
												<td><input id="card_num" type="text" name="credit_card_number" class="p_o_m_c" maxlength="16"></td>
												<td id="card_num_error" style="visibility:hidden;"><font color="#FF0000">*</font></td>
											</tr>
											<tr>
												<td>Card Verification Code</td>
												<td><input id="card_ver" type="password" name="credit_card_ver_number" class="p_o_m_c" maxlength="3"></td>
												<td id="card_ver_error" style="visibility:hidden;"><font color="#FF0000">*</font></td>
											</tr>
											<tr>
												<td>Bank Name</td>
												<td><input id="bank_name" type="text" name="credit_card_bank_name" class="p_o_m_c"></td>
												<td id="bank_name_error" style="visibility:hidden;"><font color="#FF0000">*</font></td>
											</tr>
											<tr>
												<td></td>
												<td><br><br><img height="40px" src="image/master_card.jpg">&nbsp; &nbsp; &nbsp; &nbsp; <img height="40px" src="image/visa_card.jpg"><br><br><br></td>
												<td></td>
											</tr>
											<tr>
												<td></td><td></td><td></td>
											</tr>
										</table>
										
										<table  id="user_del_address" border="0" style="visibility:hidden; position:absolute; border:#9aca3a 1px solid;" class="p_m_table_font">
											<?php
												
												echo "
											<tr><td colspan=2><center>------- Your Address -------</td></tr>
											<tr>
												<td width='150px'>Address</td>
												<td width='310px' height='100px'>$delivery_address</td>
											</tr>
											<tr>
												<td height='30px'>Country</td>
												<td>$delivery_country</td>
											</tr>
											<tr>
												<td height='30px'>State</td>
												<td>$delivery_state</td>
											</tr>
											<tr>
												<td height='30px'>City</td>
												<td>$delivery_city</td>
											</tr>
											<tr><td><br><br></td><td></td></tr>";
											?>
										</table>
									</td>
								</tr>			
							</table>
						</td>
					</tr>
					<tr>
						<td>
							<table border="0"  width="750px">
								<tr>
									<td>
										<object style="float:right;" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="185" height="225" title="Tushar">
                            <param name="movie" value="flash/lg_&_videocon_logo_1.swf">
                            <param name="quality" value="high">
                            <embed src="flash/lg_&_videocon_logo_1.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="185" height="225"></embed>
					      </object>
									</td>
									<tr>
										<td><br><br><br></td>
									</tr>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td colspan="2" height="40px" style="border-top:2px #000000 solid; border-bottom:2px #000000 solid; background:#E7F6CA;">	
							<table border="0"  style="float:right;">
								<tr>
									<td><b>Cart Total : </b></td>
									<td width="175px"></td>
									<td><b>
										<?php echo $_SESSION['cart_total']; ?>.00 Rs.</b>
									</td>
									<td width="50px"></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td width="750px"><br><br>
							<table border="0" height="50px" width="175" class="pay_cont_shop">
								<tr>
									<td colspan="2">Continue Shopping</td>
								</tr>
								<tr>
									<td><a href="home.php">Home</a> &nbsp; | &nbsp; </td>
									<td><a href="delivery_address.php">Previous Page</a></td>
								</tr>
							</table>
						</td>
						<td ><br><br>
							<table border="0">
								<tr>
									<td style='border:1px solid #9aca3a;'>
										<input type="submit" name="order_now" value="Order Now" style='height:43px; width:175px; background:url(image/add_to_cart_button_bg_1.jpg);font-size:20px; color:#3F5B07;'>
									</td><td></form></td>
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
