<?php
	session_start();
	$_SESSION['file_name']="product.php";
	if(!isset($_SESSION['user_name']))
	{$_SESSION['user_name']="";}
?>
<html>
<head>
<title>www.webtronic.com - Product</title>
<script language="javascript">
function td_over(id)
{
	document.getElementById(id).style.border="1px solid #4e7009";
}
function td_out(id)
{
	document.getElementById(id).style.border="1px solid #9aca3a";
}
</script>
<style>
.header_menu_td_2 a
{
	color:#000000; background:url(image/menu_item_bg_1.jpg); background-repeat:repeat-x;
}
.p_b_td
{
	border:1px solid #9aca3a; height:100px; width:150px;
}
.font_style
{
	text-decoration:none; color:#666666; font-family:arial; font-size:14px;
}
.space_td
{
	width:10;
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
			<td>
				<?php
					include('product_left_menu.php');
				?>
				<br>
				<table border="0" width="725px" style="float:right; margin-top:-15px;">
					<tr><td><div style="font-family:arial; color:#006633; font-size:18px; margin-left:20px;">Special Category Products</div><br></td></tr>
					<tr>
						<td>
							<table border="0" style="background:#ffffff;">
								<tr>
									<td colspan="2" height="33px" style="background:#D6F891" >
										<b>&nbsp; &nbsp; &nbsp;Consumer Electronic</b>
									</td>
								</tr>
								<tr><td><br></td></tr>
								<tr>
									<td>
										<table border="0" bgcolor="#FFFFFF">
											<tr>
												<td class="p_b_td" id="td1" onMouseOver="td_over(this.id)" onMouseOut="td_out(this.id)"><center><a href="vc_lcd_tv_detail.php ? id=vclcdtv001">
													<img height="100px" border="none" src="product_img/vc_lcd_tv/vclcdtv001.jpg"></a></center>
												</td>
												<td class="space_td"></td>
												<td class="p_b_td" id="td2" onMouseOver="td_over(this.id)" onMouseOut="td_out(this.id)"><center><a href="vc_lcd_tv_detail.php ? id=vclcdtv009">
													<img height="100px" border="none" src="product_img/vc_lcd_tv/vclcdtv003.jpg"></a></center>
												</td>
												<td class="space_td"></td>
												<td class="p_b_td" id="td3" onMouseOver="td_over(this.id)" onMouseOut="td_out(this.id)"><center><a href="lg_home_th_detail.php ? id=lghometh004">
													<img height="100px" border="none" src="product_img/lg_home_th/lghometh004.jpg"></a></center>
												</td>
												<td class="space_td" ></td>
												<td class="p_b_td" id="td4" onMouseOver="td_over(this.id)" onMouseOut="td_out(this.id)"><center><a href="vc_satellite_tv_detail.php ? id=vcsattv007">
													<img height="100px" border="none" src="product_img/vc_sat_tv/vcsattv007.jpg"></a></center>
												</td>
											</tr>
											<tr>
												<td class="font_style"><center><b>VCL42FBT</b></center></td>
												<td class="font_style"></td>
												<td class="font_style"><center><b>VLL19SBH</b></center></td>
												<td class="font_style"></td>
												<td class="font_style"><center><b>HT855PC</b></center></td>
												<td class="font_style"></td>
												<td class="font_style"><center><b>V3203HB</b></center></td>
											</tr>
											<tr><td><br><br></td></tr>
											<tr>
												<td class="p_b_td" id="td5" onMouseOver="td_over(this.id)" onMouseOut="td_out(this.id)"><center><a href="lg_lcd_tv_detail.php ? id=lglcdtv004">
													<img height="100px" border="none" src="product_img/lg_lcd_tv/lglcdtv004.jpg"></a></center>
												</td>
												<td class="space_td"></td>
												<td class="p_b_td" id="td6" onMouseOver="td_over(this.id)" onMouseOut="td_out(this.id)"><center><a href="lg_home_th_detail.php ? id=lghometh002">
													<img height="100px" border="none" src="product_img/lg_home_th/lghometh002.jpg"></a></center>
												</td>
												<td class="space_td"></td>
												<td class="p_b_td" id="td7" onMouseOver="td_over(this.id)" onMouseOut="td_out(this.id)"><center><a href="lg_plasma_tv_detail.php ? id=lgplasmatv008">
													<img height="100px" border="none" src="product_img/lg_plasma_tv/lgplasmatv008.jpg"></a></center>
												</td>
												<td class="space_td"></td>
												<td class="p_b_td" id="td8" onMouseOver="td_over(this.id)" onMouseOut="td_out(this.id)"><center><a href="lg_plasma_tv_detail.php ? id=lgplasmatv002">
													<img height="100px" border="none" src="product_img/lg_plasma_tv/lgplasmatv002.jpg"></a></center>
												</td>
											</tr>
											<tr>
												<td class="font_style"><center><b>32LD340 </b></center></td>
												<td class="font_style"></td>
												<td class="font_style"><center><b>HT604 </b></center></td>
												<td class="font_style"></td>
												<td class="font_style"><center><b>50PK550</b></center></td>
												<td class="font_style"></td>
												<td class="font_style"><center><b>42PJ650</b></center></td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td colspan="2"><br><br>
									</td>
								</tr>
								<tr>
									<td colspan="2" height="33px" style="background:#D6F891">
										<b>&nbsp; &nbsp; &nbsp;Home Appliances</b>
									</td>
								</tr>
								<tr><td><br></td></tr>
								<tr>
									<td>
										<table border="0" bgcolor="#FFFFFF">
											<tr>
												<td class="p_b_td" id="td9" onMouseOver="td_over(this.id)" onMouseOut="td_out(this.id)"><center><a href="vc_split_ac_detail.php ? id=vcsplitac003">
													<img height="100px" border="none" src="product_img/vc_split_ac/vcsplitac003.jpg"></a></center>
												</td>
												<td class="space_td"></td>
												<td class="p_b_td" id="td10" onMouseOver="td_over(this.id)" onMouseOut="td_out(this.id)"><center><a href="vc_window_ac_detail.php ? id=vcwindowac001">
													<img height="100px" border="none" src="product_img/vc_window_ac/vcwindowac001.jpg"></a></center>
												</td>
												<td class="space_td"></td>
												<td class="p_b_td" id="td11" onMouseOver="td_over(this.id)" onMouseOut="td_out(this.id)"><center><a href="lg_split_ac_detail.php ? id=lgsplitac004">
													<img height="100px" border="none" src="product_img/lg_split_ac/lgsplitac004.jpg"></a></center>
												</td>
												<td class="space_td"></td>
												<td class="p_b_td" id="td12" onMouseOver="td_over(this.id)" onMouseOut="td_out(this.id)"><center><a href="lg_window_ac_detail.php ? id=lgwindowac006">
													<img height="100px" border="none" src="product_img/lg_window_ac/lgwindowac006.jpg"></a></center>
												</td>
											</tr>
											<tr>
												<td class="font_style"><center><b>VPS63 </b></center></td>
												<td class="font_style"></td>
												<td class="font_style"><center><b>VEW61 </b></center></td>
												<td class="font_style"></td>
												<td class="font_style"><center><b>LSA5AW3VT6 </b></center></td>
												<td class="font_style"></td>
												<td class="font_style"><center><b>LWA3EW1DF1</b></center></td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td colspan="2"><br><br>
									</td>
								</tr>
								<tr>
									<td colspan="2" height="33px" style="background:#D6F891">
										<b>&nbsp; &nbsp; &nbsp;Kitchen Appliances</b>
									</td>
								</tr>
								<tr><td><br></td></tr>

								<tr>
									<td>
										<table border="0" bgcolor="#FFFFFF">
											<tr>
												<td class="p_b_td" id="td13" onMouseOver="td_over(this.id)" onMouseOut="td_out(this.id)"><center><a href="vc_ref_detail.php ? id=vcref001">
													<img height="100px" border="none" src="product_img/vc_ref/vcref001.jpg"></a></center>
												</td>
												<td class="space_td"></td>
												<td class="p_b_td" id="td14" onMouseOver="td_over(this.id)" onMouseOut="td_out(this.id)"><center><a href="lg_rf_detail.php ? id=lgrf003">
													<img height="100px" border="none" src="product_img/lg_rf/lgrf003.jpg"></a></center>
												</td>
												<td class="space_td"></td>
												<td class="p_b_td" id="td15" onMouseOver="td_over(this.id)" onMouseOut="td_out(this.id)"><center><a href="lg_front_load_wm_detail.php ? id=lgfrontloadwm004">
													<img height="100px" border="none" src="product_img/lg_front_load_wm/lgfrontloadwm004.jpg"></a></center>
												</td>
												<td class="space_td"></td>
												<td class="p_b_td" id="td16" onMouseOver="td_over(this.id)" onMouseOut="td_out(this.id)"><center><a href="lg_top_load_wm_detail.php ? id=lgtoploadwm008">
													<img height="100px" border="none" src="product_img/lg_top_load_wm/lgtoploadwm008.jpg"></a></center>
												</td>
											</tr>
											<tr>
												<td class="font_style"><center><b>VCREF001 </b></center></td>
												<td class="font_style"></td>
												<td class="font_style"><center><b>GL-338VT5 </b></center></td>
												<td class="font_style"></td>
												<td class="font_style"><center><b>F1068LDP</b></center></td>
												<td class="font_style"></td>
												<td class="font_style"><center><b>WF-T7239KS</b></center></td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td colspan="2">
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
