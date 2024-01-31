<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once('../utils/connection.php');
    $data = file_get_contents("php://input");
    $user = json_decode($data, true);
    $email = $user['auth'];
    try {
        $sql = "SELECT * FROM `auth` WHERE email = '$email'";
        $result = $conn->query($sql);
        $row = $result->fetch();

        if($row)    
        {
            echo "<div class='flex flex-col gap-2'>";
            echo '  <div class="flex gap-2"><label for="id">id</label><input type="text" class="bg-slate-100 rounded p-1"name="id" value="' . $row['id'].'"></div>
                    <div class="flex gap-2"><label for="login">login</label><input  type="text" class="bg-slate-100 rounded p-1"name="login" value="' . $row['login'].'"></div>
                    <div class="flex gap-2"><label for="email">email</label><input type="text" class="bg-slate-100 rounded p-1"name="email" value="' . $row['email'].'"></div>
                    <div class="flex gap-2"><label for="created_at">created_at</label><input type="text" class="bg-slate-100 rounded p-1"name="created_at" value="' . $row['created_at'].'"></div>
                    ';
            echo "</div >";

        }
        else 
        {
            echo 'No user Found';
        }
    } 
    catch (\Throwable $th) {
        echo $th;
    }
}
?>     