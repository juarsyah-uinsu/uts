<?php

require_once "inc/Koneksi.php";
require_once "app/jenisobat.php";

$jenisobat = new App\jenisobat();

if (isset($_POST['btn_simpan'])) {
    $jenisobat->simpan();
    echo '<script>alert("Data berhasil ditambah")</script>';
    echo '<script>window.location="index.php?hal=jenisobat_tampil"</script>';
}

if (isset($_POST['btn_update'])) {
    $jenisobat->update();
    echo '<script>alert("Data berhasil diubah")</script>';
    echo '<script>window.location="index.php?hal=jenisobat_tampil"</script>';
}
if (isset($_POST['btn_batal'])) {
    $jenisobat->tampil();

    echo '<script>window.location="index.php?hal=jenisobat_tampil"</script>';
}