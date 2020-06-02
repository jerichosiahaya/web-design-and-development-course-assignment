<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add | Week 9</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>

<body>
    <p class="p-mod"><a href="index.php">← Back to Home</a></p>

    <form action="add.php" method="post" name="form1">
        <div class="field mod">
            <label class="label">NIM</label>
            <div class="control">
                <input class="input" name="nim" type="text" placeholder="Masukkan NIM">
            </div>
        </div>

        <div class="field mod">
            <label class="label">Nama</label>
            <div class="control">
                <input class="input" name="nama" type="text" placeholder="Masukkan Nama">
            </div>
        </div>

        <div class="field mod">
            <label class="label">Prodi</label>
            <div class="select">
                <select name="prodi">
                    <option hidden>Pilih Prodi</option>
                    <option value="544">Sistem Informasi</option>
                    <option value="346">Teknik Informatika</option>
                    <option value="274">Teknik Komputer</option>
                </select>
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
        $nim = $_POST['nim'];
        $prodi = $_POST['prodi'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];
        include("config.php");
        mysqli_query($conn, "INSERT INTO mahasiswa(nim,id_prodi,nama,alamat,telepon) VALUES('$nim','$prodi','$nama','$alamat','$telepon')");
        mysqli_close($conn);
        header("Location: index.php");
    }
    ?>
</body>

</html>