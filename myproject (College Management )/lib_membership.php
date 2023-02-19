<?php
$con=mysqli_connect("localhost","root","","project");
?>
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
height:400px;
width:450;
margin-top:130px;
background-color:#FFFFFF;
}
</style>

</head>

<body background="images/white2.jpg">
<center>
<div class="s" >
<form method="post">
<table>
<h1><font color="#FF0066">_____Membership_____</font></h1><hr /><br />
<tr>
<td>Name</td>
<td><input type="text" name="name"  style="height:28px;width:195px;border-radius:20px;" /></td></tr>
<tr>
<td>Catagory</td>
<td><select name="catagory"  style="height:28px;width:195px;border-radius:20px;" ><option value="Teacher">Teacher</option><option value="Student">Student</option></select></td></tr>

<tr>
<td>ID</td>
<td><input type="text" name="id"  style="height:28px;width:195px;border-radius:20px; "/></td></tr>
<tr>
<td>Member ID</td>
<td><input type="text" name="mid"  style="height:28px;width:195px;border-radius:20px;" /></td></tr>
</table><br /><br />
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
$b=$_POST['catagory'];
$c=$_POST['id'];
$d=$_POST['mid'];
$q="insert into membership(Name,Catagory,ID,MemberId)values('$a','$b','$c','$d')";
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
