<h2>Tambah Transaksi</h2>

<form action="transaksi_proses.php" method="post">
    <table>
        <tr>
            <td>Nama Pelanggan</td>
            <td>
            <select class="input-data" name="transaksi_pelanggan_id">
                        <option value="">--Silahkan Pilih--</option>
                        <?php
                        require_once "inc/koneksi.php";
                            $pelanggan = mysqli_query($conn, "SELECT * FROM tb_pelanggan ORDER BY pelanggan_id DESC");
                            while($data = mysqli_fetch_array($pelanggan)){
                        ?>
                        <option value="<?php echo $data['pelanggan_id'] ?>"><?php echo $data['pelanggan_nama']?></option>
                        <?php } ?>
            </select>        
            </td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td><input type="date" class="input-data" name="transaksi_tanggal"></td>
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