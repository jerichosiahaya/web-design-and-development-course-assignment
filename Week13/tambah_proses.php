<?php
if (isset($_POST['submit'])) {
    $nama_produk = $_POST['nama_produk'];
    $model_produk = $_POST['model_produk'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];
    $stok = $_POST['stok'];
    include("conn.php");
    mysqli_query($conn, "INSERT INTO produk (nama,model,harga_beli,harga_jual,stok) VALUES('$nama_produk','$model_produk','$harga_beli','$harga_jual','$stok')");
    mysqli_close($conn);
    header("Location: index.php");
}
// INSERT INTO produk(namaNIM,modelNIM,harga_beliNIM,harga_jualNIM,stokNIM) VALUES('Mouse','Logitech',30.000,50.000,5)
