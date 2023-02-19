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
<body background="images/white2.jpg" style="padding-top:20px;">
<h2><font color="#333333">Parents</font></h2><hr /><br />
<center>
<div class="table">
<table style="border:#000000 solid 3px;border-spacing:0px;">
<th>Name</th><th>Student Regno</th><th>DOB</th><th>Gender</th><th>Email</th><th>Address</th><th>Phone</th><th>Username</th><th>Password</th><th>Action</th></tr>
<?php
$sql="select * from parent_reg order by id asc";
$res=mysqli_query($con,$sql);
while($ar=mysqli_fetch_assoc($res))
{
$xid=$ar['id'];
?><tr>
<td><?php echo $ar['Name'];?></td>
<td><?php echo $ar['Student_regno'];?></td>
<td><?php echo $ar['DOB'];?></td>
<td><?php echo $ar['Gender'];?></td>
<td><?php echo $ar['Email'];?></td>
<td><?php echo $ar['Address'];?></td>
<td><?php echo $ar['Phone'];?></td>
<td><?php echo $ar['Username'];?></td>
<td><?php echo $ar['Password'];?></td>
<td><a href="accept.php?i=<?php echo $xid;?>"><input type="button" name="accept" value="Accept" style="background:#00CC33;color:#FFFFFF;border:none;"></a>
<a href="reject.php?i=<?php echo $xid;?>"><input type="button" name="reject" value="Reject" style="background:#FF0000;color:#FFFFFF;border:none;"></a></td></tr>
<?php 
}
?>
</table>
</div>
</center>
</body>
</html>
