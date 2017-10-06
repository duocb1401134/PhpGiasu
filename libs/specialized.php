<?php
require_once 'business.php';
class Specialized extends DB_business {

    function __construct() {
        $this->table = "khoinganh";
        $this->key = "ID_KHOINGANH";
        parent::__construct();
    }    
    function select_once($id) {
        return $this->select_by_id_string("*", $id);
    }
    function getAll_Spl(){
        return $this->select_all();
    }
}