<?php
include "../koneksi.php";
session_start();
$tampil = mysqli_query($conn, "SELECT * FROM tb_barang")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Data Motor</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="styles.css" rel="stylesheet" />
</head>
<!-- Data Motor-->
<section class="resume-section" id="data barang">
    <div class="resume-section-content">
        <p></p>
        <h2 align="center" class="mb-5">Data Motor</h2>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
            <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        </head>

        <body>
            <div class="container">
                <p><a href="tambah.php"><button type="button" class="btn btn-primary">Tambah Data</button></p></a>
                <table class="table table-dark table-hover">

                    <head>
                        <tr>

                            <th>Nama Motor</th>
                            <th>Jenis Motor</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($r = mysqli_fetch_array($tampil)) {
                                echo "
                        <tr>
                        
                                    <td>$r[nama_motor]</td>
                                    <td>$r[jenis_motor]</td>
                                        <td>
                                            <a href ='edit.php?id_barang=$r[id_barang]'><button type='button' class='btn btn-success btn-sm'>Edit</button></a>
                                            <a href ='hapus.php?id_barang=$r[id_barang]'><button type='button' class='btn btn-warning btn-sm'>Hapus</button></a>
                                        </td>
                        </tr>";
                            }
                            ?>
                        </tbody>
                </table>
                <p><a href="../logout.php"><button type="button" class="btn btn-primary">Logout</button></p></a>
            </div>
        </body>

        </html>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        </body>

</html>