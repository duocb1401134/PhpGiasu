<?php 
    require_once 'database.php';
    
    $db = new Database();
    $db->connect();
    $email = $_POST["email"];
    $sql = "Select * from GIASU Where EMAIL_GS='".$email."'";
    echo $db->check_email($sql);
    