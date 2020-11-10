<?php
include "../koneksi.php";
if (isset($_POST['update'])) {
    // print_r($_POST);
    $updateSql = mysqli_query($conn, "UPDATE tb_barang SET 
        nama_motor='$_POST[nama_motor]',
        jenis_motor='$_POST[jenis_motor]',
        WHERE id_barang ='$_POST[id_barang]'
    ");
    if ($updateSql) {
        echo "<script type='text/javascript'>alert('Data Berhasil Diupdate...!'); location.href=\"home.php\";</script>";
    } else {
        echo "<script type='text/javascript'>alert('Data gagal Diupdate...!'); location.href=\"home.php\";</script>";
    }
}
