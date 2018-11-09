<?php
    //DB details
    $dbHost     = 'localhost:3306';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName     = 'personality';
    
    //Create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    
    //Check connection
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
        
    //Get image data from database
    $query = $db->query("select image from types where tid=1");
    
    if($result->num_rows > 0){
        $imgData = $result->fetch_assoc();
        header("Content-type: image/jpg"); 
        echo $imgData['image']; 
    }else{
        echo 'Image not found...';
    }
?>