<?php
session_start();

$username = $_POST['uname'];
$password = $_POST['upass'];

$k = new PDO("mysql:host=localhost;dbname=unimedia_senin", "root", "");

$sql = "SELECT * FROM users WHERE username = ?";

$result = $k->prepare($sql);
$result->execute([$username]);

if ($row = $result->fetch()) {
    if (password_verify($password, $row['password'])) {
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['role'];
        $_SESSION['user_id'] = $row['id'];
        header('Location: page_internal.php');
    } else {
        header('Location: login.php');
    }
}
