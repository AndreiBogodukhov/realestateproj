<?php
// Подключаемся к базе данных
include_once("settings.php");

// Запрашиваем данные о сотрудниках из таблицы
$query = "SELECT * FROM employees";
$result = mysqli_query($connection, $query);

// Проверяем, были ли получены данные
if ($result) {
    $employees = array();

    // Обрабатываем каждую строку результата и добавляем ее в массив сотрудников
    while ($row = mysqli_fetch_assoc($result)) {
        $employees[] = array(
            'employee_name_ru' => $row['employee_name_ru'],
            'employee_name_en' => $row['employee_name_en'],
            'position_ru' => $row['position_ru'],
            'position_en' => $row['position_en']
        );
    }

    // Возвращаем данные о сотрудниках в формате JSON
    echo json_encode($employees);
} else {
    // Если произошла ошибка при выполнении запроса к базе данных
    echo json_encode(array('error' => 'Ошибка при получении данных о сотрудниках.'));
}

// Закрываем соединение с базой данных
mysqli_close($connection);
?>