// add classes for mobile navigation toggling
var CSbody = document.querySelector("body");
const CSnavbarMenu = document.querySelector("#cs-navigation");
const CShamburgerMenu = document.querySelector("#cs-navigation .cs-toggle");

CShamburgerMenu.addEventListener('click', function () {
    CShamburgerMenu.classList.toggle("cs-active");
    CSnavbarMenu.classList.toggle("cs-active");
    CSbody.classList.toggle("cs-open");
    // run the function to check the aria-expanded value
    ariaExpanded();
});

// checks the value of aria expanded on the cs-ul and changes it accordingly whether it is expanded or not 
function ariaExpanded() {
    const csUL = document.querySelector('#cs-expanded');
    const csExpanded = csUL.getAttribute('aria-expanded');

    if (csExpanded === 'false') {
        csUL.setAttribute('aria-expanded', 'true');
    } else {
        csUL.setAttribute('aria-expanded', 'false');
    }
}

// mobile nav toggle code
const dropDowns = Array.from(document.querySelectorAll('#cs-navigation .cs-dropdown'));
for (const item of dropDowns) {
    const onClick = () => {
        item.classList.toggle('cs-active')
    }
    item.addEventListener('click', onClick)
}

// FAQ code
const faqItems = Array.from(document.querySelectorAll('.cs-faq-item'));
for (const item of faqItems) {
    const onClick = () => {
        item.classList.toggle('active')
    }
    item.addEventListener('click', onClick)
}

// registration form
// function validateForm() {
//     // Получаем значения полей
//     var email = document.getElementById('email').value;
//     var password = document.getElementById('password').value;
//     var confirmPassword = document.getElementById('confirmPassword').value;

//     // Проверка действительности email
//     var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
//     if (!emailRegex.test(email)) {
//         alert('Введите действительный email.');
//         return;
//     }

//     // Проверка совпадения паролей
//     if (password !== confirmPassword) {
//         alert('Пароли не совпадают.');
//         return;
//     }

//     // Проверка минимальной длины пароля
//     if (password.length < 8) {
//         alert('Пароль должен содержать не менее 8 символов.');
//         return;
//     }

//     // Все проверки пройдены, можно отправить форму
//     alert('Регистрация успешна!');
//     // Здесь можно добавить код для отправки формы на сервер
// }

function validateForm() {
    // Получаем значения полей
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirmPassword').value;

    // Проверка действительности email
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert('Введите действительный email.');
        return;
    }

    // Проверка совпадения паролей
    if (password !== confirmPassword) {
        alert('Пароли не совпадают.');
        return;
    }

    // Проверка минимальной длины пароля
    if (password.length < 8) {
        alert('Пароль должен содержать не менее 8 символов.');
        return;
    }

    // Все проверки пройдены, можно отправить форму
    alert('Регистрация успешна!');

    // AJAX запрос на сервер
    $.ajax({
        type: "POST",
        url: "../ru/post_admin.php",
        data: { email: email, password: password },
        success: function (response) {
            alert(response);
        },
        error: function (error) {
            alert("Ошибка при отправке запроса на сервер.");
        }
    });
}


