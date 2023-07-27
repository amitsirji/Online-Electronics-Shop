<?php
	session_start();
	if(!isset($_SESSION['user_name']))
	{$_SESSION['user_name']="";}
?>
<html>
<head>
<title>www.webtronic.com - Signup</title>
<style>
	.address_textarea
	{	height:60px; width:220px; border:1px #9aca3a solid; color:#658f11;	}
	.signup_textbox
	{	width:220px; border: 1px #9aca3a solid;	color:#658f11;}
	.signup_select
	{   width:220px; border: 1px #9aca3a solid; color:#658f11;}
	.left
	{   float:left; padding: 0 10px 0 0; color:#679114 }
	.signup_submit
	{   background:url(image/submit_button_bg_2.jpg); height:26px; width:90px; border:none; }
	.signup_table_body
	{   border: 1px #9aca3a solid; }
	option
	{
		color:#679114
	}
</style>
<script language="javascript">
function echeck(str) 
{
		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1)
		{
		   document.getElementById("error_email").style.visibility="visible";
		   return false
		}
		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr)
		{
		   document.getElementById("error_email").style.visibility="visible";
		   return false
		}
		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr)
		{
		    document.getElementById("error_email").style.visibility="visible";
		    return false
		}
		if (str.indexOf(at,(lat+1))!=-1)
		{
		    document.getElementById("error_email").style.visibility="visible";
		    return false
		}
		if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot)
		{
		    document.getElementById("error_email").style.visibility="visible";
		    return false
		}
		if (str.indexOf(dot,(lat+2))==-1)
		{
		    document.getElementById("error_email").style.visibility="visible";
		    return false
		}
		if (str.indexOf(" ")!=-1)
		{
		    document.getElementById("error_email").style.visibility="visible";
		    return false
		}
}
function validate()
	{	
		var mo_no=document.getElementById("mobile_no").value;
		
		if(document.getElementById("user").value=="")
		{document.getElementById("error_user").style.visibility="visible"; }
		if(document.getElementById("pass").value=="")
		{document.getElementById("error_pass").style.visibility="visible"; }
		if(document.getElementById("pass_conf").value=="")
		{document.getElementById("error_conf_pass").style.visibility="visible"; }
		if(document.getElementById("nm").value=="")
		{document.getElementById("error_name").style.visibility="visible"; }
		if(document.getElementById("email").value=="")
		{document.getElementById("error_email").style.visibility="visible"; }
		if(document.getElementById("address").value=="")
		{document.getElementById("error_address").style.visibility="visible"; }
		if(isNaN(mo_no)|| mo_no.length != 10)
		{document.getElementById("error_mobile").style.visibility="visible";}
		
		var emailID=document.frm1.txt_email
		
		if ((emailID.value==null)||(emailID.value==""))
		{
			document.getElementById("error_email").style.visibility="visible";
			emailID.focus()
			return false
		}
		if (echeck(emailID.value)==false)
		{
			emailID.value=""
			emailID.focus()
			return false
		}
	
		
		if (document.getElementById("pass").value=="" || document.getElementById("user").value=="" || document.getElementById("pass_conf").value=="" || document.getElementById("nm").value=="" || document.getElementById("email").value=="" || document.getElementById("address").value=="" || document.getElementById("country").value=="" || document.getElementById("state").value=="" || document.getElementById("city").value=="" || isNaN(mo_no)|| mo_no.length != 10 ||document.getElementById("pass").value != document.getElementById("pass_conf").value)
		{
			 return false;	
		}
		else
		{
			return true;
		}
	}

	function reset_()
	{	
		document.getElementById("error_conf_pass").style.visibility="hidden";
		document.getElementById("error_pass").style.visibility="hidden";
		document.getElementById("error_user").style.visibility="hidden";
		document.getElementById("error_name").style.visibility="hidden"; 
		document.getElementById("error_email").style.visibility="hidden";
		document.getElementById("error_address").style.visibility="hidden"; 
		document.getElementById("error_mobile").style.visibility="hidden";
		document.getElementById("error_mobile1").style.visibility="hidden";

	}
	function enter_user_name()
	{	if(document.getElementById("user").value=="")
		{	document.getElementById("error_user").style.visibility="visible";	}
		else
		{	document.getElementById("error_user").style.visibility="hidden";	}
	}
	function enter_pass()
	{	if(document.getElementById("pass").value=="")
		{	document.getElementById("error_pass").style.visibility="visible";	}
		else
		{	document.getElementById("error_pass").style.visibility="hidden";	}
	}
	function conf_pass()
	{	if(document.getElementById("pass").value == document.getElementById("pass_conf").value)
		{	document.getElementById("error_conf_pass").style.visibility="hidden";	}
		else
		{	document.getElementById("error_conf_pass").style.visibility="visible";	}
	}
	function enter_name()
	{	if(document.getElementById("nm").value=="")
		{	document.getElementById("error_name").style.visibility="visible";	}
		else
		{	document.getElementById("error_name").style.visibility="hidden";	}
	}
	function enter_email()
	{	if(document.getElementById("email").value=="")
		{	document.getElementById("error_email").style.visibility="visible";	}
		else
		{	document.getElementById("error_email").style.visibility="hidden";	}
	}
	function enter_address()
	{	if(document.getElementById("address").value=="")
		{	document.getElementById("error_address").style.visibility="visible";	}
		else
		{	document.getElementById("error_address").style.visibility="hidden"; 	}
	}
	
</script>
</head>
<body>
<center>
	<?php
		include('heading.php');
	?>
	<table border="0" width="960px" bgcolor="#FFFFFF"">
		<tr>
			<td><br>
				<div style="float:right; height:30px; font-size:14px; font-family:Arial; color:#9aca3a"><b>
					<?php 
						if($_SESSION['user_name']!="" )
						{   
							echo "<form action='logout.php' method='post'>Welcome &nbsp;". $_SESSION['user_name']." &nbsp; |  <input type='hidden' name='hide' value='home.php'>
					  				<input type='submit' name='s1' value='Logout' style='border:none; color:#6A9513; background:none;'></form> ";
						} 
						else
						{  
							 echo "welcome guest &nbsp;|&nbsp; 
							 	<a href='login.php' style='color:#6A9513;'>login</a> &nbsp;|&nbsp; 
								<a href='signup.php' style='color:#6A9513;'>new user ?</a>";
						}
						$name="";
						$last_name="";
						$email="";
						$address="";
						$country="";
						$state="";
						$city="";
						$mo="";
						$male="checked=checked"; $female="";
						$user_error="";
						if(isset($_GET['user']))
						{
							if($_GET['user']!="")
							{	
								$user_error="<tr><td></td><td></td><td style='color:#ff0000;'>user name is not available</td><td></td></tr>";	
							}
							else
							{	$user_error="";  }
						}
			
						if(isset($_GET['name']))
						{	$name=$_GET['name'];	}
			
						if(isset($_GET['last_name']))
						{	$last_name=$_GET['last_name'];	}	
			
						if(isset($_GET['email']))
						{	$email=$_GET['email'];  }
			
						if(isset($_GET['gender']))
						{
							if($_GET['gender']=="m")
							{	$male="checked=checked";	}
							else
							{	$female="checked=checked";	}	
						}
			
						if(isset($_GET['address']))
						{	$address=$_GET['address']; 	}
			
						if(isset($_GET['country']))
						{	$country=$_GET['country'];	}
			
						if(isset($_GET['state']))
						{	$state=$_GET['state'];	}
			
						if(isset($_GET['city']))
						{	$city=$_GET['city'];	}
			
						if(isset($_GET['mo']))
						{	$mo="+".$_GET['mo'];	}
			
					?></b>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<center>
					<table border="0" style="margin-left:20px; background:url(image/menu_titile_bg_1.jpg);" width="546px" height="30px">
						<tr>
							<td>
								<div style="float:left; color:#006600;"><b>Sign Up</b></div>
							</td>
						</tr>
					</table>
					<table border="0" style="margin-left:20px;"  class="signup_table_body" >
						<form name="frm1" action="signup_submit.php" method="post" onSubmit="return validate()">
							<tr>
								<td width="50px"></td> 
								<td width="200px"><br></td> 
								<td></td> <td></td> 
							</tr>
							<tr>
								<td></td> 
								<td style="color:#415F04"><b>Your Personal Details</b></td> 
								<td></td> <td></td> 
							</tr>
							<tr>
								<td></td>
								<td>
									<div class="left">Username</div>
								</td>
								<td>
									<input id="user" class="signup_textbox" tabindex="1" type="text" name="txt_user" onBlur="enter_user_name()" >
								</td>
								<td> 
									<table id="error_user" style="visibility:hidden">
										<tr>
											<td width="50">
												<font color="#FF0000">*</font>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<?php	
								echo $user_error;
							?>
							<tr>
								<td></td>
								<td>
									<div class="left">Password</div>
								</td>
								<td>
									<input id="pass" class="signup_textbox" tabindex="2" type="password" name="txt_pass" onBlur="enter_pass()" >
								</td>
								<td> 
									<table id="error_pass" style="visibility:hidden">
										<tr>
											<td>
												<font color="#FF0000">*	</font>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>
									<div class="left">Confirm Password</div>
								</td>
								<td>
									<input id="pass_conf" class="signup_textbox" tabindex="3" type="password" name="txt_pass_conf" onBlur="conf_pass()">
								</td>
								<td> 
									<table id="error_conf_pass" style="visibility:hidden">
										<tr>
											<td>
												<font color="#FF0000">*</font>
											</td>
										</tr>
									</table>
								</td>
							</tr>	
							<?php			
								echo"<tr><td></td>
										<td>
											<div class='left'>Name</div>
										</td>
										<td>
											<input id='nm' class='signup_textbox' tabindex='4' type='text' name='txt_name' value='$name' onBlur='enter_name()'>
										</td>
										<td> 
											<table id='error_name' style='visibility:hidden'>
												<tr>
													<td>
														<font color='#FF0000'>*</font>
													</td>
												</tr>
											</table>
										</td>
									</tr>";

								echo"<tr><td></td>	
										<td>
											<div class='left'>Last Name</div>
										</td>
										<td>
											<input id='last nm' class='signup_textbox' tabindex='5' type='text' name='txt_last_name' value='$last_name' onBlur='enter_last_name()'>
										</td>
										<td> 
											<table id='error_last_name' style='visibility:hidden'>
												<tr>
													<td>
														<font color='#FF0000'>*</font>
													</td>
												</tr>
											</table>
										</td>
									</tr>";

								echo"<tr><td></td>
										<td>
											<div class='left'>E-mail</div>
										</td>
										<td>
											<input id='email' class='signup_textbox' tabindex='6' type='text' name='txt_email' value='$email' onBlur='enter_email()'>
										</td>
										<td> 
											<table id='error_email' style='visibility:hidden'>
												<tr>
													<td>
														<font color='#FF0000'>*</font>
													</td>
												</tr>
											</table>
										</td>
									</tr>";
	
								echo"<tr><td></td>
										<td>	
											<div class='left'>Gender</div>
										</td>
										<td style='color:#679114;'>
											<input id='male'  tabindex='7' type='radio' name='gender' value='m' $male> Male  &nbsp; &nbsp; &nbsp;
											<input id='female' tabindex='8' type='radio' name='gender' value='f' $female>Female
										</td>
										<td> </td>
									</tr>";
	
								echo"<tr>
										<td></td>
										<td style='color:#415F04;'><br><br><b>Your Contat Details</b>
										</td> <td></td> <td></td> 
									</tr>
									<tr>
										<td></td>
										<td>
											<div class='left'>Address</div>
										</td>
										<td>
											<textarea id='address' tabindex='9' name='txt_address' class='address_textarea'  onBlur='enter_address()'>$address</textarea>				
										</td>
										<td> 
											<table id='error_address' style='visibility:hidden'>
												<tr>
													<td>
														<font color='#FF0000'>*</font>
													</td>
												</tr>
											</table>
										</td>
									</tr>";
						
								echo"<tr>
										<td></td>
										<td>
											<div class='left'>Country</div>
										</td>
										<td>
											<input id='country' class='signup_textbox' tabindex='10' type='text' name='txt_country' value='$country' onBlur='enter_country()'>
										</td>
										<td>
											<table id='error_country' style='visibility:hidden'>
												<tr>
													<td>
														<font color='#FF0000'>*</font>
													</td>
												</tr>
											</table>
										</td>
									</tr>";
	
								echo"<tr>
										<td></td>
										<td>
											<div class='left'>State</div>
										</td>
										<td>
											<input id='state' class='signup_textbox' tabindex='11' type='text' name='txt_state' value='$state' onBlur='enter_state()'>
										</td>
										<td>
											<table id='error_state' style='visibility:hidden'>
												<tr>
													<td>
														<font color='#FF0000'>*</font>
													</td>
												</tr>
											</table>
										</td>
									</tr>";
	
								echo"<tr>
										<td></td>
										<td>
											<div class='left'>City</div>
										</td>
										<td>
											<input id='city' tabindex='12' name='select_city' class='signup_select' type='text' value='$city' onBlur='enter_city()' >
										</td>
										<td> 
											<table id='error_city' style='visibility:hidden'>
												<tr>
													<td>
														<font color='#FF0000'>*</font>
													</td>
												</tr>
											</table>
										</td>
									</tr>";
					
								echo"<tr>	
										<td></td>
										<td>
											<div class='left'>Mobile Number</div>
										</td>
										<td>
											<input id='mobile_no' class='signup_textbox' tabindex='13' type='text' name='txt_mo' value='$mo' onBlur='enter_mobile()' onKeyPress='mobile_number_ascii(event)'>
										</td>
										<td>
											<table id='error_mobile' style='visibility:hidden'>
												<tr>
													<td>
														<font color='#FF0000'>*</font>
													</td>
												</tr>
											</table>
										</td>
									</tr>";
							?>
							<tr>
								<td></td>
								<td></td>
								<td style="color:#666666; font-size:14px">ex : +911234567890 
									<table id='error_mobile1' style='visibility:hidden' >
										<tr>
											<td>
												<font size="-1" color='#FF0000'>space is not allowed here</font>
											</td>
										</tr>
									</table>
								</td>
								<td></td>
							</tr>
		
							<tr>
								<td></td>
								<td></td>
								<td>
									<br>
									<div style="float:right;">
										<input type="submit" name="s1" tabindex="14"  class="signup_submit" value=" Submit " >
										
										<input type="reset" name="reser" tabindex="15" onClick="reset_()" class="signup_submit" value="&nbsp; Reset &nbsp;" />
										
									</div>
							</form>
								</td>
								<td></td>
							</tr>
							<tr>
								<td height="30px"></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</table>
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
