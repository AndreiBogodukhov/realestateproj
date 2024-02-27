<?php
// Подключение к базе данных
include_once("settings.php");

try {
    // Запрос к базе данных для получения данных о сотрудниках
    $query = "SELECT * FROM employees";
    $stmt = $conn->query($query);
    
    // Проверка, были ли получены данные
    if ($stmt) {
        $employees = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        // Возвращаем данные о сотрудниках в формате JSON
        echo json_encode($employees);
    } else {
        // Если произошла ошибка при выполнении запроса к базе данных
        echo json_encode(array('error' => 'Ошибка при получении данных о сотрудниках.'));
    }
} catch(PDOException $e) {
    // Если произошла ошибка при подключении к базе данных
    echo json_encode(array('error' => 'Ошибка при подключении к базе данных: ' . $e->getMessage()));
}
?>