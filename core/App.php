<?php

class App {

    public $db;

    function __construct()
    {
        $this->db = new SQLite3(DIR_ROOT.DIRECTORY_SEPARATOR.'uwu.db');
    }

    public function view($v)
    {
        include(DIR_ROOT.'/core/views/'.$v.'.php');
    }

}