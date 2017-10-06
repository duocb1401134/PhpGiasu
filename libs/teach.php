<?php

require_once 'business.php';

class Teach extends DB_business {

    function __construct() {
        $this->table = "day";
        $this->key = "ID_GS";
        parent::__construct();
    }

    function select_all_teach($id) {
        $select = "*";
        $inner = "monhoc";
        $key = "ID_MONHOC";
        return $this->select_where_inner($select, $inner, $key, $id);
    }

}
