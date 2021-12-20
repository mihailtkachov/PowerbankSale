<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authorize</title>
</head>
<body>
    <form action="/authorize.php">
    <H1>Login:</H1>
    <input type="text" name="login">

    <button>Login</button>
    </form>
</body>
</html>