<?php
include("conn.php");
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama_produk = $_POST['nama_produk'];
    $model_produk = $_POST['model_produk'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];
    $stok = $_POST['stok'];
    $result = mysqli_query($conn, "UPDATE produk SET nama='$nama_produk',model='$model_produk',harga_beli='$harga_beli', harga_jual='$harga_jual', stok='$stok' WHERE id=$id");
    header("Location: index.php");
}
