<?php
$servername = "localhost"; // Имя сервера базы данных (обычно localhost для локальной установки)
$username = "root"; // Имя пользователя базы данных
$password = "mysql"; // Пароль пользователя базы данных
$dbname = "vinogradov"; // Имя базы данных

// Создаем подключение
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Устанавливаем режим обработки ошибок
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; // Это можно убрать, это просто для проверки успешного подключения
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>