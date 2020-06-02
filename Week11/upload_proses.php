<?php
require 'koneksi.php';

$judul = $_POST['judul'];
$foto = $_FILES['foto'];

$ext = explode(".", $foto['name']);
$ext = end($ext);
$ext = strtolower($ext);

$ext_boleh = ['jpg', 'png', 'jpeg'];

if (in_array($ext, $ext_boleh)) {
    $sumber = $foto['tmp_name'];
    $tujuan = 'uploads/' . $foto['name'];
    move_uploaded_file($sumber, $tujuan);
    $query = "INSERT INTO gallery (judul, foto) VALUES ('$judul', '$tujuan')";
    $result = mysqli_query($conn, $query);
} else {
    echo "file tidak valid ";
}

echo $ext;
