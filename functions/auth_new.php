<?php
require_once('../utils/connection.php');
$login = $_POST['login'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$today = date('d.m.Y');
$sql = "INSERT INTO auth (id,login, password, email,created_at) VALUES (NULL,'$login', '$password', '$email','$today')";
try {
    $conn->query($sql);
    header('Location: ../');
}
  catch (\Throwable $th) {
  echo "Error: " . $th . "<br>" . $conn->error;
}