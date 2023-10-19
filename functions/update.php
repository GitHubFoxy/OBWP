<?php
require_once('../utils/connection.php');
$id = $_POST['id'];
$login = $_POST['login'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
echo $id, $login, $password;
$sql = "UPDATE laba2_users SET login = '$login', password = '$password' WHERE id = $id;";
$result = $conn->query($sql);
if ($result) {
    echo "Data changed<br/>";
} else {
    echo "smth went wrong";
}
