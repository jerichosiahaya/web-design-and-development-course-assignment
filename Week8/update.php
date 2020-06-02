<?php
include("config.php");
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $result = mysqli_query($conn, "UPDATE kampus SET nama='$nama',alamat='$alamat',telepon='$telepon' WHERE id=$id");
    header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM kampus WHERE id=$id");

while ($user_data = mysqli_fetch_array($result)) {
    $nama = $user_data['nama'];
    $alamat = $user_data['alamat'];
    $telepon = $user_data['telepon'];
}
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update | Week 8</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>

<body>
    <p class="p-mod"><a href="index.php">← Back to Home</a></p>
    <form action="update.php" method="post" name="update_user">
        <div class="field mod">
            <label class="label">Name</label>
            <div class="control">
                <input class="input" name="nama" type="text" placeholder="Masukkan Nama" value="<?php echo $nama; ?>">
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
</body>

</html>