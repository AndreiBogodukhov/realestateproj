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
$propertyType = $_POST['property_type'];
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
$ownershipRu = $_POST['ownership_ru'];
$ownershipEn = $_POST['ownership_en'];
$furnitureRu = $_POST['furniture_ru'];
$furnitureEn = $_POST['furniture_en'];
$viewRu = $_POST['view_ru'];
$viewEn = $_POST['view_en'];

// Вставка данных в таблицу apartment_owner
$sql = "INSERT INTO apartment_owner (apartment_name_ru, apartment_name_en, bedroom_number, price, area, floor, floor_building, construction_date, sale_type_ru, sale_type_en, description_ru, description_en, property_type, district_en, address_en, bathroom_type_ru, bathroom_type_en, outdoor_area_ru, outdoor_area_en, property_condition_ru, property_condition_en, pool_ru, pool_en, wifi_ru, wifi_en, ownership_ru, ownership_en, furniture_ru, furniture_en, view_ru, view_en)
VALUES ('$apartmentNameRu', '$apartmentNameEn', $bedroomNumber, $price, $area, $floor, $floorBuilding, $constructionDate, '$saleTypeRu', '$saleTypeEn', '$descriptionRu', '$descriptionEn', '$propertyType', '$districtEn', '$addressEn', '$bathroomTypeRu', '$bathroomTypeEn', '$outdoorAreaRu', '$outdoorAreaEn', '$propertyConditionRu', '$propertyConditionEn', '$poolRu', '$poolEn', '$wifiRu', '$wifiEn', '$ownershipRu', '$ownershipEn', '$furnitureRu', '$furnitureEn', '$viewRu', '$viewEn')";

if ($conn->query($sql) === TRUE) {
    // Get the last inserted ID
    $lastInsertedId = $conn->insert_id;

    // Handle uploaded images
    $targetDir = "../photos/photo_apartment_owner/";

    foreach ($_FILES as $key => $file) {
        $targetFile = $targetDir . basename($file["name"]);

        // Move the uploaded file to the target directory
        if (move_uploaded_file($file["tmp_name"], $targetFile)) {
            // Insert file information into a separate table (adjust the table structure as needed)
            $imageInsertSql = "INSERT INTO image_table (apartment_id, file_path) 
                               VALUES ('$lastInsertedId', '$targetFile')";

            $conn->query($imageInsertSql);
        } else {
            // Handle file upload error
            echo "Sorry, there was an error uploading your file.";
        }
    }

    echo "Data and images successfully saved!";
} else {
    // Handle SQL error
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
