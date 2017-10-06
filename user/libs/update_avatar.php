<?php

if (isset($_POST['btn_avatar'])) {
    $img_name = $_FILES['img']['name'];

    $array_img_name = explode(".", $img_name);
    $img_type = $array_img_name[count($array_img_name) - 1];
    $valid_type = "gif,png,bmp,jpg,jpeg,GIF,PNG,JGP,JPEG";
    $array_valid_type = explode(",", $valid_type);
    $valid_img = "";
    for ($r = 0; $r < count($array_valid_type); $r++) {
        if ($img_type == $array_valid_type[$r]) {
            $valid_img = "true";
            break;
        }
    }
    if ($valid_img == "true") {
        $thumd_img = "thumb_" . $img_name;
        $dir1 = "../";
        $dir2 = "images/avatar";
        if (is_dir($dir1 . $dir2)) {
            
        } else {
            mkdir($dir1 . $dir2);
        }
        $upload_path = $dir1 . $dir2 . "/" . $img_name;
        move_uploaded_file($_FILES['img']['tmp_name'], $upload_path);
    }
    $image = new Image();   
    $image->insert_image("$dir2/$img_name");
    $tutor = new Tutor();
    $data = array('ID_IMG' => $image->last_id());
    $tutor->update_tutor($data, $_SESSION['ID_GS']);
    $_SESSION["NAME_IMG"] = "$dir2/$img_name";
    $page = 3;
}