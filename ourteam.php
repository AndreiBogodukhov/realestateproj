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
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/dark.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Продажа, покупка и аренда недвижимости на Пхукете</title>
</head>

<body>
    <a class="skip" aria-label="skip to main content" href="#main"></a>

    <!-- Header -->
    <?php include('header.php'); ?>
    <script src="js/translation.js"></script>

    <main id="main">
        <!-- Main sections -->
        <section id="meet-494">
            <div class="cs-container">
                <div class="cs-content">
                    <span id="our_team_empl" class="cs-topper">Сотрудники</span>
                    <h2 id="our_team_h2" class="cs-title">Наша команда профессионалов</h2>
                    <p id="our_team_text" class="cs-text">
                        Наша команда состоит из высококвалифицированных специалистов с богатым опытом в сфере недвижимости. Мы предоставляем клиентам только лучшие решения и гарантируем профессиональный подход к каждому случаю. Вместе мы работаем на достижение ваших целей в области недвижимости
                    </p>
                </div>

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
                <!-- <a href="" class="cs-button-solid"></a> -->
            </div>
        </section>






    </main>
    <!-- Footer -->
    <?php include('footer.php'); ?>
    <script src="js/dark.js"></script>
    <script src="js/javaScript.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>