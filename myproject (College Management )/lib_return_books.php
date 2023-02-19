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
background-image:url(images/white.jpg);
border:#000000 solid ;
border-radius:20px;
box-shadow:5px 6px 6px #000000;
width:450px;
height:400px;
width:450;
margin-top:130px;
background-color:#FFFFFF;
}
</style>
</head>
<body>
<center>
<div class="s" >
<form method="post">
<table>
<h1><font color="#FF0066">_____Return Book_____</font></h1><hr /><br />
<tr><td>Id</td><td><input type="text" name="id" style="height:28px;width:195px;border-radius:20px;"/></td></tr>
<tr><td>Book Id</td><td><input type="text" name="bid"  style="height:28px;width:195px;border-radius:20px;"/></td></tr>
<tr><td>Book Name</td><td><input type="text" name="bname" style="height:28px;width:195px;border-radius:20px;" /></td></tr>
<tr><td>Author</td><td><input type="text" name="author" style="height:28px;width:195px;border-radius:20px;" /></td></tr>
<tr><td>Issue Date</td><td><input type="date" name="date" style="height:28px;width:195px;border-radius:20px;"/></td></tr>
</table>
<br /><br />
<br /><hr />
<input type="submit" value="Return" name="return" style="color:#FFFFFF;background-color:#FF0066;height:40px;width:60;border-radius:20px;border:#000000 solid 2px;" />
</form>
</div>
</center>
</body>
</html>
<?php
if(isset($_POST['return']))
{
$e=$_POST['date'];
$b=$_POST['bid'];
$s="update book_issue set ReturnDate='$e' where BookId='$b'";
$m="update book_entry set Availability='Available' where BookId='$b'";
$r=mysqli_query($con,$s);
$re=mysqli_query($con,$m);
if($r)
{
if($re)
{
echo "success";
}
else
{
echo mysqli_error($con);
}
}
}

?>
