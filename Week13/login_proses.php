<?php
session_start();
// inputan
$uname = $_POST['uname'];
$upass = $_POST['upass'];
// hardcode
$username = "adminumn";
$password = "1234";
// $k = new PDO("mysql:host=localhost;dbname=unimedia_senin", "root", "");
// $sql = "SELECT * FROM users WHERE username = ?";
// $result = $k->prepare($sql);
//$result->execute([$username]);
if ($uname == $username && $upass == $password) {
    $_SESSION['username'] = $uname;
    //$_SESSION['pass'] = $row['role'];
    //$_SESSION['user_id'] = $row['id'];
    header('Location: produk_list.php');
} else {
    header('Location: login.php');
}
