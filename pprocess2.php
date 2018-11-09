<?php
	session_start();
	if(!isset($_SESSION['type'])){
    $_SESSION['type']='';
  	}
	$answer8 = $_POST['answer8'];
	$answer9 = $_POST['answer9'];
	$answer10 = $_POST['answer10'];
	$answer11 = $_POST['answer11'];
	$answer12 = $_POST['answer12'];
	$answer13 = $_POST['answer13'];
	$answer14 = $_POST['answer14'];

	$scoreA = 0;
	$scoreB = 0;

	if ($answer8 == "A"){$scoreA++;} else{$scoreB++;}
	if ($answer9 == "A"){$scoreA++;} else{$scoreB++;}
	if ($answer10 == "A"){$scoreA++;} else{$scoreB++;}
	if ($answer11 == "A"){$scoreA++;} else{$scoreB++;}
	if ($answer12 == "A"){$scoreA++;} else{$scoreB++;}
	if ($answer13 == "A"){$scoreA++;} else{$scoreB++;}
	if ($answer14 == "A"){$scoreA++;} else{$scoreB++;}

	if ($scoreA>$scoreB)
	{
		$_SESSION['type'].='S';
	}
	else
	{
		$_SESSION['type'].='N';	
	}

	header("Location: mbti3.php");
?>
