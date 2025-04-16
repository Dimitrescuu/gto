<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}

// Получение значений из формы
$name = $_POST['name'] ?? '';
$theme_color = $_POST['theme_color'] ?? '#ffffff';

// Сохраняем в cookie на 30 дней
setcookie('name', $name, time() + 60 * 60 * 24 * 30, '/');
setcookie('theme_color', $theme_color, time() + 60 * 60 * 24 * 30, '/');

// Редирект обратно
header("Location: settings.php");
exit();
