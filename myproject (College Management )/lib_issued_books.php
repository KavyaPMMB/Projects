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
<h2><font color="#333333">Issued Books</font></h2><hr /><br />
<div class="table">
<table style="border:#000000 solid 3px;border-spacing:0px;">
<th>Book Id</th><th>Book Name</th><th>Author</th><th>Member Id</th><!--<th>Name</th><th>Catagory</th>---><th>Issue Date</th><th>Return Date</th></tr>
<?php
$sql="select *from book_issue ";//"select book_issue.sno,book_issue.BookId,book_issue.BookName,book_issue.Author,book_issue.IssueDate,book_issue.ReturnDate,membership.MemberId,membership.Name,membership.Catagory from book_issue  natural join membership where book_issue.MemberId=membership.MemberId";//
$res=mysqli_query($con,$sql);
while($ar=mysqli_fetch_assoc($res))
{
?><tr>
<td><?php echo $ar['BookId'];?></td>
<td><?php echo $ar['BookName'];?></td>
<td><?php echo $ar['Author'];?></td>
<td><?php echo $ar['MemberId'];?></td>
<!--<td><?php echo $ar['Name'];?></td>
<td><?php echo $ar['Catagory'];?></td>-->
<td><?php echo $ar['IssueDate'];?></td>
<td><?php echo $ar['ReturnDate'];?></td></tr>
<?php 
}
?>
</table><br />
<br />
</div>
</body>
</html>
