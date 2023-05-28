<?php

namespace App;
use Inc\Koneksi as Koneksi;

class obat extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_obat";
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
        $obat_id = $_POST['obat_id'];
        $obat_nama = $_POST['obat_nama'];
        $obat_jenisobat_id = $_POST['obat_jenisobat_id'];
        $obat_harga = $_POST['obat_harga'];
        $obat_stock = $_POST['obat_stock'];


        $sql = "INSERT INTO tb_obat (obat_id, obat_nama, obat_jenisobat_id, obat_harga, obat_stock)
        VALUES (:obat_id, :obat_nama, :obat_jenisobat_id, :obat_harga, :obat_stock)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":obat_nama", $obat_nama);
        $stmt->bindParam(":obat_jenisobat_id", $obat_jenisobat_id);
        $stmt->bindParam(":obat_harga", $obat_harga);
        $stmt->bindParam(":obat_stock", $obat_stock);
        $stmt->bindParam(":obat_id", $obat_id);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_obat WHERE obat_id=:obat_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":obat_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $obat_id = $_POST['obat_id'];
        $obat_nama = $_POST['obat_nama'];
        $obat_jenisobat_id = $_POST['obat_jenisobat_id'];
        $obat_harga = $_POST['obat_harga'];
        $obat_stock = $_POST['obat_stock'];

        $sql = "UPDATE tb_obat SET obat_nama=:obat_nama, obat_jenisobat_id=:obat_jenisobat_id,
        obat_harga=:obat_harga, obat_stock=:obat_stock WHERE obat_id=:obat_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":obat_nama", $obat_nama);
        $stmt->bindParam(":obat_jenisobat_id", $obat_jenisobat_id);
        $stmt->bindParam(":obat_harga", $obat_harga);
        $stmt->bindParam(":obat_stock", $obat_stock);
        $stmt->bindParam(":obat_id", $obat_id);
        $stmt->execute();
}

    public function delete($id)
    {

        $sql = "DELETE FROM tb_obat WHERE obat_id=:obat_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":obat_id", $id);
        $stmt->execute();

    }
}