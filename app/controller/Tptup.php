<?php

class Tptup extends Controller{
    public function index(){
        $data['judul'] = "Kompetensi Keahlian";
        $this->view("templates/header", $data);
        $this->view("tptup/index");
        $this->view("templates/footer");
    }
}