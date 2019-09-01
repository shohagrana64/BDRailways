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
          <h1><span class="highlight">BD Railway</span> Ltd</h1>
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
          <h1 class="page-title">Be A Proud User</h1>
          
      <div class="dark">
          <h3>Signup your Account</h3>
		 
            <form class="quote" action="signupInsart.php" method="POST">
              <div>
                <label>UserName</label><br>
                <input type="text" placeholder="User Name" name="userName" required>
              </div>
              <div>
                <label>email</label><br>
                <input type="text" placeholder="Address" name="email" required>
              </div>
              <div>
                <label>password</label><br>
                <input type="text" placeholder="strong pass plz" name="password" required>
              </div>
              <div>
                <label>firstName</label><br>
                <input type="text" placeholder="First Name" name="firstName" required>
              </div>
              <div>
                <label>lastName</label><br>
                <input type="text" placeholder="Last Name" name="lastName" required>
              </div>
			  <div>
                <label>address</label><br>
                <input type="text" placeholder="Address" name="address" required>
              </div>
			  <div>
                <label>phone</label><br>
                <input type="text" placeholder="Phone Number" name="phone" required>
              </div>
             
              <div>
                <h5> </h5>
              </div>
              <button class="button_1" type="submit" >Signup</button>
           </form> 
      </div>
    </section>

    <footer>
      <p> CSE370 Project</p>
    </footer>
  </body>
</html>
