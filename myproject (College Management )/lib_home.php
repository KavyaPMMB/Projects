<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
background-image:url(images/pink6.jpg);
    height: 665px;
    width: 190px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
	border-radius:20px;
	margin-top:65px;
	margin-left:5px;
	box-shadow:5px 6px 6px #666666;

}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 19px;
	color:#000000;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.main {
    margin-left: 195px; /* Same as the width of the sidenav */
    font-size: 17px; /* Increased text to enable scrolling */
    padding: 63px 10px;
	border-radius:20px;
	
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 17px;}
}
</style>
</head>
<body background="images/white2.jpg" style="margin-top:0px;margin-left:0px;">
<div class="h" style="height:60px;width:1519.2px;background-color:#FF0066;position:fixed;">
<form method="post">
<a href="lib_home.php">
<input type="button" name="librarian" value="Librarian" style="color:#FFFFFF;border:#000000 solid 1.5px;background-color:#FF0066;height:30px;width:70px;box-shadow:2px 1px 3px #666666;margin-top:8px;margin-left:1200px;"></a>
<a href="index.php">
<input type="button" name="logout" value="Log Out" style="color:#FFFFFF;border:#000000 solid 1.5px;background-color:#FF0066;height:30px;width:70px;box-shadow:2px 1px 3px #666666;margin-top:8px;margin-left:40px;">
</a>
</form>
</div>
<div class="sidenav">
  <a href="lib_membership.php" target="iframe">Membership</a>
  <a href="lib_view_members.php" target="iframe">View Members</a>
  <a href="enter_books.php" target="iframe">Enter Books</a>
  <a href="lib_book_details.php" target="iframe">View Books</a>
   <a href="lib_issue_book.php" target="iframe">Issue Books</a>
   <a href="lib_issued_books.php" target="iframe">Issued Books</a>
  <a href="lib_return_books.php" target="iframe">Return Book</a>
  <a href="lib_book_request.php" target="iframe">Request Book</a>
 
</div>
<div class="main">
<iframe height="675px" width="100%" name="iframe" style="border-radius:20px;">
</iframe>
</div>
</body>
</html> 
