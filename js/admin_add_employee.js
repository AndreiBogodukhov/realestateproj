document.getElementById("employeeForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Предотвращаем стандартное поведение отправки формы

    // Создаем объект FormData для отправки данных формы
    var formData = new FormData(this);

    // Отправляем данные на сервер с помощью AJAX-запроса
    fetch('../admin/save_employee.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        // Обрабатываем ответ от сервера
        if (data.success) {
            alert('Данные успешно сохранены!');
            // Очищаем форму после успешного сохранения
            document.getElementById("employeeForm").reset();
        } else {
            alert('Ошибка при сохранении данных: ' + data.message);
        }
    })
    .catch(error => {
        console.error('Ошибка при отправке запроса:', error);
        alert('Ошибка при отправке запроса. Проверьте консоль для получения дополнительной информации.');
    });
});