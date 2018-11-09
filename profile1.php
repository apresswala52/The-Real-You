<?php 
include("connection.php"); 
session_start();
$username=$_SESSION['cilentlog'];
$email=$username['email'];
$query="select * from users where email='$email'";
$result = mysqli_query($conn,$query);
$rows = mysqli_fetch_array($result,MYSQLI_ASSOC);
$Ptype = $rows['Ptype'];
$query2="select * from types where type='$Ptype'";
$result = mysqli_query($conn,$query2);
$info = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
<html>
<head>
  <meta charset="UTF-8">
  <title>User Profile</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700|Material+Icons'>
  <link rel="stylesheet" href="css/profile.css">
  <?php 
  include("links.php"); 
  ?>
</head>

<body style="background-color: #dfdbd7;">

<?php 
include("navbar.php"); 
?>


<div class="Canvas" id="app">
  <main class="homepage">
    <div class="content">
      <div class="content-header">
        <?php
  if(!isset($_SESSION['cilentlog'])){
    $user='Guest User';
  }
  else{
    $user=$_SESSION['cilentlog'];
    $user=$user['firstname'];
  }
?>
        <div class="content-header-title" style="margin-top: 20px;">Welcome <?php echo $user?> !!</div>
      </div>
      <div class="content-summary">
        <div class="content-summary-box"><i class="material-icons content-summary-icon">stars</i>
          <div class="content-summary-title">Personality Type</div>
          <div class="content-summary-digit revenue"><?php echo $rows['Ptype']; ?></div>
        </div>
        <div class="content-summary-box"><i class="material-icons content-summary-icon">face</i>
          <div class="content-summary-title">Character</div>
          <div class="content-summary-digit cost"><?php echo $info['profile']; ?></div>
        </div>
        <div class="content-summary-box"><i class="material-icons content-summary-icon">supervisor_account</i>
          <div class="content-summary-title">Percentage</div>
          <div class="content-summary-digit income"><?php echo $info['percentage']; ?></div>
        </div>
      </div>
    </div>
    <section class="transaction">
      <div class="transaction-website"><span class="transaction-website-title">Career Paths</span>
      <div class=""><?php echo $info['career']; ?></div>
      </div>
      <div class="transaction-order"> <span class="transaction-website-title">Communication Skills</span>
      <div class=""><?php echo $info['comm']; ?></div>
      </div>
    </section>
  </main>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.min.js'></script>
<script src='https://unpkg.com/vue-chartjs/dist/vue-chartjs.min.js'></script>
<script src='https://unpkg.com/axios/dist/axios.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Faker/3.1.0/faker.min.js'></script>
</body>
</html>
