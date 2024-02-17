<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Путь, где будут сохраняться загруженные фотографии
  $uploadDirectory = '../img/';

  // Генерируем уникальное имя файла
  $uploadedFile = $uploadDirectory . uniqid() . '_' . basename($_FILES['photo']['name']);

  // Перемещаем файл в указанную директорию
  if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadedFile)) {
    // Подключаемся к базе данных
    $servername = "localhost";
    $username = "root";
    $password = "mysql";
    $dbname = "vinogradov";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // Получаем данные из формы
    $name = $_POST['name'];
    $room = $_POST['room'];
    $region = $_POST['region'];

    // Записываем данные в базу данных
    $sql = "INSERT INTO villa_dev (name, room, region) VALUES ('$name', $room, '$region')";
    if ($conn->query($sql) === TRUE) {
      echo "Вилла успешно добавлена в базу данных.";
    } else {
      echo "Ошибка: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  } else {
    echo "Ошибка при загрузке файла.";
  }
}
?>