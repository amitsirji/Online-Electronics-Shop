<?php
	session_start();
?>
<html>
<head>
<title>www.webtronic.com - Logout</title>
</head>
<body>
<?php
	$file=$_SESSION['file_name'];
	$user=$_SESSION['user_name'];
	
	$conn=mysql_connect("localhost","root","");
	$db=mysql_select_db("webtronic");
	
	mysql_query("delete from temp where user_temp='$user'");

	$_SESSION['user_name']="";
	echo "<script>window.location='$file'</script>";
	

?>
</body>
</html>
