<?php
session_start();
if ($_SESSION['username'] != "adminumn") {
    header("Location: login.php");
}
include_once("conn.php");
$result = mysqli_query($conn, "SELECT * FROM produk ORDER BY id ASC");
// fungsi untuk membuat format uang
function rupiah($angka)
{
    $hasil_rupiah = number_format($angka, 0, ',', '.');
    return $hasil_rupiah;
}
?>

<!DOCTYPE html>
<html>
<!--
        Jericho Cristofel Siahaya
        00000032932
-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Produk | Week 13</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>

<body>
    <div class="container">
        <h1>Daftar Produk</h1>
        <table class="table is-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Harga Jual</th>
                    <th>Stok</th>
                    <th>Tindakan</th>
                </tr>

                <?php
                $no = 1;
                while ($product_data = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $no . "</td>";
                    echo "<td>" . $product_data['nama'] . "</td>";
                    echo "<td>" . rupiah($product_data['harga_jual']) . "</td>";
                    echo "<td>" . $product_data['stok'] . "</td>";
                    echo "<td><a href='form_edit.php?id=$product_data[id]'><button class='button is-warning' name='submit'>UPDATE</button></a> | <a href='delete.php?id=$product_data[id]'><button class='button is-danger' name='delete'>DELETE</button></a></td></tr>";
                    $no++;
                }
                ?>
        </table>
        <a href="logout.php" style="text-decoration: none; color: #2a2a2a;">LOGOUT</a>
        <a href="form_tambah.php"><button class='button is-success is-rounded' style="margin-left: 15em" name='submit'><b>Tambah Produk</b></button></a>
    </div>
</body>

</html>