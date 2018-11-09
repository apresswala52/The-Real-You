<?php
  include('connection.php');
  $id = $_GET['id'];
  $sql = "select image from types where tid=$id";
  $result = mysqli_query($conn,$sql);
  $rows = mysqli_fetch_array($result,MYSQLI_ASSOC);
  header("Content-type: image/png");
  echo $rows['image'];
?>