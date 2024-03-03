<?php
// Подключение к базе данных
include_once("settings.php");

// Проверяем, существует ли индекс 'id_employee' в массиве $_GET
if(isset($_GET['id_employee'])) {
    // Получаем ID сотрудника для удаления
    $employeeId = $_GET['id_employee'];

    try {
        // Проверяем наличие фотографий сотрудника
        $sqlCheckPhotos = "SELECT COUNT(*) as count FROM photo_employees WHERE id_employee = :employee_id";
        $stmtCheckPhotos = $conn->prepare($sqlCheckPhotos);
        $stmtCheckPhotos->bindParam(':employee_id', $employeeId);
        $stmtCheckPhotos->execute();
        $photoCount = $stmtCheckPhotos->fetchColumn();

        // Если есть фотографии, удаляем их
        if ($photoCount > 0) {
            $sqlDeletePhotos = "DELETE FROM photo_employees WHERE id_employee = :employee_id";
            $stmtDeletePhotos = $conn->prepare($sqlDeletePhotos);
            $stmtDeletePhotos->bindParam(':employee_id', $employeeId);
            $stmtDeletePhotos->execute();
        }

        // Удаление информации о сотруднике
        $sqlDeleteEmployee = "DELETE FROM employees WHERE id_employee = :employee_id";
        $stmtDeleteEmployee = $conn->prepare($sqlDeleteEmployee);
        $stmtDeleteEmployee->bindParam(':employee_id', $employeeId);
        $stmtDeleteEmployee->execute();

        // Перенаправляем пользователя обратно на страницу со списком сотрудников
        header('Location: ../admin/data_sell_panel.php');
        exit();
    } catch(PDOException $e) {
        echo json_encode(array('success' => false, 'message' => 'Ошибка при удалении сотрудника: ' . $e->getMessage()));
    }
} else {
    // Если индекс 'id_employee' не существует в массиве $_GET
    echo json_encode(array('success' => false, 'message' => 'Не удалось получить ID сотрудника для удаления.'));
}
?>

