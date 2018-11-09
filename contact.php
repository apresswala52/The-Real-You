<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
    <link rel="stylesheet" href="css/contact1.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<?php 
	include("links.php"); 
	?>
</head>
<body>
<?php 
include("navbar.php"); 
?>
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo"><i class="fas fa-1x fa-envelope"></i> Get In Touch With Us</h1>
  <h3>Any queries?? Send us your queries here.</h3>
  <form class="cf" method="POST" action="feedback.php">
  <div class="half left cf">
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email address" required>
    <input type="text" name="subject" placeholder="Subject">
  </div>
  <div class="half right cf">
    <textarea name="message" type="text" placeholder="Message" required></textarea>
  </div>  
  <input type="submit" value="Submit" id="input-submit" name="submit">
</form>
</header>


</body>
</html>