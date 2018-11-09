<?php
	session_start();
	$answer15 = $_POST['answer15'];
	$answer16 = $_POST['answer16'];
	$answer17 = $_POST['answer17'];
	$answer18 = $_POST['answer18'];
	$answer19 = $_POST['answer19'];
	$answer20 = $_POST['answer20'];
	$answer21 = $_POST['answer21'];

	$scoreA = 0;
	$scoreB = 0;
	echo $scoreA;
	echo $scoreB;

	if ($answer15 == "A"){$scoreA++;} else{$scoreB++;}
	if ($answer16 == "A"){$scoreA++;} else{$scoreB++;}
	if ($answer17 == "A"){$scoreA++;} else{$scoreB++;}
	if ($answer18 == "A"){$scoreA++;} else{$scoreB++;}
	if ($answer19 == "A"){$scoreA++;} else{$scoreB++;}
	if ($answer20 == "A"){$scoreA++;} else{$scoreB++;}
	if ($answer21 == "A"){$scoreA++;} else{$scoreB++;}

	if ($scoreA>$scoreB)
	{
		$_SESSION['type'].='T';
	}
	else
	{
		$_SESSION['type'].='F';	
	}

	header("Location: mbti4.php");
?>