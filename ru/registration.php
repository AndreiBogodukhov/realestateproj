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
    <link rel="stylesheet" href="../css/registration.css">
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
                <form class="form">
                    <span class="title">Регистрация</span>
                    <span class="message">Зарегистрируйся, чтобы получить доступ к панели администратора</span> 
            
                <label>
                    <input id="email" required="" placeholder="" type="email" class="input">
                    <span>Email</span>
                </label> 
        
                <label>
                    <input id="password" required=""  required minlength="8" placeholder="" type="password" class="input">
                    <span>Password</span>
                </label>
                <label>
                    <input id="confirmPassword"   required minlength="8" placeholder="" type="password" class="input">
                    <span>Confirm password</span>
                </label>
                <button onclick="validateForm()" type="button" class="submit">Зарегистрироваться</button>
                <span class="signin">Уже есть аккаунт? <a href="signin.php">Войти</a> </span>
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