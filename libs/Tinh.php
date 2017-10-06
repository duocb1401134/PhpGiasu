<?php

require_once "libs/business.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tinh
 *
 * @author NTD_S
 */
class Tinh extends DB_business {

    function __construct() {
        $this->table='tinh';
        $this->key='ID_TINH';
        parent::__construct();
    }
    function get_all_tinh(){
        return $this->select_all();
    }

}
