<?php
if (isset($_POST['btn_molop'])) {

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
        $dir2 = "images/molop";
        if (is_dir($dir1 . $dir2)) {
            
        } else {
            mkdir($dir1 . $dir2);
        }
        $upload_path = $dir1 . $dir2 . "/" . $img_name;
        move_uploaded_file($_FILES['img']['tmp_name'], $upload_path);
    }
    $image = new Image();
    $image->insert_image("$dir2/$img_name");
    $ten_chieusinh = (isset($_POST['tenlop'])) ? $_POST['tenlop'] : null;
    $id_gs = $_POST['id_giasu'];
    $id_monhoc = $_POST['select_monhoc'];
    $ngaymo = $_POST['ngaymo'];
    $ndct = $_POST['ndct'];
    $mota = $_POST['gioithieu'];
    $molop = new Recruit();
    $molop->insert_recruit($image->last_id(), $id_gs, $id_monhoc, $ten_chieusinh, $mota, $ngaymo, $ndct);
    $page_admin = 5;
}