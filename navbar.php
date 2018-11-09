<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <?php if(basename($_SERVER['PHP_SELF']) == "mainpage.php") { ?>
      
    <a href="mainpage.php" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a> 
      <?php 
       } else {

        ?>
    <a href="mainpage.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a> 
      <?php
          }
        ?>            

    <?php if(basename($_SERVER['PHP_SELF']) == "pinstructions.php") { ?>
      
    <a href="pinstructions.php" class="w3-bar-item w3-button w3-padding-large w3-white">Take the Test</a> 
      <?php 
       } else {

        ?>
    <a href="pinstructions.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Take the Test</a> 
      <?php
          }
        ?>   
     
    <?php if(basename($_SERVER['PHP_SELF']) == "types.php") { ?>
      
      <a href="types.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">Personality Types</a>      
      <?php 
       } else {

        ?>
      <a href="types.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Personality Types</a>      
      <?php
          }
        ?>

    <?php if(basename($_SERVER['PHP_SELF']) == "contact.php") { ?>
      
      <a href="contact.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">Contact Us</a>      
      <?php 
       } else {
        ?>
      <a href="contact.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contact Us</a>      
      <?php
          }
        ?>

     <?php if(basename($_SERVER['PHP_SELF']) == "https://docs.google.com/forms/d/e/1FAIpQLSdd1aLCWDlf09FHr90O9ADTxkMSIdYCWgYIB3r4wHPtmToIfg/viewform?c=0&w=1") { ?>
      
      <a href="https://docs.google.com/forms/d/e/1FAIpQLSdd1aLCWDlf09FHr90O9ADTxkMSIdYCWgYIB3r4wHPtmToIfg/viewform?c=0&w=1" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">Feedback</a>      
      <?php 
       } else {
        ?>
      <a href="https://docs.google.com/forms/d/e/1FAIpQLSdd1aLCWDlf09FHr90O9ADTxkMSIdYCWgYIB3r4wHPtmToIfg/viewform?c=0&w=1" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Feedback</a>      
      <?php
          }
        ?>


    <?php
      
    if(!isset($_SESSION['cilentlog']))
    {
      if(basename($_SERVER['PHP_SELF']) == "register.php") {
     ?>
          <a href="register.php" class="w3-right w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">Login|Register</a>
        
    <?php  }
      else{ ?>
        <a href="register.php" class="w3-right w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Login|Register</a>
    <?php  }
    }
    else {
    ?>

     <div class="w3-dropdown-hover w3-hide-small w3-right">
        <button class="w3-button w3-hover-white" title="Notifications" style="margin-top: 5px;">Hi  
          <?php
         $row = $_SESSION['cilentlog'] ;
         echo $row['firstname'];
        ?> <i class="fa fa-caret-down"></i></button>     
        <div class="w3-dropdown-content w3-card-4 w3-bar-block">
          <a href="profile1.php" class="w3-bar-item w3-button w3-hover-red">Profile</a>
          <a href="logout.php" class="w3-bar-item w3-button w3-hover-red">Logout</a>
        </div>
     </div>
    <?php
    }
     ?>
  </div>
</div>
