<?php
	session_start();
	$_SESSION['file_name']="gallery.php";
	if(!isset($_SESSION['user_name']))
	{$_SESSION['user_name']="";}
?>
<html>
<head>
<title>www.webtronic.com - Gallery</title>
<script language="javascript">
function vc_show()
{
	document.getElementById("vc").style.visibility="visible";
}
function vc_hide()
{
	document.getElementById("vc").style.visibility="hidden";
}
function lg_show()
{
	document.getElementById("lg").style.visibility="visible";
}
function lg_hide()
{
	document.getElementById("lg").style.visibility="hidden";
}
function s_m_m(id)
{
	document.getElementById(id).style.background="#b1d962";
	document.getElementById(id).style.border="1px solid #006600";
}
function s_m_o(id)
{
	document.getElementById(id).style.background="#e2f6bc";
	document.getElementById(id).style.border="1px solid #b1d962";
}
function v_m_m()
{
	document.getElementById("view").style.visibility="visible";
}
function v_m_o()
{
	document.getElementById("view").style.visibility="hidden";
}
</script>
<style>
.header_menu_td_5 a
{
	color:#000000; background:url(image/menu_item_bg_1.jpg); background-repeat:repeat-x;
}
.gellery_submin
{
	border:none; background:#e2f6bc; color:#006600; width:174px; border:1px solid #b1d962;
}
.views_submit
{
	border:none; background:#e2f6bc; color:#006600; width:84px; border:1px solid #b1d962
}
</style>
</head>
<body>
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
			<td bgcolor="#FFFFFF"><br>
				<table border="0" width="955px">
					<tr>
						<td>
							<table border="0" style="">
								<tr>
									<td>
										<table border="0" width="190px" style="background:#b8da73;  border:1px solid #006600;" onMouseOver="vc_show()" onMouseOut="vc_hide()">
											<tr>
												<td style="font-family:Arial; font-size:18px; color:#4e6e0e"><center>
													Videocon Products</center>
												</td>
											</tr>
											<tr>
												<td>
													<table border="0" id="vc" style="position:absolute; visibility:hidden; margin-left:-4px; margin-top:3px; background:#e2f6bc; border:1px solid #006600;">
														<tr>
															<td> <form action="gallery.php" method="post"> </td>
															<td>
																	<input type="hidden" name="hidden" value="vc_lcd_tv">
																	<input type="submit" id="s1" name="s" class="gellery_submin" value="LCD Television" onMouseMove="s_m_m(this.id)" onMouseOut="s_m_o(this.id)">
															</td>
															<td> </form> </td>
														</tr>
														<tr>
															<td> <form action="gallery.php" method="post"> </td>
															<td>
																	<input type="hidden" name="hidden" value="vc_satellite_tv">
																	<input type="submit" id="s2" name="s" class="gellery_submin" value="Satelite Television" onMouseMove="s_m_m(this.id)" onMouseOut="s_m_o(this.id)">
															</td>
															<td></form></td>
														</tr>
														<tr>
															<td><form action="gallery.php" method="post"></td>
															<td>
																	<input type="hidden" name="hidden" value="vc_standard_tv">
																	<input type="submit" id="s3" name="s" class="gellery_submin" value="Standard Television" onMouseMove="s_m_m(this.id)" onMouseOut="s_m_o(this.id)">
															</td>
															<td></form></td>
														</tr>
														<tr>
															<td><form action="gallery.php" method="post"></td>
															<td>
																	<input type="hidden" name="hidden" value="vc_split_ac">
																	<input type="submit" id="s4" name="s" class="gellery_submin" value="Split AC" onMouseMove="s_m_m(this.id)" onMouseOut="s_m_o(this.id)">
															</td>
															<td></form></td>
														</tr>
														<tr>
															<td><form action="gallery.php" method="post"></td>
															<td>
																	<input type="hidden" name="hidden" value="vc_window_ac">
																	<input type="submit" id="s5" name="s" class="gellery_submin" value="Window AC" onMouseMove="s_m_m(this.id)" onMouseOut="s_m_o(this.id)">
															</td>
															<td></form></td>
														</tr>
														<tr>
															<td><form action="gallery.php" method="post"></td>
															<td>
																	<input type="hidden" name="hidden" value="vc_ref">
																	<input type="submit" id="s6" name="s" class="gellery_submin" value="Refrigerator" onMouseMove="s_m_m(this.id)" onMouseOut="s_m_o(this.id)">
															</td>
															<td></form></td>
														</tr>
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</td>
									<td>
										<table border="0" width="190px" style="background:#b8da73; border:1px solid #006600;" onMouseOver="lg_show()" onMouseOut="lg_hide()">
											<tr>
												<td style="font-family:Arial; font-size:18px; color:#4e6e0e"><center>
													LG Products</center>
												</td>
											</tr>
											<tr>
												<td>
													<table border="0" id="lg" style="position:absolute; visibility:hidden; margin-left:-4px; margin-top:3px; background:#e2f6bc; border:1px solid #006600;">
														<tr>
															<td><form action="gallery.php" method="post"></td>
															<td>
																	<input type="hidden" name="hidden" value="Lg_lcd_tv">
																	<input type="submit" id="s7" name="s" class="gellery_submin" value="LCD Television" onMouseMove="s_m_m(this.id)" onMouseOut="s_m_o(this.id)">
															</td>
															<td></form></td>
														</tr>
														<tr>
															<td><form action="gallery.php" method="post"></td>
															<td>
																	<input type="hidden" name="hidden" value="lg_plasma_tv">
																	<input type="submit" id="s8" name="s" class="gellery_submin" value="Plasma Television" onMouseMove="s_m_m(this.id)" onMouseOut="s_m_o(this.id)">
															</td>
															<td></form></td>
														</tr>
														<tr>
															<td><form action="gallery.php" method="post"></td>
															<td>
																	<input type="hidden" name="hidden" value="lg_color_tv">
																	<input type="submit" id="s9" name="s" class="gellery_submin" value="Color Television" onMouseMove="s_m_m(this.id)" onMouseOut="s_m_o(this.id)">
															</td>
															<td></form></td>
														</tr>
														<tr>
															<td><form action="gallery.php" method="post"></td>
															<td>
																	<input type="hidden" name="hidden" value="lg_home_th">
																	<input type="submit" id="s10" name="s" class="gellery_submin" value="Home Theater Systems" onMouseMove="s_m_m(this.id)" onMouseOut="s_m_o(this.id)">
															</td>
															<td></form></td>
														</tr>
														<tr>
															<td><form action="gallery.php" method="post"></td>
															<td>
																	<input type="hidden" name="hidden" value="lg_split_ac">
																	<input type="submit" id="s11" name="s" class="gellery_submin" value="Split AC" onMouseMove="s_m_m(this.id)" onMouseOut="s_m_o(this.id)">
															</td>
															<td></form></td>
														</tr>
														<tr>
															<td><form action="gallery.php" method="post"></td>
															<td>
																	<input type="hidden" name="hidden" value="lg_window_ac">
																	<input type="submit" id="s12" name="s" class="gellery_submin" value="Window AC" onMouseMove="s_m_m(this.id)" onMouseOut="s_m_o(this.id)">
															</td>
															<td></form></td>
														</tr>
														<tr>
															<td><form action="gallery.php" method="post"></td>
															<td>
																	<input type="hidden" name="hidden" value="lg_rf">
																	<input type="submit" id="s13" name="s" class="gellery_submin" value="Refrigerator" onMouseMove="s_m_m(this.id)" onMouseOut="s_m_o(this.id)">
															</td>
															<td></form></td>
														</tr>
														<tr>
															<td><form action="gallery.php" method="post"></td>
															<td>
																	<input type="hidden" name="hidden" value="lg_front_load_wm">
																	<input type="submit" id="s14" name="s" class="gellery_submin" value="Front Load Washing Machine" onMouseMove="s_m_m(this.id)" onMouseOut="s_m_o(this.id)">
															</td>
															<td></form></td>
														</tr>
														<tr>
															<td><form action="gallery.php" method="post"></td>
															<td>
																	<input type="hidden" name="hidden" value="lg_top_load_wm">
																	<input type="submit" id="s15" name="s" class="gellery_submin" value="Top Load Washing Machine" onMouseMove="s_m_m(this.id)" onMouseOut="s_m_o(this.id)">
															</td>
															<td></form></td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</td>
									<td width="550px">
										
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>
							<?php
								$con=mysql_connect("localhost","root","")or die(mysql_error);
								$db=mysql_select_db("webtronic")or die(mysql_error);
								
								if(isset($_POST['hidden']))
								{
									$_SESSION['gallery_table_name']=$_POST['hidden'];
								}
								if(isset($_SESSION['gallery_table_name']))
								{
									$item=$_SESSION['gallery_table_name'];
									$result=mysql_query("select * from $item");
									$tr=1;
									$href="";
									$id="";
									echo "<table border='0px'><tr>";
									
									if(isset ($_POST['hidden_view']))
									{
										$view=$_POST['hidden_view'];
										$_SESSION['gallery_view']=$_POST['hidden_view'];
									}
									else
									{
										if(isset($_SESSION['gallery_view']))
										{
											$view=$_SESSION['gallery_view'];
										}
										else
										{
											$view="table";
										}
									}
																
										while($row=mysql_fetch_array($result))
										{
											$href=$item."_detail.php ? id=".$row[0];
											
											echo "<td><center>
													<table border='0' style='border:1px solid #9aca3a;'>
														<tr>
															<td width='230'>
																<center><a href='".$href."'>
																<img border='none' height='150px'src=".$row[2]."></a>
																</center>
															</td>
														</tr>
														<tr>
															<td height='50px' style='font-family:Arial; font-size:14px; color:#4e6e0e'>
																<center>
																".$row[1]."
																</center>
															</td>
														</tr>
														<tr><td><br></td></tr>
													</table></center>
												</td>";
											if($tr==4)
											{
												$tr=0;
												echo "</tr><tr>";
												
											}
											$tr++;
										}
										echo "</tr></table>";	
								}
							?>
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
