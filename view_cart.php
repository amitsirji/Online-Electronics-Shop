<?php
	session_start();
	if(isset($_SESSION['user_name']))
	{
		if($_SESSION['user_name']=="")
		{
			echo "<script>window.location='login.php';</script>";
		}
	}
	if(!isset($_SESSION['user_name']))
	{
		echo "<script>window.location='login.php';</script>";
	}
?>
<html>
<head>
<title>www.webtronic.com - View Cart</title>
<style>
.view_cart_td_table td 
{
	border:1px #BBDB7C solid; font-family:Arial; color:#51740C; font-size:14px;
}
.view_cart_td_table th
{
	border:1px #BBDB7C solid; font-family:Arial; color:#51740C; font-size:15px;
	background:#EBF6D6;
}
.view_cart_cont_shop a
{
	text-decoration:none; font-family:Arial; font-size:14px; color:#006600; 
}
.view_cart_cont_shop td
{
	text-decoration:none; font-family:Arial; font-size:14px; 
}
.view_cart_cont_shop a:hover
{
	text-decoration:underline;
}
.view_cart_cont_shop
{
	background:url(image/cont_shop_table_bg_1.jpg);
}
</style>
</head>
<body style="margin-top:0px">
<center>
	<?php
		include('heading.php');
	?>
	<table border="0" width="960px" bgcolor="#FFFFFF" style="margin-top:-2px;">
		<tr>
			<td>
				<div style="float:right; height:30px; font-size:14px; font-family:Arial; color:#9aca3a"><b>
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
					?></b>
				</div>
			</td>
		</tr>
		<tr>
			<td bgcolor="#FFFFFF" style="">
				<center>
					<?php
						$user_name=$_SESSION['user_name'];
											
						$con=mysql_connect("localhost","root","");
						$db=mysql_select_db("webtronic");	
						$total=0;
						$delivery=5000;	
						$prev=$_SESSION['file_name'];	
						/*-----------------------------------------------------------------*/
						$new_val="";
						if(isset ($_GET['hid']))
						{
							$new_val=$_GET['edit_qnt'];
							$no=$_GET['hid'];
							if($new_val<1 || $new_val>99)
							{
								$new_val=1;
							}
							mysql_query("update temp set qnt='$new_val' where no='$no'");
						}
						$new_val="";
						/*-----------------------------------------------------------------*/
						$del_item="";
						if(isset($_GET['del_hid']))
						{
							$del_item=$_GET['del_hid'];
							mysql_query("delete from temp where no=$del_item");
							}
						$del_item="";
						/*----------------------------------------------------------------*/
						
						$result=mysql_query("select * from temp where user_temp='$user_name'");	
						if(isset ($_GET['cart_item']))
						{
							echo "<br><br><br><br><br><b><font color='#006600'>Cart is empty now  ! You order some item.<br>We are Delever your item in few days. <br><br>Thank You !</font></b><br><br><br><br><br><br>";
							echo "<table border='0' width='950px'> 
									<tr>
										<td width='800px'>
											<table  border='0' height='50px' width='175px' class='view_cart_cont_shop' >
												<tr>
													<td colspan=2 >Continue Shopping</td>
												</tr>
												<tr>
													<td><a href='home.php'> Home</a> &nbsp; | &nbsp; </td>
													<td><a href='product.php'> Products Page </a></td>
												</tr>
											</table>
										</td>
										<td>
											<form action='delivery_address.php' method='POST'>
										</td>
										<td style='border:1px solid #9aca3a;'></td>
										<td>
											</form>
										</td>
									</tr>
								  </table>";
						}
						else if(mysql_affected_rows()>0)
						{
							echo "<table border='0' width='950px'><tr><td><table  border='0' height='50px' width='175px' style='float:left;' class='view_cart_cont_shop' >
									<tr>
										<td colspan=2 >Continue Shopping</td>
									</tr>
									<tr>
										<td><a href='home.php'> Home</a> &nbsp; | &nbsp; </td>
										<td><a href='$prev'> Previous Page </a></td>
									</tr>
								</table>
							</td>
						</tr>
					</table>";
					echo "<br><table border='0' width='950px' class='view_cart_td_table' style=''> 
								<th>Item</th> 
								<th>Prise</th> 
								<th>Quentity</th> 
								<th> &nbsp; &nbsp;  Totel Rs.  &nbsp; &nbsp; </th> 
								<th> &nbsp;  Remove  &nbsp;</th>";
								while($row=mysql_fetch_array($result))
								{
									$product_id_arr=mysql_query("select * from $row[2] where id='$row[3]'");
									$product_id=mysql_fetch_array($product_id_arr);
								
									$qnt_arr=mysql_query("select qnt from temp where product_id='$row[3]' and product_table_name='$row[2]' and user_temp='$user_name'");
									$qnt=mysql_fetch_array($qnt_arr);
								
									$main_mrp_arr= mysql_query ("select main_mrp from $row[2] where id='$row[3]'");
									$main_mrp=mysql_fetch_array($main_mrp_arr);
							
									echo "<tr>
											<td>
												<table border='0'>
													<tr>
														<td width='500px' style='border:none;'><center><img height='100px' src=".$product_id[2]."></center>
														</td>
													</tr>
													<tr>
														<td width='500px' style='border:none;'><center>".$product_id[1]."</center>
														</td>
													</tr>
												</table>
											</td>
											<td>
												"." &nbsp; &nbsp; ".$main_mrp[0].".00 &nbsp; &nbsp; "."
											</td>
											<td>
												<form action='view_cart.php' method='GET'><br> &nbsp;
													<input style='width:40px; border:1px #BBDB7C solid;' type='text' name='edit_qnt' maxlength='2' value='$qnt[0]'> &nbsp; &nbsp; 
													<input type='hidden' name='hid' value='$row[0]'>
													<input type='submit' name='edit_cart' value='Update' style='border:1px #BBDB7C solid; font-family:Arial; color:#51740C; font-size:14px;'>  &nbsp; 
												</form>
											</td>
											<td>
												"."<div style='float:right;'>".$main_mrp[0]*$qnt[0].".00</div>"."
											</td>
											<td>
												<form action='view_cart.php' method='GET'>
													<br>
													<input type='hidden' name='del_hid' value='$row[0]'><center>
													<input type='submit' value=' &nbsp; &nbsp; &nbsp;' style='background:url(image/item_delete.png); background-repeat:no-repeat; border:none; height:30px' ></center>
												</form>
											</td>
										</tr>";
										$total=($total)+($main_mrp[0]*$qnt[0]);
								}
								$_SESSION['cart_total']=$total;
								echo "</table><br>";
					
								echo "<table border='0' width='950px' height='40px' style='background:#E7F6CA; border-bottom:2px #000000 solid; border-top:2px #000000 solid;'> 
											<tr>
												<td width='515px'></td>
												<td width='100px'><center><b>Cart Total : </b></center></td>
												<td>
													<div style='float:right;'><b>".$total.".00 Rs.</b></div>
												</td>
												<td width='50px'></td>
											</tr>
									  </table><br><br>";

						  
								echo "<table border='0' width='950px'> 
											<tr><td width='800px'>
												<table  border='0' height='50px' width='175px' class='view_cart_cont_shop' >
													<tr>
														<td colspan=2 >Continue Shopping</td>
													</tr>
													<tr>
														<td><a href='home.php'> Home</a> &nbsp; | &nbsp; </td>
														<td><a href='$prev'> Previous Page </a></td>
													</tr></table>
												</td>
												<td><form action='delivery_address.php' method='POST'></td>
												<td style='border:1px solid #9aca3a;'>
													
													<input type='submit' name='check_out' style='height:43px; width:175px; background:url(image/add_to_cart_button_bg_1.jpg);font-size:20px; color:#3F5B07;' value='Check Out'>
												</td>
												<td>
													</form>
												</td>
											</tr>
									  </table>";
								}
								else
								{
									echo "<br><br><br><br><br><br><br><b><font color='#006600'> You have not Purchased any item.</font></b><br><br><br><br><br><br>";
									echo "<table border='0' width='950px'> 
											<tr>
												<td width='800px'>
													<table  border='0' height='50px' width='175px' class='view_cart_cont_shop' >
														<tr>
															<td colspan=2 >Continue Shopping</td>
														</tr>
														<tr>
															<td><a href='home.php'> Home</a> &nbsp; | &nbsp; </td>
															<td><a href='product.php'> Products Page </a></td>
														</tr>
													</table>
												</td>
												<td>
													<form action='delivery_address.php' method='POST'>
												</td>
												<td style='border:1px solid #9aca3a;'>
												</td>
												<td>
													</form>
												</td>
											</tr>
										  </table>";
									
								}
					?>
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
