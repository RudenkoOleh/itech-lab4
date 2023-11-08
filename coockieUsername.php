<?php
session_start();

if (isset($_COOKIE['username'])) {
    echo "Привіт, " . $_COOKIE['username'] . ", твоє ім'я я дістав з coockies username";
} else {
    echo "Ви не ввели ім'я користувача.";
}
?>