<?php
session_start();
if ($_SESSION['username'] != "adminumn") {
    header("Location: login.php");
}
include 'conn.php';
global $id;
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM produk WHERE id=$id");

while ($product_data = mysqli_fetch_array($result)) {
    $nama_produk = $product_data['nama'];
    $model_produk = $product_data['model'];
    $harga_beli = $product_data['harga_beli'];
    $harga_jual = $product_data['harga_jual'];
    $stok = $product_data['stok'];
}
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Produk | Week 13</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>

<body>
    <p class="p-mod"><a href="index.php">← Back to Home</a></p>
    <form action="edit_proses.php" method="post" name="edit">
        <div class="field mod">
            <label class="label">Name</label>
            <div class="control">
                <input class="input" name="nama_produk" type="text" placeholder="Masukkan Nama Produk" value="<?php echo $nama_produk; ?>">
            </div>
        </div>

        <div class="field mod">
            <label class="label">Model</label>
            <div class="control">
                <input class="input" name="model_produk" type="text" placeholder="Masukkan Model Produk" value="<?php echo $model_produk; ?>">
            </div>
        </div>

        <div class="field mod">
            <label class="label">Harga Beli</label>
            <div class="control">
                <input class="input" name="harga_beli" type="telp" placeholder="Masukkan Harga Beli" value="<?php echo $harga_beli; ?>">
            </div>
        </div>

        <div class="field mod">
            <label class="label">Harga Jual</label>
            <div class="control">
                <input class="input" name="harga_jual" type="telp" placeholder="Masukkan Harga Jual" value="<?php echo $harga_jual; ?>">
            </div>
        </div>

        <div class="field mod">
            <label class="label">Stok</label>
            <div class="control">
                <input class="input" name="stok" type="telp" placeholder="Masukkan Jumlah Stok" value="<?php echo $stok; ?>">
            </div>
        </div>

        <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
        <button class='button is-warning is-rounded mod' style="margin-top: 0.5em" name='edit'>Simpan</button>
    </form>
</body>

</html>