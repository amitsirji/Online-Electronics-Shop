<?php
	session_start();
	$_SESSION['file_name']="site_mape.php";
	if(!isset($_SESSION['user_name']))
	{$_SESSION['user_name']="";}
?>
<html>
<head>
<title>www.webtronic.com - Site Mape</title>
<style>
.site_mape a
{
	text-decoration:none; font-family:Arial; font-size:14px; color:#689116;
}
.site_mape a:hover
{
	text-decoration:underline;
}
.site_mape
{
	text-decoration:none; font-family:Arial; font-size:14px; color:#689116;
}
.marquee_1 a
{
	text-decoration:none; font-family:Arial; font-size:14px; color:#689116;
}
.marquee_1 a:hover
{
	text-decoration:underline;
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
		<tr>
			<td bgcolor="#FFFFFF">
				<br><center>
				<table border="0" style="border:1px solid #9aca3a;">
					<tr>
						<td>
							<table border="0" width="195px" height="600px" style="border:solid 1px #9aca3a;">
							<tr><td style="border-bottom:1px solid #9aca3a; color:#527115;"><center><b>Videocon Products</b></center></td></tr>
								<tr><td style="height:600px; background:url(image/marquee_bg.jpg);" class="marquee_1">
									
									<marquee height="555" scrollamount="6" loop="true" direction="up" onMouseOver="stop()" onMouseOut="start()">
										<center><a href="vc_lcd_tv_detail.php ? id=vclcdtv001" >Best LCD From Videocon<img height="90px" border="none" src="product_img/vc_lcd_tv/vclcdtv001.jpg"></a><br><br>
										<a href="vc_satellite_tv_detail.php ? id=vcsattv001">Satellite Televisions <img height="90px" border="none" src="product_img/vc_sat_tv/vcsattv001.jpg"></a><br><br>
										<a href="vc_standard_tv_detail.php ? id=vcsatntv001">Standard Televisions<img height="90px" border="none" src="product_img/vc_standard_tv/vcstantv001.jpg"></a><br><br>
										<a href="vc_ref_detail.php ? id=vcref004">Refrigerators<br><img height="90px" border="none" src="product_img/vc_ref/vcref004.jpg"></a><br><br>
										<a href="vc_split_ac_detail.php ?  id=vcsplitac001">Videocon Split AC<img height="90px" border="none" src="product_img/vc_split_ac/vcsplitac001.jpg"></a><br><br>
										<a href="vc_window_ac_detail.php ? id=vcwindowac001">Videocon Window AC<img height="90px" border="none" src="product_img/vc_window_ac/vcwindowac001.jpg"></a><br><br>
	
										<a href="vc_lcd_tv.php" ><b>LCD Television</b></a><br><br>
										<a href="vc_satellite_tv.php"><b>Satellite Televisions</b></a><br><br>
										<a href="vc_standard_tv.php"><b>Standard Televisions</b></a><br><br>
										<a href="vc_ref.php"><b>Refrigerators</b></a><br><br>
										<a href="vc_split_ac.php"><b>Videocon Split AC</b></a><br><br>
										<a href="vc_window_ac.php"><b>Videocon Window AC</b></a>
										</center>
									</marquee>
									
								</td></tr>
							</table>
						</td>
						<td> 
							<table border="0" width="500px" >
								<tr><td><center><font size="+2" color="#527709"><u>Site Map</u></font></center><br></td></tr>
								<tr>
									<td><center><table border="0"><tr><td>
										<ul class="site_mape">
											<li><a href="index.php"><font size="+1">Home</font></a><br><br>
											</li>
											<li><a href="product.php"><font size="+1">Product</font></a><br><br>
												<ul>
													<li><b>Videocon Products</b><br><br>
														<ul>
															<li><a href="vc_lcd_tv.php">LCD Television</a></li>
															<li><a href="vc_satellite_tv.php">Satellite Television</a></li>
															<li><a href="vc_standard_tv.php">Standard Television</a></li>
															<li><a href="vc_split_ac.php">Split AC</a></li>
															<li><a href="vc_window_ac.php">Window AC</a></li>
															<li><a href="vc_ref.php">Refrigerator<br><br></a></li>
														</ul>
													</li>
													<li><b>LG Products</b><br><br>
														<ul>
															<li><a href="lg_lcd_tv.php">LCD Television</a></li>
															<li><a href="lg_plasma_tv.php">Plasma Television</a></li>
															<li><a href="lg_color_tv.php">Color Television</a></li>
															<li><a href="lg_home_th.php">Home Theater Systems</a></li>
															<li><a href="lg_split_ac.php">Split AC</a></li>
															<li><a href="lg_window_ac.php">Window AC</a></li>
															<li><a href="lg_rf.php">Refrigerator</a></li>
															<li><a href="lg_front_load_wm.php">Front Load Washing Machine</a></li>
															<li><a href="lg_top_load_wm.php">Top Load Washing Machine<br><br></a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li><a href="aboutus.php"><font size="+1">About us</font><br><br></a>
											</li>
											<li><a href="contact.php"><font size="+1">Contact</font><br><br></a>
											</li>
											<li><a href="gallery.php"><font size="+1">Gallery</font><br><br></a>
											</li>
											<li><a href="site_mape.php"><font size="+1">Site Mape</font></a>
											</li>
										</ul></td></tr></table></center>
									</td>
								</tr>
							</table>
						</td>
						<td>
							<table border="0" width="195px" height="600px" style="border:solid 1px #9aca3a;">
								<tr><td style="border-bottom:1px solid #9aca3a; color:#527115;"><center><b>LG Products</b></center></td></tr>
								<tr><td style="height:600px; background:url(image/marquee_bg.jpg);" class="marquee_1">
									
									<marquee height="555" scrollamount="6" loop="true" direction="up" onMouseOver="stop()" onMouseOut="start()">
										<center><a href="lg_lcd_tv_detail.php ? id=lglcdtv001" >LG LCD Television<img height="90px" border="none" src="product_img/lg_lcd_tv/lglcdtv001.jpg"></a><br><br>
										<a href="lg_plasma_tv_detail.php ? id=lgplasmatv008">Plasma Televisions of LG<img height="90px" border="none" src="product_img/lg_plasma_tv/lgplasmatv008.jpg"></a><br><br>
										<a href="lg_color_tv_detail.php ? id=lgcolortv006">Color LG Televisions<img height="90px" border="none" src="product_img/lg_color_tv/lgcolortv006.jpg"></a><br><br>
										<a href="lg_home_th_detail.php ? id=lghometh006">LG Home Theater System<br><img height="90px" border="none" src="product_img/lg_home_th/lghometh006.jpg"></a><br><br><br>
										<a href="lg_split_ac_detail.php ? id=lgsplitac006">Split AC of LG<br><img height="90px" border="none" src="product_img/lg_split_ac/lgsplitac006.jpg"></a><br><br>
										<a href="lg_window_ac_detail.php ? id=lgwindowac004">LG Window AC<br><img height="90px" border="none" src="product_img/lg_window_ac/lgwindowac004.jpg"></a><br><br>
										<a href="lg_rf_detail.php ? id=lgrf005">LG Refrigerator<br><img height="90px" border="none" src="product_img/lg_rf/lgrf005.jpg"></a><br><br>
										<a href="lg_front_load_wm_detail.php ? id=lgfrontloadwm002">Front Load Washing Machine<br><img height="90px" border="none" src="product_img/lg_front_load_wm/lgfrontloadwm002.jpg"></a><br><br>
										<a href="lg_top_load_wm_detail.php ? id=lgtoploadwm006">Top Load Washing<br> Machine<br><img height="90px" border="none" src="product_img/lg_top_load_wm/lgtoploadwm006.jpg"></a><br><br>
	
										<a href="lg_lcd_tv.php" ><b>LCD Television</b></a><br><br>
										<a href="lg_plasma_tv.php"><b>Plasma Television</b></a><br><br>
										<a href="lg_color_tv.php"><b>Color Television</b></a><br><br>
										<a href="lg_home_th.php"><b>Home Theater Systems</b></a><br><br>
										<a href="lg_split_ac.php"><b>LG Split AC</b></a><br><br>
										<a href="lg_window_ac.php"><b>LG Window AC</b></a><br><br>
										<a href="lg_rf.php"><b>LG Refrigerator</b></a><br><br>
										<a href="lg_front_load_wm.php"><b>Front Load Washing Machine</b></a><br><br>
										<a href="lg_top_load_wm.php"><b>Top Load Washing Machine</b></a>
										</center>
									</marquee>
									
								</td></tr>
							</table>
						</td>
					</tr>
				</table></center>
			</td>
		</tr>
	</table>
	<?php
		include('footer.php');
	?>
</center>
</body>
</html>
