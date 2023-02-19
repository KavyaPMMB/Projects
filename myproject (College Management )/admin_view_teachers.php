<html><head><body background="images/white2.jpg" style="padding-top:20px;"><h2><font color="#333333">Teachers</font></h2><hr /><br /></body></head></html>
<style>
img
{
border:#000000 solid 2px;
}
</style>
<?php
$con=mysqli_connect("localhost","root","","project");
$sql="select * from teacher_reg";
$res=mysqli_query($con,$sql);
while($ar=mysqli_fetch_assoc($res))
{
 echo "<img src=".$ar['Photo']." height=150px width=150px border=black solid 2px><br><br>";
?><table>
<tr><td><b>Name:</b></td><td><?php echo "<b>".$ar['Name']."</b>"; ?></td></tr>
<tr><td><b>Gender:</b></td><td><?php echo "<b>".$ar['Gender']."</b>";?></td></tr>
<tr><td><b>DOB:</b></td><td><?php echo "<b>".$ar['DOB']."</b>";?></td></tr>
<tr><td><b>Email:</b></td><td><?php echo "<b>".$ar['Email']."<b>";?></td></tr>
<tr><td><b>Address:</b></td><td><?php echo "<b>".$ar['Address']."<b>";?></td></tr>
<tr><td><b>Experience:</b></td><td><?php echo "<b>".$ar['Experience']."<b>";?></td></tr>
<tr><td><b>Qualification:</b></td><td><?php echo "<b>".$ar['Qualification']."<b>";?></td></tr>
<tr><td><b>Phone:</b></td><td><?php echo "<b>".$ar['Phone']."<b>";?></td></tr><br><br>
<?php 
}
?>
</table>
</div>

