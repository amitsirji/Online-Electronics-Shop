<?php
	session_start();	
	$_SESSION['file_name']="contact.php";
	if(!isset($_SESSION['user_name']))
	{$_SESSION['user_name']="";}
?>
<html>
<head>
<title>www.webtronic.com - Contact us</title>
<style>
.header_menu_td_4 a
{
	color:#000000; background:url(image/menu_item_bg_1.jpg); background-repeat:repeat-x;
}
p
{
	font-family:Arial; font-size:14px; color:#666666;
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
			{   	
				echo "welcome &nbsp;". $_SESSION['user_name']." &nbsp; | &nbsp; 
				<a href='logout.php' style='text-decoration:none;color:#6A9513;'> logout &nbsp; </a> &nbsp; | &nbsp; 
				<a href='user_account.php' style='text-decoration:none;color:#6A9513;'> my account </a> &nbsp; | &nbsp;
				 <a href='view_cart.php' style='text-decoration:none;color:#6A9513;'> view cart &nbsp;<img height='30px' border='none' src='image/cart.png'></a> &nbsp;";
			} 
			else
			{   
				echo "<br>welcome guest &nbsp;|&nbsp; 
				<a href='login.php'  style='text-decoration:none;color:#6A9513;'>login</a> &nbsp;|&nbsp; 
				<a href='signup.php' style='text-decoration:none;color:#6A9513;'>new user ?</a>";
			} 
		?></b></div></td></tr>
		<tr>
			<td >
				<table border="0" width="955px">
					<tr>
						<td width="725px"><center>
							<table border="0" width="600px">
								<tr>
									<td>
										<div style="font-family:arial; font-size:20px; color:#006633;">Contact Us</div>
									</td>
								</tr>
								<tr>
									<td>
									<p>
<br><br>


<b>Reach us by phone:</b><br><br>
You can talk to our customer care specialist anytime between 8am to 6pm  Monday to Saturday. We would be extending this service 24 * 7 for you in the coming months.<br>
Phone No. :<br>
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>Tushar Sabapara</b>  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; +91 8866 3040 56  <br>
  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;<b>Ankit Chaniyara</b>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; +91 9687 0002 43<br>
    &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;<b>Dhaval Dave</b> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; +91 7405 2416 50<br><br><br><br>

<b>Reach us by email:</b><br><br>
We request you to send us an email at the following address and we will respond within two working days with the resolution. Mention your order ID very clearly if you are contacting us for your order related issues.<br>

email :<br>
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;<b>Tushar Sabapara</b>   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;tusharsabapara@gmail.com<br>

 &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;<b>Ankit Chaniyara</b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp; ankitchaniyara2135@gmail.com<br>
 
 &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;<b>Dhaval Dave</b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; dave.dhaval92@gmail.com<br>
									</p><br><br>
									</td>
								</tr>
							</table>
							</center>
						</td>
						<td style="border-left:1px solid #9aca3a;">
							<table border="0" width="230px">
								<tr>
									<td><br><center><b>Videocon Refrigerator</b></center><br></td>
								</tr>
								<tr>
									<td>
										<center><a href="vc_ref.php"><img border="none" height="200px" src="product_img/vc_ref/vcref002.jpg"></a></center><br>
									</td>
								</tr>
								<tr>
									<td><center><b>LG Home Theater Systems</b></center><br></td>
								</tr>
								<tr>
									<td><center><a href="lg_home_th.php"><img border="none" height="200px" src="product_img/lg_home_th/lghometh007.jpg"></a></center><br>
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
