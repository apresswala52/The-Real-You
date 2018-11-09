<?php 
include("connection.php"); 
session_start();
$n=1;
?>
<!DOCTYPE html>
<html>
<head>
<title>Personality Types</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/types.css">
<?php 
include("links.php"); 
?>
</head>

<body style="background-color: #dfdbd7;">
  
<?php 
include("navbar.php"); 
?>
<header class="w3-container w3-red w3-center" style="padding:100px 16px">
  <h1 class="w3-margin w3-jumbo">16 Personality Types</h1>
  <h3>Complete overview of the 16 Personality Types.Free in-depth and practical information on the 16 personality types, including careers, relationships, and core values.Enjoy and share with your friends!</h3>
</header>
<?php while($n!=16): ?>
        <?php $query = "select * from types where tid=$n";
              $result = $conn->query($query) or die($conn->error.__LINE__);
              $rows = $result->fetch_assoc();?>
    <div class="wrapper" style="margin-top: 20px;">
  <div class="product">
    <div class="title">
      <?php echo $rows['type']; ?> - <?php echo $rows['profile']; ?>
    </div>
    
    <div class="text">
      <div class="code"><?php echo $rows['meaning']; ?></div>
      <div class="description">
        <?php echo $rows['description']; ?>
      </div>
    </div>
    <div class="preview">
        <img src="image.php?id=<?php echo $n;?>" width="175" height="250" />
      </svg>
    </div>
    
  </div>  
</div>  
<?php 
$n++;
endwhile; 
?> 

</body>
</html>