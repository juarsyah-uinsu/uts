<?php

require_once "app/jenisobat.php";

$id = $_GET['id'];

$jenisobat = new App\jenisobat();
$rows = $jenisobat->delete($id);

?>

<div class="info">
      echo '<script>alert("Data berhasil dihapus")</script>';
      echo '<script>window.location="index.php?hal=jenisobat_tampil"</script>';
</div>