<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    function clearSessionUsername() {
        if (isset($_SESSION['username'])) {
            unset($_SESSION['username']);
        }
    }

    function clearCookieUsername() {
        if (isset($_COOKIE['username'])) {
            setcookie('username', '', time() - 3600);
        }
    }

    if (isset($_POST['clearSession'])) {
        clearSessionUsername();
    }

    if (isset($_POST['clearCookie'])) {
        clearCookieUsername();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./style.css">
    <title>Лабораторна 4</title>
</head>
<body>
    <main>
        <h1>Видалення імені користувача</h1>

        <form method="post" action="logout.php">
            <input type="submit" name="clearSession" value="Видалити ім'я з сесії" class="btn">
            <input type="submit" name="clearCookie" value="Видалити ім'я з куків" class="btn">
        </form>

        <p><a href="index.php">Повернутися на головну сторінку</a></p>
    </main>
</body>
</html>
