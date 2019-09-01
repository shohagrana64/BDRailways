<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    
    <title>Search</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">BD Railways</span> Ltd</h1>
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
      
        <h1>You can search</h1>
        <nav>
		 <div class="search-container">
		<form action="http://localhost/project3/search.php" method="GET">
		<input type="text" placeholder="Search" name="query">
      <button type="submit" class="button_1">Search</button>
    </form>
  </div>
        </nav>
      
    </section>

    <section id="main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-title">Be A Proud User</h1>
          
      <div class="dark">
          <h3>For Reservation please Signup</h3>
		 
            <?php
    include 'dbconnect.php';
	$conn = OpenCon();
     
     $query = $_GET['query']; 
    // gets value sent over search form
     
    $min_length = 1;
 
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        
        $raw_results = mysqli_query($conn,"SELECT * FROM train
            WHERE (`seatType` LIKE '%".$query."%') OR (`goingTo` LIKE '%".$query."%')OR (`date` LIKE '%".$query."%')") or die(mysql_error());
             
        
         
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
                
                echo "<p>seatType: ".$results['seatType']." <br/>Name: ".$results['name']." <br/> Type:".$results['seatType']."<br/> Seats:".$results['availableSeat']." <br/> goingTo:".$results['goingTo']."<br/> date:".$results['date']."</p>" ;
				echo '<button type="nav" class="button_1" ><a href="reserve.php?Serial_Number='.$results['Serial_Number'].'"> Reserve</a></button>';
				
                
            }
             
        }
        else{ 
            echo "No results";
        }
         
    }
    else{ 
        echo "Minimum length is ".$min_length;
    }
	CloseCon($conn);
     
?>
      </div>
    </section>

    <footer>
      <p> CSE370 Project</p>
    </footer>
  </body>
</html>
