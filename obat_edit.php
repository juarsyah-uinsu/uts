<?php

require_once "app/obat.php";

$id = $_GET['id'];
$obat = new app\obat();

$row = $obat->edit($id);
?>

<h2>Edit Data</h2>

<form action="obat_proses.php" method="post">
    <input type="hidden" name="obat_id" value="<?php echo $row['obat_id']; ?>">
    <table>
        <tr>
            <td>Nama Obat</td>
            <td><input class="input-data" type="text" name="obat_nama" value="<?php echo $row['obat_nama']; ?>"></td>
        </tr>
        <tr>
            <td>Jenis Obat</td>
            <td>
            <select class="input-data" name="obat_jenisobat_id">
                        <option value="">--Silahkan Pilih--</option>
                        <?php
                        require_once "inc/koneksi.php";
                            $jenisobat = mysqli_query($conn, "SELECT * FROM tb_jenisobat ORDER BY jenisobat_id DESC");
                            while($data = mysqli_fetch_array($jenisobat)){
                        ?>
                        <option value="<?php echo $data['jenisobat_id'] ?>"><?php echo $data['jenisobat_nama']?></option>
                        <?php } ?>
            </select>        
            </td>
        </tr>
        <tr>
            <td>Harga Obat</td>
            <td><input class="input-data" type="text" name="obat_harga" value="<?php echo $row['obat_harga']; ?>"></td>
        </tr>
        <tr>
            <td>Stock Obat</td>
            <td><input class="input-data" type="text" name="obat_stock" value="<?php echo $row['obat_stock']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="btn_update" value="UPDATE">
                <input type="submit" name="btn_batal" value="BATAL">
            </td>
        </tr>
    </table>
</form>