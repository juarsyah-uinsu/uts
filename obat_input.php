<h2>Tambah Obat</h2>

<form action="obat_proses.php" method="post">
    <table>
        <tr>
            <td>Nama Obat</td>
            <td><input type="text" name="obat_nama" class="input-data"></td>
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
            <td><input type="text" name="obat_harga" class="input-data"></td>
        </tr>
        <tr>
            <td>Stock Obat</td>
            <td><input type="text" name="obat_stock" class="input-data"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="btn_simpan" value="SIMPAN">
                <input type="submit" name="btn_batal" value="BATAL">
            </td>
        </tr>
    </table>
</form>