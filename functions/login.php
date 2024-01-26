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
            echo '<div class="p-4 grid gap-2  place-content-center min-h-screen"><h1 class="text-center p-2 underline underline-offset-2">Edit your data</h1>';
            echo '<script src="https://cdn.tailwindcss.com"></script>';
            echo '<form class="flex flex-col gap-4" method="POST" action="./update.php"><input class="hidden" name="id" value="'. $row[0]['id'] .'"><div class="flex gap-2 justify-between items-center"><label for="login">Login</label><input class="p-2 rounded-md bg-slate-200" type="text" name="login" placeholder="' .$row[0]['login'] . '"></div><div class="flex gap-2 justify-between items-center"><label for="password">Password</label><input name="password" class="p-2 bg-slate-200 rounded-md"type="text" placeholder="'.$password .'"></div><button class="px-4 py-2 bg-slate-300 rounded-lg transition-colors hover:bg-slate-400" type="submit">Edit</button></form>';
            echo '</div>';
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


