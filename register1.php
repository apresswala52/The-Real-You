<?php
include("connection.php");
$firstname;
$lastname;
$email;
$password;
$sql;
if(isset($_POST['fname']))
{
$firstname = $_POST['fname'];
}

if(isset($_POST['lname']))
{
$lastname = $_POST['lname'];
}

if(isset($_POST['email']))
{
$email = $_POST['email'];
}

if(isset($_POST['psw']))
{
$password = $_POST['psw'];
}

if($_POST['save'] == "save")
{
	$query = "select * from users where email='$email'";
	$answer = mysqli_query($conn,$query);
	$rows = mysqli_fetch_array($answer,MYSQLI_ASSOC);
	if (is_null($rows))
	{
		$sql = "insert into users (firstname,lastname,email,passsword,Ptest_taken,Ptype) values ('$firstname','$lastname','$email','$password',0,'')";
		echo $sql;
		$result=mysqli_query($conn,$sql);
		if($result == true)
		{
			echo "Registered Successfully";
			header('Location: mainpage.php');}
		else
		{
			echo "Record not saved";
		}
	}
	else
	{
		echo "email already exists";
	}
}
mysqli_close($conn);
?>