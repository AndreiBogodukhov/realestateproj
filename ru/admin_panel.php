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
<!DOCTYPE html>
<html lang="ru">

<!-- head of the site -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Swap our for actual link-->
    <link rel="canonical" href="">
    <meta name="description" content="Агенство недвижимости, Пхукет, Таиланд">
    <meta name="keywords" content="Продажа, аренда, покупка недвижимости в Таиланде, недвижимость на Пхукете, недвижимость по 7% годовых">
    <!--Social Media Display-->
    <meta property="og:title" content="Агенство недвижимости &amp; Покупка и аренда недвижимости на Пхукете &amp; Агенство | Пхукет, Таиланд">
    <meta property="og:description" content="Продажа, аренда, покупка недвижимости в Таиланде, недвижимость на Пхукете, недвижимость по 7% годовых">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://striveptwellness.com/">
    <meta property="og:image" content="assets/images/service2.jpg">
    <meta property="og:image:secure_url" content="assets/images/service2.jpg">
    <!--Favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon-32x32.png?v1">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons/favicon-16x16.png">
    <link rel="manifest" href="/assets/favicons/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Preload -->
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/dark.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Продажа, покупка и аренда недвижимости на Пхукете</title>
</head>

<body>
    <a class="skip" aria-label="skip to main content" href="#main"></a>

    <!-- Header -->
    <?php include('header.php'); ?>

    <main id="main">
        <!-- Main sections -->
        <div class="admin-panel">
            <button class="admin-button">Добавить застройщика вилл</button><br>
            <button class="admin-button">Добавить застройщика квартир</button><br>
            <button class="admin-button">Добавить виллу к застройщику</button><br>
            <button class="admin-button">Добавить квартиру к застройщику</button><br>
            <button class="admin-button">Добавить виллу собственника</button><br>
            <button class="admin-button">Добавить квартиру собственника</button><br>
            <button class="admin-button">Добавить аренду квартиры</button><br>
            <button class="admin-button"><a href= "data_panel.php">Добавить аренду виллы</a></button><br>
            <button class="admin-button">Выйти</button>
        </div>






    </main>
    <!-- Footer -->
    <?php include('footer.php'); ?>
    <script src="../js/dark.js"></script>
    <script src="../js/javaScript.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>

</html>