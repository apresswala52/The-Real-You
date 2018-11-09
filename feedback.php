<?php include("connection.php");
$name;
$subject;
$message;
$email;
$sql;

if(isset($_POST['name']))
{
$name = $_POST['name'];
}

if(isset($_POST['subject']))
{
$subject = $_POST['subject'];
}

if(isset($_POST['email']))
{
$email = $_POST['email'];
}

if(isset($_POST['message']))
{
$message = $_POST['message'];
}

if($_POST['submit'] == "Submit")
{
$sql = "insert into contact values ('$email','$name','$subject','$message')";
}

$result=mysqli_query($conn,$sql);

if($result == true)
{
	header('Location:contact.php');
}
else
{
	echo "Error";
}
mysqli_close($conn);
?>