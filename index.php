<?php
      session_start();
      if($_SESSION['status_login'] != true){
            echo '<script>window.location="login.php"</script>';
      }
?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>UTS | Project 8</title>

      <link rel="shortcut icon" href="layouts/assets/img/pharmacy.png" type="image/x-icon">
      <link rel="stylesheet" href="layouts/assets/css/style.css">
</head>

<body>

      <aside>

            <header>
                  <img src="layouts/assets/img/pharmacy.png" class="brand">
                  <div class="user">
                        Apotek <br>Muhammad Juarsyah
                  </div>
            </header>

            <nav>
                  <ul>
                        <li>
                              <a href="index.php?=hal=main">
                                    <img class="icon" src="layouts/assets/img/dashboard.png" alt=""> Dashboard
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=jenisobat_tampil">
                                    <img class="icon" src="layouts/assets/img/book.png" alt=""> Jenis Obat
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=obat_tampil">
                                    <img class="icon" src="layouts/assets/img/medicine.png" alt=""> Data Obat
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=pelanggan_tampil">
                                    <img class="icon" src="layouts/assets/img/users.png" alt=""> Data Pelanggan
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=transaksi_tampil">
                                    <img class="icon" src="layouts/assets/img/invoice.png" alt=""> Data Transaksi
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=logout">
                                    <img class="icon" src="layouts/assets/img/shutdown.png" alt="Logout"> Logout
                              </a>
                        </li>
                  </ul>
            </nav>
      </aside>

      <main>
            <article>
                  <?php

                  require_once "vendor/autoload.php";
                  require_once "inc/Koneksi.php";

                  if (isset($_GET['hal'])) {
                        require $_GET['hal'] . ".php";
                  } else {
                        require "main.php";
                  }
                  ?>
            </article>

            <footer>
                  Copyright &copy; 2023. Muhammad Juarsyah
            </footer>
      </main>

</body>

</html>