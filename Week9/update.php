<?php
require 'config.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim=$id");
while ($user_data = mysqli_fetch_array($result)) {
    $nim = $user_data['nim'];
    $nama = $user_data['nama'];
    $alamat = $user_data['alamat'];
    $telepon = $user_data['telepon'];
}
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update | Week 9</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>

<body>
    <p class="p-mod"><a href="index.php">← Back to Home</a></p>
    <form action="update.php" method="post" name="update_user">

        <div class="field mod">
            <label class="label">NIM</label>
            <div class="control">
                <input class="input danger" name="nim" type="text" onfocus="this.blur()" readonly="readonly" placeholder="Masukkan Nama" value="<?php echo $nim; ?>">
            </div>
            <p class="help is-danger">NIM tidak bisa diubah</p>
        </div>

        <div class="field mod">
            <label class="label">Name</label>
            <div class="control">
                <input class="input" name="nama" type="text" placeholder="Masukkan Nama" value="<?php echo $nama; ?>">
            </div>
        </div>

        <?php
        include 'config.php';
        $kueri = "SELECT * FROM mahasiswa JOIN prodi WHERE mahasiswa.id_prodi=prodi.id_prodi AND mahasiswa.nim = $id";
        $hasil = mysqli_query($conn, $kueri);
        while ($data_user = mysqli_fetch_array($hasil)) {
            $id_prodi = $data_user['id_prodi'];
            $nama_prodi = $data_user['nama_prodi'];
        }
        ?>

        <div class="field mod">
            <label class="label">Prodi</label>
            <div class="select">
                <select name="prodi">
                    <?php
                    ?>
                    <option value="<?php echo $id_prodi; ?> " hidden>
                        <?php echo $nama_prodi; ?>
                    </option>
                    <option value="544">Sistem Informasi</option>
                    <option value="346">Teknik Informatika</option>
                    <option value="274">Teknik Komputer</option>
                </select>
            </div>
        </div>

        <div class="field mod">
            <label class="label">Alamat</label>
            <div class="control">
                <input class="input" name="alamat" type="text" placeholder="Masukkan Alamat" value="<?php echo $alamat; ?>">
            </div>
        </div>

        <div class="field mod">
            <label class="label">Telepon</label>
            <div class="control">
                <input class="input" name="telepon" type="telp" placeholder="Masukkan No Telp" value="<?php echo $telepon; ?>">
            </div>
        </div>
        <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
        <button class='button is-warning is-rounded mod' style="margin-top: 0.5em" name='update'>UPDATE</button>
    </form>

    <?php
    include("config.php");
    if (isset($_POST['update'])) {
        $id = $_POST['nim'];
        $prodi = $_POST['prodi'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];
        $result = mysqli_query($conn, "UPDATE mahasiswa SET nama='$nama', id_prodi='$prodi',alamat='$alamat',telepon='$telepon' WHERE nim='$id'");
        header("Location: index.php");
    }
    ?>

</body>

</html>