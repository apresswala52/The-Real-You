<?php include "database.php"; ?>
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
  
  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
  <link rel="stylesheet" href="css/example.css">
</head>

<body>

  <header class="header bg-primary">
      
      <div class="left-title current">Question <?php echo $number; ?> of <?php echo $total; ?></div>
      <div class="right-title">Total Questions: 20</div>
      <div class="clearfix"></div>
    </header>
<div class="content">
<div class="container-fluid">
	
	<div class="row">
		<div class="col-sm-12">
        	<div id="result" class="quiz-body">
            <form method="POST" action="process.php">
            	<fieldset class="form-group">
    			<h4><?php echo $question['question'] ?></h4>
                <ul class="choices">
                  <?php while($row=$choices->fetch_assoc()): ?>
                  <li><input name="choice" type="radio" value="<?php echo $row['id']; ?>" />
                    <?php echo $row['choice']; ?>
                  </li>
                  <?php endwhile; ?>
                </ul>
                 </fieldset>
                 <button  name="previous" id="previous" class="btn btn-success">Previous</button>
                 &nbsp;
                 <button  name="next" id="next" class="btn btn-success">Next</button>
           </form>
           </div>
        </div> <!-- End of col-sm-12 -->
        
    </div> <!-- End of row -->
</div> <!-- ENd of container fluid -->
</div> <!-- End of content -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js'></script>
</body>

</html>
