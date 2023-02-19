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
<h2><font color="#333333">Books Details</font></h2>
<right><form action="search.php" method="post">
<input type="text" name="search"  style="width:300px;"/>
<input type="submit" name="btn" value="Search" style="color:#FFFFFF;background:#0099CC;border:#000000 solid;">
</form></right><hr /><br />

<div class="table">
<table style="border:#000000 solid 3px;border-spacing:0px;">
<th>Book Id</th><th>Book Name</th><th>Author</th><th>Edition</th><th>Publication</th><th>Price</th><th>Availability</th><th>Action</th></tr>
<?php
$sql="select * from book_entry order by Id asc";
$res=mysqli_query($con,$sql);
while($ar=mysqli_fetch_assoc($res))
{
$xid=$ar['Id'];
?><tr>
<td><?php echo $ar['BookId'];?></td>
<td><?php echo $ar['BookName'];?></td>
<td><?php echo $ar['Author'];?></td>
<td><?php echo $ar['Edition'];?></td>
<td><?php echo $ar['Publication'];?></td>
<td><?php echo $ar['Price'];?></td>
<td><?php echo $ar['Availability'];?></td>
<td><a href="update_books.php?i=<?php echo $xid;?>"><input type="button" name="update" value="Update" style="background:#00CC33;color:#FFFFFF;border:none;height:25px;"></a></td></tr>
<?php 
}
?>
</table><br />
<br />
</div>
</body>
</html>
