<?php
include "koneksi.php"; 
 session_start();
 ?>
 Selamat datang <b><?php.echo $_SESSION['nama']; ?></b><br />
<a href="logout.php">Logout</a>