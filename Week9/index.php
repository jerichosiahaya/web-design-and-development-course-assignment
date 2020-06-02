<?php
include_once("config.php");
$result = mysqli_query($conn, "SELECT * FROM mahasiswa JOIN prodi WHERE mahasiswa.id_prodi=prodi.id_prodi");
?>

<!DOCTYPE html>
<html>
<!--
        * Jericho Cristofel Siahaya
        * 00000032932
-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Week 9</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>

<body>
    <div class="container-mod">
        <div class="tb mod-tb">
            <h1>Tabel Mahasiswa</h1>
            <table class="table is-bordered">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Prodi</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Update/Delete</th>
                    </tr>

                    <?php
                    while ($user_data = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $user_data['nim'] . "</td>";
                        echo "<td>" . $user_data['nama'] . "</td>";
                        echo "<td>" . $user_data['nama_prodi'] . "</td>";
                        echo "<td>" . $user_data['alamat'] . "</td>";
                        echo "<td>" . $user_data['telepon'] . "</td>";
                        echo "<td><a href='update.php?id=$user_data[nim]'><button class='button is-warning' name='submit'>UPDATE</button></a> | <a href='delete.php?id=$user_data[nim]'><button class='button is-danger' name='delete'>DELETE</button></a></td></tr>";
                    }
                    ?>
            </table>
            <a href="add.php"><button class='button is-success is-rounded' style="margin-left: 48em" name='submit'><b>+</b></button></a>
        </div>
        <div class="tb mod-tb">
            <?php
            include_once("config.php");
            $result2 = mysqli_query($conn, "SELECT * FROM prodi");
            ?>
            <h1>Tabel Prodi</h1>
            <table class="table is-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Prodi</th>
                    </tr>

                    <?php
                    while ($user_data = mysqli_fetch_array($result2)) {
                        echo "<tr>";
                        echo "<td>" . $user_data['id_prodi'] . "</td>";
                        echo "<td>" . $user_data['nama_prodi'] . "</td>";
                    }
                    ?>
            </table>
            <div class="info">
                <h2>Nama: <b>Jericho Cristofel Siahaya</b></h2>
                <h2>NIM: <b>00000032932</b></h2>
                <h2>Kelas: <b>(IS556-CL)Web Design and Development</b></h2>
            </div>
        </div>
    </div>
</body>

</html>