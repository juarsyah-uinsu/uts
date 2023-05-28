<?php

namespace App;
use Inc\Koneksi as Koneksi;

class jenisobat extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_jenisobat";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $jenisobat_nama = $_POST['jenisobat_nama'];
        $jenisobat_id = $_POST['jenisobat_id'];

        $sql = "INSERT INTO tb_jenisobat (jenisobat_nama, jenisobat_id) VALUES (:jenisobat_nama, :jenisobat_id)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":jenisobat_nama", $jenisobat_nama);
        $stmt->bindParam(":jenisobat_id", $jenisobat_id);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_jenisobat WHERE jenisobat_id=:jenisobat_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":jenisobat_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $jenisobat_nama = $_POST['jenisobat_nama'];
        $jenisobat_id = $_POST['jenisobat_id'];

        $sql = "UPDATE tb_jenisobat SET jenisobat_nama=:jenisobat_nama WHERE jenisobat_id=:jenisobat_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":jenisobat_nama", $jenisobat_nama);
        $stmt->bindParam(":jenisobat_id", $jenisobat_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_jenisobat WHERE jenisobat_id=:jenisobat_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":jenisobat_id", $id);
        $stmt->execute();

    }

}