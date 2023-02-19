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
height:450px;
width:450;
margin-top:100px;
background-color:#FFFFFF;
}
</style>
</head>

<body>
<center>
<div class="s">
<form method="post">
<h1><font color="#FF0066">_____Book Entry_____</font></h1><hr /><br />
<table>
<tr><td>Book Id</td><td><input type="text" name="id"  style="height:28px;width:195px;border-radius:20px;"/></td></tr>
<tr><td>Book Name</td><td><input type="text" name="name"  style="height:28px;width:195px;border-radius:20px;" /></td></tr>
<tr><td>Author</td><td><input type="text" name="author"  style="height:28px;width:195px;border-radius:20px;" /></td></tr>
<tr><td>Edition<td><input type="text" name="edition"  style="height:28px;width:195px;border-radius:20px;" /></td></tr>
<tr><td>Publication</td><td><input type="publication" name="publication"   style="height:28px;width:195px;border-radius:20px;"/></td></tr>
<tr><td>Price</td><td><input type="text" name="price"  style="height:28px;width:195px;border-radius:20px;"/></td></tr>
</table>
<br />
<br /><br /><hr />
<input type="submit" value="Submit" name="submit" style="color:#FFFFFF;background-color:#FF0066;height:40px;width:60;border-radius:20px;border:#000000 solid 2px;" />
</form>
</div>
</center>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$a=$_POST['id'];
$b=$_POST['name'];
$c=$_POST['author'];
$d=$_POST['edition'];
$e=$_POST['publication'];
$f=$_POST['price'];
$q="insert into book_entry(BookId,BookName,Author,Edition,Publication,Price)values('$a','$b','$c','$d','$e','$f')";
$r=mysqli_query($con,$q);
if($r)
{?> 
<script>  alert("Data Entered Successfully");
</script>
<?php }
}
?>
