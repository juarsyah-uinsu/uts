<?php

require_once "app/pelanggan.php";

$id = $_GET['id'];
$pelanggan = new app\pelanggan();

$row = $pelanggan->edit($id);
?>

<h2>Edit Data</h2>

<form action="pelanggan_proses.php" method="post">
    <input type="hidden" name="pelanggan_id" value="<?php echo $row['pelanggan_id']; ?>">
    <table>
        <tr>
            <td>Nama Obat</td>
            <td>
            <select class="input-data" name="pelanggan_obat_id">
                        <option value="">--Silahkan Pilih--</option>
                        <?php
                        require_once "inc/koneksi.php";
                            $obat = mysqli_query($conn, "SELECT * FROM tb_obat ORDER BY obat_id DESC");
                            while($data = mysqli_fetch_array($obat)){
                        ?>
                        <option value="<?php echo $data['obat_id'] ?>"><?php echo $data['obat_nama']?></option>
                        <?php } ?>
            </select>        
            </td>
        </tr>
        <tr>
            <td>Nama Pelanggan</td>
            <td><input type="text" class="input-data" name="pelanggan_nama" value="<?php echo $row['pelanggan_nama']; ?>"></td>
        </tr>
        <tr>
            <td>Nomor Hp</td>
            <td><input type="text" class="input-data" name="pelanggan_nomorhp" value="<?php echo $row['pelanggan_nomorhp']; ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" class="input-data" name="pelanggan_alamat" value="<?php echo $row['pelanggan_alamat']; ?>"></td>
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