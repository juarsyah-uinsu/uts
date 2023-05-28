CREATE TABLE tb_jenisobat(
    jenisobat_id INT (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    jenisobat_nama TEXT
);
CREATE TABLE tb_obat(
    obat_id INT (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    jenisobat_id INT (11) NOT NULL,
    obat_nama VARCHAR (50) NOT NULL,
    obat_harga INT (11) NOT NULL,
    obat_stock VARCHAR (50) NOT NULL,
    FOREIGN KEY (jenisobat_id) REFERENCES tb_jenisobat(jenisobat_id)
);
CREATE TABLE tb_pelanggan(
    pelanggan_id INT (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    obat_id INT (11) NOT NULL,
    pelanggan_nama VARCHAR (50) NOT NULL,
    pelanggan_nomorhp VARCHAR (50) NOT NULL,
    pelanggan_alamat VARCHAR (50) NOT NULL,
    FOREIGN KEY (obat_id) REFERENCES tb_obat(obat_id)
);
CREATE TABLE tb_transaksi(
    transaksi_id INT (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    pelanggan_id INT (11) NOT NULL,
    transaksi_tanggal DATE NOT NULL,
    FOREIGN KEY (pelanggan_id) REFERENCES tb_pelanggan(pelanggan_id)
);
CREATE TABLE tb_admin (
    admin_id INT(11) NOT NULL AUTO_INCREMENT,
    admin_name VARCHAR(50),
    username VARCHAR(50),
    password VARCHAR(100),
    PRIMARY KEY (admin_id)
);