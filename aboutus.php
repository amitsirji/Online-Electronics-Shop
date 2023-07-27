<?php
	session_start();
	$_SESSION['file_name']="aboutus.php";
	if(!isset($_SESSION['user_name']))
	{$_SESSION['user_name']="";}
?>
<html>
<head>
<title>www.webtronic.com - About us</title>
<style>
.header_menu_td_3 a
{
	color:#000000; background:url(image/menu_item_bg_1.jpg); background-repeat:repeat-x;
}
p
{
	font-family:Arial; font-size:14px; color:#666666;
}
ul
{
	font-family:Arial; font-size:14px;color:#666666;
}
</style>
</head>
<body style="margin-top:0px">
<center>
	<?php
		include('heading.php');
	?>
	<table border="0" width="960px" bgcolor="#FFFFFF" style="margin-top:-2px;">
		<tr><td><div style="float:right; height:35px; font-size:14px; font-family:Arial; color:#9aca3a"><b>
		<?php 
			if($_SESSION['user_name']!="" )
			{   echo "welcome &nbsp;". $_SESSION['user_name']." &nbsp; | &nbsp; <a href='logout.php' style='text-decoration:none;color:#6A9513;'> logout &nbsp; </a> &nbsp; | &nbsp; <a href='user_account.php' style='text-decoration:none;color:#6A9513;'> my account </a> &nbsp; | &nbsp; <a href='view_cart.php' style='text-decoration:none;color:#6A9513;'> view cart &nbsp;<img height='30px' border='none' src='image/cart.png'></a> &nbsp;";
			} 
			else
			{   echo "<br>welcome guest &nbsp;|&nbsp; <a href='login.php' style='text-decoration:none;color:#6A9513;'>login</a> &nbsp;|&nbsp; <a href='signup.php' 
						style='text-decoration:none;color:#6A9513;'>new user ?</a>";
			} 
		?></b></div></td></tr>
		<tr>
			<td bgcolor="#FFFFFF"><br>
				<table border="0" width="955px">
					<tr>
						<td width="725px"><center>
							<table border="0" width="600px">
								<tr>
									<td>
										<div style="font-family:arial; font-size:20px; color:#006633;">About Us</div>
									</td>
								</tr>
								<tr>
								  <td>
										<br><br><p style=" width:550px;">
										<strong>This website is sales and  advertisement of electronic products.</strong>
										<br><br>
									
										As part of one of the India’s largest manufacturer and supplier of consumer Electronics, Home appliances and Power products we enjoy the benefits of offering you a great range of products at great prices under one roof.
										We promise you best price and best quality of our products.<br>
										<br>
										<br>
										<br>
<b>Consumer Electronics, Home Appliances & Power products in India</b><br><br>

We enjoy a pre-eminent position in terms of sales and customer satisfaction in many of our consumer products like Colour Televisions, Washing Machines, Air Conditioners, Refrigerators and many other home appliances, selling them through a Multi-Brand strategy with the largest sales and service network in India.<br>
<br>

<br>
<div style="font-size:18px; color:#666666;">Why Webtronic</div><br><br>

<b><p>Choice of different products across different brands</p></b>
<ul>
	<li>Delivery to your doorstep all across India ( <a href="home.php" style="text-decoration:none;">Webtronic</a> reserves the right to deny a delivery as per the situation).</li>
	<li>Warranty directly from the service center.</li>
	<li>Excellent Customer support and after sales service network.</li>
	<li>Great Discounts –We offer our customers products of their choice at great discounts, As the product is directly sourced from the company you save heavily on the mid network cost.</li>
	<li>Plethora of model and brands to choose from – we offer you number of models pertaining to various product from different brands.</li>
	<li>Dedicated Customer Care for online customers as well as corporate clients - We have a dedicated team straddling client servicing, customer relations, logistics and after sales service.</li>
</ul>
										</p>
									</td>
								</tr>
							</table>
							</center>
						</td>
						<td style="border-left:1px solid #9aca3a;">
							<table border="0" width="230px">
								<tr>
									<td><center><b>VIDEOCON LCD Television</b></center></td>
								</tr>
								<tr>
									<td>
										<center><a href="vc_lcd_tv.php"><img border="none" height="200px" src="product_img/vc_lcd_tv/vclcdtv001.jpg"></a></center><br>
									</td>
								</tr>
								<tr>
									<td><center><b>LG Plasma Television</b></center></td>
								</tr>
								<tr>
									<td><center><a href="lg_plasma_tv.php"><img border="none" height="200px" src="product_img/lg_plasma_tv/lgplasmatv001.jpg"></a></center><br>
									</td>
								</tr>
								<tr>
									<td><center><b>LG LCD Television</b></center></td>
								</tr>
								<tr>
									<td><center><a href="lg_lcd_tv.php"><img border="none" height="200px" src="product_img/lg_lcd_tv/lglcdtv001.jpg"></a></center>
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
