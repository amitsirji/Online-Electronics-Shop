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
	var main_mrp =document.getElementById("id12").value;
	if(isNaN(main_mrp))
	{
		document.getElementById("error_12").style.visibility="visible";
		return false;
	}
	
	
	var a="id";
	var id="";
	var valid="";
	var x="error_";
	var error="";
	for(i=1; i<=12; i++)
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
		if(i==12)
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
		$path="product_img/lg_lcd_tv/".$id.".jpg";
		
		$size =$_POST['size'];
		$resolution =$_POST['resolution'];
		$brightness =$_POST['brightness'];
		$contrast_ratio =$_POST['contrast_ratio'];
		$audio_output =$_POST['audio_output'];
		$speaker =$_POST['speaker'];
		$mrp =$_POST['mrp'];
		$new_mrp =$_POST['new_mrp'];
		$main_mrp =$_POST['main_mrp'];
		
		mysql_query("insert into lg_lcd_tv values('$id','$name','$path','$size','$resolution','$brightness','$contrast_ratio','$audio_output','$speaker','$mrp','$new_mrp','$main_mrp')");
		
		if(mysql_affected_rows()>0)
		{
			copy($_FILES['file']['tmp_name'],"../product_img/lg_lcd_tv//".$id.".jpg");
		}
		else
		{
			echo"<script>
					alert('ID is Duplicat ! Record not Insert');
					window.location='lg_lcd_tv_add.php';</script>";
		}
	}	

?>
<h1><u>LG LCD Television<br></u></h1>

		<center><b>New Record</b><br><br></center>
			
		<table border="0" style="float:left; margin-left:100px; border:double;"> 
			<th style="border-bottom:double;">Inserted ID List <br><br></th>
			<tr>
				<td>
					<br>
				</td>
			</tr>
			<?php
				$id_arr=mysql_query("select id from lg_lcd_tv");
				
				while($row=mysql_fetch_array($id_arr))
				{
					echo "<tr><td><b><center>";
					echo $row[0];
					echo "</center></b></tr></td>";
				}
			
			?>
		</table>
		
		<form action="lg_lcd_tv_add.php" method="post" enctype="multipart/form-data" onSubmit="return validate()">
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
					<td>Size</td>
					<td><input type="text" class="text_box" id="id4" name="size" maxlength="4"></td>
					<td id="error_4" class="error">*</td>
				</tr>
				<tr>
					<td>Resolution</td>
					<td><input type="text" class="text_box" id="id5" name="resolution" maxlength="20"></td>
					<td id="error_5" class="error">*</td>
				</tr>
				<tr>
					<td>Brightness</td>
					<td><input type="text" class="text_box" id="id6" name="brightness" maxlength="5"></td>
					<td id="error_6" class="error">*</td>
				</tr>
				<tr>
					<td>Contrast Ratio</td>
					<td><input type="text" class="text_box" id="id7" name="contrast_ratio" maxlength="10"></td>
					<td id="error_7" class="error">*</td>
				</tr>
				<tr>
					<td>Audio Output</td>
					<td><input type="text" class="text_box" id="id8" name="audio_output" maxlength="15"></td>
					<td id="error_8" class="error">*</td>
				</tr>
				<tr>
					<td>Speaker</td>
					<td><input type="text" class="text_box" id="id9" name="speaker" maxlength="2"></td>
					<td id="error_9" class="error">*</td>
				</tr>
				<tr>
					<td>MRP</td>
					<td><input type="text" class="text_box" id="id10" name="mrp" maxlength="10"></td>
					<td id="error_10" class="error">*</td>
				</tr>
				<tr>
					<td>New MRP</td>
					<td><input type="text" class="text_box" id="id11" name="new_mrp" maxlength="10"></td>
					<td id="error_11" class="error">*</td>
				</tr>
				<tr>
					<td>Main MRP</td>
					<td><input type="text" class="text_box" id="id12" name="main_mrp" maxlength="5"></td>
					<td id="error_12" class="error">*</td>
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
