<?php
// saya tambahkan koneksi php ke database dan ambil salah satu data dengan format date
include 'koneksi.php';

$query = "SELECT tgl_lahir FROM dosen WHERE dosen.nama_dosen = 'Dicky Sanjaya'";
$result = mysqli_query($conn, $query);
while ($user_data = mysqli_fetch_array($result)) {
    $tgl_lahir = $user_data['tgl_lahir'];
}


$tgl = "2019-04-29";

echo "Data tanggal dari database: ";
echo $tgl_lahir;
echo "<br />";

$tgl_new = new DateTime($tgl_lahir);

echo "Data tanggal dalam format DD/MM/YYYY: ";
echo $tgl_new->format('d/m/Y');
