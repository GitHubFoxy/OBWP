<?php
require_once('../utils/connection.php');
$login = $_POST['login'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$sql = "INSERT INTO laba2_users (login, password, email) VALUES ('$login', '$password', '$email')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}