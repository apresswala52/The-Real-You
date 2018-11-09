<?php include("connection.php");  ?>
<?php
  session_start();
  $number = 28;
 ?>
<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Personality Test</title>
<link rel="stylesheet" type="text/css" href="css/new.css">
</head>
<body>
<div class="form">
<header>
  <h1>SET 4</h1>  
</header>
<form action='pprocess4.php' method='post'>
  <ul>
     <?php while($number!=21): ?>
        <?php $query = "select question from `mbti` where qid = $number";
              $result = $conn->query($query) or die($conn->error.__LINE__);
              $question = $result->fetch_assoc();?>   
    <li class="question">
      <h3><?php echo $question['question']; ?></h3>
      <label class="choice">
        <?php $query1 = "select option1 from `mbti` where qid = $number";
                  $result = $conn->query($query1) or die($conn->error.__LINE__);
                  $choice1 = $result->fetch_assoc(); ?>
        <input type="radio" name="answer<?php echo $number?>" value="A" required/>
        <span><?php echo $choice1['option1'];?></span>
      </label>
      <label class="choice">
         <?php $query2 = "select option2 from `mbti` where qid = $number";
                  $result = $conn->query($query2) or die($conn->error.__LINE__);
                  $choice2 = $result->fetch_assoc(); ?>
        <input type="radio" name="answer<?php echo $number?>" value="B" required/>
        <span><?php echo $choice2['option2'];?></span>
      </label>
    </li>
     <?php $number--;
              endwhile; ?> 
  </ul>
  <button class="button-submit" type="submit">Know your Personality Type !!!</button>
</form>
</div>
</body>
</html>