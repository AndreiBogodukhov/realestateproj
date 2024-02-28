<?php
// Подключение к базе данных
include_once("settings.php");

// Проверяем, существует ли индекс 'id_employee' в массиве $_POST
if(isset($_POST['id_employee'])) {
    // Получаем ID сотрудника для удаления
    $employeeId = $_POST['id_employee'];

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

        echo json_encode(array('success' => true, 'message' => 'Сотрудник успешно удален.'));
    } catch(PDOException $e) {
        echo json_encode(array('success' => false, 'message' => 'Ошибка при удалении сотрудника: ' . $e->getMessage()));
    }
} else {
    // Если индекс 'id_employee' не существует в массиве $_POST
    echo json_encode(array('success' => false, 'message' => 'Не удалось получить ID сотрудника для удаления.'));
}
?>
