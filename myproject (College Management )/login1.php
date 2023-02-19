<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['login']))
{
	   $a=$_POST['usertype'];
	   $b=$_POST['username'];
	   $c=$_POST['password'];
	   if($a==1)
	   {
	   
	   $sql="select * from admin_login";
	   $r=mysqli_query($con,$sql);
	  			while($ar=mysqli_fetch_assoc($r))
	  			{
	   			if($ar['Username']==$b&&$ar['Password']==$c)
	   			{
	   			header("location:admin_mod.php");
	   			}
				else
	   {
	   header("location:index.php");
	   }
	   			}
	   }
	  elseif($a==2)
	   {
	  $sql="select * from teacher_reg";
	   $r=mysqli_query($con,$sql);
	  while($ar=mysqli_fetch_assoc($r))
	  {
	  if($ar['Username']==$b&&$ar['Password']==$c)
	   {
	   header("location:tchr_home.php");
	   }
	   else
	   {
	   header("location:index.php");
	   }
	   }}
	   elseif($a==3)
	   {
	   
	  $sql="select * from student_reg";
	   $r=mysqli_query($con,$sql);
	  while($ar=mysqli_fetch_assoc($r))
	  {
	  if($ar['Username']==$b&&$ar['Password']==$c)
	   {
	   header("location:st_home.php");
	   }
	   else
	   {
	   header("location:index.php");
	   }
	   }}
	 elseif($a==4)
	   {
	   
	   $sql="select * from librarian_reg";
	   $r=mysqli_query($con,$sql);
	  while($ar=mysqli_fetch_assoc($r))
	  {
	  if($ar['Username']==$b&&$ar['Password']==$c)
	   {
	   header("location:lib_home.php");
	   }
	   else
	   {
	   header("location:index.php");
	   }
	   }}
	  elseif($a==5)
	   {
	   
	  $sql="select * from parent_reg where approval='1'";
	   $r=mysqli_query($con,$sql);
	  while($ar=mysqli_fetch_assoc($r))
	  {
	  if($ar['Username']==$b&&$ar['Password']==$c)
	   {
	   header("location:parent_home.php");
	   }
	   else
	   {
	   header("location:index.php");
	   }
	  }
	   }
	   }
	   ?>