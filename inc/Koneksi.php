<?php

namespace Inc;

class Koneksi {

    public object $db;

    public function __construct() {
        $this->db = new \PDO("mysql:host=localhost;dbname=db_apotek", "root", "");
    }
}

$conn = mysqli_connect("localhost","root","","db_apotek") or die(mysqli_connect_error());

?>