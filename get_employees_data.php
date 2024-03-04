<script>
    // Функция для получения языка страницы
    function getPageLanguage() {
    // Здесь можно реализовать логику определения языка страницы
    // Например, можно проверить локальное хранилище на наличие выбранного языка
    let preferredLanguage = localStorage.getItem('preferredLanguage');
    if (preferredLanguage) {
        return preferredLanguage; // Если язык найден в локальном хранилище, возвращаем его
    } else {
        // Иначе можно реализовать более сложную логику для определения языка, например, на основе языковых параметров URL
        // В данном примере просто возвращаем 'ru' как язык страницы по умолчанию
        return 'ru';
    }
}

    // Функция для обновления данных о сотрудниках
    function updateEmployeesData() {
        // Получаем текущий язык страницы
        var language = getPageLanguage();

        // Отправляем AJAX запрос к серверу для получения данных о сотрудниках
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "get_employees_data.php?language=" + language, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Обработка полученных данных и обновление списка сотрудников
                var employeesList = document.getElementById("employees-list");
                employeesList.innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }

    // Обновляем данные о сотрудниках каждые 10 секунд
    setInterval(updateEmployeesData, 10000);

    // Запускаем обновление данных о сотрудниках при загрузке страницы
    updateEmployeesData();
</script>