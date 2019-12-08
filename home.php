<?php
session_start();
if(isset($_SESSION['id']))
{ $user= trim($_COOKIE['user']);
if( $user == "Admin")
	{	
?>
<html>
<head><title>Admin Panel</title>
</head>
<body>
<table border = "2" width="80%" height="" align="center">
<tr><td>
<img src="a.jpg" width ="20%" height="20%" align="left">
<center><h1>WELCOME</h1><p>
<a href="logout.php"><button type="button" size="10">Log Out</button></a>
<a href="Profile.php"><button type="button" size="10">Profile</button></a>

</center>
</td></tr>
</table><br>



<center><u><h1>Admin Panel<h1></u><br>
<text>Welcome <?=$_SESSION['name'];?> </text><hr><br><br>



<table border = "2" width="80%" height="" align="center">
<tr><td><center><b>
<ul>
<a href="brandlist.php"><text>Brand Lists</text></a><br><br>

<a href="DisscountList.php"><text>New Discount/ Offer Update</text></a><br>
<text>New Rroduct Update</text><br>
<text>Update Price</text><br>
<text>Availability Update</text><br><br>

<a href="moderatorDetails.php"><text>View Moderator's List</text></a><br>
<a href="EmployeeDetails.php"><text>View Employee's List</text></a><br>
<a href="CustomerDetails.php"><text>View Customer's List</text></a><br>
<a href="totalroombooked.php"><text>View Total Product Book</text></a></b>

</ul>
</center></td></tr>
</table><br>
	
</body>
</html>








