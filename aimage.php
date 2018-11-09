<?php
  include('connection.php');
  $type = $_GET['type'];
  $sql = "select image from types where type='$type'";
  $result = mysqli_query($conn,$sql);
  $rows = mysqli_fetch_array($result,MYSQLI_ASSOC);
  header("Content-type: image/png");
  echo $rows['image'];
?>