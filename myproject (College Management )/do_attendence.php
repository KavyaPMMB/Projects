<?php
session_start();
ob_start();
$con=mysqli_connect("localhost","root","","project");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
th
{
background-color:#FF3366;
color:#FFFFFF;
height:35px;
border:#000000 1px solid;
}
td
{
border:#000000 1px solid;
}
</style>
</head>
<body style="padding-top:20px;">
<h2><font color="#333333">Do Attendence</font></h2><hr /><br />
<div class="s">
<form method="post" action="">
<left>
Enter Department<input type="text" name="dep" style="margin-left:10;margin-right:20px;" >Enter Semester<input type="text" name="sem" style="margin-left:10;margin-right:20px;"><input type="submit" value="OK" name="ok" style="margin-left:10;margin-right:20px;color:#FFFFFF;background-color:#FF3366;border:#000000 solid 2px;"></left>
<?php
if(isset($_POST['ok']))
{
	$_SESSION['dep']=$_POST['dep'];
	$_SESSION['sem']=$_POST['sem'];
	$a=$_POST['dep'];
	$b=$_POST['sem'];
?>
	<center>
	<br><br><br>
	Department<input type="text" name="dept" value=<?php echo $a?> style="border:#FF3366 2px solid;margin-left:10;margin-right:20px;">
	Semester<input type="text" name="semester" value="<?php echo $b?>" style="border:#FF3366 2px solid;margin-left:10;margin-right:20px;">
	Date<input type="text" value=<?php echo date("Y-m-d")?>  name="date" style="border:#FF3366 2px solid;margin-left:10;margin-right:20px;">
	<br><br><br>

<table style="border:#000000 solid 3px;border-spacing:0px;">
	<tr>
		<th>Register No</th>
		<th>Name</th>
		<th>Total Houres</th>
		<th>Present Houres</th>
	</tr>
	<?php
$q="select RegNo,Name from student_reg where Department='$a' and Semester='$b'";
	$r=mysqli_query($con,$q);
	while($a=mysqli_fetch_assoc($r))
	{
	?>
	<tr>
		<td>
			<input type="text" value=<?php echo $a['RegNo'];?> name="regno" style="border:none;">
		</td>
		<td>
			<input type="text" value=<?php echo $a['Name'];?> name="name" style="border:none"></td><td><input type="text" name="total" style="border:none;">
		</td>
		<td>
			<input type="text" name="present" style="border:none;">
		</td>
	</tr>
	<?php
	}
	?>
</table>
<br><br><br>
<input type="submit" value="Submit" name="submit" style="color:#FFFFFF;background-color:#FF0066;height:40px;width:60;border-radius:20px;border:#000000 solid 2px;">
</form>
</center>
</div>
</body>
</html>

<?php
}
?>
<?php
if(isset($_POST['submit']))
{
	$ll="select * from student_reg where Department='".$_SESSION['dep']."' and Semester='".$_SESSION['sem']."'";
	$mm=mysqli_query($con,$ll);
	while($a=mysqli_fetch_assoc($mm))
	{
		$sql="INSERT INTO attendence(RegisterNo,Name,Department,Semester,Date,Totalhr,Presenthr) VALUES('".$a['Regno']."','".$a['Name']."','".$_SESSION['dep']."','".$_SESSION['dep']."',now(),'".$_POST['total']."','".$_POST['present']."',)";
		$q=mysqli_query($con,$sql);

	}	
}
?>

