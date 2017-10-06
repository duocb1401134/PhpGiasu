<?php
require_once 'business.php';
/**
 * Description of Lop
 *
 * @author NTD_S
 */
class Lop extends DB_business {
    //put your code here
    function __construct() {
        $this->table='lop';
        $this->key='ID_LOP';
        parent::__construct();
    }
    public function getAll_Lop(){
       return $this->select_all();
    }    
}

