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

            <table id="employeeTable" class="employee-table">
                <thead>
                    <tr>
                        <th>Имя RU</th>
                        <th>Удалить</th>
                        <th>Имя EN</th>
                        <th>Должность RU</th>
                        <th>Должность EN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Иванов Иван</td>
                        <td><button class="delete-button">Удалить</button></td>
                        <td>Иванов Иван</td>
                        <td>Иванов Иван</td>
                        <td>Иванов Иван</td>
                    </tr>
                </tbody>
            </table>
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