<?php
$userName=  $_POST['userName'];
$email=  $_POST['email'];
$password=  $_POST['password'];
$firstName=  $_POST['firstName'];
$lastName=  $_POST['lastName'];
$address=  $_POST['address'];
$phone=  $_POST['phone'];
$userType= 1;

// 
	$host = "localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname= "bd railways";
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	if (mysqli_connect_error()) {
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
	else {
		$Insert = "insert into user (userName, email, password, firstName, lastName,address,phone,userType) values('$userName', '$email', '$password', '$firstName', '$lastName', '$address', '$phone',1)";
		
		if ($conn->query($Insert) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
		header ("location: wellcome.php");
		$conn->close();
		
	}


?>	

