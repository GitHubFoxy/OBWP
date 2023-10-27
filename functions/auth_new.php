<?php
require_once('../utils/connection.php');
$login = $_POST['login'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$sql = "INSERT INTO auth (id,login, password, email) VALUES (NULL,'$login', '$password', '$email')";
try {
    $conn->query($sql);
    header('Location: ../');
}
  catch (\Throwable $th) {
  echo "Error: " . $th . "<br>" . $conn->error;
}