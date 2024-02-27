// document.getElementById("employeeForm").addEventListener("submit", function(event) {
//     event.preventDefault(); // Предотвращаем стандартное поведение отправки формы

//     // Создаем объект FormData для отправки данных формы
//     var formData = new FormData(this);

//     // Отправляем данные на сервер с помощью AJAX-запроса
//     fetch('../admin/save_employee.php', {
//         method: 'POST',
//         body: formData
//     })
//     .then(response => response.json())
//     .then(data => {
//         // Обрабатываем ответ от сервера
//         if (data.success) {
//             alert('Данные успешно сохранены!');
//             // Очищаем форму после успешного сохранения
//             document.getElementById("employeeForm").reset();
//         } else {
//             alert('Ошибка при сохранении данных: ' + data.message);
//         }
//     })
//     .catch(error => {
//         console.error('Ошибка при отправке запроса:', error);
//         alert('Ошибка при отправке запроса. Проверьте консоль для получения дополнительной информации.');
//     });
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
//             <td class="table-plus">${employee.employee_name_ru}</td>
//             <td>${employee.employee_name_en}</td>
//             <td>${employee.position_ru}</td>
//             <td>${employee.position_en}</td>
//             <td>
//                 <div class="dropdown">
//                     <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
//                         <i class="dw dw-more"></i>
//                     </a>
//                     <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
//                         <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
//                         <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
//                         <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
//                     </div>
//                 </div>
//             </td>
//         `;
//         return newRow;
//     }

//     // Функция для добавления новой строки в таблицу
//     function appendTableRow(newRow) {
//         const tbody = document.querySelector("#employeeTable tbody");
//         tbody.appendChild(newRow);
//     }

//     // Установим интервал для периодического обновления таблицы
//     setInterval(updateTable, 5000); // Обновляем каждые 5 секунд (вы можете изменить интервал на свой вкус)
// });






// document.addEventListener("DOMContentLoaded", function() {
//     // Функция для обновления таблицы
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
//             <td class="table-plus">${employee.employee_name_ru}</td>
//             <td>${employee.employee_name_en}</td>
//             <td>${employee.position_ru}</td>
//             <td>${employee.position_en}</td>
//             <td>
//                 <div class="dropdown">
//                     <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
//                         <i class="dw dw-more"></i>
//                     </a>
//                     <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
//                         <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
//                         <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
//                         <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
//                     </div>
//                 </div>
//             </td>
//         `;
//         return newRow;
//     }

//     // Функция для добавления новой строки в таблицу
//     function appendTableRow(newRow) {
//         const tbody = document.querySelector("#employeeTable tbody");
//         tbody.appendChild(newRow);
//     }

//     // Установим интервал для периодического обновления таблицы
//     setInterval(updateTable, 5000); // Обновляем каждые 5 секунд (вы можете изменить интервал на свой вкус)
// });

// document.addEventListener("DOMContentLoaded", function() {
//     const employeeForm = document.getElementById("employeeForm");

//     employeeForm.addEventListener("submit", function(event) {
//         event.preventDefault(); // Предотвращаем стандартное поведение отправки формы

//         // Создаем объект FormData для отправки данных формы
//         const formData = new FormData(this);

//         // Отправляем данные на сервер с помощью AJAX-запроса
//         fetch('../admin/save_employee.php', {
//             method: 'POST',
//             body: formData
//         })
//         .then(response => {
//             if (!response.ok) {
//                 throw new Error('Произошла ошибка при выполнении запроса: ' + response.statusText);
//             }
//             return response.json();
//         })
//         .then(data => {
//             // Обрабатываем ответ от сервера
//             if (data.success) {
//                 alert('Данные успешно сохранены!');
//                 // Очищаем форму после успешного сохранения
//                 employeeForm.reset();
//                 // Создаем новую строку в таблице и добавляем ее
//                 const newRow = createTableRow(data);
//                 appendTableRow(newRow);
//             } else {
//                 alert('Ошибка при сохранении данных: ' + data.message);
//             }
//         })
//         .catch(error => {
//             console.error('Ошибка при отправке запроса:', error);
//             alert('Произошла ошибка при отправке запроса. Проверьте консоль для получения дополнительной информации.');
//         });
//     });

//     function createTableRow(data) {
//         // Создаем новую строку
//         const newRow = document.createElement("tr");
//         newRow.innerHTML = `
//             <td class="table-plus">${data.employee_name_ru}</td>
//             <td>${data.employee_name_en}</td>
//             <td>${data.position_ru}</td>
//             <td>${data.position_en}</td>
//             <td>
//                 <div class="dropdown">
//                     <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
//                         <i class="dw dw-more"></i>
//                     </a>
//                     <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
//                         <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
//                         <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
//                         <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
//                     </div>
//                 </div>
//             </td>
//         `;
//         return newRow;
//     }

//     function appendTableRow(newRow) {
//         // Добавляем новую строку в тело таблицы
//         const tbody = document.querySelector("#employeeTable tbody");
//         tbody.appendChild(newRow);
//     }
// });

// document.getElementById("employeeForm").addEventListener("submit", function(event) {
//     event.preventDefault(); // Предотвращаем стандартное поведение отправки формы

//     // Создаем объект FormData для отправки данных формы
//     var formData = new FormData(this);

//     // Отправляем данные на сервер с помощью AJAX-запроса
//     fetch('../admin/save_employee.php', {
//         method: 'POST',
//         body: formData
//     })
//     .then(response => response.json())
//     .then(data => {
//         // Обрабатываем ответ от сервера
//         if (data.success) {
//             alert('Данные успешно сохранены!');
//             // Очищаем форму после успешного сохранения
//             document.getElementById("employeeForm").reset();
//         } else {
//             alert('Ошибка при сохранении данных: ' + data.message);
//         }
//     })
//     .catch(error => {
//         console.error('Ошибка при отправке запроса:', error);
//         alert('Ошибка при отправке запроса. Проверьте консоль для получения дополнительной информации.');
//     });
// });

// document.addEventListener("DOMContentLoaded", function() {
//     const saveEmployeeButton = document.getElementById("saveEmployeeButton");

//     saveEmployeeButton.addEventListener("click", function(event) {
//         event.preventDefault(); // Предотвращаем стандартное поведение кнопки

//         // Создаем объект FormData из формы
//         const formData = new FormData(document.getElementById("employeeForm"));

//         // Выполняем AJAX-запрос
//         fetch("../admin/save_employee.php", {
//             method: "POST",
//             body: formData,
//         })
//         .then(response => response.json())
//         .then(data => {
//             // После успешного ответа сервера создаем новую строку в таблице
//             const newRow = createTableRow(data);
//             appendTableRow(newRow);
//         })
//         .catch(error => console.error("Error:", error));
//     });

//     function createTableRow(data) {
//         // Создаем новую строку
//         const newRow = document.createElement("tr");
//         newRow.innerHTML = `
//             <td class="table-plus">${data.employee_name_ru}</td>
//             <td>${data.employee_name_en}</td>
//             <td>${data.position_ru}</td>
//             <td>${data.position_en}</td>
//             <td>
//                 <div class="dropdown">
//                     <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
//                         <i class="dw dw-more"></i>
//                     </a>
//                     <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
//                         <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
//                         <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
//                         <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
//                     </div>
//                 </div>
//             </td>
//         `;
//         return newRow;
//     }

//     function appendTableRow(newRow) {
//         // Добавляем новую строку в тело таблицы
//         const tbody = document.querySelector("#employeeTable tbody");
//         tbody.appendChild(newRow);
//     }
// });