<?php
	session_start();
	if(!isset($_SESSION['type'])){
    $_SESSION['type']='';
  	}
	$answer1 = $_POST['answer1'];
	$answer2 = $_POST['answer2'];
	$answer3 = $_POST['answer3'];
	$answer4 = $_POST['answer4'];
	$answer5 = $_POST['answer5'];
	$answer6 = $_POST['answer6'];
	$answer7 = $_POST['answer7'];

	$scoreA = 0;
	$scoreB = 0;
	echo $scoreA;
	echo $scoreB;

	if ($answer1 == "A"){$scoreA++;} else{$scoreB++;}
	if ($answer2 == "A"){$scoreA++;} else{$scoreB++;}
	if ($answer3 == "A"){$scoreA++;} else{$scoreB++;}
	if ($answer4 == "A"){$scoreA++;} else{$scoreB++;}
	if ($answer5 == "A"){$scoreA++;} else{$scoreB++;}
	if ($answer6 == "A"){$scoreA++;} else{$scoreB++;}
	if ($answer7 == "A"){$scoreA++;} else{$scoreB++;}

	if ($scoreA>$scoreB)
	{
		$_SESSION['type']='I';
	}
	else
	{
		$_SESSION['type']='E';	
	}

	header("Location: mbti2.php");
?>
