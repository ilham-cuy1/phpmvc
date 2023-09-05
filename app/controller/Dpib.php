<?php

class Dpib extends Controller{
    public function index(){
        $data['judul'] = "Kompetensi Keahlian";
        $this->view("templates/header", $data);
        $this->view("dpib/index");
        $this->view("templates/footer");
    }
}