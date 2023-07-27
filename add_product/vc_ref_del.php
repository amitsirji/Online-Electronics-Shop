<?php
	session_start();
	if(!isset($_SESSION['admin_name']) && !isset($_SESSION['admin_pass']))
	{
		echo "<script>window.location='../login.php';</script>";
	}
?>
<html>
<head>
<title>www.webtronic.com - Administrator - Delete Products</title>
</head>
<body bgcolor="#CCFFFF">
<center>
<?php
	include ('delete_product_head.php');
?>
<h1><u>Videocon Refrigerator<br></u></h1>
<?php


	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("webtronic");
	
	if(isset ($_POST['a1']))
	{
		$delete_row=$_POST['a1'];
		while(list($key,$value)=each($delete_row))
		{
			mysql_query("delete from vc_ref where id='$value'");   //Change
		}
	}

	
	$result=mysql_query("select * from vc_ref");   //change
	
	echo "<form action='vc_ref_del.php' method='post'>";    //change
	
	echo "<table border='0'><th>Delete</th> <th>ID</th> <th></th> <th>Product Name</th><tr><td><br></td></tr>";
	
	$id_=1;
	
	while ($row=mysql_fetch_array($result))
	{
		echo "<tr>";
		echo "<td><center><input type='checkbox' value=$row[0] name=a1[]></center></td><td>";
		echo $row[0]."</td><td>&nbsp; &nbsp; &nbsp;</td><td>";
		echo $row[1];
		echo"</td></tr><tr><td><br></td></tr>";
	}
	
	echo "<tr><td><input type='submit' value='Delete'</td></tr>";
?>
</table>
</center>
</body>
</html>
