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
    <?php require_once('../components/header.php'); ?>
    <main>
        <form action="../functions/auth_new.php" method='POST' class='flex flex-col text-2xl text-center gap-5 bg-slate-700 p-5 rounded-xl'>
            <label for="" class='text-white'>Register</label>
            <input type="text" class='p-2 rounded-md' placeholder='Enter login' name="login" id="">
            <input type="text" class='p-2 rounded-md' placeholder="Enter email" name="email" id="">
            <input type="text" class='p-2 rounded-md' placeholder="Enter password" name="password" id="">
            <button type="submit" class='p-2 bg-slate-500 rounded-xl transition-colors hover:bg-slate-300'>Sign in</button>
        </form>
    </main>
    <?php require_once('../components/footer.php'); ?>
</body>
</html>
