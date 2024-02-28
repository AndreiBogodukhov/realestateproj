document.addEventListener("DOMContentLoaded", function() {
    // Функция для обновления таблицы сотрудников
    function updateTable() {
        // Отправляем AJAX-запрос на сервер для получения данных о сотрудниках
        fetch('../admin/get_employees.php')
        .then(response => response.json())
        .then(data => {
            // Очищаем текущее содержимое таблицы
            const tbody = document.querySelector("#employeeTable tbody");
            tbody.innerHTML = "";

            // Перебираем полученные данные и создаем новые строки таблицы
            data.forEach(employee => {
                const newRow = createTableRow(employee);
                appendTableRow(newRow);
            });
        })
        .catch(error => {
            console.error('Ошибка при получении данных:', error);
        });
    }

    // Вызываем функцию обновления таблицы при загрузке страницы
    updateTable();

    // Функция для создания новой строки таблицы на основе данных о сотруднике
    function createTableRow(employee) {
        const newRow = document.createElement("tr");
        newRow.innerHTML = `
            <td>${employee.employee_name_ru}</td>
            <td><button class="delete-button">Удалить</button></td>
            <td>${employee.employee_name_en}</td>
            <td>${employee.position_ru}</td>
            <td>${employee.position_en}</td>
        `;
        return newRow;
    }

    // Функция для добавления новой строки в таблицу
    function appendTableRow(newRow) {
        const tbody = document.querySelector("#employeeTable tbody");
        tbody.appendChild(newRow);
    }

    // Установим интервал для периодического обновления таблицы
    setInterval(updateTable, 5000); // Обновляем каждые 5 секунд (вы можете изменить интервал на свой вкус)
});