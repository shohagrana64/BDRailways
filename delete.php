<?php

include 'dbconnect.php';
	$conn = OpenCon();
$Serial_Number=$_REQUEST['Serial_Number'];
$query = "DELETE FROM train WHERE Serial_Number=$Serial_Number"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());

CloseCon($conn);
?>