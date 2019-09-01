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
<title>Update Record</title>
<link rel="stylesheet" href="css/style1.css" />
</head>
<body>
<div class="form">
<p><a href="Home.php">Home</a> | <a href="insert.php">Insert New Record</a></p>
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['availableSeat']) )
{
$name = $_REQUEST['name'];
$seatType =$_REQUEST['seatType'];
$availableSeat =$_REQUEST['availableSeat'];
$goingTo = $_REQUEST['goingTo'];
$goingFrom = $_REQUEST['goingFrom'];
$station = $_REQUEST['station'];
$date = $_REQUEST['date'];

$update="update train set name='".$name."', seatType='".$seatType."',  availableSeat='".$availableSeat."',  goingTo='".$goingTo."',  goingFrom='".$goingFrom."',  station='".$station."',  date='".$date."' where Serial_Number='".$Serial_Number."'";
mysqli_query($conn, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br><a href='vcars.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<p><input type="text" name="name" placeholder="Enter name" required value="<?php echo $row['name'];?>" /></p>
<p><input type="text" name="seatType" placeholder="Enter seatType" required value="<?php echo $row['seatType'];?>" /></p>
<p><input type="text" name="availableSeat" placeholder="Enter availableSeat" required value="<?php echo $row['availableSeat'];?>"/></p>
<p><input type="text" name="goingTo" placeholder="Enter goingTo Location" required value="<?php echo $row['goingTo'];?>"/></p>
<p><input type="text" name="goingFrom" placeholder="Enter goingFrom Location" required value="<?php echo $row['goingFrom'];?>"/></p>
<p><input type="text" name="station" placeholder="Enter station" required value="<?php echo $row['station'];?>"/></p>
<p><input type="text" name="date" placeholder="Enter date" required value="<?php echo $row['date'];?>"/></p>

<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<?php } ?>

</div>
</div>
</body>
</html>
