<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "vinogradov";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получение данных из формы
$employeeNameRu = $_POST['employee_name_ru'];
$employeeNameEn = $_POST['employee_name_en'];
$positionRu = $_POST['position_ru'];
$positionEn = $_POST['position_en'];

// Загрузка фотографии
$uploadDirectory = "../photos/employees/";
$uploadedFile = $_FILES['fileInput'];
$filename = $uploadedFile['name'];
$destination = $uploadDirectory . $filename;

// Сохранение данных сотрудника в таблице employees
$sqlEmployee = "INSERT INTO employees (employee_name_ru, employee_name_en, position_ru, position_en) VALUES ('$employeeNameRu', '$employeeNameEn', '$positionRu', '$positionEn')";

if ($conn->query($sqlEmployee) === TRUE) {
    // Сохранение пути к фотографии в таблице photo_employees
    $lastInsertId = $conn->insert_id;
    $sqlPhoto = "INSERT INTO photo_employees (id_employee, photo_path) VALUES ('$lastInsertId', '$destination')";
    if ($conn->query($sqlPhoto) === TRUE) {
        // Перемещение загруженного файла в указанную директорию
        if (move_uploaded_file($uploadedFile['tmp_name'], $destination)) {
            echo json_encode(array('success' => true, 'message' => 'Данные успешно сохранены.'));
        } else {
            echo json_encode(array('success' => false, 'message' => 'Ошибка при перемещении файла.'));
        }
    } else {
        echo json_encode(array('success' => false, 'message' => 'Ошибка при сохранении пути к фотографии.'));
    }
} else {
    echo json_encode(array('success' => false, 'message' => 'Ошибка при сохранении данных сотрудника: ' . $conn->error));
}

$conn->close();
?>