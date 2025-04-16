<?php
session_start();

// Проверка авторизации
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}

// Получение сохраненных значений из cookie
$name = $_COOKIE['name'] ?? '';
$theme_color = $_COOKIE['theme_color'] ?? '#ffffff';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Настройки</title>
</head>
<body style="background-color: <?= htmlspecialchars($theme_color) ?>;">
<h2>Настройки пользователя</h2>

<form action="save_settings.php" method="post">
    <label for="name">Имя:</label>
    <input type="text" name="name" id="name" value="<?= htmlspecialchars($name) ?>"><br><br>

    <label for="theme_color">Цвет фона:</label>
    <input type="color" name="theme_color" id="theme_color" value="<?= htmlspecialchars($theme_color) ?>"><br><br>

    <button type="submit">Сохранить</button>
</form>

<p><a href="profile.php">Назад в профиль</a></p>
</body>
</html>
