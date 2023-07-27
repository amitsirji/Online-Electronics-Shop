<?php
	session_start();
	$_SESSION['file_name']="lg_lcd_tv.php";
	if(!isset($_SESSION['user_name']))
	{$_SESSION['user_name']="";}
?>
<html>
<head>
<title>www.webtronic.com - LG LCD Television</title>

<style>
.header_menu_td_2 a
{
	color:#000000; background:url(image/menu_item_bg_1.jpg); background-repeat:repeat-x;
}
.font_size_12px
{
	font-family:Arial; font-size:12px;
}
.product_page_num a:hover
{
	background:#9aca3a;
}
.product_page_num a
{
	text-decoration:none; color:#51740C; font-size:12px;
}
a.odd7
{	
	text-decoration:none; float:left; background:url(image/left_menu_item_bg_2.jpg);  color:#047055;    width:201px; border-left:3px solid #64A738;  border-right:3px solid #64A738; 
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
				<a href='login.php' style='text-decoration:none;color:#6A9513;'>login</a> &nbsp;|&nbsp; 
				<a href='signup.php' style='text-decoration:none;color:#6A9513;'>new user ?</a>";
			} 
		?></b></div></td></tr>
		<tr>
			<td >
				<?php
					include('product_left_menu.php');
				?>
				
				<table border="0" width="725px" height="5px" style="float:right; border-color:#0000FF;  ">
					<tr>
						<td >
							<table border="0"><tr><td style="background:url(image/product_title_bg_1.jpg); width:700px;">
								<div style="float:left;"><table border="0"  height="40px" style="font-family:Arial; font-size:24px; color:#51740C;"><tr><td>LG LCD Television</td></tr></table></div>
								<div style="float:right;">

							<?php
								echo "<table border='0' style='margin-top:-15px; font-family:Arial; color:#51740C;'><tr>";
								$con=mysql_connect("localhost","root","");
								$db=mysql_select_db("webtronic");
								
								$loop=0;
								$page=0;
								$temp=0;
								$col=0;
								$result=mysql_query("select * from lg_lcd_tv");

								$count=mysql_query("select * from lg_lcd_tv");
								
								while($arr=mysql_fetch_array($count))
								{
									$loop ++;
								}
								
								echo "<br>";
								
								echo "</tr></table>";
								echo "</div>
									</td>
									</td>
								</table>
							</td>
						</tr>
							<tr>
								<td>
								<table border='0' style='border-color:#FF0000;'>
									<tr>";
								
									while($data=mysql_fetch_array($result))
									{	
										if($col<=2)
										{
											echo "<td><center>";
											
											echo "<table border='0' style='width:172px; height:300px; border:1px #E4F9BB solid;'>";
											echo " <tr><td height='120px'><center><a href='lg_lcd_tv_detail.php ? id=$data[0]'><img height='100px'  src=".$data[2]." style='border:none;'></a></center></td></tr>
											
											  <tr><td height='40px' class='font_size_12px' style='color:#618A10; border-bottom:1px solid #E4F9BB;'><center><b>".$data[1]."</b></center></td></tr>
											  
											  <tr><td height='120px' class='font_size_12px'><center><p align='left' style='padding: 5px 0 0 15px; border-bottom:1px solid #E4F9BB;'>Size : ".$data[3]."''<br>Resolution : ". $data[4]."<br>Brightness : ". $data[5]."<br>Audio Output : ". $data[7]."</p></center></td></tr>
											  
											  <tr><td class='font_size_12px'><center><b><div style='color:#618A10; float:right; text-decoration:line-through;'> ".$data[9]." Rs.</div><div style='float:right;'>MRP : &nbsp; </div></b></center></td></tr>
											  
											  <tr><td class='font_size_12px'><center><b><div style='color:#618A10; float:right;'> ".$data[10]." Rs.</div><div style='float:right;'>Now at : &nbsp; </div></center></b></td></tr>";
											echo "</table>";
											
											echo "</center></td>";
										}
										else
										{
											echo "<td>";
											
											echo "<table border='0' style='width:172px; height:300px; border:1px #E4F9BB solid;'>";
											echo " <tr><td height='120px'><center><a href='lg_lcd_tv_detail.php ? id=$data[0]'><img height='100px'  src=".$data[2]." style='border:none;'></a></center></td></tr>
											
											  <tr><td height='40px' class='font_size_12px' style='color:#618A10; border-bottom:1px solid #E4F9BB;'><center><b>".$data[1]."</b></center></td></tr>
											  
											  <tr><td height='120px' class='font_size_12px'><center><p align='left' style='padding: 5px 0 0 15px; border-bottom:1px solid #E4F9BB;'>Size : ".$data[3]."''<br>Resolution : ". $data[4]."<br>Brightness : ". $data[5]."<br>Audio Output : ". $data[7]."</p></center></td></tr>
											  
											  <tr><td class='font_size_12px'><center><b><div style='color:#618A10; float:right; text-decoration:line-through;'> ".$data[9]." Rs.</div><div style='float:right;'>MRP : &nbsp; </div></b></center></td></tr>
											  
											  <tr><td class='font_size_12px'><center><b><div style='color:#618A10; float:right;'> ".$data[10]." Rs.</div><div style='float:right;'>Now at : &nbsp; </div></center></b></td></tr>";
											echo "</table>";
												
											$col=-1;
											echo "</tr>";
											echo "<tr>";
										}
										$col++;
									}
								
								echo "</tr></table>";
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
