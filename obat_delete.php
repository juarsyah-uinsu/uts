<?php

require_once "app/obat.php";

$id = $_GET['id'];

$obat = new App\obat();
$rows = $obat->delete($id);

?>

<div class="info">
      echo '<script>alert("Data berhasil dihapus")</script>';
      echo '<script>window.location="index.php?hal=obat_tampil"</script>';
</div>