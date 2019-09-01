<?php
 
include 'dbconnect.php';
	$conn = OpenCon();
$Serial_Number=$_REQUEST['Serial_Number'];
$query = "SELECT * from train where Serial_Number='".$Serial_Number."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Reserve Seat</title>
<link rel="stylesheet" href="css/style1.css" />
</head>
<body>
<div class="form">
<p><a href="Home.php">Home</a> |</p>
<h1>Reserve Seat</h1>
<?php
$status = "";
if(isset($_POST['email']) )
{
$date = $_REQUEST['date'];
$transactionId = $_REQUEST['transactionId'];
$price = 0;

$type= $_POST['type']; 


$reportingPlace =$_REQUEST['reportingPlace'];
$trainName = $_REQUEST['trainName'];
$seatType = $_REQUEST['seatType'];
$email = $_REQUEST['email'];
if($seatType=="1A")
{
	$price=500;
}
else if($seatType=="2S")
{
	$price=250;
}
else{
	$price=150;
}

$insert="insert into ticket (date,price,reportingPlace,trainName,seatType) values ('$date','$price','$reportingPlace','$trainName','$seatType')";
$update="update train set availableSeat=availableSeat-1 where Serial_Number='".$Serial_Number."'";


mysqli_query($conn, $insert) or die(mysqli_error());
mysqli_query($conn, $update) or die(mysqli_error());
$balfetchkor = mysqli_query($conn,"SELECT MAX(ticketId) FROM ticket");
$ticketIdArray = mysqli_fetch_assoc($balfetchkor);
$ticketId=$ticketIdArray['MAX(ticketId)'];
$update2="update user set ticketId='".$ticketId."',transactionId='".$transactionId."' where email='".$email."'";

mysqli_query($conn, $update2) or die(mysqli_error());

if($type=='b'){	
	$dhuka= "update user set paymentMethod='bkash' where email='".$email."'";
    mysqli_query($conn, $dhuka) or die(mysqli_error());		
}
else{	
	$dhuka= "update user set paymentMethod='rocket' where email='".$email."'";
    mysqli_query($conn, $dhuka) or die(mysqli_error());	
}

$status = "Record inserted Successfully. </br></br>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<p><input type="text" name="date" placeholder="Enter date" required value="<?php echo $row['date'];?>"/></p>



<p><input type="text" name="reportingPlace" placeholder="Enter reportingPlace" required value="<?php echo $row['goingFrom'];?>"/></p>
<p><input type="text" name="trainName" placeholder="Enter trainName" required value="<?php echo $row['name'];?>" /></p>
<p><input type="text" name="seatType" placeholder="Enter seatType" required value="<?php echo $row['seatType'];?>" /></p>
<p><input type="text" name="email" placeholder="Enter email" required value /></p>
<p><input type="text" name="transactionId" placeholder="Enter transactionId" required value /></p>
<div>
					<input type="radio" name="type" value="b" required>Bkash
					<input type="radio" name="type" value="r" required>Rocket
</div>	


<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<?php } ?>

</div>
</div>
</body>
</html>
