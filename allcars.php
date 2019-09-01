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

    

    <section id="main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-title">Be A Proud User</h1>
          
      <div class="dark">
          <h3>For Reservation please Signup</h3>
		 
            <?php
            include 'dbconnect.php';
	        $conn = OpenCon(); 
			$raw_results = mysqli_query($conn,"SELECT * FROM train") or die(mysql_error());
            while($results = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
                
                echo "<p>seatType: ".$results['seatType']." <br/>Name: ".$results['name']." <br/> Type:".$results['seatType']."<br/> Seats:".$results['availableSeat']." <br/> goingTo:".$results['goingTo']."<br/> date:".$results['date']."</p>" ;
				
                
				echo '<div><H3></H3></div>';
            };
             
	CloseCon($conn);
     
?>
      </div>
    </section>

    <footer>
      <p> CSE370 Project</p>
    </footer>
  </body>
</html>