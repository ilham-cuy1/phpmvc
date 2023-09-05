<?php 

class User_model {
    private $nama = 'SMK Negeri 2 Trenggalek';

    public function getUser()
    {
        return $this->nama;
    }
}