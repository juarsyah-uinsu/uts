<?php

require_once "app/jenisobat.php";

$jenisobat = new app\jenisobat;
$rows = $jenisobat->tampil();

?>

<h2>Data Jenis Obat</h2>

<a href="index.php?hal=jenisobat_input" class="btn">Tambah Data</a>

<table>
    <tr>
        <th>NO</th>
        <th>JENIS OBAT</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['jenisobat_id']; ?></td>
        <td><?php echo $row['jenisobat_nama']; ?></td>
        <td><a href="index.php?hal=jenisobat_edit&id=<?php echo $row['jenisobat_id']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=jenisobat_delete&id=<?php echo $row['jenisobat_id']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
