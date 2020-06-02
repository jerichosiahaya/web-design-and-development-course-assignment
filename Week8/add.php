<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add | Week 8</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>

<body>
    <p class="p-mod"><a href="index.php">← Back to Home</a></p>
    <form action="add.php" method="post" name="form1">
        <div class="field mod">
            <label class="label">Name</label>
            <div class="control">
                <input class="input" name="nama" type="text" placeholder="Masukkan Nama">
            </div>
        </div>

        <div class="field mod">
            <label class="label">Alamat</label>
            <div class="control">
                <input class="input" name="alamat" type="text" placeholder="Masukkan Alamat">
            </div>
        </div>

        <div class="field mod">
            <label class="label">Telepon</label>
            <div class="control">
                <input class="input" name="telepon" type="telp" placeholder="Masukkan No Telp">
            </div>
        </div>
        <button class='button is-success is-rounded mod' style="margin-top: 0.5em" name='submit'>ADD</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];
        include("config.php");
        $result = mysqli_query($conn, "INSERT INTO kampus(nama,alamat,telepon) VALUES('$nama','$alamat','$telepon')");
        header("Location: index.php");
        mysqli_close($conn);
    }
    ?>
</body>

</html>