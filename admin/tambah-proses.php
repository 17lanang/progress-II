<?php
include "../koneksi.php";
if (isset($_POST['tambah'])) {
    $insertSql = mysqli_query($conn, "INSERT into tb_barang (nama_motor,jenis_motor)
    values
    ('$_POST[nama_motor]','$_POST[jenis_motor]')");
    if ($insertSql) {
        echo "<script type='text/javascript'>alert('Data Berhasil Ditambah...!'); location.href=\"home.php\";</script>";
    }
}
