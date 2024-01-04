<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_perpustakaan");

$search = mysqli_real_escape_string($koneksi, $_POST['nama']);

$query = "SELECT * FROM buku WHERE judul_buku like '%" . $search . "%'";
$result = mysqli_query($koneksi, $query);

$response = array();
while ($row = mysqli_fetch_array($result)) {
    $response[] = array("value" => $row['judul_buku'], "label" => $row['judul_buku']);
}

echo json_encode($response);


?>