<?php
	session_start();
	if(!isset($_SESSION['user_name']))
	{$_SESSION['user_name']="";}
?>
<html>
<head>
<title>www.webtronic.com - Signup Submit</title>
</head>
<body>
<?php
	$user=$_POST['txt_user'];
	$pass=$_POST['txt_pass'];
	$name=$_POST['txt_name'];
	$last_name=$_POST['txt_last_name'];
	$email=$_POST['txt_email'];
	$gender=$_POST['gender'];
	$address=$_POST['txt_address'];
	$country=$_POST['txt_country'];
	$state=$_POST['txt_state'];
	$city=$_POST['select_city'];
	$mobile_no=$_POST['txt_mo'];
	
	$file_name=$_SESSION['file_name'];
	
	$con=mysql_connect("localhost","root","");
	
	$db=mysql_select_db("webtronic");
	
	$result=mysql_query("insert into signup values('$user','$pass','$name','$last_name','$email','$gender','$address','$country','$state','$city','$mobile_no','$address','$country','$state','$city')");
	
	if(mysql_affected_rows()>0)
	{
		$_SESSION['user_name']=$user;
		$_SESSION['user_pass']=$pass;

		echo "<script>window.location='".$file_name."';</script>";
	}
	else
	{
		echo "<script> window.location='signup.php ? user=$user&name=$name&last_name=$last_name&email=$email&gender=$gender&address=$address&country=$country&state=$state&city=$city&mo=$mobile_no'</script>";	
	}
?>
</body>
</html>
