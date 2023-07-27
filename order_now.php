<?php
	session_start();
?>
<html>
<head>
<title>www.webtronic.com - Order Now </title>
</head>
<body>
<?php

	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("webtronic");
	$user=$_SESSION['user_name'];
	
	$pay_mode=$_POST['payment_mode'];
	
	$result=mysql_query("select * from signup where user='$user'");
	$row=mysql_fetch_array($result);
			
	$temp=mysql_query("select * from temp where user_temp='$user'");
	
	if($pay_mode=="credit_card")
	{
		//echo "credit Card";	
		$card_name=$_POST['credit_card_type'];
		$card_num=$_POST['credit_card_number'];
		$card_ver_code=$_POST['credit_card_ver_number'];
		$bank_name=$_POST['credit_card_bank_name'];
		
		while($temp_row=mysql_fetch_array($temp))
		{
			mysql_query("insert into admin_user_order values('','$temp_row[1]','$temp_row[2]','$temp_row[3]','$temp_row[4]','$row[11]','$row[12]','$row[13]','$row[14]','$pay_mode','$card_name','$card_num','$card_ver_code','$bank_name')");
			
			mysql_query("insert into admin_order_history values('','$temp_row[1]','$temp_row[2]','$temp_row[3]','$temp_row[4]','$row[11]','$row[12]','$row[13]','$row[14]','$pay_mode','$card_name','$card_num','$card_ver_code','$bank_name')");
			
		}
			mysql_query("delete from temp where user_temp='$user'");
			

		
		echo "<script>window.location='view_cart.php ? cart_item=empty'</script>";
	}
	else
	{
		while($temp_row=mysql_fetch_array($temp))
		{
			mysql_query("insert into admin_user_order values('','$temp_row[1]','$temp_row[2]','$temp_row[3]','$temp_row[4]','$row[11]','$row[12]','$row[13]','$row[14]','$pay_mode','','','','')");
			
			mysql_query("insert into admin_order_history values('','$temp_row[1]','$temp_row[2]','$temp_row[3]','$temp_row[4]','$row[11]','$row[12]','$row[13]','$row[14]','$pay_mode','','','','')");
		}	
		mysql_query("delete from temp where user_temp='$user'");
		
		echo "<script>window.location='view_cart.php ?cart_item=empty'</script>";

	}
?>
</body>
</html>
