<?php

include '../koneksi.php';
$id_barang = $_GET["id_barang"];
$barang = query("SELECT * FROM tb_barang WHERE id_barang = $id_barang ")[0];
if (isset($_POST["submit"])) {
    if (edit($_GET) > 0) {

        echo " 
                        <script>
                                alert('Data Berhasil Di Edit !' );
                                document.location.href = 'home.php';
                        </script>
                ";
    } else {
        echo " 
                <script>
                        alert('Data Gagal Di Edit !' );
                        document.location.href = 'home.php';
                </script>
                ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Edit Data Motor</h2>
        <form action="edit-proses.php" method="POST" class="needs-validation" novalidate>
            <input type="hidden" name="id_barang" value="<?= $barang["id_barang"]; ?> ">
            <div class="form-group">
                <label for="nama_motor">nama motor </label>
                <input type="text" class="form-control" id="nama_motor" placeholder="Masukkan nama_motor Lengkap Anda" name="nama_motor" required value="<?= $barang["nama_motor"]; ?>">
            </div>
            <div class="form-group">
                <label for="jenis_motor">Jenis Motor </label>
                <input type="jenis_motor" class="form-control" id="jenis_motor" placeholder="masukkan jenis motor" name="jenis_motor" required value="<?= $barang["jenis_motor"]; ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="update">Simpan</button>
            <button type="button" class="btn btn-secondary" onclick="self.history.back()">Cancel</button>
        </form>
    </div>

    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

</body>

</html>