<ul class="cs-card-group">
    <?php
    // Подключение к базе данных
    include_once("settings.php");

    // Выполнение запроса к базе данных для получения данных о сотрудниках
    $sql = "SELECT employees.employee_name_ru, employees.position_ru, photo_employees.photo_path FROM employees INNER JOIN photo_employees ON employees.id_employee = photo_employees.id_employee";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Проверка наличия результата
    if ($stmt->rowCount() > 0) {
        // Если есть данные, выводим каждого сотрудника
        echo '<ul class="cs-card-group">';
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<li class="cs-item">';
            echo '<a href="#" class="cs-link">';
            // Добавляем атрибуты data-translation-key
            echo '<span class="cs-name translatable" data-translation-key="employee_name">' . $row['employee_name_ru'] . '</span>';
            echo '<span class="cs-details translatable" data-translation-key="position">' . $row['position_ru'] . '</span>';
            echo '</a>';
            echo '<picture class="cs-background">';
            // Изменение пути к фотографии
            $photo_path = str_replace("../", "", $row['photo_path']);
            echo '<source media="(max-width: 600px)" srcset="' . $photo_path . '">';
            echo '<source media="(min-width: 601px)" srcset="' . $photo_path . '">';
            echo '<img aria-hidden="true" loading="lazy" decoding="async" src="' . $photo_path . '" alt="person" width="412" height="462">';
            echo '</picture>';
            echo '</li>';
        }
        echo '</ul>';
    } else {
        // Если данных нет, выводим сообщение
        echo "<p>Нет данных о сотрудниках</p>";
    }
    ?>
</ul>