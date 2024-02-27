<?php

// Настройки для подключения к базе данных
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "vinogradov";

// Подключение к базе данных
try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Не выводим "Connected successfully" здесь, чтобы избежать вывода во всех местах подключения
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Хэшируем пароль
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    try {
        $stmt = $pdo->prepare("INSERT INTO admins (email, password) VALUES (:email, :password)");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);

        if ($stmt->execute()) {
            echo "Данные успешно добавлены в базу данных.";
            // Добавьте JavaScript для перехода на страницу signin.php
            
        } else {
            echo "Ошибка при выполнении запроса.";
        }
    } catch(PDOException $e) {
        echo "Ошибка: " . $e->getMessage();
    }
} else {
    echo "Неверный метод запроса.";
}

// Закрытие соединения
$pdo = null;
?>

