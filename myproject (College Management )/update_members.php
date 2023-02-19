<?php
$con=mysqli_connect("localhost","root","","project");
$v=$_GET['i'];
$q="select * from membership where sno=$v";
$s=mysqli_query($con,$q);
$ar=mysqli_fetch_assoc($s);
?>
<html>
<head>
<title>Untitled Document</title>
<style>
.s
{
border:#000000 solid ;
border-radius:20px;
box-shadow:5px 6px 6px #000000;
height:400px;
width:450;
margin-top:45px;
background-color:#FFFFFF;
}
</style>

</head>

<body>
<center>
<div class="s" >
<form method="post">
<table>
<h1><font color="#FF0066">_____Membership_____</font></h1><hr /><br />
<tr>
<td>Name</td>
<td><input type="text" name="name"  value="<?php echo $ar['Name'];?>" style="height:28px;width:195px;border-radius:20px;" /></td></tr>
<tr>
<td>Catagory</td>
<td><select name="catagory"  style="height:28px;width:195px;border-radius:20px;" ><option value="Teacher" <?php if($ar['Catagory']=="Teacher"){?> selected <?php }?> >Teacher</option><option value="Student" <?php if($ar['Catagory']=="Student"){?> selected <?php }?>>Student</option></select></td></tr>

<tr>
<td>ID</td>
<td><input type="text" name="id"  value="<?php echo $ar['ID'];?>" style="height:28px;width:195px;border-radius:20px; "/></td></tr>
<tr>
<td>Member ID</td>
<td><input type="text" name="mid"  value="<?php echo $ar['MemberId'];?>" style="height:28px;width:195px;border-radius:20px;" /></td></tr>
</table><br /><br />
<br /><hr />
<input type="submit" value="Update" name="update" style="color:#FFFFFF;background-color:#FF0066;height:40px;width:60;border-radius:20px;border:#000000 solid 2px;" />
</form>
</div>
</center>
</body>
</html>
<?php
if(isset($_POST['update']))
{
$a=$_POST['name'];
$b=$_POST['catagory'];
$c=$_POST['id'];
$d=$_POST['mid'];
$s="update membership set Name='$a',Catagory='$b',ID='$c',MemberId='$d' where id=$v";
$re=mysqli_query($con,$s);
if($re)
{
header("location:view_members.php");
}
else
{
echo mysqli_error($con);
}

}
?>
