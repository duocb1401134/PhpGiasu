<?php

class ReadKey {

    private $values;

    function __construct() {
        $myfile = fopen("key.ini", "r") or die("Unable to open file!");
        $this->values = fread($myfile, filesize("key.ini"));
        fclose($myfile);
    }

    public function get_values() {
        return $this->values;
    }

}
