<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/style.css">
  <?php 
	include("links.php"); 
  ?>
</head>

<body style="background-color: #dfdbd7;">

<?php 
include("navbar.php"); 
?>
    <div class="form" style="margin-top: 100px;">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Register</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">             
          <form action="register1.php" method="POST">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name
              </label>
              <input type="text" name="fname" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name
              </label>
              <input type="text" name="lname" required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email
            </label>
            <input type="email" name="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password
            </label>
            <input type="password" name="psw" required autocomplete="off"/>
          </div>
          
          <button type="submit" value="save" name="save" class="button button-block"/>Register</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1 style="color: white">Welcome!</h1>
          
          <form action="loginclient.php" method="POST">
          
            <div class="field-wrap">
            <label>
              Email<span class="req"></span>
            </label for="email">
            <input type="email" id="email" name="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label for="psw">
              Password<span class="req"></span>
            </label>
            <input type="password" name="psw" id="psw" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>
  <!-- <form action="register1.php" style="padding-top: 2%" method="POST">
<div class="container" style="width: 50%;">
    <div class="row">
        <h3>Sign-Up</h3>    
        <div class="col-sm-6" >
        <label for="fname">First Name</label>
    <input type="text" id="fname" name="fname" placeholder="Your First Name..">
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" placeholder="Your Last Name..">        

    <label for="email">Email Id</label>
    <input type="email" id="email" name="email" placeholder="Your Email..">        

    <label for="gender">Gender</label><br>
    <input type="radio" id="mno" name="gender"> Male 
    <input type="radio" id="mno" name="gender"> Female 

        </div>
        <div class="col-sm-6">
             

    <label for="age">Age</label>
    <input type="text" id="age" name="age" placeholder="Your Age">  
    
    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Password..">        
        </div>
    </div>

    
    <input type="submit" id="save" name="save" value="save">
    <input type="submit" value="Cancel">
  </form>
</div> -->

</body>
</html>

