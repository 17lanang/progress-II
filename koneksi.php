<?php
$conn = mysqli_connect("localhost", "root", "", "crudnative");
/*if ($conf) {
	echo "Koneksi Sukses";
} else {
	echo "Koneksi Gagal";
}*/

function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}



function hapus($id_barang)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM tb_barang WHERE id_barang = $id_barang ");
	return mysqli_affected_rows($conn);
}

function edit($data)
{
	global $conn;
	$id_barang = $data["id_barang"];
	$nama_motor = htmlspecialchars($data["nama_motor"]);
	$jenis_motor = htmlspecialchars($data["jenis_motor"]);

	$query = "UPDATE tb_barang SET 
                nama_motor='$nama_motor', 
                jenis_motor='$jenis_motor', 
            WHERE id_barang= $id_barang ";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
