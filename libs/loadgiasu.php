<?php
require_once 'tutor.php';
require_once 'image.php';
$sotin1trang = 4;
$trang =$_GET['trang'];
settype($trang, 'int');
$type = $_GET['type'];
$from = ($trang -1) * $sotin1trang;
switch ($type) {
  case 'default':
    get_list_tutor_default($from, $sotin1trang);
    break;

  default:
    # code...
    break;
}
function get_list_tutor_default($from, $sotin1trang)
{
    $tutor = new Tutor();
    $tutor_list = $tutor->select_list_tutor($from, $sotin1trang);
    $list='';
    foreach ($tutor_list as $row) {
        $image = new Image();
        $image_row = $image->select_once($row['ID_IMG']);
        $record = '<tr class="table-row">
                      <td class="table-img">
                          <img src="'.$image_row["NAME_IMG"].'" style="width:150px; height: auto;" alt="'.$image_row["MOTA"].'" />
                      </td>
                      </td>
                      <td class="table-text">
                          <h6><a href="CT_GS.php?q='.$row["ID_GS"].'">'.$row["TEN_GS"].'</a></h6>
                          <p>'.$row["GIOITHIEU_GS"].'</p>
                      </td>
                      <td>
                          <span class="fam"><a href="CT_GS.php?q='.$row["ID_GS"].'"> Chi Tiết </a></span>
                      </td>
                  </tr>';
        $list .=$record;
    }
    echo $list;
}
