<?php

class Rpl extends Controller{
    public function index(){
        $data['judul'] = "Kompetensi Keahlian";
        $this->view("templates/header", $data);
        $this->view("rpl/index");
        $this->view("templates/footer");
    }
}