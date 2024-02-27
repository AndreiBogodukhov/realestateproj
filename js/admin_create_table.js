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
            <td class="table-plus">${employee.employee_name_ru}</td>
            <td>${employee.employee_name_en}</td>
            <td>${employee.position_ru}</td>
            <td>${employee.position_en}</td>
            <td>
                <div class="dropdown">
                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <i class="dw dw-more"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                        <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                        <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                        <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                    </div>
                </div>
            </td>
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