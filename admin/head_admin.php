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
        /* Стили для таблицы */
        .scrollable-table-container {
            overflow-x: auto;
        }

        .scrollable-table {
            width: 100%;
            border-collapse: collapse;
            white-space: nowrap;
            /* Предотвращаем перенос текста в ячейках */
        }

        .scrollable-table th,
        .scrollable-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            min-width: 150px;
            /* Минимальная ширина столбца */
            max-width: 200px;
            /* Максимальная ширина столбца */
            overflow: hidden;
            text-overflow: ellipsis;
            /* Добавляем троеточие для длинных строк */
        }

        .scrollable-table th {
            background-color: #f2f2f2;
        }

        .scrollable-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .scrollable-table tr:hover {
            background-color: #ddd;
        }

        /* Стили для кнопки "Удалить" */
        .delete-button {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 8px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            cursor: pointer;
            border-radius: 4px;
        }

        .delete-button-cell {
            width: 1%;
            white-space: nowrap;
        }

        .delete-button:hover {
            background-color: #d32f2f;
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