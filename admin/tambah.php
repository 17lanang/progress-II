<?php

include '../koneksi.php';
if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {

        echo " 
                        <script>
                                alert('Data Berhasil Ditambahkan !' );
                                document.location.href = 'home.php';
                        </script>
                ";
    } else {
        echo " 
                <script>
                        alert('Data Gagal Ditambahkan !' );
                        document.location.href = 'home.php';
                </script>
                 ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Tambah Data BARANG</h2>
        <form action="tambah-proses.php" method="POST" class="needs-validation" novalidate>
            <div class="form-group">
                <label for="nama_motor">Nama Motor</label>
                <input type="text" class="form-control" id="nama_motor" placeholder="Masukkan Nama motor" name="nama_motor" required>
            </div>
            <div class="form-group">
                <label for="jenis_motor">Jenis Barang:</label>
                <input type="jenis_motor" class="form-control" id="jenis_motor" placeholder="masukkan jenis motor" name="jenis_motor" required>
            </div>
            <button type="submit" class="btn btn-primary" name="tambah">Simpan</button>
            <button type="button" class="btn btn-secondary" onclick="self.history.back()">Cancel</button>
        </form>
    </div>

    <script>
        (function() {
                'use strict';
                window.addEventListener('load', function() {}
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