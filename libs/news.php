<?php
require_once 'business.php';
class News extends DB_business{
    
    function __construct() {
        $this->table = 'tintuc';
        $this->key='ID_TT';
    }
    function select_list(){
        $select="*";        
        return $this->select_limit($select, 0, 4);
    }
    function select_once($id){        
        return $this->select_by_id("*", $id);
    }
}