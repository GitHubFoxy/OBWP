<?php
require_once('../utils/connection.php');
$password = $_POST['password'];
$email = $_POST['email'];
$sql = "SELECT * FROM `auth` WHERE email = '$email'";
try {
    $result = $conn->query($sql);
    $row = $result->fetchAll(PDO::FETCH_ASSOC);

    if(password_verify($password ,$row[0]['password'])) 
        {
            echo "<script>localStorage.setItem('auth', '$email')</script>";
            header("refresh:1; url=http://localhost/obwp/pages/profile.php");
        }
    else 
        {
            echo 'Wrong login or password';
        }
    } 
 catch (\Throwable $th) {
    echo $th;
}

?>


