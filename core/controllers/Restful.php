<?php

class Restful extends App {

    public function post($ep)
    {
        call_user_func([$this, $ep.'_post']);
    }

    public function add_post() {
        
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];
        $waktu = time();

        $query = "INSERT INTO contents_tb VALUES (null, '$judul', '$isi', 'slug-disini', '$waktu', '$waktu')";
        $this->db->exec($query);
    }



}