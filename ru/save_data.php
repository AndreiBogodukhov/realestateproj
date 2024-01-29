<?php
// Подключение к базе данных (замените данными вашей конфигурации)
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "vinogradov";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$uploadPath = "../photos/photo_apartment_owner/";
// Получение данных из формы
// (замените $_POST['...'] на фактические названия ваших полей)
$apartmentNameRu = $_POST['apartment_name_ru'];
$apartmentNameEn = $_POST['apartment_name_en'];
$bedroomNumber = $_POST['bedroom_number'];
$price = $_POST['price'];
$area = $_POST['area'];
$floor = $_POST['floor'];
$floorBuilding = $_POST['floor_building'];
$constructionDate = $_POST['construction_date'];
$saleTypeRu = $_POST['sale_type_ru'];
$saleTypeEn = $_POST['sale_type_en'];
$descriptionRu = $_POST['description_ru'];
$descriptionEn = $_POST['description_en'];
// $propertyType = $_POST['property_type'];
$districtEn = $_POST['district_en'];
$addressEn = $_POST['address_en'];
$bathroomTypeRu = $_POST['bathroom_type_ru'];
$bathroomTypeEn = $_POST['bathroom_type_en'];
$outdoorAreaRu = $_POST['outdoor_area_ru'];
$outdoorAreaEn = $_POST['outdoor_area_en'];
$propertyConditionRu = $_POST['property_condition_ru'];
$propertyConditionEn = $_POST['property_condition_en'];
$poolRu = $_POST['pool_ru'];
$poolEn = $_POST['pool_en'];
$wifiRu = $_POST['wifi_ru'];
$wifiEn = $_POST['wifi_en'];
$furnitureRu = $_POST['furniture_ru'];
$furnitureEn = $_POST['furniture_en'];
$viewRu = $_POST['view_ru'];
$viewEn = $_POST['view_en'];

// SQL-запрос для вставки данных в таблицу apartment_owner
$sqlApartmentOwner = "INSERT INTO apartment_owner (apartment_name_ru, apartment_name_en, bedroom_number, price, area, floor, floor_building, construction_date, sale_type_ru, sale_type_en, description_ru, description_en, district_en, adress_en, bathroom_type_ru, bathroom_type_en, outdoor_area_ru, outdoor_area_en, property_condition_ru, property_condition_en, pool_ru, pool_en, wifi_ru, wifi_en, furniture_ru, furniture_en, view_ru, view_en) VALUES ('$apartmentNameRu', '$apartmentNameEn', '$bedroomNumber', '$price', '$area', '$floor', '$floorBuilding', '$constructionDate', '$saleTypeRu', '$saleTypeEn', '$descriptionRu', '$descriptionEn', '$districtEn', '$addressEn', '$bathroomTypeRu', '$bathroomTypeEn', '$outdoorAreaRu', '$outdoorAreaEn', '$propertyConditionRu', '$propertyConditionEn', '$poolRu', '$poolEn', '$wifiRu', '$wifiEn', '$furnitureRu', '$furnitureEn', '$viewRu', '$viewEn')";
if ($conn->query($sqlApartmentOwner) === FALSE) {
    echo json_encode(array('success' => false, 'message' => 'Ошибка при сохранении данных в таблицу apartment_owner: ' . $conn->error));
    exit();
}

// Получение ID последней вставленной записи в таблице apartment_owner
$lastInsertId = $conn->insert_id;

// Обработка загруженных фотографий
if (isset($_FILES['fileInput'])) {
    $uploadedFiles = $_FILES['fileInput'];

    // Цикл для обработки каждого файла
    for ($i = 0; $i < count($uploadedFiles['name']); $i++) {
        $filename = $uploadedFiles['name'][$i];
        $tmpFilePath = $uploadedFiles['tmp_name'][$i];

        // Генерация уникального имени файла для избежания конфликтов
        $newFilename = $lastInsertId . '_' . uniqid() . '_' . $filename;

        // Полный путь для сохранения файла
        $newFilePath = $uploadPath . $newFilename;

        // Перемещение файла в папку назначения
        if (move_uploaded_file($tmpFilePath, $newFilePath)) {
            // SQL-запрос для вставки пути к фотографии в таблицу photo_apartment_owner
            $sqlPhoto = "INSERT INTO photo_apartment_owner (apartment_id, photo_path) VALUES ('$lastInsertId', '$newFilePath')";
            if ($conn->query($sqlPhoto) === FALSE) {
                echo json_encode(array('success' => false, 'message' => 'Ошибка при сохранении пути к фотографии в таблицу photo_apartment_owner: ' . $conn->error));
                exit();
            }
        } else {
            echo json_encode(array('success' => false, 'message' => 'Ошибка при перемещении файла: ' . $filename));
            exit();
        }
    }
} else {
    echo json_encode(array('success' => false, 'message' => 'Ошибка: файлы не были загружены.'));
    exit();
}

// Закрытие соединения с базой данных
$conn->close();

// Возвращение успешного ответа
echo json_encode(array('success' => true, 'message' => 'Данные успешно сохранены.'));
?>