<?php

require_once "app/obat.php";

$obat = new app\obat;
$rows = $obat->tampil();

?>

<h2>Data Obat</h2>

<a href="index.php?hal=obat_input" class="btn">Tambah Obat</a>

<table>
    <tr>
        <th>NO</th>
        <th>NAMA OBAT</th>
        <th>JENIS OBAT</th>
        <th>HARGA OBAT</th>
        <th>STOCK OBAT</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php    
        require_once "inc/Koneksi.php";
        $obat = mysqli_query($conn, "SELECT * FROM tb_obat
        INNER JOIN tb_jenisobat ON tb_jenisobat.jenisobat_id=tb_obat.obat_jenisobat_id");
        while($row = mysqli_fetch_array($obat)){
    ?>
    <tr>
        <td><?php echo $row['obat_id']; ?></td>
        <td><?php echo $row['obat_nama']; ?></td>
        <td><?php echo $row['jenisobat_nama']; ?></td>
        <td><?php echo $row['obat_harga']; ?></td>
        <td><?php echo $row['obat_stock']; ?></td>
        <td><a href="index.php?hal=obat_edit&id=<?php echo $row['obat_id']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=obat_delete&id=<?php echo $row['obat_id']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
