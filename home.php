<?php
	session_start();
	$_SESSION['file_name']="home.php";
	if(!isset($_SESSION['user_name']))
	{$_SESSION['user_name']="";}
?>
<html>
<head>
<style>
body
{
	font-size:36px;
	margin-top:0px;
}
.index_left_menu_table_1 a:hover
{
	background:url(image/left_menu_item_bg_1.jpg); border-left:3px solid #64A738; border-right:3px solid #64A738;
}

a.odd
{
	text-decoration:none; float:left;  background:url(image/left_menu_item_bg_2.jpg); color:#047055; width:201px; border-left:3px solid #ffffff;  border-right:3px solid #ffffff;
}
a.even
{
	text-decoration:none;  float:left; background:url(image/left_menu_item_bg_2.jpg); color:#047055;  width:201px; border-left:3px solid #ffffff;  border-right:3px solid #ffffff;
}
.index_left_menu_table_1 div
{
	float:left; padding: 4px 0 4px 25px; font-size:14px;
}


.header_menu_td_1 a
{
	color:#000000; background:url(image/menu_item_bg_1.jpg); background-repeat:repeat-x;
}
.index_left_menu_title a
{
	background:url(image/menu_titile_bg_1.jpg); background-repeat:repeat-x;
	color:#51740B; font-size:18px; width:202px; height:30px; float:left; padding:5px 0 0 0; width:201px; border-left:3px solid #ffffff;  border-right:3px solid #ffffff;
}
.index_right_item_table_1
{
	border:1px #D6F891 solid;
}

.top_detail
{
	font:arial; font-size:14px; color:#5d8018;
}

.end_product_list a
{
	text-decoration:none; font-size:13px; font-family:Arial; color:#333333;
}
.end_product_list a:hover
{
	text-decoration:underline;
}

.marquee_1 a:hover
{
	color:#415A0E; text-decoration:underline;
}
.marquee_1 a
{
	color:#527115; text-decoration:none; font-size:17px;
}
</style>
<title>www.webtronic.com - Home</title>
</head>
<body>
<center>
	<?php
		include('heading.php');
	?>
	<table border="0"  width="960px" bgcolor="#ffffff"  style="margin-top:-2px";>
		<tr><td><div style="float:right; height:35px; font-size:14px; font-family:Arial; color:#9aca3a"><b>
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
				echo "<br>welcome guest &nbsp;|&nbsp; <a href='login.php' style='text-decoration:none;color:#6A9513;'>login</a> &nbsp;|&nbsp; 
				<a href='signup.php' style='text-decoration:none;color:#6A9513;'>new user ?</a>";
			} 
		?></b></div></td></tr>
		<tr>
			<td>
				<table border="0" style="float:left; margin-top:-6px; margin-left:-2px;">
					<tr>
						<td>
						   <?php include('product_left_menu.php'); ?>
						</td>
					</tr>
					
					<tr><td><center>
						<table border="0" width="195px" style="border:solid 1px #9aca3a;">
						<tr>
							<td style="border-bottom:1px solid #9aca3a; color:#527115;"><center><b>Videocon Products</b></center></td>
						</tr>
							<tr><td style="height:200px; background:url(image/marquee_bg.jpg);" class="marquee_1">
								<marquee height="200" scrollamount="2" loop="true" direction="up" onMouseOver="stop()" onMouseOut="start()">
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
						</table><br>
						<table border="0" width="195px" style="border:solid 1px #9aca3a;">
							<tr><td style="border-bottom:1px solid #9aca3a; color:#527115;"><center><b>LG Products</b></center></td></tr>
							<tr><td style="height:200px; background:url(image/marquee_bg.jpg);" class="marquee_1">
								<marquee height="200" scrollamount="2" loop="true" direction="up" onMouseOver="stop()" onMouseOut="start()">
									<center><a href="lg_lcd_tv_detail.php ? id=lglcdtv001" >LG LCD Television<img height="90px" border="none" src="product_img/lg_lcd_tv/lglcdtv001.jpg"></a><br><br>
									<a href="lg_plasma_tv_detail.php ? id=lgplasmatv008">Plasma Televisions of LG<img height="90px" border="none" src="product_img/lg_plasma_tv/lgplasmatv008.jpg"></a><br><br>
									<a href="lg_color_tv_detail.php ? id=lgcolortv006">Color LG Televisions<img height="90px" border="none" src="product_img/lg_color_tv/lgcolortv006.jpg"></a><br><br>
									<a href="lg_home_th_detail.php ? id=lghometh006">LG Home Theater System<br><img height="90px" border="none" src="product_img/lg_home_th/lghometh006.jpg"></a><br><br>
									<a href="lg_split_ac_detail.php ? id=lgsplitac006">Split AC of LG<img height="90px" border="none" src="product_img/lg_split_ac/lgsplitac006.jpg"></a><br><br>
									<a href="lg_window_ac_detail.php ? id=lgwindowac004">LG Window AC<img height="90px" border="none" src="product_img/lg_window_ac/lgwindowac004.jpg"></a><br><br>
									<a href="lg_rf_detail.php ? id=lgrf005">LG Refrigerator<img height="90px" border="none" src="product_img/lg_rf/lgrf005.jpg"></a><br><br>
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
						</table></center>
					</td></tr>
										
				
				<table border="0" width="725px" height="5px" style="float:right;">
					<tr>
						<td>
							<table border="0" width="715px" height="300px" style="float:right; background:#ffffff;">
								<tr><td>
									
                                  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="715" height="300" title="Crited by : Tushar">
                                    <param name="movie" value="flash/index_main.swf">
                                    <param name="quality" value="high">
                                    <embed src="flash/index_main.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="715" height="300"></embed>
                                  </object>     
								                               
								  </td>
								</tr>
							</table>
					
							<table border="0" width="720px" height="250px" style="float:right;">
								<tr><td>
									
									<table border="0" style="margin-top:0px; float:right;">
										<tr><td width="705px" height="30px" colspan="4" style="background:#D6F891; color:#006633;" ><b> &nbsp; &nbsp;LG&nbsp; TOP &nbsp;CATEGORIES &nbsp;</b></td></tr>
										<tr>
											<td><table height="250px" width="174px" class="index_right_item_table_1"><tr><td>
												<table border="0" width="165px" height="245px">
													<tr>
														<td class="top_detail"><center><b>6PK550</b></center></td>
													</tr>
													<tr>
														<td class="top_detail"><center>
															<a href="lg_plasma_tv_detail.php ? id=lgplasmatv001"><img height='100px' border="none" src="product_img/lg_plasma_tv/lgplasmatv001.jpg"></a> </center>
														</td>
													</tr>
													<tr>
														<td class="top_detail">Screen size : 60''inch</td>
													</tr>
													<tr>
														<td class="top_detail">Resolution : 1920 X 1080px</td>
													</tr>
													<tr>
														<td class="top_detail">Color : 16 bit</td>
													</tr>
													<tr><td class="top_detail">Contrast 3,00,000 : 1</td></tr>
												</table>
											</td></tr></table></td>
											
											<td><table height="250px" width="174px" class="index_right_item_table_1"><tr><td> 
												<table border="0" width="165px" height="245px">
													<tr>
														<td class="top_detail"><center><b>AT904TA</b></center></td>
													</tr>
													<tr>
														<td class="top_detail"><center>
															<a href="lg_home_th_detail.php ? id=lghometh001"><img height='100px' border="none" src="product_img/lg_home_th/lghometh001.jpg"></a> </center>
														</td>
													</tr>
													<tr><td class="top_detail">Sound Output : 1000</td></tr>
													<tr>
														<td class="top_detail">SubWoofer : 1000W RMS</td>
													</tr>
													<tr>
														<td class="top_detail">Amplifier : Dolby Digital</td>
													</tr>
													<tr>
														<td class="top_detail">Audio LineIN Analog/Digital</td>
													</tr>
													
												</table>
											</td></tr></table></td>
											
											<td><table height="250px" width="174px" class="index_right_item_table_1"><tr><td> 
												<table border="0" width="165px" height="245px">
													<tr>
														<td class="top_detail"><center><b>GL - 254VM5</b></center></td>
													</tr>
													<tr>
														<td class="top_detail"><center>
															<a href="lg_rf_detail.php ? id=lgrf001"><img height='100px' border="none" src="product_img/lg_rf/lgrf001.jpg"></a> </center>
														</td>
													</tr>
													<tr>
														<td class="top_detail">Capicity : 390 Li</td>
													</tr>
													<tr>
														<td class="top_detail">Temperature : Internal Micom</td>
													</tr>
													<tr>
														<td class="top_detail">Door Finish : VCM</td>
													</tr>
												</table>

											</td></tr></table></td>
											
											<td><table height="250px" width="174px" class="index_right_item_table_1"><tr><td> 
												<table border="0" width="165px" height="245px">
													<tr>
														<td class="top_detail"><center><b>T8503TEET3</b></center></td>
													</tr>
													<tr>
														<td class="top_detail"><center>
															<a href="lg_top_load_wm_detail.php ? id=lgtoploadwm001"><img height='100px' border="none" src="product_img/lg_top_load_wm/lgtoploadwm001.jpg"></a> </center>
														</td>
													</tr>
													<tr>
														<td class="top_detail">Capaciyt : 9.0</td>
													</tr>
													<tr>
														<td class="top_detail">Pulsator : Punch+3</td>
													</tr>
													<tr>
														<td class="top_detail">I-sensor : Yes</td>
													</tr>
													<tr><td class="top_detail">Inner Tub : Stainless Steel</td></tr>
												</table>

											</td></tr></table></td>
										</tr>
									</table>
									
								</td></tr>
								<tr><td height="30px"></td></tr>
								<tr><td>
										<table border="0" style="margin-top:0px; float:right;">
										<tr><td width="705px" height="30px" colspan="4" style="background:#D6F891; color:#006633;" ><b> &nbsp; &nbsp;VIDEOCON &nbsp;TOP &nbsp;CATEGORIES &nbsp;</b></td></tr>
										<tr>
											<td><table height="250px" width="174px" class="index_right_item_table_1"><tr><td>
												<table border="0" width="165px" height="245px">
													<tr>
														<td class="top_detail"><center><b>VCL42FBT</b></center></td>
													</tr>
													<tr>
														<td class="top_detail"><center>
															<a href="vc_lcd_tv_detail.php ? id=vclcdtv001"><img height='100px' border="none" src="product_img/vc_lcd_tv/vclcdtv001.jpg"></a> </center>
														</td>
													</tr>
													<tr>
														<td class="top_detail">Size : 42'' inch</td>
													</tr>
													<tr>
														<td class="top_detail">Audio Type : 6 sound</td>
													</tr>
													<tr>
														<td class="top_detail">16.7 Billion Color</td>
													</tr>
													<tr><td class="top_detail">1920 X 1080 px Resolution</td></tr>
												</table>
											</td></tr></table></td>
											
											<td><table height="250px" width="174px" class="index_right_item_table_1"><tr><td> 
												<table border="0" width="165px" height="245px">
													<tr>
														<td class="top_detail"><center><b>V4208FD</b></center></td>
													</tr>
													<tr>
														<td class="top_detail"><center>
															<a href="vc_satellite_tv_detail.php ? id=vcsattv001"><img height='100px' border="none" src="product_img/vc_sat_tv/vcsattv001.jpg"></a> </center>
														</td>
													</tr>
													<tr>
														<td class="top_detail">Resolution : 1920 X 1080px</td>
													</tr>
													<tr>
														<td class="top_detail">HD Ready</td>
													</tr>
													<tr>
														<td class="top_detail">200000:1 contrast</td>
													</tr>
													<tr><td class="top_detail">1.06 Billion color</td></tr>
												</table>
											</td></tr></table></td>
											
											<td><table height="250px" width="174px" class="index_right_item_table_1"><tr><td>
												<table border="0" width="165px" height="245px">
													<tr>
														<td class="top_detail"><center><b>VIS67</b></center></td>
													</tr>
													<tr>
														<td class="top_detail"><center>
															<a href="vc_split_ac_detail.php ? id=vcsplitac001"><img height='100px' border="none" src="product_img/vc_split_ac/vcsplitac001.jpg"></a> </center>
														</td>
													</tr>
													<tr>
														<td class="top_detail">Ton : 2 Ton</td>
													</tr>
													<tr>
														<td class="top_detail">EER : 3.54</td>
													</tr>
													<tr>
														<td class="top_detail">USP : Ionizer</td>
													</tr>
													<tr><td class="top_detail">Cooling Capacity : 4680</td></tr>
												</table>
											</td></tr></table></td>
											
											<td><table height="250px" width="174px" class="index_right_item_table_1"><tr><td> 
												<table border="0" width="165px" height="245px">
													<tr>
														<td class="top_detail"><center><b>230 Litres 3 Star</b></center></td>
													</tr>
													<tr>
														<td class="top_detail"><center>
															<a href="vc_ref_detail.php ? id=vcref002"><img height='100px' border="none" src="product_img/vc_ref/vcref002.jpg"></a> </center>
														</td>
													</tr>
													<tr>
														<td class="top_detail">Capicity : 230 li</td>
													</tr>
													<tr>
														<td class="top_detail">Door for luxurious Fit</td>
													</tr>
													<tr>
														<td class="top_detail">E – Fresh (Ionizer) </td>
													</tr>
													<tr><td class="top_detail">Control Transparent </td></tr>
												</table>
											</td></tr></table></td>
											
										</tr>
									</table>
								</td></tr>
								<tr><td height="30px"></td></tr>
								<tr><td>
										<table border="0" style="border-bottom:1px solid #9aca3a;">
											<tr><td width="705px" height="30px" colspan="2" style="background:#D6F891; color:#006633;"><b> &nbsp; &nbsp; PRODUCTS &nbsp;BY &nbsp;COMPANY</b></td></tr>
											<tr>
												<td width="250px">
													<table border="0" width="248px"  class="end_product_list" style="border-right:1px solid #9aca3a">
														<tr><td style="background:#eef7db;" height="50px"><center><div><img height="40px" src="image/videocon_symbol_1.jpg"></div></center></td></tr>													
														<tr><td height="20px"></td><td></td></tr>														
														<tr><td><a href="vc_lcd_tv.php">LCD Television</a></td></tr>
														<tr><td><a href="vc_satellite_tv.php">Satellite Television</a></td></tr>
														<tr><td><a href="vc_standard_tv.php">Standard Television</a></td></tr>
														<tr><td><a href="vc_split_ac.php">Split AC</a></td></tr>
														<tr><td><a href="vc_window_ac.php">Window AC</a></td></tr>
														<tr><td><a href="vc_ref.php">Refrigerators</a></td></tr>
													</table>
												</td>
												<td>
													<table border="0" width="450px" class="end_product_list">
														<tr><td colspan="2" style="background:#eef7db;"><center><div><img height="50px" src="image/lg_symbol_1.jpg"></div></center></td></tr>
														<tr><td height="20px"></td><td></td></tr>
														<tr><td><a href="lg_lcd_tv.php">LCD Television</a></td><td><a href="lg_window_ac.php">Window AC</a></td></tr>
														<tr><td><a href="lg_plasma_tv.php">Plasma Television</a></td><td><a href="lg_rf.php">Refrigerators</a></td></tr>
														<tr><td><a href="lg_color_tv.php">Color Television</a></td><td><a href="lg_front_load_wm.php">Front Load Washing Machine</a></td></tr>
														<tr><td><a href="lg_home_th.php">Home Theater System</a></td><td><a href="lg_top_load_wm.php">Top Load Washing Machine</a></td></tr>
														<tr><td><a href="lg_split_ac.php">Split AC</a></td><td></td></tr>
														<tr><td height="20px"></td><td></td></tr>
													</table>
												</td>
											</tr>
											<tr><td height="30px"></td></tr>
										</table>
								</td></tr>
						
							</table>
						</td>
					</tr>
				</table>
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
