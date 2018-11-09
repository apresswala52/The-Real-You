<?php
include("connection.php");
session_start();
$sql;
$email;
$psw;
$email=trim(strip_tags($_POST['email']));
$psw=trim(strip_tags($_POST['psw']));
include_once './classes/Crud.php';
$crud=new crud();
	$query1 = "select * from users where email='$email' and passsword='$psw'";

	$result1 = $crud->getData($query1);

if (count($result1) > 0) {
      $_SESSION['cilentlog'] = $result1[0];
?>
<script language="javascript">
    window.location.href = "mainpage.php";
</script>
<?php
   
}
 else
{
?>
<script language="javascript">
	alert('Please enter correct username and password');
    window.location.href = "register.php";
</script>
	
<?php	
}
?>
