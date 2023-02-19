
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
<h2><font color="#333333">Do Internal</font></h2><hr /><br />
<div class="s">
<form method="post">
<left>
Enter Department<input type="text" name="dep" style="margin-left:10;margin-right:20px;" >Enter Semester<input type="text" name="sem" style="margin-left:10;margin-right:20px;"><input type="submit" value="OK" name="ok" style="margin-left:10;margin-right:20px;color:#FFFFFF;background-color:#FF3366;border:#000000 solid 2px;"></left>
<?php
if(isset($_POST['ok']))
{
$a=$_POST['dep'];
$b=$_POST['sem'];
?>
<center>
<br><br><br>Department<input type="text" name="dept" value=<?php echo $a?> style="border:#FF3366 2px solid;margin-left:10;margin-right:20px;"><br />
Semester<input type="text" name="semester" value="<?php echo $b?>" style="border:#FF3366 2px solid;margin-left:10;margin-right:20px;"><br />
Subject<input type="text" name="sub" style="border:#FF3366 2px solid;margin-left:10;margin-right:20px;"><br><br><br>

<table style="border:#000000 solid 3px;border-spacing:0px;">
<th>Register No</th><th>Name</th><th>Internal Exam<br />Marks</th><th>Assignment/<br />Viva</th><th>Attendence</th></tr>
<?php
$q="select RegNo,Name from student_reg where Department='$a' and Semester='$b'";
$r=mysqli_query($con,$q);
while($a=mysqli_fetch_assoc($r))
{
?>
<tr><td><input type="text" value=<?php echo $a['RegNo'];?> name="regno" style="border:none;"></td>
<td><input type="text" value=<?php echo $a['Name'];?> name="name" style="border:none"></td><td><input type="text" name="total" style="border:none;"></td><td><input type="text" name="present" style="border:none;"></td></tr>
</table><br><br>
<br>
<input type="submit" value="Submit" name="submit" style="color:#FFFFFF;background-color:#FF0066;height:40px;width:60;border-radius:20px;border:#000000 solid 2px;">
</form>
</center>
</div>
</body>
</html>

<?php
}}
?>
<?php
if(isset($_POST['submit']))
{
$d=$_POST['regno'];
$e=$_POST['name'];
$f=$_POST['sub'];
$g=$_POST['viva'];
$h=$_POST['attendence'];
$i=$_POST['exm'];

$j=$_POST['dept'];
$k=$_POST['sem'];



$q="insert into internal(RegisterNo,Name,Department,Semester,Subject,Exam,Viva,Attendence)values('$d','$e','$j','$k','$f,'$i','$g','$h')";
$re=mysqli_query($con,$q);
if($re)
{
echo "success";
}
else
{
echo mysqli_error($con);
}
}
?>

