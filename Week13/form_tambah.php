<!DOCTYPE html>
<html>
<?php
session_start();
if ($_SESSION['username'] != "adminumn") {
    header("Location: login.php");
}
?>
<!--
    Jericho Cristofel Siahaya
    00000032932
    Web Design - C

    Selasa, 5 Mei 2020
    10.19
-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Produk Baru | Week 13</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>

<body>
    <p class="p-mod"><a href="index.php">← Back to Home</a></p>

    <form action="tambah_proses.php" method="post" name="tambah_produk">
        <div class="field mod">
            <label class="label">Nama</label>
            <div class="control">
                <input class="input" name="nama_produk" type="text" placeholder="Masukkan Nama Produk">
            </div>
        </div>

        <div class="field mod">
            <label class="label">Model</label>
            <div class="control">
                <input class="input" name="model_produk" type="text" placeholder="Masukkan Model Produk">
            </div>
        </div>

        <div class="field mod">
            <label class="label">Harga Beli</label>
            <div class="control">
                <input class="input" name="harga_beli" type="text" placeholder="Masukkan Harga Beli">
            </div>
        </div>

        <div class="field mod">
            <label class="label">Harga Jual</label>
            <div class="control">
                <input class="input" name="harga_jual" type="text" placeholder="Masukkan Harga Jual">
            </div>
        </div>

        <div class="field mod">
            <label class="label">Stok</label>
            <div class="control">
                <input class="input" name="stok" type="telp" placeholder="Masukkan Jumlah Stok">
            </div>
        </div>

        <button class='button is-success is-rounded mod' style="margin-top: 0.5em" name='submit'>Simpan</button>
    </form>


</body>

</html>