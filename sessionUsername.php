<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
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
<body>
    <main>
        <h1>Ім'я, отримане з $_SESSION</h1>
        <?php
            if (isset($_SESSION['username'])) {
                echo "Привіт, " . $_SESSION['username'] . ", твоє ім'я я дістав з session username";
            } else {
                echo "Ви не ввели ім'я користувача.";
            }
        ?>
        <p><a href="index.php">Повернутися на головну сторінку</a></p>
    </main>
</body>
</html>