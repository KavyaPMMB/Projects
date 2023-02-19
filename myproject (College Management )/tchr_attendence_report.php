
<?php
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
<h2><font color="#333333">Attendence Report</font></h2><hr /><br />
<div class="s">
<form method="post" action="">
<left>
Enter Name<input type="text" name="name" style="margin-left:10;margin-right:20px;" >Enter Register No<input type="text" name="regno" style="margin-left:10;margin-right:20px;"><input type="submit" value="OK" name="ok" style="margin-left:10;margin-right:20px;color:#FFFFFF;background-color:#FF3366;border:#000000 solid 2px;"></left><br><br><br>
<?php
if(isset($_POST['ok']))
{
$a=$_POST['name'];
$b=$_POST['regno'];
$q="select * from attendence where Name='$a' and RegisterNo='$b'";
$r=mysqli_query($con,$q);
$ar=mysqli_fetch_assoc($r);
?>
<b>Name</b><b><input type="text" name="Name" value=<?php echo $ar['Name']; ?> style="border:none;margin-left:65px;"></b><br>
<b>Register No:</b><input type="text" name="Regno" value=<?php echo $ar['RegisterNo'];?> style="border:none;margin-left:20px;"><br>
<b>Department:</b><input type="text" name="dept" value=<?php echo $ar['Department'];?> style="border:none;margin-left:18px;"><br>
<b>Semester:</b><input type="text" name="sem" value=<?php echo $ar['Semester'];?> style="border:none;margin-left:40px;">
<br><br><br>
<table style="border:#000000 solid 3px;border-spacing:0px;">
<th>Date</th><th>Total Houres</th><th>Present Houres</th></tr><?php
$n="select Date,Totalhr,Presenthr from attendence where Name='$a' and RegisterNo='$b'";
$re=mysqli_query($con,$n);
while($am=mysqli_fetch_assoc($re))
{
?>
<tr><td><?php echo $am['Date'];?></td>
<td><?php echo $am['Totalhr'];?></td><td><?php echo $am['Presenthr'];?></td></tr>
<?php
}
$p="select sum(Presenthr) as 'a' from attendence where Name='$a' and RegisterNo='$b'";
$m=mysqli_query($con,$p);
while($l=mysqli_fetch_assoc($m))
{
$x=$l['a'];
}
$y=5;
?></table><br><br><br>
Total no of working days<input type="text" name="wdays" style="margin-left:10px;"><br><br>
Total no of present days<input type="text" name="pdays" value=<?php echo $x / $y;?> style="margin-left:10px;"><br>
<input type="submit" value="Submit" name="submit"  style="color:#FFFFFF;background-color:#FF3366;border:#000000 solid 2px;">
<?php 
}
if(isset($_POST['submit']))
{
$d=$_POST['wdays'];
 $h=$_POST['pdays'];
 ?>
Percentage of attendence<input type="text" name="percent" value=<?php echo (($h/$d)*100); ?>>
<?php } ?>
</form>
</div></body>
</html>