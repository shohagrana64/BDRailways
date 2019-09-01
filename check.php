<?php 
$email= $_POST['email'];
$pass= $_POST['password'];

    $host = "localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname= "bd railways";
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	if (mysqli_connect_error()) {
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
	else {
    
		
		$s="select * from user where email='".$email."' and password='".$pass."' and userType=2 ";
		$result= mysqli_query ($conn, $s);
		
		if(mysqli_fetch_assoc($result)> 0){
			header ("location: vcars.php");
			
		}
		else{
			$sl="select * from user where email='".$email."' and password='".$pass."' and userType=1 ";
		    $result= mysqli_query ($conn, $sl);
		
		if(mysqli_fetch_assoc($result)> 0){
			header ("location: customerInterface.php");
			
		}
		else{
			echo "Sorry User Not Registered :D";
			
		}
	
			
		}
	}

?>
