<?php
$con=mysqli_connect("localhost","root","","project");
?>
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
<h2><font color="#333333">Members</font></h2><hr /><br />
<div class="table">
<table style="border:#000000 solid 3px;border-spacing:0px;">
<th>Member ID</th><th>Name</th><th>Catagory</th><th>ID</th><th>Action</th></tr>
<?php
$sql="select * from membership order by sno asc";
$res=mysqli_query($con,$sql);
while($ar=mysqli_fetch_assoc($res))
{
$xid=$ar['sno'];
?><tr>
<td><?php echo $ar['MemberId'];?></td>
<td><?php echo $ar['Name'];?></td>
<td><?php echo $ar['Catagory'];?></td>
<td><?php echo $ar['ID'];?></td>
<td><a href="update_members.php?i=<?php echo $xid;?>"><input type="button" name="update" value="Update" style="background:#00CC33;color:#FFFFFF;border:none;height:25px;"></a>
<a href="delete.php?i=<?php echo $xid;?>"><input type="button" name="delete" value="Delete" style="background:#FF0000;color:#FFFFFF;border:none;height:25px;"></a></td></tr>
<?php 
}
?>
</table>
</div>
</body>
</html>
