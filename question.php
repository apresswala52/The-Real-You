<?php include("connection.php");  ?>
<?php
  //Set question numbers
  $number = (int) $_GET['n'];

  //Get total number of questions
  $query = "select * from questions";
  $results = $conn->query($query) or die($conn->error.__LINE__);
  $total=$results->num_rows;

  // Get Question
  $query = "select * from `questions` where question_number = $number";

  //Get result
  $result = $conn->query($query) or die($conn->error.__LINE__);
  $question = $result->fetch_assoc();

  // Get Choices
  $query = "select * from `choices` where question_number = $number";

  //Get results
  $choices = $conn->query($query) or die($conn->error.__LINE__);
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Aptitude Test</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
  <style type="text/css">

h2 {
  font-size: 12pt;
  font-weight: 300;
  margin: 0;
  line-height: 0;
}

.quiz {
  width: 55%;
  height: 400px;
  background-color: #f44336;
  position: absolute;
  top: 40%;
  left: 50%;
  border-radius: 5px;
  transform: translate(-50%, -50%);
  -webkit-box-shadow: 0px 0px 47px 9px rgba(0, 0, 0, 0.08);
  -moz-box-shadow: 0px 0px 47px 9px rgba(0, 0, 0, 0.08);
  box-shadow: 0px 0px 47px 9px rgba(0, 0, 0, 0.08);
}
.quiz h1 {
  text-align: center;
}

.option {
  width: 100%;
  height: 60px;
  background-color: #F4F7F7;
  cursor: pointer;
}
.option a span:nth-child(2) {
  display: inline-block;
}
.option a span:nth-child(2) p {
  margin: 25px 20px;
  font-family: sans-serif;
}
.option span {
  display: inline-block;
}

.letter {
  width: 20px;
  height: 15px;
  background-color: #3498db;
  text-align: center;
  margin: 20px 20px;
  border-radius: 4px;
  padding-bottom: 5px;
  font-size: 50pt;
}

.borderme {
  border-top: solid 0.75pt #DEDEDE;
}

.question {
  width: 100%;
  height: 100px;
  background-color: #DDDDDD;
  text-align: center;
}

.question h3 {
  padding-top: 16px;
  padding-bottom: 16px;
  font-size: 15pt;
  color: #1C1C1C;
}

#nextbtn{
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 15px 32px;
  border-radius: 5px;
  width: 100%;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
  </style>
</head>
<body  style="background-color: #dfdbd7;">

  <div class="quiz">
  <h1 style="color: white">Question <?php echo $number; ?> of <?php echo $total; ?></h1>
  <div class="question">
    <h3><?php echo $question['question'] ?></h3>
  </div>
  <form method="POST" action="aprocess.php">
    <div class="choices">
      <?php while($row=$choices->fetch_assoc()): ?>
        <div class="option borderme">
        <a>
        <input class='letter' name="choice" type="radio" value="<?php echo $row['id']; ?>" required/>
        <span style="font-size: 20px; font-family: sans-serif;"><?php echo $row['choice']; ?><br></span>
        </a>
        </div>
      <?php endwhile; ?> 
    </div>
     <input type="hidden" name="number" value="<?php echo $number; ?>" />
     <button name="nextbtn" id="nextbtn" value="submit" class="btn btn-success">Next</button>
  </form>
  </div>

</body>
</html>
