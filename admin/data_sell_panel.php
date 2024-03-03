<?php
session_start();

// Проверяем, авторизован ли администратор
if (!isset($_SESSION['admin_id'])) {
    // Если не авторизован, перенаправляем на страницу входа
    header("Location: signin.php");
    exit;
}

// Дальнейший код страницы админ-панели
?>

<!DOCTYPE html="ru">
<html>

<?php include("head_admin.php"); ?>

<body>
    <?php include("panels.php"); ?>

    <div class="main-container">


        <div class="table-container">
            <span style="color: blue; font-weight: bold; ">Сотрудники</span>

            <div class="scrollable-table-container">
                <table class="scrollable-table" id="employeeTable">
                    <thead>
                        <tr>
                            <th>Имя (RU)</th>
                            <th>Имя (EN)</th>
                            <th>Должность (RU)</th>
                            <th>Должность (EN)</th>
                            <th class="delete-button-cell">Удалить</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once("settings.php");

                        // Выполнение запроса к базе данных для получения данных о сотрудниках
                        $sql = "SELECT * FROM employees";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();

                        // Проверка наличия результата
                        if ($stmt->rowCount() > 0) {
                            // Если есть данные, выводим их в таблицу
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                // ваш код для вывода данных
                                echo "<tr>";
                                echo "<td title='" . htmlspecialchars($row['employee_name_ru']) . "'>" . mb_strimwidth($row['employee_name_ru'], 0, 30, '...') . "</td>";
                                echo "<td class='delete-button-cell'><button class='delete-button' data-employee-id='" . $row['id_employee'] . "'>Удалить</button></td>";
                                echo "<td title='" . htmlspecialchars($row['employee_name_en']) . "'>" . mb_strimwidth($row['employee_name_en'], 0, 30, '...') . "</td>";
                                echo "<td title='" . htmlspecialchars($row['position_ru']) . "'>" . mb_strimwidth($row['position_ru'], 0, 30, '...') . "</td>";
                                echo "<td title='" . htmlspecialchars($row['position_en']) . "'>" . mb_strimwidth($row['position_en'], 0, 30, '...') . "</td>";
                                // Добавьте здесь остальные столбцы данных
                                echo "</tr>";
                            }
                        } else {
                            // Если данных нет, выводим сообщение
                            echo "<tr><td colspan='5'>Нет данных</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>



    <!-- <button class="welcome-modal-btn">
        <i class="fa fa-download"></i> Заргузить
    </button> -->
    <!-- welcome modal end -->
    <!-- js -->
    <!-- End Google Tag Manager (noscript) -->
    <script src="../js/admin_create_table.js"></script>
    <?php include('footer_admin.php'); ?>
</body>

</html>