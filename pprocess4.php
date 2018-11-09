<?php
	session_start();
	$answer22 = $_POST['answer22'];
	$answer23 = $_POST['answer23'];
	$answer24 = $_POST['answer24'];
	$answer25 = $_POST['answer25'];
	$answer26 = $_POST['answer26'];
	$answer27 = $_POST['answer27'];
	$answer28 = $_POST['answer28'];

	$scoreA = 0;
	$scoreB = 0;

	if ($answer22 == "A"){$scoreA++;} else{$scoreB++;}
	if ($answer23 == "A"){$scoreA++;} else{$scoreB++;}
	if ($answer24 == "A"){$scoreA++;} else{$scoreB++;}
	if ($answer25 == "A"){$scoreA++;} else{$scoreB++;}
	if ($answer26 == "A"){$scoreA++;} else{$scoreB++;}
	if ($answer27 == "A"){$scoreA++;} else{$scoreB++;}
	if ($answer28 == "A"){$scoreA++;} else{$scoreB++;}

	if ($scoreA>$scoreB)
	{
		$_SESSION['type'].='J';
	}
	else
	{
		$_SESSION['type'].='P';	
	}

	header("Location: pfinal.php");
?>