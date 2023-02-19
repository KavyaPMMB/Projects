<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<h2><font color="#333333">Books Details</font></h2><hr /><br />
<div class="table">
<table style="border:#000000 solid 3px;border-spacing:0px;">
<th>Book Id</th><th>Book Name</th><th>Author</th><th>Edition</th><th>Publication</th><th>Price</th><th>Availability</th>
<?php
$srch=$_POST['search'];
$con=mysqli_connect('localhost','root','','project');
$sql="Select * from book_entry where BookName like '$srch%' or Author like '$srch%'";
$res=mysqli_query($con,$sql);

while($ar=mysqli_fetch_assoc($res))
	{
	?><tr>
<td><?php echo $ar['BookId'];?></td>
<td><?php echo $ar['BookName'];?></td>
<td><?php echo $ar['Author'];?></td>
<td><?php echo $ar['Edition'];?></td>
<td><?php echo $ar['Publication'];?></td>
<td><?php echo $ar['Price'];?></td>
<td><?php echo $ar['Availability'];?></td>
</tr>
<?php 
	}
	?></table>
</div>
</body>
</html>