<?php

require_once 'business.php';
require_once 'ReadKey.php';

class Tutor extends DB_business {

    public static $id;

    public function __construct() {
        $this->table = "giasu";
        $this->key = "ID_GS";
        parent::__construct();
    }   
    public function select_four_tutor() {
        $select = "ID_GS, TEN_GS, GIOITHIEU_GS,ID_IMG ";
        $where = "DUYET_GS = 1";
        $from = 0;
        $to = 4;
        return $this->select_where_limit($select, $where, $from, $to);
    }

    public function select_list_tutor($from, $to) {
        $select = "*";
        $where = "DUYET_GS = 1";
        return $this->select_where_limit($select, $where, $from, $to);
    }

    public function select_once_tutor($id) {
        $select = '*';
        return $this->select_by_id($select, $id);
    }

    public function login($email, $pass) {
       
    }

    public function login_encrypt($email, $pass) {
        $read_key = new ReadKey();
        $key = $read_key->get_values();
        $sql = "call login_giasu('$email', '$pass','$key')";       
        return $this->get_row($sql);
    }

    public function register_encryption($name, $email, $pass) {
        $read_key = new ReadKey();
        $key = $read_key->get_values();
        $sql = "Call insert_giasu($name,$email,$pass,$key)";
        return mysqli_query($this->__connect, $sql);
    }

    public function register($name, $email, $pass) {
        $data = array('TEN_GS' => $name, 'EMAIL_GS' => $email, 'MATKHAU_GS' => $pass);
        return $this->insert($this->table, $data);
    }

    public function update_tutor($data, $id) {
        $where = 'ID_GS = ' . $id;
        return $this->update($this->table, $data, $where);
    }

    public function check_pass($id, $pass) {
        $sql = "Select * From v_giasu Where ID_GS='" . $id . "' and MATKHAU_GS='" . $pass . "'";
        return $this->get_row($sql);
    }

    public function change_pass($id, $pass_new) {
        $where = "ID_GS=" . $id;
        $data = array('MATKHAU_GS' => $pass_new);
        return $this->update($this->table, $data, $where);
    }

    public function update_chuyennganh($id, $khoinganh, $chuyennganh, $trinhdo) {
        $where = "ID_GS=" . $id;
        $data = array('ID_TRINHDO' => $trinhdo, 'ID_KHOINGANH' => $khoinganh, 'CHUYENNGANH_GS' => $chuyennganh);
        return $this->update($this->table, $data, $where);
    }
    public function duyet(){
        $where= 'DAXEM_GS = 0';
        return $this->select_where_list('*',$where);
    }
}
