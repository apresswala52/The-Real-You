<?php 
include("connection.php"); 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>The Real You</title>
<link rel="stylesheet" type="text/css" href="css/ul.css">
<meta charset="UTF-8">
<?php 
include("links.php"); 
?>
<style type="text/css">
  .button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4c095;
  border: none;
  color: red;
  text-align: center;
  font-size: 28px;
  padding: 10px;
  width: 450px;
  transition: all 0.5s;
  cursor: pointer;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
</style>
</head>

<body>
  
<?php 
include("navbar.php"); 
?>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo"><em>The Real You</em></h1>
  <h2 class="w3-margin">Discover who you really are</h2>
  <div class="w3-center">
    <button onclick="takeptest()" class="button w3-margin-top"><span>Take the Personality Test</span></button>
  </div>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>MBTI Personality Test</h1>
      <h5 class="w3-padding-32">Have you been struggling with personal relationships? Are you wondering what the next step in your career should be? Understanding your personality type unlocks important insights into these questions and many more.</h5>

      <p class="w3-text-grey">Explore your personality type with our TypeExplorer assessment, based on the original 16 personality types created by Isabel Briggs Myers and Carl Jung. Discover how to choose your optimal career path, unlock your potential and develop more fulfilling relationships!</p>
    </div>

    <div class="w3-third w3-center">
      <img src="personality.jpg">
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">“Not until we are lost do we begin to understand ourselves.”
– Henry David Thoreau</h1>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
    </div>

    <div class="w3-twothird">
    </div>
  </div>
</div>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

function takeatest() {
	window.location="ainstructions.php";
}

function takeptest() {
	window.location="pinstructions.php";
}
</script>

</body>
</html>