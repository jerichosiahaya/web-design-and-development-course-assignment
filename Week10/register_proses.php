<?php

$username = $_POST['uname'];
$password = password_hash($_POST['upass'], PASSWORD_BCRYPT);
$role = $_POST['role'];

$k = new PDO("mysql:host=localhost;dbname=unimedia_senin", "root", "");

$sql = "INSERT INTO users (username, password, role) VALUES (?, ?, ?)";

$result = $k->prepare($sql);
$result->execute([$username, $password, $role]);

header('Location: login.php');
