<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "vinogradov";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    die("Не удалось установить подключение к базе данных: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Проверяем, существуют ли значения
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null;

    try {
        $stmt = $pdo->prepare("SELECT id_admin, email, password FROM admins WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $admin = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($admin && password_verify($password, $admin['password'])) {
            $_SESSION['admin_id'] = $admin['id_admin'];
            header("Location: data_sell_panel.php");
            exit;
        } else {
            $error_message = "Неверные почта или пароль.";
        }
    } catch (PDOException $e) {
        die("Ошибка: " . $e->getMessage());
    }

    $pdo = null; // Закрываем соединение с базой данных
}
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
    <link rel="stylesheet" href="../css/signin.css">
    <title>Продажа, покупка и аренда недвижимости на Пхукете</title>
</head>

<body>
    <a class="skip" aria-label="skip to main content" href="#main"></a>

    <!-- Header -->
    <?php include('header.php'); ?>

    <main id="main">
        <!-- Main sections -->
        <section id="registration">
            <div class="container-reg">
                <?php
                if (isset($error_message)) {
                    echo "<p>$error_message</p>";
                }
                ?>
                <form class="form" method="post" action="">
                    <span class="form-title">Войти в аккаунт администратора</span>
                    <div class="input-container">
                        <input name="email" placeholder="Enter email" type="email">
                        <span>
                            <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                            </svg>
                        </span>
                    </div>
                    <div class="input-container">
                        <input name="password" placeholder="Enter password" type="password">

                        <span>
                            <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                                <path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                            </svg>
                        </span>
                    </div>
                    <button class="submit" type="submit">
                        Войти
                    </button>
                </form>

            </div>
        </section>


    </main>
    <!-- Footer -->
    <?php include('footer.php'); ?>
    <script src="../js/dark.js"></script>
    <script src="../js/javaScript.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>

</html>