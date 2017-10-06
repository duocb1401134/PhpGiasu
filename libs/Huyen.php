<?php
require_once "business.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Huyen
 *
 * @author NTD_S
 */
class Huyen extends DB_business {
    //put your code here
    function __construct() {
        $this->table ="huyen";
        $this->key="ID_HUYEN";
    }
    function getNameByIdTinh($id_tinh){
        $select ="*";
        $where ="ID_TINH = ".$id_tinh;
        return $this->select_where_list($select, $where);
    }
}
