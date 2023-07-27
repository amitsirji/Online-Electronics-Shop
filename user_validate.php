<?php
	session_start();
?>
<html>
<head>
<title>www.webtronic.com - User Validate</title>
</head>
<body>
<?php

	if(isset ($_POST['txt_user_name']) && isset ($_POST['txt_user_pass']) && isset ($_SESSION['file_name']))
	{
		$user=$_POST['txt_user_name'];
	
		$pass=$_POST['txt_user_pass'];
		
		$file_name=$_SESSION['file_name'];
		
		$conn=mysql_connect("localhost","root","");
		$db=mysql_select_db("webtronic");
	
		$fatch_admin_user="";
		$fatch_admin_pass="";
	
		$admin_result=mysql_query("select * from admin where admin_user='$user' and admin_pass='$pass' ");
	
		$result=mysql_query("select * from signup where user='$user' and pass='$pass' ");

		while($row=mysql_fetch_array($admin_result))
		{
			$fatch_admin_user= $row[0];
			$fatch_admin_pass= $row[1];
		}
	
		if($user==$fatch_admin_user && $pass==$fatch_admin_pass)
		{
			$_SESSION['admin_name']=$fatch_admin_user;
			$_SESSION['admin_pass']=$fatch_admin_pass;
		
			echo "<script>window.location='admin.php'; </script>";
		}
		else if(mysql_affected_rows()>0)
		{
			$_SESSION['user_name']=$user;
			$_SESSION['user_pass']=$pass;
		
			$delete_history=mysql_query("delete from temp where user_temp='$user'");
		
			$result=mysql_query("select address,country,state,city from signup where user='$user'");
			$row=mysql_fetch_array($result);
			
			$result=mysql_query("update signup set delivery_address='$row[0]', delivery_country='$row[1]' , delivery_state='$row[2]' , delivery_city='$row[3]' where user='$user'");

			echo "<script>window.location='".$file_name."';</script>";
		}
		else
		{
			echo "<script>window.location='login.php ? user=$user'; </script> ";
		}
	}
	else
	{
		echo"<script> window.location='home.php';</script>";
	}
?>
</body>
</html>
