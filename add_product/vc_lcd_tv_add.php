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
	var speaker=document.getElementById("id11").value;
	if(isNaN(speaker))
	{
		document.getElementById("error_11").style.visibility="visible";
		return false;
	}
	
	var main_mrp =document.getElementById("id14").value;
	if(isNaN(main_mrp))
	{
		document.getElementById("error_14").style.visibility="visible";
		return false;
	}
	
	
	var a="id";
	var id="";
	var valid="";
	var x="error_";
	var error="";
	for(i=1; i<=14; i++)
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
		if(i==14)
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
		$path="product_img/vc_lcd_tv/".$id.".jpg";
		
		$size =$_POST['size'];
		$resolution =$_POST['resolution'];
		$audio_type =$_POST['audio_type'];
		$color =$_POST['color'];
		$contrast =$_POST['contrast'];
		$brightness =$_POST['brightness'];
		$screen_size =$_POST['screen_size'];
		$num_of_sp =$_POST['num_of_sp'];
		$mrp =$_POST['mrp'];
		$new_mrp =$_POST['new_mrp'];
		$main_mrp =$_POST['main_mrp'];
		
		mysql_query("insert into vc_lcd_tv values('$id','$name','$path','$size','$resolution','$audio_type','$color','$contrast','$brightness','$screen_size','$num_of_sp','$mrp','$new_mrp','$main_mrp')");
		
		if(mysql_affected_rows()>0)
		{
			copy($_FILES['file']['tmp_name'],"../product_img/vc_lcd_tv//".$id.".jpg");
		}
		else
		{
			echo"<script>
					alert('ID is Duplicat ! Record notg  Insert');
					window.location='vc_lcd_tv_add.php';</script>";
		}
		
	}	

?>
<h1><u>Videocon LCD Television<br></u></h1>

		<b><center>New Record</center></b><br><br>
		  		
    	<table border="0" style="float:left; margin-left:100px; border:double;">
  			<th style="border-bottom:double;">Inserted ID List <br><br></th>
  			<tr>
   				<td><br></td>
  			</tr>
  			<?php
				$id_arr=mysql_query("select id from vc_lcd_tv");
				
				while($row=mysql_fetch_array($id_arr))
				{
					echo "<tr><td><b><center>";
					echo $row[0];
					echo "</center></b></tr></td>";
				}
			
			?>
   		</table>
		<form action="vc_lcd_tv_add.php" method="post" enctype="multipart/form-data" onSubmit="return validate()">
			<table border="0" style="margin-right:200px">
				<tr>
					<td width="106px">ID</td>
				 	<td width="220px"><input type="text" class="text_box" id="id1" name="id" maxlength="20"></td>
					<td width="20px" class="error" id="error_1">*</td>
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
					<td>Audio Type</td>
					<td><input type="text" class="text_box" id="id6" name="audio_type" maxlength="30"></td>
					<td id="error_6" class="error">*</td>
				</tr>
				<tr>
					<td>Color</td>
					<td><input type="text" class="text_box" id="id7" name="color" maxlength="15"></td>
					<td id="error_7" class="error">*</td>
				</tr>
				<tr>
					<td>Contrast</td>
					<td><input type="text" class="text_box" id="id8" name="contrast" maxlength="40"></td>
					<td id="error_8" class="error">*</td>
				</tr>
				<tr>
					<td>Brightness</td>
					<td><input type="text" class="text_box" id="id9" name="brightness" maxlength="40"></td>
					<td id="error_9" class="error">*</td>
				</tr>
				<tr>
					<td>Sreen Size Range</td>
					<td><input type="text" class="text_box" id="id10" name="screen_size" maxlength="30"></td>
					<td id="error_10" class="error">*</td>
				</tr>
				<tr>
					<td>Num of Speaker</td>
					<td><input type="text" class="text_box" id="id11" name="num_of_sp" maxlength="1"></td>
					<td id="error_11" class="error">*</td>
				</tr>
				<tr>
					<td>MRP</td>
					<td><input type="text" class="text_box" id="id12" name="mrp" maxlength="10"></td>
					<td id="error_12" class="error">*</td>
				</tr>
				<tr>
					<td>New MRP</td>
					<td><input type="text" class="text_box" id="id13" name="new_mrp" maxlength="10"></td>
					<td id="error_13" class="error">*</td>
				</tr>
				<tr>
					<td>Main MRP</td>
					<td><input type="text" class="text_box" id="id14" name="main_mrp" maxlength="5"></td>
					<td id="error_14" class="error">*</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="s1" value="Submit" onClick="ok()">
						<input type="reset" value="Reset">
					</td>
				</tr>
			</table>
		</form>
</center>
</body>
</html>
