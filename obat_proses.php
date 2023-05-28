<?php

require_once "inc/Koneksi.php";
require_once "app/obat.php";

$obat = new App\obat();

if (isset($_POST['btn_simpan'])) {
    $obat->simpan();
    echo '<script>alert("Data berhasil ditambah")</script>';
    echo '<script>window.location="index.php?hal=obat_tampil"</script>';
}

if (isset($_POST['btn_update'])) {
    $obat->update();
    echo '<script>alert("Data berhasil diubah")</script>';
    echo '<script>window.location="index.php?hal=obat_tampil"</script>';
}
if (isset($_POST['btn_batal'])) {
    $obat->tampil();

    echo '<script>window.location="index.php?hal=obat_tampil"</script>';
}