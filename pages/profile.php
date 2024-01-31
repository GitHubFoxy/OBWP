<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>

    <title>Profile</title>
</head>
<body class="grid place-content-center min-h-screen" onload="fetchPersonalData()">
<h1 class="text-center">Your personal data</h1>
<script>
    const user = {
        "auth": localStorage.getItem('auth')
    }
    async function fetchPersonalData() {
        const response  = await fetch("http://localhost/obwp/functions/fetchpersonaldata.php", {
            method: 'POST',
            body: JSON.stringify(user)
        })
        const result = await response.text();
        document.body.innerHTML += result     
    }
</script>
</body>
</html>




