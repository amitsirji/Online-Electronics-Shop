<?php
	session_start();
?>
<html>
<head>
<title>www.webtronic.com</title>
</head>
<body>
<?php
	
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("webtronic");
	
	$file_name=$_SESSION['file_name'];
	
	if(isset ($_POST['id']) && $_SESSION['user_name'] != "")
	{
		
		$product_table= $_POST['table'];
		$product_id= $_POST['id'];
		$user_name=$_SESSION['user_name'];
		

		$result = mysql_query("select * from temp where product_id='$product_id' and product_table_name='$product_table' and user_temp='$user_name'");
		
		if(mysql_affected_rows() > 0)
		{
			$qnt_arr=mysql_query("select qnt from temp where product_id='$product_id' and product_table_name='$product_table' and user_temp='$user_name'");
			$qnt=mysql_fetch_array($qnt_arr);
			

			echo $qnt[0];
			
			$qnt[0]=$qnt[0]+1;
			
			mysql_query("update temp set qnt=$qnt[0] where product_id='$product_id' and product_table_name='$product_table' and user_temp='$user_name'");
		}
		else
		{
			$result=mysql_query("insert into temp values('','$user_name','$product_table','$product_id',1)");
			
		}
		
		echo "<script>window.location='view_cart.php';</script>";
		
	}
	else
	{
		echo "<script>window.location='login.php';</script>";
	}	
?>
</body>
</html>
