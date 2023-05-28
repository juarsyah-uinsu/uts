<?php

require_once "app/jenisobat.php";

$id = $_GET['id'];
$jenisobat = new app\jenisobat();

$row = $jenisobat->edit($id);
?>

<h2>Edit Data</h2>

<form action="jenisobat_proses.php" method="post">
    <input type="hidden" name="jenisobat_id" value="<?php echo $row['jenisobat_id']; ?>">
    <table>
        <tr>
            <td>Jenis Obat</td>
            <td><input class="input-data" type="text" name="jenisobat_nama" value="<?php echo $row['jenisobat_nama']; ?>"></td>
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