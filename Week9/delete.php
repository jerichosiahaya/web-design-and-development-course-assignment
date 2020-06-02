<?php
include("config.php");
$nim = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM mahasiswa WHERE nim=$nim");
header("Location:index.php");
