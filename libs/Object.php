<?php

require_once "business.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Object
 *
 * @author NTD_S
 */
class Object extends DB_business {

    //put your code here
    function __construct() {
        $this->table = "monhoc";
        $this->key = "ID_MONHOC";
        parent::__construct();
    }

    function getNameByIdLop($id) {
        $select = "*";
        $where = "ID_LOP = '" . $id."'";
        return $this->select_where_list($select, $where);
    }

}
