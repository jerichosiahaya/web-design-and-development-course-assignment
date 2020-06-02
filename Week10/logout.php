<?php
session_start();
// unset($_SESSION["username"]);
// unset($_SESSION["role"]);
// unset($_SESSION["user_id"]);
session_destroy();
header("Location:login.php");

// perbedaan session_destroy & session_unset
// session_destroy menghancurkan semua data session user
// session_unset hanya menghancurkan data session yang diminta
