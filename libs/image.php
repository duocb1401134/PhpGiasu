<?php

require_once 'business.php';

class Image extends DB_business {

    function __construct() {
        $this->table = "image";
        $this->key = "ID_IMG";
        parent::__construct();
    }

    function select_once($id) {
        return $this->select_by_id("*", $id);
    }
    function insert_image($name,$descrip=NULL){
        if($descrip==NULL){
             $data=array('NAME_IMG' => $name);
        }
        else{
            $data=array('NAME_IMG' => $name, 'MOTA' =>$descrip);
        }        
        return $this->insert($this->table, $data);
    }    
}
