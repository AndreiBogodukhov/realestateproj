document.addEventListener("DOMContentLoaded", function () {
    const deleteButtons = document.querySelectorAll('.delete-button');

    deleteButtons.forEach(button => {
        button.addEventListener('click', () => {
            const employeeId = button.dataset.employeeId;
            if (confirm('Вы уверены, что хотите удалить этого сотрудника?')) {
                window.location.href = `../admin/delete_employee.php?id_employee=${employeeId}`;
            }
        });
    });

    // Выполняем AJAX-запрос для удаления сотрудника
    fetch('../admin/delete_employee.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ employee_id: employeeId })
    })
        .then(response => {
            // Проверяем, если Content-Type не application/json, тогда возвращаем текст
            const contentType = response.headers.get('content-type');
            if (!contentType || !contentType.includes('application/json')) {
                return response.text().then(text => {
                    throw new Error(text);
                });
            } else {
                return response.json();
            }
        })
        .then(data => {
            console.log('Data from server:', data);
            // Перезагружаем страницу после успешного удаления сотрудника
            if (data.success) {
                window.location.reload();
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Ошибка при выполнении запроса. Проверьте консоль для получения дополнительной информации.');
        });
});


// document.addEventListener("DOMContentLoaded", function() {
//     // Функция для обновления таблицы сотрудников
//     function updateTable() {
//         // Отправляем AJAX-запрос на сервер для получения данных о сотрудниках
//         fetch('../admin/get_employees.php')
//         .then(response => response.json())
//         .then(data => {
//             // Очищаем текущее содержимое таблицы
//             const tbody = document.querySelector("#employeeTable tbody");
//             tbody.innerHTML = "";

//             // Перебираем полученные данные и создаем новые строки таблицы
//             data.forEach(employee => {
//                 const newRow = createTableRow(employee);
//                 appendTableRow(newRow);
//             });
//         })
//         .catch(error => {
//             console.error('Ошибка при получении данных:', error);
//         });
//     }

//     // Вызываем функцию обновления таблицы при загрузке страницы
//     updateTable();

//     // Функция для создания новой строки таблицы на основе данных о сотруднике
//     function createTableRow(employee) {
//         const newRow = document.createElement("tr");
//         newRow.innerHTML = `
//             <td>${employee.employee_name_ru}</td>
//             <td><button class="delete-button" data-employee-id="${employee.id_employee}">Удалить</button></td>
//             <td>${employee.employee_name_en}</td>
//             <td>${employee.position_ru}</td>
//             <td>${employee.position_en}</td>
//         `;
//         return newRow;
//     }

//     // Функция для добавления новой строки в таблицу
//     function appendTableRow(newRow) {
//         const tbody = document.querySelector("#employeeTable tbody");
//         tbody.appendChild(newRow);
//     }

//     // Обработчик события клика на таблице
//     const employeeTable = document.getElementById('employeeTable');
//     employeeTable.addEventListener('click', function(event) {
//         // Проверяем, является ли целевой элемент кнопкой удаления
//         if (event.target.classList.contains('delete-button')) {
//             // Получаем ID сотрудника из атрибута data-employee-id кнопки
//             const employeeId = event.target.dataset.employeeId;

//             // Выводим значение employeeId в консоль для проверки
//             console.log('Employee ID:', employeeId);

//             // Всплывающее окно для подтверждения удаления
//             const confirmDelete = confirm('Вы уверены, что хотите удалить этого сотрудника?');

//             if (confirmDelete) {
//                 // Выполняем AJAX-запрос для удаления сотрудника
//                 fetch('../admin/delete_employee.php', {
//                     method: 'POST',
//                     headers: {
//                         'Content-Type': 'application/json'
//                     },
//                     body: JSON.stringify({ employee_id: employeeId })
//                 })
//                 .then(response => {
//                     // Проверяем, если Content-Type не application/json, тогда возвращаем текст
//                     const contentType = response.headers.get('content-type');
//                     if (!contentType || !contentType.includes('application/json')) {
//                         return response.text().then(text => {
//                             throw new Error(text);
//                         });
//                     } else {
//                         return response.json();
//                     }
//                 })
//                 .then(data => {
//                     console.log('Data from server:', data);
//                 })
//                 .catch(error => {
//                     console.error('Error:', error);
//                     alert('Ошибка при выполнении запроса. Проверьте консоль для получения дополнительной информации.');
//                 });
//             }
//         }
//     });

//     // Установим интервал для периодического обновления таблицы
//     setInterval(updateTable, 500000); // Обновляем каждые 5 секунд (вы можете изменить интервал на свой вкус)
// });


// document.addEventListener("DOMContentLoaded", function() {
//     // Функция для обновления таблицы сотрудников
//     function updateTable() {
//         // Отправляем AJAX-запрос на сервер для получения данных о сотрудниках
//         fetch('../admin/get_employees.php')
//         .then(response => response.json())
//         .then(data => {
//             // Очищаем текущее содержимое таблицы
//             const tbody = document.querySelector("#employeeTable tbody");
//             tbody.innerHTML = "";

//             // Перебираем полученные данные и создаем новые строки таблицы
//             data.forEach(employee => {
//                 const newRow = createTableRow(employee);
//                 appendTableRow(newRow);
//             });
//         })
//         .catch(error => {
//             console.error('Ошибка при получении данных:', error);
//         });
//     }

//     // Вызываем функцию обновления таблицы при загрузке страницы
//     updateTable();

//     // Функция для создания новой строки таблицы на основе данных о сотруднике
//     function createTableRow(employee) {
//         const newRow = document.createElement("tr");
//         newRow.innerHTML = `
//             <td>${employee.employee_name_ru}</td>
//             <td><button class="delete-button" data-employee-id="${employee.id_employee}">Удалить</button></td>
//             <td>${employee.employee_name_en}</td>
//             <td>${employee.position_ru}</td>
//             <td>${employee.position_en}</td>
//         `;
//         return newRow;
//     }

//     // Функция для добавления новой строки в таблицу
//     function appendTableRow(newRow) {
//         const tbody = document.querySelector("#employeeTable tbody");
//         tbody.appendChild(newRow);
//     }

//     // Установим интервал для периодического обновления таблицы
//     setInterval(updateTable, 500000); // Обновляем каждые 5 секунд (вы можете изменить интервал на свой вкус)
// });

// document.addEventListener("DOMContentLoaded", function() {
//     const employeeTable = document.getElementById('employeeTable');

//     // Обработчик события клика на таблице
//     employeeTable.addEventListener('click', function(event) {
//         // Проверяем, является ли целевой элемент кнопкой удаления
//         if (event.target.classList.contains('delete-button')) {
//             // Получаем ID сотрудника из атрибута data-employee-id кнопки
//             const employeeId = event.target.dataset.employeeId;

//             // Выводим значение employeeId в консоль для проверки
//             console.log('Employee ID:', employeeId);

//             // Всплывающее окно для подтверждения удаления
//             const confirmDelete = confirm('Вы уверены, что хотите удалить этого сотрудника?');

//             if (confirmDelete) {
//                 // Выполняем AJAX-запрос для удаления сотрудника
//                 fetch('../admin/delete_employee.php', {
//                     method: 'POST',
//                     headers: {
//                         'Content-Type': 'application/json'
//                     },
//                     body: JSON.stringify({ employee_id: employeeId })
//                 })
//                 .then(response => {
//                     // Проверяем, если Content-Type не application/json, тогда возвращаем текст
//                     const contentType = response.headers.get('content-type');
//                     if (!contentType || !contentType.includes('application/json')) {
//                         return response.text().then(text => {
//                             throw new Error(text);
//                         });
//                     } else {
//                         return response.json();
//                     }
//                 })
//                 .then(data => {
//                     console.log('Data from server:', data);
//                 })
//                 .catch(error => {
//                     console.error('Error:', error);
//                     alert('Ошибка при выполнении запроса. Проверьте консоль для получения дополнительной информации.');
//                 });
//             }
//         }
//     });
// });


// document.addEventListener("DOMContentLoaded", function() {
//     const employeeTable = document.getElementById('employeeTable');

//     // Обработчик события клика на таблице
//     employeeTable.addEventListener('click', function(event) {
//         // Проверяем, является ли целевой элемент кнопкой удаления
//         if (event.target.classList.contains('delete-button')) {
//             // Получаем ID сотрудника из атрибута data-employee-id кнопки
//             const employeeId = event.target.dataset.employeeId;

//             // Всплывающее окно для подтверждения удаления
//             const confirmDelete = confirm('Вы уверены, что хотите удалить этого сотрудника?');

//             if (confirmDelete) {
//                 // Выполняем AJAX-запрос для удаления сотрудника
//                 fetch('../admin/delete_employee.php', {
//                     method: 'POST',
//                     headers: {
//                         'Content-Type': 'application/json'
//                     },
//                     body: JSON.stringify({ id_employee: employeeId })
//                     // body: JSON.stringify({ employee_id: employeeId })
//                 })
//                 .then(response => response.text())
//                 .then(text => {
//                     // Выводим текст ответа в консоль для анализа
//                     console.log(text);
//                     try {
//                         const data = JSON.parse(text);
//                         // Обрабатываем ответ от сервера
//                         if (data.success) {
//                             alert(data.message); // Выводим сообщение об успешном удалении
//                             // Дополнительные действия, если необходимо
//                         } else {
//                             alert(data.message); // Выводим сообщение об ошибке
//                         }
//                     } catch (error) {
//                         console.error('Ошибка при обработке ответа:', error);
//                         alert('Ошибка при обработке ответа. Проверьте консоль для получения дополнительной информации.');
//                     }
//                 })
//                 .catch(error => {
//                     console.error('Ошибка при выполнении запроса:', error);
//                     alert('Ошибка при выполнении запроса. Проверьте консоль для получения дополнительной информации.');
//                 });
//             }
//         }
//     });
// });






// document.addEventListener("DOMContentLoaded", function() {
//     const employeeTable = document.getElementById('employeeTable');

//     // Обработчик события клика на таблице
//     employeeTable.addEventListener('click', function(event) {
//         // Проверяем, является ли целевой элемент кнопкой удаления
//         if (event.target.classList.contains('delete-button')) {
//             // Получаем ID сотрудника из атрибута data-employee-id кнопки
//             const employeeId = event.target.dataset.employeeId;

//             // Всплывающее окно для подтверждения удаления
//             const confirmDelete = confirm('Вы уверены, что хотите удалить этого сотрудника?');

//             if (confirmDelete) {
//                 // Выполняем AJAX-запрос для удаления сотрудника
//                 fetch('../admin/delete_employee.php', {
//                     method: 'POST',
//                     headers: {
//                         'Content-Type': 'application/json'
//                     },
//                     body: JSON.stringify({ employee_id: employeeId })
//                 })
//                 .then(response => response.text())
//                 .then(text => {
//                     // Выводим текст ответа в консоль для анализа
//                     console.log(text);
//                     try {
//                         const data = JSON.parse(text);
//                         // Обрабатываем ответ от сервера
//                         if (data.success) {
//                             alert(data.message); // Выводим сообщение об успешном удалении
//                             // Дополнительные действия, если необходимо
//                         } else {
//                             alert(data.message); // Выводим сообщение об ошибке
//                         }
//                     } catch (error) {
//                         console.error('Ошибка при обработке ответа:', error);
//                         alert('Ошибка при обработке ответа. Проверьте консоль для получения дополнительной информации.');
//                     }
//                 })
//                 .catch(error => {
//                     console.error('Ошибка при выполнении запроса:', error);
//                     alert('Ошибка при выполнении запроса. Проверьте консоль для получения дополнительной информации.');
//                 });
//             }
//         }
//     });
// });