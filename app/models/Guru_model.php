<?php
class Guru_model
{
    private $table = 'data_guru';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllGuru()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultAll();
    }
    public function getGuruById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }

    public function tambahData($data) {
        $query = " INSERT INTO data_guru VALUES 
        ('', :nama, :mata_pelajaran ) ";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('mata_pelajaran', $data['mata_pelajaran']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusData($id){
        $query = "DELETE FROM data_guru WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataGuru($data){
        $query = "UPDATE data_guru SET
        nama = :nama,
        mata_pelajaran = :mata_pelajaran
        WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('mata_pelajaran', $data['mata_pelajaran']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}