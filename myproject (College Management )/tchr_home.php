<!--booststrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <!--//booststrap end-->
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
background-image:url(images/pink6.jpg);
    height: 675px;
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
color:#999999;

}

.main {
    margin-left: 195px; /* Same as the width of the sidenav */
    font-size: 17px; /* Increased text to enable scrolling */
    padding: 63px 10px;
	border-radius:20px;
	background-image:url(images/white2.jpg);
	
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 17px;}
}
</style>
</head>
<body style="margin-top:0px;margin-left:0px;">
<div class="h" style="height:60px;width:1519.2px;background-color:#FF0066;position:fixed;">
<form method="post">
<input type="button" name="teacher" value="Teacher" style="color:#FFFFFF;border:#000000 solid 1.5px;background-color:#FF0066;height:30px;width:70px;box-shadow:2px 1px 3px #666666;margin-top:8px;margin-left:1200px;">
<a href="index.php"><input type="button" name="logout" value="Log Out" style="color:#FFFFFF;border:#000000 solid 1.5px;background-color:#FF0066;height:30px;width:70px;box-shadow:2px 1px 3px #666666;margin-top:8px;margin-left:40px;"></a>
</form>
</div>
<div class="sidenav">
  <a href="do_attendence.php" target="iframe">Do Attendence</a>
  <a href="tchr_view_attendence.php" target="iframe">View Attendence</a>
  <a href="tchr_attendence_report.php" target="iframe">Attendence Report</a>
 <!-- <a href="view_student.php" target="iframe">View Student</a>
   <a href="librarian_reg.php" target="iframe">Add Librarian</a>
  <a href="#contact" target="iframe">View Librarian</a>
  <a href="view_parent.php" target="iframe">View Parents</a>
  <a href="admin_view_bookreq" target="iframe">View Requested Books</a>--->
</div>
<div class="main">
<iframe height="675px" width="100%" name="iframe" src="s.php"  style="border-radius:20px;">
</iframe>
</div>
</body>
</html> 
