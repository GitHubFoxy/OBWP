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
<body onload='captcha()'class='grid place-content-center min-h-screen'>
    <?php require_once('../components/header.php'); ?>
    <main>
        <form action="../functions/auth_new.php" method='POST' class='flex flex-col text-lg text-center gap-5 bg-slate-700 p-4 rounded-xl'>
            <label for="" class='text-white'>Register</label>
            <input required type="text" class='p-2 text-base rounded-md' placeholder='Enter login' name="login" id="">
            <input required type="text" class='p-2 text-base rounded-md' placeholder="Enter email" name="email" id="">
            <input required type="text" class='p-2 text-base rounded-md' placeholder="Enter password" name="password" id="">
            <div class="flex gap-1"><label id="update" for="" class="text-white cursor-pointer underline underline-offset-2">Решите капчу</label><input id="captchaInput" required class="rounded" type="text"></div>

            <canvas width="200" height="200"></canvas>
            <button type="button" onclick='checkCaptha()' class='p-1 bg-slate-500 rounded-xl transition-colors hover:bg-slate-300'>Sign in</button>
        </form>
    </main>
    <script>

    const update = document.querySelector("#update");
const canvas = document.querySelector("canvas");
var ctx = canvas.getContext("2d");
function random(n) {
  return Math.floor(Math.random() * n + 1);
}
let randCircles = 0
function captcha() {
    randCircles = random(8);
  ctx.clearRect(0, 0, 200, 200);
  for (let i = 0; i < randCircles; i++) {
    ctx.beginPath();
    ctx.fillStyle =
      "rgb(" +
      Math.floor(Math.random() * 255) +
      "," +
      Math.floor(Math.random() * 255) +
      "," +
      Math.floor(Math.random() * 255) +
      ",0.5)";
    ctx.arc(random(200), random(200), random(50), 0, 2 * Math.PI);
    ctx.fill();
  }
}
function checkCaptha() {
    
    if (document.querySelector("#captchaInput").value == randCircles) {
        document.querySelector('form').submit()
    }
    alert("Неверно решена капча")
}


    </script>
    <?php require_once('../components/footer.php'); ?>
</body>
</html>
