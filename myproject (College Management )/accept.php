<?php
$con=mysqli_connect("localhost","root","","project");
$v=$_GET['i'];
$w="update parent_reg set Approval=1 where id=$v";
$r=mysqli_query($con,$w);
if($r)
{
header("location:view_parent.php");
}
?>
