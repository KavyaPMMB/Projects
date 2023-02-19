<?php
$con=mysqli_connect("localhost","root","","project");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
.s
{
background-image:url(images/white2.jpg);
border:#000000 solid ;
border-radius:20px;
box-shadow:5px 6px 6px #000000;
height:600px;
width:450px;
height:650px;
width:450;
margin-top:40px;
background-color:#FFFFFF;
}
</style>
</head>

<body background="images/pink1.jpg">
<center>
<div class="s">
<form method="post" enctype="multipart/form-data">
<table>
<h1><font color="#FF0066">_____Registration_____</font></h1><hr /><br />
<tr>
<td>Name</td>
<td><input type="text" name="name"  style="height:28px;width:195px;border-radius:20px;" /></td></tr>
<tr>
<td>Gender</td>
<td><input type="radio" name="gender"  value="male"  />Male<input type="radio" name="gender" value="female"/>Female</td></tr>
<tr>
<td>DOB</td>
<td><input type="date" name="dob"  style="height:28px;width:195px;border-radius:20px; "/></td>
</tr>
<tr><td>Email</td>
<td><input type="email" name="email"  style="height:28px;width:195px;border-radius:20px; "/></td></tr>

<tr>
<td>Address</td>
<td><textarea rows="6" cols="25" name="address"  style="height:28px;width:195px;border-radius:20px;"/></textarea></td>
</tr>
<tr>
<td>Experience</td>
<td><textarea rows="6" cols="25" name="experience"  style="height:28px;width:195px;border-radius:20px;"/></textarea></td>
</tr>
<tr>
<td>Qualification</td>
<td><textarea rows="6" cols="25" name="qualification"  style="height:28px;width:195px;border-radius:20px;"/></textarea></td>
</tr>
<tr>
<td>Phone</td>
<td><input type="text" name="ph"  style="height:28px;width:195px;border-radius:20px;"/></td></tr>
<tr>
<td>Photo</td>
<td><input type="file" name="img" value="browse" style="height:28px;width:195px;border-radius:20px;" /></td></tr>
<tr>
<td>Username</td>
<td><input type="text" name="username"  style="height:28px;width:195px;border-radius:20px;" /></td></tr>
<tr>
<td>Password</td>
<td><input type="password" name="password"  style="height:28px;width:195px;border-radius:20px;" /></td></tr>
</table>
<br /><br />
<br /><hr />
<input type="submit" value="Register" name="register" style="color:#FFFFFF;background-color:#FF0066;height:40px;width:60;border-radius:20px;border:#000000 solid 2px;" />

</form>
</div>
</center>
</body>
</html>
<?php
if(isset($_POST['register']))
{
$a=$_POST['name'];
$b=$_POST['gender'];
$c=$_POST['dob'];
$d=$_POST['email'];
$e=$_POST['address'];
$f=$_POST['experience'];
$g=$_POST['qualification'];
$h=$_POST['ph'];
$x=$_FILES['img']['name'];
$y=$_FILES['img']['tmp_name'];
$z="uploads/".$x;
$i=$_POST['username'];
$j=$_POST['password'];
$q="insert into teacher_reg(Name,Gender,DOB,Email,Address,Experience,Qualification,Phone,Username,Password,Photo)values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$z')";
$re=mysqli_query($con,$q);
if($re)
{
move_uploaded_file($y,$z);
}
else
{
echo mysqli_error($con);
}

}
?>


