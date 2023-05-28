<?php

require_once "inc/koneksi.php";
$kontak = mysqli_query($conn, "SELECT admin_name FROM tb_admin WHERE admin_id = 1");
$a = mysqli_fetch_object($kontak);

?>
<h2>Dashboard</h2>

<div class="info">
    Selamat Datang, <strong><?php echo $a->admin_name?></strong><br>
    Awali Hari-harimu Dengan Bismillah :)
</div>
