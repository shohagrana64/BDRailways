
<?php
 
include 'dbconnect.php';
	$conn = OpenCon();

$status = "";
if(isset($_POST['Serial_Number']) )
{
$Serial_Number = $_REQUEST['Serial_Number'];
$name =$_REQUEST['name'];
$seatType=$_REQUEST['seatType'];
$availableSeat = $_REQUEST['availableSeat'];
$goingTo = $_REQUEST['goingTo'];
$goingFrom = $_REQUEST['goingFrom'];
$station = $_REQUEST['station'];
$date = $_REQUEST['date'];

$ins_query="insert into train (Serial_Number,name,seatType,availableSeat,goingTo,goingFrom,station,date) values ('$Serial_Number','$name','$seatType','$availableSeat','$goingTo','$goingFrom','$station','$date')";
mysqli_query($conn,$ins_query);
$status = "New Record Inserted Successfully.</br></br><a href='vcars.php'>View Inserted Record</a>";
}
CloseCon($conn);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
   
    <title>Signup</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">BDRailways</span> Ltd</h1>
        </div>
        <nav>
          <ul>
            <li><a href="home.php">Home</a></li>
            <li class="current"><a href="signup.php">Signup</a></li>
            <li><a href="login.php">Login</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="newsletter">
      <div class="container">
        <h1>Visit our market</h1>
        <nav>
          <form>
            <button type="nav" class="button_1" ><a href="allcars.php">View Market</a></button>
          </form>
        </nav>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-title">Be A Proud User</h1>
          
      <div class="dark">
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<p><input type="text" name="Serial_Number" placeholder="Enter Serial_Number" required /></p>
<p><input type="text" name="name" placeholder="Enter name" required /></p>
<p><input type="text" name="seatType" placeholder="Enter seatType" required /></p>
<p><input type="text" name="availableSeat" placeholder="Enter availableSeat" required /></p>
<p><input type="text" name="goingTo" placeholder="Enter goingTo" required /></p>
<p><input type="text" name="goingFrom" placeholder="Enter goingFrom" required /></p>
<p><input type="text" name="station" placeholder="Enter station" required /></p>
<p><input type="text" name="date" placeholder="Enter date" required /></p>


<div>
                <h5> </h5>
              </div>
              <button class="button_1" type="submit" value="submit">Submit</button>
           </form> 
      </div>
    </section>

    <footer>
      <p> CSE370 Project</p>
    </footer>
  </body>
</html>