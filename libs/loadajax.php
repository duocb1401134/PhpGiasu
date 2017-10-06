<?php
require_once 'Huyen.php';
require_once 'Object.php';
$key = isset($_POST['id']) ? $_POST['id'] : 0;
$type = isset($_POST['type']) ? $_POST['type'] : '';

if ($type == 'huyen') {
    $load = new loadajax();
    $load->load_huyen($key);
    return;
}
if ($type == 'monhoc') {
    $load = new loadajax();
    $load->load_monhoc($key);
    return;
}

class loadajax {

    function load_huyen($id_tinh) {
        $huyen = new Huyen();
        $huyen_list = $huyen->getNameByIdTinh($id_tinh);
        foreach ($huyen_list as $row_huyen) {
            $option = "<option value='";
            $option .= $row_huyen['ID_HUYEN'] . "'";
            $option .= ">" . $row_huyen['TEN_HUYEN'] . "</option>";
            $string .= $option;
        }
        echo $string;
    }

    function load_monhoc($id) {
        $object = new Object();
        $object_list = $object->getNameByIdLop($id);
        foreach ($object_list as $row_monhoc) {
            $option = "<option value='";
            $option .= $row_monhoc['ID_MONHOC'] . "'";
            $option .= ">" . $row_monhoc['TEN_MONHOC'] . "</option>";
            $string .= $option;
        }
        echo $string;
    }

}
