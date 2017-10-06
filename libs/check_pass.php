<?php 
    require_once 'tutor.php';
    $tutor = new Tutor();
    $db = new Database();
    $id = $_POST['ID_GS'];
    $pass=md5($_POST['PassWord']);
    echo count($tutor->check_pass($id, $pass)); 
    