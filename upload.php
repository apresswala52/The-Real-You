<?php
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'personality';
        
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $insert = $db->query("update types set image='$imgContent' where tid=9");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}
?>