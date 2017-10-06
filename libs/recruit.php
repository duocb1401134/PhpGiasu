<?php

require_once 'business.php';

class Recruit extends DB_business {

    function __construct() {
        $this->table = "chieusinh";
        $this->key = "ID_CHIEUSINH";
        parent::__construct();
    }

    function delete_recruit($id) {
        return $this->delete_by_id($id);
    }

    function select_three_recruit() {
        $select = "ID_CHIEUSINH,TEN_CHIEUSINH,NGAYMO_CHIEUSINH,MOTA_CHIEUSINH,ID_IMG";
        $from = 0;
        $to = 3;
        return $this->select_limit($select, $from, $to);
    }

    function select_once($id) {
        $select = "`ID_CHIEUSINH`, `ID_IMG`, `ID_GS`, `ID_MONHOC`, `TEN_CHIEUSINH`, `MOTA_CHIEUSINH`, `NGAYMO_CHIEUSINH`, `ND_CS`";
        return $this->select_by_id($select, $id);
    }

    function select_list() {
        $select = "*";
        $from = 0;
        $to = 5;
        return $this->select_limit($select, $from, $to);
    }

    function insert_recruit($id_image, $id_gs, $id_monhoc, $ten_chieusinh, $mota, $ngaymo, $ndct) {
        $data = array('ID_IMG' => $id_image, 'ID_GS' => $id_gs, 'ID_MONHOC' => $id_monhoc, 'TEN_CHIEUSINH' => $ten_chieusinh, 'MOTA_CHIEUSINH' => $mota, 'NGAYMO_CHIEUSINH' => $ngaymo, 'ND_CS' => $ndct);
        return $this->insert($this->table, $data);
    }

}
