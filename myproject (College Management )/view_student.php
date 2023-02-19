
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
<body background="images/white2.jpg" style="padding-top:20px;">
<h2><font color="#333333">Student</font></h2><hr /><br />
<div class="table">
<table style="border:#000000 solid 3px;border-spacing:0px;">
<th>Register No</th><th>Name</th><th>Gender</th><th>DOB</th><th>Email</th><th>Department</th><th>Semester</th><th>Address</th><th>Phone</th><th>Action</th></tr>
<?php
$sql="select * from student_reg order by id asc";
$res=mysqli_query($con,$sql);
while($ar=mysqli_fetch_assoc($res))
{
$xid=$ar['id'];
?><tr>
<td><?php echo $ar['Regno'];?></td>
<td><?php echo $ar['Name'];?></td>
<td><?php echo $ar['Gender'];?></td>
<td><?php echo $ar['DOB'];?></td>
<td><?php echo $ar['Email'];?></td>
<td><?php echo $ar['Department'];?></td>
<td><?php echo $ar['Semester'];?></td>
<td><?php echo $ar['Address'];?></td>
<td><?php echo $ar['Phone'];?></td>
<td><a href="#?i=<?php echo $xid;?>"><input type="button" name="update" value="Update" style="background:#00CC33;color:#FFFFFF;border:none;height:25px;"></a>
<a href="#?i=<?php echo $xid;?>"><input type="button" name="delete" value="Delete" style="background:#FF0000;color:#FFFFFF;border:none;height:25px;"></a></td></tr>
<?php 
}
?>
</table>
</div>
</body>
</html>
