<?php
	session_start();
	if(!isset($_SESSION['admin_name']) && !isset($_SESSION['admin_pass']))
	{
		echo "<script>window.location='../login.php';</script>";
	}
?>
<html>
<head>
<title>www.webtronic.com - Administrator - Add New Products</title>
<style>
.error
{
	visibility:hidden;color:ff0000;
}
.text_box
{
	width:220px;
}
</style>
<script language="javascript">
function validate()
{
	var main_mrp =document.getElementById("id13").value;
	if(isNaN(main_mrp))
	{
		document.getElementById("error_13").style.visibility="visible";
		return false;
	}
	
	
	var a="id";
	var id="";
	var valid="";
	var x="error_";
	var error="";
	for(i=1; i<=13; i++)
	{
		id=a+i;
		error=x+i;
		if(document.getElementById(id).value=="")
		{
			valid="no";
			document.getElementById(error).style.visibility="visible";
		}
		else
		{
			document.getElementById(error).style.visibility="hidden";
		}
		if(i==13)
		{
			if(valid != "no")
			{
				var retval=confirm("Product is store in database now ?");
				if (retval==true )
				{		
					return true;
				}
				else
				{
					return false;
				}
				
			}
			else
			{
				return false;
			}
		}
	}
				
}
</script>
</head>
<body bgcolor="#CCFFFF"> 
<center>
<?php
	include ('add_product_head.php');
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("webtronic");
	
	if(isset ($_POST['id']))
	{
		$id=$_POST['id'];
		$name=$_POST['name'];
		$path="product_img/lg_window_ac/".$id.".jpg";
		
		$ton =$_POST['ton'];
		$cooling =$_POST['cooling'];
		$eer =$_POST['eer'];
		$air_circulation =$_POST['air_circulation'];
		$noise_level =$_POST['noise_level'];
		$power_input =$_POST['power_input'];
		$running_current =$_POST['running_current'];
		$mrp =$_POST['mrp'];
		$new_mrp =$_POST['new_mrp'];
		$main_mrp =$_POST['main_mrp'];
		
		mysql_query("insert into lg_window_ac values('$id','$name','$path','$ton','$cooling','$eer','$air_circulation','$noise_level','$power_input','$running_current','$mrp','$new_mrp','$main_mrp')");
		
		if(mysql_affected_rows()>0)
		{
			copy($_FILES['file']['tmp_name'],"../product_img/lg_window_ac//".$id.".jpg");
		}
		else
		{
			echo"<script>
					alert('ID is Duplicat ! Record not Insert');
					window.location='lg_window_ac_add.php';</script>";
		}
	}	

?>
<h1><u>LG Window AC<br></u></h1>

		<center><b>New Record</b><br><br></center>

		<table border="0" style="float:left; margin-left:100px; border:double;"> 
			<th style="border-bottom:double;">Inserted ID List <br><br></th>
				<tr>
					<td>
						<br>
					</td>
				</tr>
				<?php
					$id_arr=mysql_query("select id from lg_window_ac");
					
					while($row=mysql_fetch_array($id_arr))
					{
						echo "<tr><td><b><center>";
						echo $row[0];
						echo "</center></b></tr></td>";
					}
				
				?>
		</table>
		
		<form action="lg_window_ac_add.php" method="post" enctype="multipart/form-data" onSubmit="return validate()">
			<table border="0" style="margin-right:200px">
				<tr>
					<td width="106px">ID</td>
					<td width="220px"><input type="text" class="text_box" id="id1" name="id" maxlength="20"></td>
					<td width="20px"id="error_1" class="error">*</td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" class="text_box" id="id2" name="name" maxlength="50"></td>
					<td id="error_2" class="error">*</td>
				</tr>
				<tr>
					<td>Image Path</td>
					<td><input type="file" class="text_box" id="id3" name="file"></td>
					<td id="error_3" class="error">*</td>
				</tr>
				<tr>
					<td>Ton</td>
					<td><input type="text" class="text_box" id="id4" name="ton" maxlength="4"></td>
					<td id="error_4" class="error">*</td>
				</tr>
				<tr>
					<td>Cooling</td>
					<td><input type="text" class="text_box" id="id5" name="cooling" maxlength="4"></td>
					<td id="error_5" class="error">*</td>
				</tr>
				<tr>
					<td>EER</td>
					<td><input type="text" class="text_box" id="id6" name="eer" maxlength="4"></td>
					<td id="error_6" class="error">*</td>
				</tr>
				<tr>
					<td>Air Circulation</td>
					<td><input type="text" class="text_box" id="id7" name="air_circulation" maxlength="4"></td>
					<td id="error_7" class="error">*</td>
				</tr>
				<tr>
					<td>Noise Level</td>
					<td><input type="text" class="text_box" id="id8" name="noise_level" maxlength="4"></td>
					<td id="error_8" class="error">*</td>
				</tr>
				<tr>
					<td>Power Input</td>
					<td><input type="text" class="text_box" id="id9" name="power_input" maxlength="4"></td>
					<td id="error_9" class="error">*</td>
				</tr>
				<tr>
					<td>Running Current</td>
					<td><input type="text" class="text_box" id="id10" name="running_current" maxlength="4"></td>
					<td id="error_10" class="error">*</td>
				</tr>
				<tr>
					<td>MRP</td>
					<td><input type="text" class="text_box" id="id11" name="mrp" maxlength="10"></td>
					<td id="error_11" class="error">*</td>
				</tr>
				<tr>
					<td>New MRP</td>
					<td><input type="text" class="text_box" id="id12" name="new_mrp" maxlength="10"></td>
					<td id="error_12" class="error">*</td>
				</tr>
				<tr>
					<td>Main MRP</td>
					<td><input type="text" class="text_box" id="id13" name="main_mrp" maxlength="5"></td>
					<td id="error_13" class="error">*</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="s1" value="Submit">
						<input type="reset" value="Reset">
					</td>
				</tr>
			</table>
		</form>
</center>
</body>
</html>
