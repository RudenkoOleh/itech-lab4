<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['username']) && !empty($_POST['username'])) {
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
    <link rel="stylesheet" href="./style.css">
    <title>Лабораторна 4</title>
</head>
<body >
    <main>
        <h1>Форма для введення імені користувача</h1>
        <h2>Відправте ім'я користувача в форму, та переходьте за посиланнями</h2>
        <form method="post" action="index.php">
            <label for="username">Введіть ваше ім'я: </label>
            <input type="text" name="username" id="username">
            <input type="submit" value="Відправити" class="btn">
            <input type="reset" value="Reset" class="btn"></input>
        </form>

        <p><a href="sessionUsername.php">Перейти на сторінку з ім'ям, отриманим з $_SESSION</a></p>
        <p><a href="coockieUsername.php">Перейти на сторінку з ім'ям, отриманим з $_COOKIE</a></p>
        <p><a href="logout.php">Перейти на сторінку з видаленням ім'я з сесії чи кукі</a></p>
    </main>
</body>
</html>