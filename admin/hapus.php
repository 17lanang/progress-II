<?php

include '../koneksi.php';

$id_barang = $_GET["id_barang"];

if (hapus($id_barang) > 0) {
    echo " 
    <script>
            alert('Data Berhasil Di Hapus !' );
            document.location.href = 'home.php';
    </script>
";
} else {
    echo " 
    <script>
            alert('Data Tidak Berhasil Di Hapus !' );
            document.location.href = 'home.php';
    </script>
";
}
