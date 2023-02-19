
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
<h2><font color="#333333">Attendence</font></h2><hr /><br />
<div class="s">
<form method="post">
<left>
Enter Department<input type="text" name="dep" style="margin-left:10;margin-right:20px;" >Enter Semester<input type="text" name="sem" style="margin-left:10;margin-right:20px;"><input type="date" name="date" style="margin-left:10;margin-right:20px;"><input type="submit" value="OK" name="ok" style="margin-left:10;margin-right:20px;color:#FFFFFF;background-color:#FF3366;border:#000000 solid 2px;"></left></form>
<?php
if(isset($_POST['ok']))
{?>
<table style="border:#000000 solid 3px;border-spacing:0px;">
<th>Register No</th><th>Name</th><th>Total Houres</th><th>Present Houres</th></tr><?php
$a=$_POST['dep'];
$b=$_POST['sem'];
$c=$_POST['date'];
$q="select RegisterNo,Name,Totalhr,Presenthr from attendence where Department='$a' and Semester='$b' and Date='$c'";
$r=mysqli_query($con,$q);
while($a=mysqli_fetch_assoc($r))
{
?>
<tr><td><?php echo $a['RegisterNo'];?></td>
<td><?php echo $a['Name'];?></td><td><?php echo $a['Totalhr'];?></td><td><?php echo $a['Presenthr'];?></td></tr>
<?php
}}
?>
</table>
</div></body>
</html>