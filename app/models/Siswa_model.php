<?php
class Siswa_model
{
    private $table = 'data_siswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSiswa()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultAll();
    }
    public function getSiswaById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }

    public function tambahData($data) {
        $query = " INSERT INTO data_siswa VALUES 
        ('', :nama, :jenis_kelamin, :alamat ) ";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusData($id){
        $query = "DELETE FROM data_siswa WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataSiswa($data){
        $query = "UPDATE data_siswa SET
        nama = :nama,
        jenis_kelamin = :jenis_kelamin,
        alamat = :alamat
        WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}

    // private $dbh;
    // private $stmt;
    // public function __construct()
    // {
    //     // data source name
    //     $dsn = "mysql:host=127.0.0.1;dbname=phpmvc";
    //     try {
    //         $this->dbh = new PDO($dsn, 'root', '');
    //     } catch (PDOException $e){
    //         die($e->getMessage());
    //     }
    // }
    // public function getAllBlog(){
    //     $this->stmt = $this->dbh->prepare('SELECT * FROM data_siswa');
    //     $this->stmt->execute();
    //     return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    // }

    // private $siswa = [[
    //     "penulis" => "Fachri Maylana Zamorano",
    //     "tulisan" => "Mlinjon, Suruh"
    // ],
    // [
    //     "penulis" => "Farhan Musyaffa' Habibbullah",
    //     "tulisan" => "Jambu, Tugu"
    // ],
    // [
    //     "penulis" => "Ilham Wahyu H",
    //     "tulisan" => "Rejowinangun, Trenggalek"
    // ]
    // ];
    // public function getAllSiswa()
    // {
    //     return $this->siswa;
    // }