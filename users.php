<?php 
//echo phpinfo();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Laba2</title>
</head>
<body class='grid place-content-center min-h-screen'>
    <?php require_once('./components/header.php'); ?>
    <main>
        <h1 class="text-center text-xl">List of users</h1>
        <a class="bg-slate-200 p-1 px-2 rounded-md" href="">add new user</a>
        <hr class="mt-3">
        <?php require_once('./utils/connection.php');
        echo '<table class="border-collapse w-[500px]">';
        echo '<tr>';
        echo '<th>ID</th>';
        echo '<th>Login</th>';    
        echo '<th>Email</th>';
        echo '<th>Created</th>';
        echo '<th></th>';
        echo '<th></th>';
        echo '</tr>';
        $sql = "SELECT * FROM auth";
        try {
            $result = $conn->query($sql);
            $rows = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($rows as $row) {
                echo "<tr>";
                echo "<td class='text-center'>" . $row['id']. "</td>";
                echo "<td class='text-center'>" . $row['login']."</td>";
                echo "<td class='text-center'>" . $row['email']."</td>"; 
                echo "<td class='text-center'>" . $row['created_at']."</td>"; 
                echo "<td class='flex gap-1'><button id='edit' class='px-2 rounded-md hover:bg-slate-300 transition-colors py-1 bg-slate-200'>Edit</button><button id='delete' class='px-2 rounded-md hover:bg-red-500 transition-colors py-1 bg-red-400'>Delete</button>";
                echo "</tr>";
            }
        } catch (\Throwable $th) {
            print_r($th);
        }    
        echo '</table>';
?>
    <hr class="mb-3 mt-2">
        <a class="bg-slate-200 p-1 px-2 rounded-md" href="">add new user</a>
    </main>
    <?php require_once('./components/footer.php'); ?>
</body>
</html>
