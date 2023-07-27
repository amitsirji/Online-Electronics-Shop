<?php
	session_start();
	$_SESSION['file_name']="lg_color_tv_detail.php";
	if(!isset($_SESSION['user_name']))
	{$_SESSION['user_name']="";}
?>
<html>
<head>
<title>www.webtronic.com - LG Color Television Detail</title>
<style>
.product_features td
{
	border-bottom:1px solid #9aca3a; padding:5px 0 0 5px;
}
.header_menu_td_2 a
{
	color:#000000; background:url(image/menu_item_bg_1.jpg); background-repeat:repeat-x;
}
a.odd9
{	
	text-decoration:none; float:left; background:url(image/left_menu_item_bg_2.jpg);  color:#047055;    width:201px; border-left:3px solid #64A738;  border-right:3px solid #64A738; 
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
</head>
<body style="margin-top:0px">
<center>
	<?php
		include('heading.php');
	?>
	<table border="0" width="960px" bgcolor="#FFFFFF" style="margin-top:-2px;">
		<tr><td ><div style="float:right; height:30px; font-size:14px; font-family:Arial; color:#9aca3a"><b>
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
			<td bgcolor="#FFFFFF" style="" >
				<?php
					include('product_left_menu.php');
				?>
				<?php
					if(isset ($_GET['id']))
					{
						$product_id=$_GET['id'];
						$_SESSION['product_id']=$_GET['id'];
					}
					else
					{
						$product_id=$_SESSION['product_id'];
					}
					
					$con=mysql_connect("localhost","root","");
					$db=mysql_select_db("webtronic");
					$result=mysql_query("select * from lg_color_tv where id='$product_id'");
				?>
				<?php
					$detail=mysql_fetch_array($result);
					{
						echo "<table border='0' width='725px' height='5px' style='float:right;'>
									<tr>
										<td>
											<table border='0'><tr><td height='40px' width='710px' style='font-family:Arial; font-size:20px; color:#51740C; background:url(image/single_product_title_bg_1.jpg);'>LG Color Television</td></tr></table>
										</td>
									</tr>
									<tr>
										<td>
											<table border='0' width='715px'>
												<tr>
													<td width='300px' style='border: 1px solid #9aca3a' >
														<img height='300px' src='".$detail[2]."'>
													</td>
													<td>
														<center>
														<table border='0' height='300px' width='375px'>
															<tr>
																<td height='50px' style='font-family:Arial; font-size:18px; color:#51740C;'>
																	".$detail[1]."
																</td>
															</tr>
															<tr>
																<td height='10px' style='font-family:Arial; font-size:14px; border-bottom:1px solid #9aca3a;'><b>Brand : LG</b></td>
															</tr>
															<tr><td height='60px' style='border-bottom:1px solid #9aca3a;'>
																<table style='font-family:Arial; font-size:14px;'>
																<tr>
																	<td><b>MRP : </b></td>
																	<td style='text-decoration:line-through; color:#7E886A'><b>".$detail[9]." Rs</b></td>
																	<td>&nbsp;&nbsp;&nbsp;&nbsp;<b>Now At :</b></td>
																	<td style='color:#7E886A'><b>".$detail[10]." Rs</b></td>
																</tr>
																</table>
															</td></tr>
															<tr>
																<td height='90px' style='font-family:Arial; font-size:11px; color:#7E886A;'><p>Size : ".$detail[3]."''<br>Type : ".$detail[4]."<br>Sound Output : ".$detail[6]."<br>Woffer : ".$detail[7]."<br>Sound System : ".$detail[8]."</p><td>
															</tr>
															<tr>
																<td style='border-bottom:1px solid #9aca3a;'>
																<table border='0' style='float:right;'>
																	<tr>
																		<form action='add_to_cart.php' method='POST'>
																			<input type='hidden' value=".$detail[0]." name='id'>
																			<input type='hidden' value='lg_color_tv' name='table'>
																				<td style='border:1px solid #9aca3a;'>
																			<input type='submit' name='by_now' value='Add to Cart' style=' background:url(image/add_to_cart_button_bg_1.jpg); width:202px;height:43px; float:right; font-size:20px; color:#3F5B07;'>
																		</form>
																			</td>
																	</tr>
																</table>
																</td>
															</tr>
															<tr>
																<td></td>
															</tr>
														</table>
														</center>
													</td>
												</tr>
											</table>
										</td>
									</tr>
									<tr>
										<td><br>
											<table border='0' width='520px' class='product_features' style='font-family:Arial; font-size:13px; color:#30410F; float:left;' >
												<tr>
													<td><b><u>Features</u><br><br><br>Product</b><br><br>Name</td> <td><br><br><br><br><br>".$detail[1]."</td>
												</tr>
												<tr>
													<td>Size</td> <td>".$detail[3]."'' inch</td>
												</tr>
												<tr>
													<td>Brand</td><td>LG</td>
												</tr>
												<tr>
													<td>Type</td><td>".$detail[4]."</td>
												</tr>
												<tr>
													<td>Cabinet Finish</td><td>".$detail[5]."</td>
												</tr>
												
												<tr>
													<td><br><br><b>Audio Features</b><br><br>Sound Output</td> <td><br><br><br><br>".$detail[6]."</td>
												</tr>
												<tr>
													<td>Speaker</td> <td>2 Speaker</td>
												</tr>
												<tr>
													<td>Woofer</td> <td>".$detail[7]."</td>
												</tr>
												<tr>
													<td>Sound System</td> <td>".$detail[8]."</td>
												</tr>
												<tr>
													<td>Music Mode</td> <td>With Music Mode</td>
												</tr>
												<tr>
													<td>ALV</td> <td>Yes</td>
												</tr>
												
												<tr>
													<td> <br><br> <b>Display Features</b> <br><br> Size </td> <td> <br><br><br><br>".$detail[3]."</td>
												</tr>
												
												
												<tr>
													<td><br><br><b>Technical Features</b><br><br>Remote Control</td> <td><br><br><br><br>Standard</td>
												</tr>
												<tr>
													<td>Sleep Timer</td> <td>With Sleep Timer</td>
												</tr>
												<tr>
													<td>Child Lock</td> <td>Yes</td>
												</tr>
												<tr>
													<td>Clock</td> <td>Yes</td>
												</tr>
												<tr>
													<td>Auto Sleep</td> <td>Yes</td>
												</tr>
												<tr>
													<td>Quick View</td> <td>Yes</td>
												</tr>
									 </table>";
								}
							?>
							<table border='0' width='190px' style="border:solid 1px #9aca3a;">
								<td style="border-bottom:1px solid #9aca3a; color:#527115;"><center><b>Videocon Products</b></center></td>
								<tr>
									<td style="height:200px; background:url(image/marquee_bg.jpg);" class="marquee_1">
										<marquee height="200" scrollamount="3" loop="true" direction="up" onMouseOver="stop()" onMouseOut="start()">
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
									</td>
								</tr></table>
							<br>
							<table border='0' width='190px' style="border:solid 1px #9aca3a;">
								<td style="border-bottom:1px solid #9aca3a; color:#527115;"><center><b>LG Products</b></center></td>
							<tr>
								<td style="height:190px; background:url(image/marquee_bg.jpg);" class="marquee_1">
									<marquee height="200" scrollamount="3" loop="true" direction="up" onMouseOver="stop()" onMouseOut="start()">
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


