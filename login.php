<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    
    <title>Login</title>
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
            <li><a href="signup.php">Signup</a></li>
            <li class="current"><a href="login.php">Login</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="newsletter">
      <div class="container">
        <h1>You can visit our market</h1>
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
          <h1 class="page-title">3 Largest Railway Companies</h1>
          <ul id="services">
            <li>
              <h3>Bangladesh Railways Ltd</h3>
              <p>Also known as Bangla Rail is the state owned rail transport agency of Bangladesh. It operates and maintains all railways in the country, and is overseen by the Directorate General of Bangladesh Railway. </p>
            </li>
            <li>
              <h3>Deutsche Bahn – $51.14bn</h3>
              <p>Deutsche Bahn (DB) reported a 5.2% year-on-year revenue growth in 2017 on the back of improved performance of its business units, including DB Long Distance, DB Netze Track, DB Schenker Logistics, and DB Arriva plc. Ridership for DB Long Distance trains grew by 2.3% year-on-year to 142 million, while rail freight transport decreased by 2.3% to 271 million tonnes (Mt) during 2017.</p>
            </li>
            <li>
              <h3>SNCF – $40.12bn</h3>
              <p>French state-owned railway company SNCF’s revenues increased by 4.2% year-on-year in 2017 due to a strong growth in its passenger and freight transport volumes. The company invested approximately $10.5bn in the modernisation of its rail network and rolling stock, mainly in France, during the year. It also completed 1,600 improvement projects in 2017.</p>
            </li>
          </ul>
        </article>

        <aside id="sidebar">
          <div class="dark">
            <h3>Login to your Account</h3>
            <form class="quote" action="check.php" method="POST">
  						<div>
  							<label>Email</label><br>
  							<input type="email" placeholder="Email Address" name="email" required>
  						</div>
              <div>
                <label>Password</label><br>
                <input type="text" placeholder="Password" name="password" required>
              </div>
  			  		             
              <div>
                <h5> </h5>
              </div>
  						<button class="button_1" type="submit">login</button>
			</form>
          </div>
        </aside>
      </div>
    </section>

    <footer>
      <p> CSE370 Project </p>
    </footer>
  </body>
</html>