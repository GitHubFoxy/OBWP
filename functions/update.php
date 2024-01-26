<?php
require_once('../utils/connection.php');
$id = $_POST['id'];
$login = $_POST['login'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$sql = "UPDATE auth SET login = '$login', password = '$password' WHERE id = $id";
try {
    $result = $conn->query($sql);
    header('Location: ../');
} catch (\Throwable $th) {
    print_r($th);
}
