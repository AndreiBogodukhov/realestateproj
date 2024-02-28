<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/admin_styles.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/dark.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="src/styles/style.css">
    <link rel="stylesheet" href="src/styles/theme.css">
    <link rel="stylesheet" href="src/styles/media.css">
    <title>Панель администратора</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../vendors/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="../vendors/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../vendors/images/favicon-16x16.png" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="../vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="../src/plugins/datatables/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="../src/plugins/datatables/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="../vendors/styles/style.css" />
    <link rel="stylesheet" type="text/css" href="../src/plugins/dropzone/src/dropzone.css" />
    <style>
        .table-container {
            background-color: #ffffff;
            /* Белый фон */
            padding: 20px;
            /* Отступы для контейнера */
            overflow-x: auto;
            /* Горизонтальная прокрутка при необходимости */
        }

        .employee-table {
            border-collapse: collapse;
            /* Объединение границ ячеек */
            width: auto;
            /* Ширина таблицы автоматически подстраивается */
        }

        .employee-table th,
        .employee-table td {
            border: 1px solid #dddddd;
            /* Границы ячеек */
            padding: 8px;
            /* Отступы внутри ячеек */
            text-align: left;
            /* Выравнивание текста в ячейках */
        }

        .employee-table th {
            background-color: #f2f2f2;
            /* Фон заголовков */
        }

        .delete-button {
            background-color: #ff0000;
            /* Цвет кнопки удаления */
            color: #ffffff;
            /* Цвет текста кнопки */
            border: none;
            /* Убираем границу кнопки */
            padding: 5px 10px;
            /* Отступы внутри кнопки */
            cursor: pointer;
            /* Курсор при наведении */
        }
    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258" crossorigin="anonymous"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-GBZ3SGGX85");
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                "gtm.start": new Date().getTime(),
                event: "gtm.js"
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
    </script>
    <!-- End Google Tag Manager -->
</head>