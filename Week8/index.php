<?php
include_once("config.php");
$result = mysqli_query($conn, "SELECT * FROM kampus ORDER BY id DESC");
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
    <title>Week 8</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>

<body>
    <div class="container">
        <h1>Simple CRUD PHP</h1>
        <table class="table is-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Update/Delete</th>
                </tr>

                <?php
                while ($user_data = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $user_data['nama'] . "</td>";
                    echo "<td>" . $user_data['alamat'] . "</td>";
                    echo "<td>" . $user_data['telepon'] . "</td>";
                    echo "<td><a href='update.php?id=$user_data[id]'><button class='button is-warning' name='submit'>UPDATE</button></a> | <a href='delete.php?id=$user_data[id]'><button class='button is-danger' name='delete'>DELETE</button></a></td></tr>";
                }
                ?>
        </table>
        <a href="add.php"><button class='button is-success is-rounded' style="margin-left: 32em" name='submit'><b>+</b></button></a>
    </div>
</body>

</html>