<?php
session_start();

if ($_SESSION['username'] != "") {
    echo "Привіт, " . $_SESSION['username'] . ", твоє ім'я я дістав з session username";
} else {
    echo "Ви не ввели ім'я користувача.";
}
?>