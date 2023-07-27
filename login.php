<?php
	session_start();
	if(!isset($_SESSION['user_name']))
	{$_SESSION['user_name']="";}
?>
<html>
<head>
<title>www.webtronic.com - Login</title>
<style>
.login_input_textbox
{
	border:1px #9aca3a solid; margin-top:5px; color:#658f11;
}
.login_submit_button
{
	background:url(image/submit_button_bg_2.jpg); height:26px; width:100px;	border:none; float:right;
}
.login_signup_button
{
	background:url(image/submit_button_bg_2.jpg); height:26px;	border:none;
}
.login_table
{
	border:1px #9aca3a  solid;
}
.login_table_head_td
{
	border-bottom:1px #9aca3a  solid;
}
</style>
<script language="javascript">

function validate()
{
	if(document.getElementById("login_txt_user_name").value=="" || document.getElementById("login_txt_user_pass").value=="")
	{
		return false;
	}
	else
	{
		return true;
	}
}

</script>
</head>
<body>
<center>
	<?php
		include('heading.php');
	?>
	<table border="0" width="960px" bgcolor="#FFFFFF" style="margin-top:-2px;">
		<tr>
			<td><br>
				<div style="float:right; height:30px; font-size:14px; font-family:Arial; color:#9aca3a"><b>
					<?php 
						if($_SESSION['user_name']!="" )
						{  	
							echo "Welcome &nbsp;". $_SESSION['user_name']." &nbsp; | &nbsp; 
							<a href='logout.php' style='color:#6A9513;'> Logout &nbsp; </a>";
						} 
						else
						{   
							echo "welcome guest &nbsp;|&nbsp; 
							<a href='login.php' style='color:#6A9513;'>login</a> &nbsp;|&nbsp; 
							<a href='signup.php' style='color:#6A9513;'>new user ?</a>";
						}
			
 						$user_error="<tr><td></td><td><br><br></td></tr>";
						if(isset ($_GET['user']))
						{ 
							if($_GET['user']!="")
							{
								$user_error="<tr><td></td><td id='invalid_error'><font color='#FF0000'>Invalid Username & Password<br><br></font></td></tr>"; 
							}
						}
					?></b>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<table border="0" width="960px">
					<tr>
						<td>
						  <object style="float:right;" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="185" height="225" title="Tushar">
                            <param name="movie" value="flash/lg_&_videocon_logo_1.swf">
                            <param name="quality" value="high">
                            <embed src="flash/lg_&_videocon_logo_1.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="185" height="225"></embed>
					      </object><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>						
						</td>
						<td>
							<table style="float:right" border="0">
								<tr>
									<td>
										<table width="350px" height="30px" style="float:right; background:url(image/menu_titile_bg_1.jpg);">
											<tr>
												<td>
													<div style="float:left; color:#006600;" ><b>Login</b></div>
												</td>
											</tr>
										</table>
									</td>
								</tr> 
								<tr>
									<td>
										<table border="0" style="float:right; width:350px;" class="login_table">
											<tr>
												<td height="200px">
													<br /><br /><br />
													<form action="user_validate.php" method="post" onSubmit="return validate()">
														<center>
															<table border="0">
																<tr>
																	<td style="color:#5E870B;">User name &nbsp; : </td>
																	<td>
																		<input id="login_txt_user_name" type="text" tabindex="1" name="txt_user_name" class="login_input_textbox" />
																	</td>
																	<td id="login_error_user"></td>
																</tr>
																<tr>
																	<td style="color:#5E870B;">Password &nbsp;&nbsp;&nbsp;  : </td>
																	<td>
																		<input id="login_txt_user_pass" type="password" tabindex="2" name="txt_user_pass" class="login_input_textbox" />
																	</td>
																	<td id="login_error_pass"></td>
																</tr>
																<?php
											 						echo $user_error;
											 					?>
															</table>
																<input type="submit" name="sub_login" tabindex="3" value=" Submit " class="login_submit_button"/>
														</center>
													<br>
													</form>
												</td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td>
										<br /><br /> 
										<center>
											<form action="signup.php">
												<input type="submit"  name="create_new_acc" tabindex="4" class="login_signup_button" value="Create  new  Accounet"/>
											</form>
										</center>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</td>
		</tr>
	</table>
	<?php
		include('footer.php');
	?>
</center>
</body>
</html>
