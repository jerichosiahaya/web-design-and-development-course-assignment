<?php
include_once("config.php");
$result = mysqli_query($conn, "SELECT * FROM prodi");
?>

<!DOCTYPE html>
<html>

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
        <h1>Simple CRUD PHP With Relational Table</h1>
        <table class="table is-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Prodi</th>
                </tr>

                <?php
                while ($user_data = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $user_data['id_prodi'] . "</td>";
                    echo "<td>" . $user_data['nama_prodi'] . "</td>";
                }
                ?>
        </table>
    </div>
</body>

</html>