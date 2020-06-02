<?php
session_start();

$_SESSION['nama'] = "John Thor";
$_SESSION['user_id'] = 5;

echo "Session 'nama' dan 'user_id' sudah diset.";
