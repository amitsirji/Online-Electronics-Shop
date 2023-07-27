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
<title>www.webtronic.com - My Account</title>
<style>
.head_td_font a
{
	font-family:Arial; text-decoration:none; font-size:14px; color:#597b10;
}
.head_td_font
{
	 height:30px; border:1px solid #9aca3a; 
}
.main_two_table
{
	 position:absolute; margin-top:-5px;
}
.main_two_table_td
{
	background:#F2FDDB; border:1px solid #9aca3a;
}
.hidden_table
{
	position:absolute; margin-top:-5px; background:#F2FDDB;
}
.text_box
{
	border:1px solid #9aca3a; background:#f6fee5; color:#597b10; width:200px;
}
.my_detail_td
{
	height:40px; width:170px; color:#597b10; font-family:Arial; font-size:14;
}
.error_
{
	color:#FF0000; visibility:hidden;
}
</style>

<script language="javascript">
function my_detail()
{	
	//alert("a");
	document.getElementById("pass").style.visibility="hidden";
	document.getElementById("detail").style.visibility="visible";
	document.getElementById("chang_pass").style.background="#ffffff";
	document.getElementById("my_detail").style.background="#F2FDDB";
	document.getElementById("ch_pass_error").style.visibility="hidden";
	document.getElementById("old_pass_error").style.visibility="hidden";
	document.getElementById("ch_conf_pass_error").style.visibility="hidden";
	document.getElementById("space").style.height="625px";
}
function chang_pass()
{
	//alert("b");
	document.getElementById("pass").style.visibility="visible";
	document.getElementById("detail").style.visibility="hidden";
	document.getElementById("chang_pass").style.background="#F2FDDB";
	document.getElementById("my_detail").style.background="#ffffff";
	document.getElementById("space").style.height="350px";
	document.getElementById("error1").style.visibility="hidden";
	document.getElementById("error2").style.visibility="hidden";
	document.getElementById("error3").style.visibility="hidden";
	document.getElementById("error4").style.visibility="hidden";
	document.getElementById("error5").style.visibility="hidden";
	document.getElementById("error6").style.visibility="hidden";
	document.getElementById("error7").style.visibility="hidden";
	document.getElementById("error8").style.visibility="hidden";
}
function chang_pass_submit()
{
	//alert("");
	var ch_pass=document.getElementById("ch_pass").value;
	var ch_cinf_pass=document.getElementById("ch_conf_pass").value;
	var old_pass=document.getElementById("old_pass").value;
	var old_pass_sess=document.getElementById("hide_old_pass").value;

	if(old_pass=="")
	{document.getElementById("old_pass_error").style.visibility="visible";}
	else
	{document.getElementById("old_pass_error").style.visibility="hidden";}

	if(ch_pass=="")
	{document.getElementById("ch_pass_error").style.visibility="visible";}
	else
	{document.getElementById("ch_pass_error").style.visibility="hidden";}
	
	if(ch_cinf_pass=="")
	{document.getElementById("ch_conf_pass_error").style.visibility="visible";}
	else
	{document.getElementById("ch_conf_pass_error").style.visibility="hidden";}
	
	if(ch_pass != ch_cinf_pass || ch_cinf_pass=="")
	{document.getElementById("ch_conf_pass_error").style.visibility="visible";}
	else
	{document.getElementById("ch_conf_pass_error").style.visibility="hidden";}

	if(old_pass!=old_pass_sess)
	{
		document.getElementById("old_pass_error").style.visibility="visible";
		
	}
	else
	{
		document.getElementById("old_pass_error").style.visibility="hidden";
	}

	if(ch_pass=="" || ch_cinf_pass=="" || ch_pass != ch_cinf_pass || old_pass != old_pass_sess)
	{	return false;	}
	else
	{	
		var retval=confirm("Your Password is Changed now ?");
		if (retval==true)
		{		
			return true;
		}
		else
		{
			return false;
		}
	}	
}
function my_detail_submit()
{
		var mo_no=document.getElementById("md8").value;
		
		if(document.getElementById("md1").value=="")
		{ document.getElementById("error1").style.visibility="visible"; }
		else
		{ document.getElementById("error1").style.visibility="hidden"; }
		
		if(document.getElementById("md3").value=="")
		{document.getElementById("error3").style.visibility="visible"; }
		else
		{ document.getElementById("error3").style.visibility="hidden"; }
		
		if(document.getElementById("md4").value=="")
		{document.getElementById("error4").style.visibility="visible"; }
		else
		{ document.getElementById("error4").style.visibility="hidden"; }
		
		if(document.getElementById("md5").value=="")
		{document.getElementById("error5").style.visibility="visible"; }
		else
		{ document.getElementById("error5").style.visibility="hidden"; }
		
		if(document.getElementById("md6").value=="")
		{document.getElementById("error6").style.visibility="visible"; }
		else
		{ document.getElementById("error6").style.visibility="hidden"; }
		
		if(document.getElementById("md7").value=="")
		{document.getElementById("error7").style.visibility="visible"; }
		else
		{ document.getElementById("error7").style.visibility="hidden"; }
		
		if(isNaN(mo_no)|| mo_no.indexOf(" ")!=-1 || mo_no.indexOf("+")!=0 || mo_no.length != 13)
		{document.getElementById("error8").style.visibility="visible";}
		else
		{ document.getElementById("error8").style.visibility="hidden"; }
		
		if(mo_no.indexOf(" ")!=-1)
		{document.getElementById("error8").style.visibility="visible";}
		
		if (document.getElementById("md1").value=="" || document.getElementById("md3").value=="" || document.getElementById("md4").value=="" || document.getElementById("md5").value=="" || document.getElementById("md6").value=="" || document.getElementById("md7").value=="" || isNaN(mo_no)|| mo_no.indexOf(" ")!=-1 || mo_no.indexOf("+")!=0 || mo_no.length != 13 )
		{	 return false;	}
		else
		{	
			var retval=confirm("Your Personal Detail is Changed now ?");
			if (retval==true)
			{		
				return true;
			}
			else
			{
				return false;
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
		?></b></div></td></tr>
		<tr>
			<td bgcolor="#FFFFFF">
				<br><br>
				<table border="0">
					<tr>
						<td id="my_detail" class="head_td_font" style="background:#F2FDDB;">
							<a href="#" onClick="my_detail()"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <b>My Detail</b> &nbsp; &nbsp; &nbsp; &nbsp; </a>
						</td>
						<td id="chang_pass" class="head_td_font">
							<a href="#" onClick="chang_pass()"> &nbsp;<b>Change Password</b>&nbsp; </a>
						</td>
					</tr>
				</table>
				
<!-- ------------------------------------------------ my detail ------------------------------------------ !-->
				<?php
				$user=$_SESSION['user_name'];
				$con=mysql_connect("localhost","root","");
				$db=mysql_select_db("webtronic");
				$result=mysql_query("select * from signup where user='$user'");
				
				$row=mysql_fetch_array($result);
				//echo $row[2];
				
				echo "
				<table border='0' id='detail' class='main_two_table' style='visibility:visible;'>
					<tr>
						<td width='945px'colspan='2' class='main_two_table_td'>
							<table border='0' width='138px' class='hidden_table' style='margin-left:-1px;'>
								<tr>
									<td></td>
								</tr>
							</table>
							<br><br><center>
								<form action='update_account.php ? update=detail' method='post' onSubmit='return my_detail_submit()'>
									<table border='0' style='border:1px solid #9aca3a;'>
										<tr>
											<td width='50px'>&nbsp;</td>
											<td></td> <td></td> 
											<td width='50px'></td>
										</tr>
										<tr>
											<td></td>
											<td class='my_detail_td'>User Name</td> 
											<td style='color:#597b10'><b>$user</b></td> 
											<td></td>
										</tr>
										<tr>
											<td></td>
											<td class='my_detail_td'>First Name</td>
											<td>
												<input id='md1' type='text' name='ch_first_name' value='$row[2]' class='text_box'>
											</td>
											<td id='error1' class='error_'>*</td>
										</tr>
										<tr>
											<td></td>
											<td class='my_detail_td'>Last Name</td>
											<td>
												<input id='md2' type='text' name='ch_last_name' value='$row[3]' class='text_box'>
											</td>
											<td id='error2' class='error_'>*</td>
										</tr>
										<tr>
											<td></td>
											<td class='my_detail_td'>E-mail</td>
											<td>
												<input id='md3' type='text' name='ch_email' value='$row[4]' class='text_box'>
											</td>
											<td id='error3' class='error_'>*</td>
										</tr>
										<tr>
											<td></td>
											<td class='my_detail_td'>Address</td>
											<td>
												<textarea id='md4' name='ch_address' class='text_box'>$row[6]</textarea>
											</td>
											<td id='error4' class='error_'>*</td>
										</tr>
										<tr>
											<td></td>
											<td class='my_detail_td'>Country</td>
											<td>
												<input id='md5' type='text' name='ch_country' value='$row[7]' class='text_box'>
											</td>
											<td id='error5' class='error_'>*</td>
										</tr>
										<tr>
											<td></td>
											<td class='my_detail_td'>State</td>
											<td>
												<input id='md6' type='text' name='ch_state' value='$row[8]' class='text_box'>
											</td>
											<td id='error6' class='error_'>*</td>
										</tr>
										<tr>
											<td></td>
											<td class='my_detail_td'>City</td>
											<td>
												<input id='md7' type='text' name='ch_city' value='$row[9]' class='text_box'>
											</td>
											<td id='error7' class='error_'>*</td>
										</tr>
										<tr>
											<td></td>
											<td class='my_detail_td' >Mobile Number</td>
											<td class='my_detail_td'>
												<input id='md8' type='text' name='ch_mo_no' value='$row[10]' class='text_box' maxlength='13'><br>
											</td>
											<td id='error8' class='error_'>*<br><br></td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td>
												<div style='color:#597b10; font-size:14px;'>ex : +911234567890</div>
											</td>
											<td></td>
										</tr>
										<tr>
											<td></td>
											<td></td> 
											<td><br><br>
												<input type='submit' name='s1' value='Change' style='float:right;height:25px; width:75px; background:url(image/submit_button_bg_1.jpg); border:none;'><br><br> 
											</td> 
											<td></td>
										</tr>
									</table><br><br>
								</form>
							</center>
						</td>
					</tr>
				</table>"; ?>
<!--------------------------------------------confirm password --------------------------------------- !-->				


				<table border="0" id="pass" class="main_two_table" style="visibility:hidden;">
					<tr>
						<td width="945px" class="main_two_table_td">
							<table border="0" width="136px" class="hidden_table" style="margin-left:141px;">
								<tr>
									<td></td>
								</tr>
							</table><br><br>
							<center>
								<form action="update_account.php ? update=pass" method="post" onSubmit="return chang_pass_submit()">
									<table border="0" style="border:1px solid #9aca3a;">
										<tr>
											<td><br></td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td width="50px" height="40px"></td>
											<td width="200px"  style="color:#597b10;" class="my_detail_td" >Enter Old Password</td>
											<td>
												<input type="password" id="old_pass" name="old_pass" class="text_box">
											</td>
											<td id="old_pass_error" width="50px" style="visibility:hidden; color:#FF0000;">* 
												<?php 
													$user=$_SESSION['user_name'];
													$old_pass_sess_arr=mysql_query("select pass from signup where user='$user'");
													$old_pass_sess=mysql_fetch_array($old_pass_sess_arr);
													echo"<input type='hidden' id='hide_old_pass' value='$old_pass_sess[0]' name='hide_old_pass'>"; 
												?>
											</td>
										</tr>
										<tr>
											<td width="50px" height="40px"></td>
											<td width="200px"  style="color:#597b10;" class="my_detail_td" >Enter New Password</td>
											<td>
												<input type="password" id="ch_pass" name="ch_pass_name" class="text_box">
											</td>
											<td id="ch_pass_error" width="50px" style="visibility:hidden; color:#FF0000;">*</td>
										</tr>
										<tr>
											<td height="40px"></td>
											<td style="color:#597b10;" class="my_detail_td">Confirm New Password</td>
											<td>
												<input type="password" id="ch_conf_pass" class="text_box">
											</td>
											<td id="ch_conf_pass_error" style="visibility:hidden; color:#FF0000;">*</td>									
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td>
												<input style="float:right; height:25px; width:75px; background:url(image/submit_button_bg_1.jpg); border:none;" type="submit" value="Change">
											</td>
											<td><br><br><br></td>
										</tr>
									</table><br><br>
								</form>
						</td>
					</tr>
				</table>
	
<!-- -------------------------------------------------------------------------------------------- !-->			
				
				<table height="625px" border="0" id="space">
					<tr>
						<td></td>
					</tr>
				</table>
<!-- ----------------------------------message--------------------------------------------------- !-->		
	
			</td>
		</tr>
	</table>
	<?php
		include('footer.php');
	?>
</center>
</body>
</html>
