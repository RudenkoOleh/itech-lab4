<?php

session_start();

if (isset($_POST['username'])) {
    $username = $_POST['username'];

    $_SESSION['username'] = $username;

    setcookie('username', $username, time() + 3600);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторна 4</title>
</head>
<body >
    <main>
        <form method="post" action="index.php">
            <label for="username">Введіть ваше ім'я: </label>
            <input type="text" name="username" id="username">
            <input type="submit" value="Відправити">
        </form>

        <p><a href="index.php">Перейти на сторінку з ім'ям, отриманим з $_SESSION</a></p>
        <p><a href="index.php">Перейти на сторінку з ім'ям, отриманим з $_COOKIE</a></p>
    </main>
</body>
</html>