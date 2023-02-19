<?php
session_start();
ob_start();
$con=mysqli_connect("localhost","root","","project");
?>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
Enter Department<input type="text" name="dep" style="margin-left:10;margin-right:20px;" >Enter Semester<input type="text" name="sem" style="margin-left:10;margin-right:20px;"><input type="submit" value="OK" name="ok" style="margin-left:10;margin-right:20px;color:#FFFFFF;background-color:#FF3366;border:#000000 solid 2px;"></left>
</body>
<?php
$q="select RegNo,Name from student_reg where Department='$a' and Semester='$b'";
	$r=mysqli_query($con,$q);
	while($a=mysqli_fetch_assoc($r))
	{n
	?>
</html>
