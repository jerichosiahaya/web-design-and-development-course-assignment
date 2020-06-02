<?php
session_start();

echo "Nama: ";
echo $_SESSION['nama'];

echo "<br />";
echo "User ID: ";
echo $_SESSION['user_id'];
